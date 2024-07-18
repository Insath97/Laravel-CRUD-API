<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Resources\ProductResource;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();

        if ($products->count() > 0) {
            return ProductResource::collection($products);
        } else {
            return response()->json(['message' => 'No Data Found'], 200);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {
        // $validator = Validator::make($request->all(),[
        //     'name' => 'required|string|max:255',
        //     'description' => 'required|max:300',
        //     'price' => 'required|integer'
        // ]);

        $validatedData = $request->validated();

        // Create the product
        $product = new Products();
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->save();


        return response()->json(
            [
                'message' => 'Product Create Successfully',
                'data' => new ProductResource($product)
            ],
            200
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $product)
    {
        $products = Products::findOrFail($product);
        return new ProductResource($products);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductStoreRequest $request, string $id)
    {
        $validatedData = $request->validated();

        $product = Products::findOrFail($id);
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->save();


        return response()->json(
            [
                'message' => 'Product Update Successfully',
                'data' => new ProductResource($product)
            ],
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return response()->json(
            [
                'message' => 'Product Delete Successfully',
            ],
            200
        );
    }
}
