<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;
    public $image;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function storeCategory()
    {
        $category = new Category();
        $category->name = $this->slug;
        $category->slug = $this->name;
        $category->save();
        session()->flash('message','La catégorie a été crée avec succes !');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
