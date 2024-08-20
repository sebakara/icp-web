<?php

namespace App\Packages\Application\Staff\Create;

use Illuminate\Foundation\Http\FormRequest;

class CreateStaffRequest extends FormRequest
{
    public function rules()
    {
        return [
            'Full_name' => 'required|string|max:255',
            'Position' => 'nullable|string|max:255',
            'Profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Biography_description' => 'nullable|string',
        ];
    }

    public function Full_name()
    {
        return $this->input('Full_name');
    }

    public function Position()
    {
        return $this->input('Position');
    }

    public function Profile_image()
    {
        if ($this->hasFile('Profile_image')) {
            $image = $this->file('Profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);
            return 'assets/img/' . $imageName;
        }
        return null;
    }

    public function Biography_description()
    {
        return $this->input('Biography_description');
    }
}
