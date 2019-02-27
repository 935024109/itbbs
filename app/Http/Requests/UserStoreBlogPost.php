<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreBlogPost extends FormRequest
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
     * 存放 验证规则
     *
     * @return array
     */
    public function rules()
    {
        return [
            'uname' => 'required|regex:/^[a-zA-Z]{1}[\w]{7,15}$/',
            //昵称正则，4到16位（字母，数字，下划线，减号）
            'nickname' => 'required|regex:/^[a-zA-Z0-9_-]{4,16}$/',
            'pwd' => 'required|regex:/^[\w]{6,18}$/',
            'repwd' => 'required|same:pwd',
            'email' => 'required',
            'phone' => 'required|regex:/^1{1}[3-9]{1}[\d]{9}$/',
        ];
    }
    // 自定义错误信息
    public function messages()
    {
        return [
            'uname.required' => '用户名不能为空',
            'uname.regex'=>'用户名格式不正确',
            'nickname.required' => '昵称不能为空',
            'nickname.regex' => '昵称格式不正确',
            'pwd.required' => '密码不能为空',
            'pwd.regex' => '密码格式不正确',
            'repwd.required' => '确认密码不能为空',
            'repwd.same' => '两次密码不一致',
            'email.required' => '邮箱不能为空',
            'phone.required' => '手机号不能为空',
            'phone.regex' => '手机号格式不正确',
           
        ];
    }
}
