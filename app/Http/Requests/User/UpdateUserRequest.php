<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UpdateUserRequest extends FormRequest
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
            'email' => ['required', 'string'],
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

        $user = User::find($this->id);
        $user->name = $params['name'];
        $user->email = $params['email'];
        if (isset($params['password'])) {
            $user->password = Hash::make($params['password']);
        }
        $user->skype_id = $params['skype_id'];
        $user->funds = $params['funds'];
        $user->status = $params['status'];
        $user->status = $params['role'];

        $user->save();

        return true;

    }
}
