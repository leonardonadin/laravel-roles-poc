<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCreateRequest;
use App\Http\Requests\Admin\ProductUpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {

    public function index() {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function create() {
        return view('admin.product.create');
    }

    public function store(ProductCreateRequest $request) {
        $validated = $request->validated();
        Product::create($validated);

        return redirect()->route('admin.product.index');
    }

    public function edit(Product $product) {
        return view('admin.product.edit', compact('product'));
    }

    public function update(ProductUpdateRequest $request, Product $product) {
        $validated = $request->validated();
        $product->update($validated);

        return redirect()->route('admin.product.index');
    }

    public function destroy(Product $product) {
        $product->delete();

        return redirect()->route('admin.product.index');
    }
}
