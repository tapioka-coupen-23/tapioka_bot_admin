<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Store;
use App\Image;
use Validator;
use DB;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.stores.index', ['stores' => Store::query()->paginate()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->edit();
    }

    /**
     * Display the specified resource.
     *
     * @param Store $store
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Store $store)
    {
        return view('admin.stores.show', ['store' => $store]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Store $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store=null)
    {
        return view('admin.stores.edit', ['store' => $store]);
    }

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Store $store
     * @return mixed
     */
    public function update(Request $request, Store $store=null)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:60',
            'url' => 'required|url|string|max:60',
            'description' => 'string|nullable|max:10000',
        ]);

//        $validator->sometimes(['thumbnail_filename'], 'required', function ($input) use ($request){
//            return $request->method() == "PUT";
//        });

        if ($validator->fails()) {
            return redirect()->back()
                ->with(['status' => false, 'message' => 'データの更新に失敗しました。入力値を確認してください。'])
                ->withErrors($validator->errors())->withInput();
        }

        DB::beginTransaction();
        try {
            // カテゴリの更新
            if (is_null($store)) {
                $store = new Store;
            }

            $store->name = $request->get('name');
            $store->url = $request->get('url');
            $store->description = $request->get('description');
            $store->prefecture_id = $request->get('prefecture_id') ?? 13;
            $store->address1 = $request->get('address1') ?? "";
            $store->address2 = $request->get('address2') ?? "";
            $store->tel_num = $request->get('tel_num') ?? "";
            $store->post_code = $request->get('post_code') ?? "";
            $store->address_building = $request->get('address_building') ?? "";
            $store->city_id = $request->get('city_id') ?? 111;
            $store->lat = $request->get('lat') ?? 111;
            $store->lon = $request->get('lon') ?? 111;
            $store->deleted_at = null;
            $store->save();

            if ($request->hasFile('thumbnail_filename')) {
                if (!empty($image)) {
                    // imageの差し替え
                    $image->delete();
                }
                $image = new Image;
                $image->storeStore($request->thumbnail_filename);
            }
            if (!empty($image)) {
                $image->alt = $request->get('image_alt');
                $image->store_id = $store->id;
                $image->save();
            }
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('admin.stores.edit')->with(['status' => false, 'message' => 'データの更新に失敗しました。システム管理者に問い合わせください。']);
        }
        DB::commit();

        return redirect()->route('admin.stores')->with(['status' => true, 'message' => 'データの更新が完了しました']);
    }
}
