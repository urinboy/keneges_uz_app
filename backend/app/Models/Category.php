<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function tree()
    {
        $allCategories  = Category::all();
        $rootCategories = $allCategories->whereNull('parent_id');
        foreach ($rootCategories as $rootCategory) {

            $rootCategory->children = $allCategories->where('parent_id', $rootCategory->id)->values();

            foreach ($rootCategory->children as $child) {

                $child->children = $allCategories->where('parent_id', $child->id)->values();
            }
        }

        return $rootCategories;
    }

    
}
