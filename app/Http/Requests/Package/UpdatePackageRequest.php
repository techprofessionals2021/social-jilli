<?php

namespace App\Http\Requests\Package;

use App\Models\Package;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePackageRequest extends FormRequest
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
            'price' => ['required'],
            'min' => ['required'],
            'max' => ['required'],
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

        $item = Package::find($this->id);
        $item->name = $params['name'];
        $item->service_id = $params['service_id'];
        $item->price = $params['price'];
        $item->min = $params['min'];
        $item->max = $params['max'];
        $item->status_id = $params['status'];
        $item->description = $params['description'];

        $item->save();

        return true;

    }
}
