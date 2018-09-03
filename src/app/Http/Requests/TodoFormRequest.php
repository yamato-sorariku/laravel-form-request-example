<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * HTMLのFORM POST時に使うFormRequest
 */
class TodoFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'task_name' => 'required',
            'remarks' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'task_name' => 'タスク名',
            'remarks' => '備考',
        ];
    }
}

