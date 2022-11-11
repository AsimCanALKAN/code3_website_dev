<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Auth;
use App\Models\Account;

class CreateBrokerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'account_id' => 'required|integer',
        ];
    }

    public function messages(){
        return [
            'required' => 'The :attribute field is required.',
            'account_id' => 'The Account ID must be a valid Account ID.'
        ];
      }
}
