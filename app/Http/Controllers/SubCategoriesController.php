<?php

namespace App\Http\Controllers;



use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Models\subCategory;
use Illuminate\Http\Request;
use DB;

class SubCategoriesController extends Controller
{
    public function index()
    {
       
        return view('admin.subcategories.index');
    }
}
