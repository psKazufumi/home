<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Storage;

〜省略

public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:7',
            'file' => 'required|image'
        ], [
            'title.required' => 'タイトルを入力して下さい',
            'title.max' => '7文字以内で入力して下さい',
            'file.required' => '画像が選択されていません',
            'file.image' => '画像ファイルではありません',
        ]);

        if (request()->file) {
            $image = $request->file('file');
            $path = Storage::disk('s3')->put('/', $image, 'public');

            $image = new Image();
            $image->path = Storage::disk('s3')->url($path);;
            $image->title = $request->title;
            $image->save();

            return ['success' => '登録しました!'];
        }
    }

〜省略