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
            'display_name' => 'required|string|max:60',
            'seo_name' => 'required|string|max:60',
            'description' => 'string|nullable|max:15000',
            'order_weight' => 'required|integer|between:0,999',
            'thumbnail_filename' => 'image|max:92160|dimensions:min_width=1200,min_height=675',
            'image_alt' => 'string|nullable|max:100',
            'tags' => 'array',
        ]);

        $validator->sometimes(['thumbnail_filename'], 'required', function ($input) use ($request){
            return $request->method() == "PUT";
        });

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

            $store->display_name = $request->get('display_name');
            $store->seo_name = $request->get('seo_name');
            $store->description = convertEOL($request->get('description'));
            $store->order_weight = $request->get('order_weight');
            $store->save();

            // イメージの更新
            $image = Image::getStoreImage($store->id);

            if ($request->hasFile('thumbnail_filename')) {
                self::coverImageConvert($request->thumbnail_filename->getPathname());
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
            // タグの更新
            if (empty($request->get('tags'))) {
                $store->tags()->detach();
            } else {
                $store->tags()->sync($request->get('tags'));
            }
            // 操作ログの登録
            $this->storeOperationLog($store->id);
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('admin.stores.edit')->with(['status' => false, 'message' => 'データの更新に失敗しました。システム管理者に問い合わせください。']);
        }
        DB::commit();

        return redirect()->route('admin.stores')->with(['status' => true, 'message' => 'データの更新が完了しました']);
    }
}
