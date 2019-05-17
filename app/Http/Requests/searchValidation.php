<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Htpp\FormRequest;

class searchValidation extends FormRequest
{
    /**
     * Determine if the use is authorized to make this request.
     * @return bool
     */

     public function authorize()
     {
         return true;
     }

     /**
      * Get the validation rules that apply to the request. 
      * 
      * @return array
      */

      public function rules()
      {
          return [
            'type' => 'required',
            'quarter' => 'required',
            'costcenter' => 'required'
          ];
      }
}