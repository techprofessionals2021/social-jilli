<?php

namespace App\Http\Requests\Service;

use App\Models\Service;
use Illuminate\Foundation\Http\FormRequest;

class CreateServiceRequest extends FormRequest
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
            'name' => ['required'],
            'slug' => ['required'],
            'content' => ['required'],


        ];
    }
    public function messages()
    {
        return [
           //
        ];
    }
    public function handle()
    {
        $this->validated();
        $params = $this->all();

        $item = new Service();
        $item->name = $params['name'];
        $item->status_id = $params['status'];
        $item->description = $params['description'];

        $item->save();

        return true;

    }
}
