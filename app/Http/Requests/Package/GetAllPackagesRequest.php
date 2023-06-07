<?php

namespace App\Http\Requests\Package;

use App\Models\Package;
use App\Models\Service;
use Illuminate\Foundation\Http\FormRequest;

class GetAllPackagesRequest extends FormRequest
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
        return Package::all();
    }


    public function handleForUser()
    {
        return Service::with('getAllPackages')->get();
    }

    

    public function handleForUserSearch()
    {
        $service = Service::with('getAllPackages');

      
        if ($this->id != "0") {
            $service =$service->where('id',$this->id);
        }

        if ($this->service != "allservices") {
            $service =$service->orWhere('name', 'like','%' . $this->search . '%')->where('id', 'like','%' . $this->id . '%');
        }

        return $service->get();
    
    }


    public function handleForServiceSearchPanel()
    {
        $service = Service::with('getAllPackages')->orWhere('name', 'like','%' . $this->search . '%')->get();

        return $service;
    
    }
}
