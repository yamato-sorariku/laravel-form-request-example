<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\TodoFormRequest;
use App\Http\Requests\Common\ApiFormRequestTrait;

/**
 * AjaxなどApi用Controllerで使われるFormRequest
 */
class TodoApiFormRequest extends TodoFormRequest
{
    use ApiFormRequestTrait;
}

