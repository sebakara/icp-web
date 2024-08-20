<?php

namespace App\Packages\Application\ICP_Services\CreateService;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;



class CreateICPRequest extends FormRequest
{

   public function rules()
    {
        return [
            'Service_title' => 'required|string|max:255',
            'Service_description' => 'nullable|string|max:255',
            'Icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ];
    }

    public function getService_title()
    {
        return $this->input('Service_title');
    }

    public function getService_description()
    {
        return $this->input('Service_description');
    }

    public function getIcon()
    {
        if ($this->hasFile('Icon')) {
            $image = $this->file('Icon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);
            return 'assets/img/' . $imageName;
        }
        return null;
    }


}


