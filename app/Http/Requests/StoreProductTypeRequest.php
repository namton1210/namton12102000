<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductTypeRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|min:2|max:255:unique:producttype,name'
        ];
    }
    public function message(){
        return[
             'required' => ':attribute không được để trống',
            'min' =>':attribute tối thiểu từ 2 ký tự',
            'max' =>':attribute tối đa từ 2255 ký tự',
            'unique'=>':attribute đã tồn tại trong hệ thống'
    ];
    }
    public function attribute(){
        return['name'=>'Tên Loại Sản Phẩm'];
    }
}
