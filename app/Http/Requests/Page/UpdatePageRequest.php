<?php

namespace App\Http\Requests\Page;

use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePageRequest extends FormRequest
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
            //
        ];
    }

    public function handle()
    {
        $this->validated();
        $params = $this->all();

        $item = Page::find($this->id);
        $item->name = $params['name'];
        $item->slug = $params['slug'];
        $item->content = $params['content'];

        $item->save();

        return true;
    }
}
