<?php

namespace App\Packages\Application\Gallery\Create;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;



class CreatePictureRequest extends FormRequest
{

    public function rules()
    {
        return [
            'Image_category' => 'required|string|max:255',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ];
    }

    public function getImage_category()
    {
        return $this->input('Image_category');
    }

    public function getImage()
    {
        if ($this->hasFile('Image')) {
            $image = $this->file('Image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);
            return 'assets/img/' . $imageName;
        }
        return null;
    }

}


