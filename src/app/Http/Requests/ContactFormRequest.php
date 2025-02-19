<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'phone.*' => 'required|digits_between:1,5',
            'address' => 'required',
            'categry' => 'required',
            'detail' => 'required|max:120',
        ];
    }

    public function messages()
    {
        return [
            // 名前
            'first_name.required' => '姓を入力して下さい',
            'last_name.required' => '名を入力して下さい',
            // 性別
            'gender.required' => '性別を選択して下さい',
            // メール
            'email.required' => 'メールを入力して下さい',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            // 電話番号
            'phone.*.required' => '電話番号を入力してください',
            'phone.*.digits_between' => '電話番号は5桁までの数字で入力してください',
            // 住所
            'address.required' => '住所を入力してください',
            // 問い合わせ内容カテゴリー
            'categry.required' => 'お問い合わせの種類を選択してください',
            // お問い合わせ内容
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
