<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardCategoryController extends Controller
{
    // tampil category
    public function index () {
        return view('dashboard.category.index', [
            'title' => 'queezfast - Category',
            'categories' => Category::all()
        ]);
    }

    // add category
    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:254',
            'color' => 'required|min:3|max:254',
            'slug' => 'required|min:3|max:254',
        ]);

        Category::create($validateData);

        return redirect('/category')->with('ok', 'Category berhasil ditambahkan');
    }

    // edit category
    public function edit (Category $category) {
        return response()->json($category);
    }

    // update Category
    public function update(Request $request, Category $category) {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:254',
            'color' => 'required|min:3|max:254',
            'slug' => 'required|min:3|max:254',
        ]);

        Category::where('id', $category->id)->update($validateData);
        return redirect('/category')->with('ok', 'Category berhasil diedit');
    }

    // hapus category
    public function destroy(Category $category) {
        $category->delete();

        return response()->json([
            'message' => 'Category berhasil dihapus'
        ]);
    }
}
