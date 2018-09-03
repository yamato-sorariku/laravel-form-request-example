<?php

namespace App\Http\Requests\Common;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

/**
 * FormRequestのバリデート結果をJSONに変換して返却するトレイト
 */
trait ApiFormRequestTrait
{
    protected function failedValidation( Validator $validator )
    {
        $response['data']    = [];
        $response['status']  = 'NG';
        $response['summary'] = 'Failed validation.';
        $response['errors']  = $validator->errors()->toArray();
        $response['errorMessages']  = $validator->errors()->all();
        

        throw new HttpResponseException(
            response()->json( $response, 422 )
        );
    }
}