<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class CreateUserRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:150'],
            'email' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'min:8'],
            'funds' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email is required',
            'email.unique' => 'The Email is already taken',
        ];
    }
    public function handle()
    {
        $this->validated();
        $params = $this->all();

        $user = new User();
        $user->name = $params['name'];
        $user->email = $params['email'];
        $user->password = Hash::make($params['password']);
        $user->skype_id = $params['skype_id'];
        $user->funds = $params['funds'];
        $user->status = $params['status'];
        $user->status = $params['role'];

        $user->save();

        return true;

    }
}
