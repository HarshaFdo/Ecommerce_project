<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use Flasher\Laravel\Facade\Flasher;

class AdminController extends Controller
{
    public function view_category() 
    {
        $data = Category::all();

        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category;

        $category->category_name = $request->category;

        $category->save();

        Flasher::timeout(10000)->addSuccess('Category Added Successfully');

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        $data->delete();

        Flasher::timeout(10000)->addSuccess('Category Deleted Successfully');

        return redirect()->back();
    }

    public function edit_category($id)
    {
        $data = Category::find($id);
        
        return view('admin.edit_category',compact('data'));
    }
}
