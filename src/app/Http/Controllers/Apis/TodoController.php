<?php

namespace App\Http\Controllers\Apis;

use App\Http\Requests\Api\TodoApiFormRequest;
use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    public function add(TodoApiFormRequest $request)
    {
        /**
         * 保存する処理
         */

         return [
             'status' => 'OK'
         ];
    }
}
