<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoFormRequest;

class TodoController extends Controller
{

    /**
     * HTMLのForm Post用の画面表示
     */
    public function showForm()
    {
        return view('form');
    }

    /**
     * Ajax Post用の画面表示
     */
    public function showAPiForm()
    {
        return view('form_api');
    }

    public function add(TodoFormRequest $request)
    {
        /**
         * 保存する処理
         */

         return redirect()->route('form');
    }
    
}
