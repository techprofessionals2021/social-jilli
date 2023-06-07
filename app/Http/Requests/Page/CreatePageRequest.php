<?php

namespace App\Http\Requests\Page;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Page;

class CreatePageRequest extends FormRequest
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


    public function handle()
    {
        $this->validated();
        $params = $this->all();
        // dd($params);

        $item = new Page();
        $item->name = $params['name'];
        $item->slug = $params['slug'];
        $item->content = $params['content'];

        $item->save();

        return true;

    }
}
