<?php

namespace Illuminate\Foundation\Http;

abstract class AuthorizationRequest extends FormRequest
{
    /**
     * Determine if the request passes the authorization check.
     *
     * @return bool
     */
    abstract public function authorize();
  
    public function rules()
    {
        return [];
    }
}
