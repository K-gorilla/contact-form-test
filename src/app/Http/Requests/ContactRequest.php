<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' => 'required',
            'first_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'tel1' => 'required|numeric|digits:3',
            'tel2' => 'required|numeric|digits:4',
            'tel3' => 'required|numeric|digits:4',
            'address' => 'required',
            'category_id' => 'required|exists:categories,id',
            'detail' => 'required|max:120'
        ];
    }

        public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel1.required' => '電話番号を入力してください',
            'tel1.numeric' => '電話番号は数字のみで入力してください',
            'tel1.digits' => '電話番号は3桁までの数字で入力してください',
            'tel2.required' => '電話番号を入力してください',
            'tel2.numeric' => '電話番号は数字のみで入力してください',
            'tel2.digits' => '電話番号は4桁までの数字で入力してください',
            'tel3.required' => '電話番号を入力してください',
            'tel3.numeric' => '電話番号は数字のみで入力してください',
            'tel3.digits' => '電話番号は4桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'category_id.exists' => '選択されたお問い合わせの種類が無効です',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください'
        ];
    }
}
