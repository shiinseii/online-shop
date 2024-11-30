<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $products = new Product;

        if ($keyword) {
        $products = $products->where('name', 'like', "%{$keyword}%");
        }

        $result = $products->orderBy('price', 'desc')->paginate(5);

        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
//VALIDATION
        $request->validate([
            'name' => 'required|string|max:50',
            'price' => 'required|numeric',
            'description' => 'required',
            'img_url' => 'required',
            'stock' => 'required|integer',
            'category_id' => 'required',
            'brand_id' => 'required',
        ], [
            'name.required' => 'Product name is required',
            'price.required' => 'Product price is required',
            'price.numeric' => 'Product price must be a numeric',
            'description.required' => 'Product description is required',
            'img_url.required' => 'Product image is required',
            'stock.required' => 'Product stock is required',
            'stock.integer' => 'Product stock must be an integer',
            'category_id.required' => 'Product category is required',
            'brand_id.required' => 'Product brand is required',
            
        ]);

        
//USING CREATE METHOD
        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'img_url' => $request->input('img_url'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'category_id' => $request->input('category_id'),
            'brand_id' => $request->input('brand_id'),
        ], 201);

//USING SAVE METHOD
        // $product = new Product;

        // $product->name = $request->name;
        // $product->description = $request->description;
        // $product->img_url = $request->img_url;
        // $product->price = $request->price;
        // $product->stock = $request->stock;
        // $product->category_id = $request->category_id;
        // $product->brand_id = $request->brand_id;
        // $product->created_at = $request->created_at;

        // $product->save();

        if (!$product) {
            return response()->json(['message' => 'Error Creating Products'], 500);
        }

        return response()->json(['message' => 'Product Created Successfully', 'product' => $product]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::find($id);

        if ($products) {
            return response()->json(['product' => $products]);
        } else {
            return response()->json(['message' => 'Cant Find Product']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'img_url' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required',
            'brand_id' => 'required',
        ]);

        $products = Product::find($id);
        if (!$products) {
            return response()->json(['message' => 'Cant Find Products'], 404);
        }

        $products->update($validatedData);
        return response()->json(['message' => 'Product Updated Successfully', 'product' => $products]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Product::find($id);

        if (!$products) {
            return response()->json(['message' => 'Cant Find The Product'], 404);
        }

        $products->delete();
        return response()->json(['message' => 'Product Deleted Successfully']);
    }
}
