<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(Product $p)
    {
        $this->model = $p;
    }
    function register(Request $request)
    {
        $p = $request->except('_token');
        $product = new Product();
        $product->name = $request->name;
        $product->gender = $request->gender;
        $product->developer = $request->developer;
        $product->distributor = $request->distributor;
        $product->launch = $request->launch;
        $product->so = $request->so;
        $product->processor = $request->processor;
        $product->memory_ram = $request->memory_ram;
        $product->storage_req = $request->storage_req;
        $product->video_card = $request->video_card;
        if ($product->save()) {
            return redirect()->route("product.show", compact('product'))->with("success", "Produto cadastrado com Sucesso!");
        }
        return redirect()->route("product.show", compact('product'))->with("error", "Falha! Produto não adicionado, procure suporte técnico.");
    }
    function registerView()
    {
        return view('pages.create');
    }

    function show()
    {
        $product = Product::all();
        return view('pages.show', compact("product"));
    }

    public function edit($id)
    {
        $p = Product::find($id);
        return view('pages.update', compact('p'));
    }
    function update(Request $request, $id)
    {

        $p = $request->except('_token');
        $product = Product::find($id);
        $product->name = $request->name;
        $product->gender = $request->gender;
        $product->developer = $request->developer;
        $product->distributor = $request->distributor;
        $product->launch = $request->launch;
        $product->so = $request->so;
        $product->processor = $request->processor;
        $product->memory_ram = $request->memory_ram;
        $product->storage_req = $request->storage_req;
        $product->video_card = $request->video_card;

        if ($product->update()) {
            return redirect()->route("product.show", compact('product'))->with("success", "Produto Atualizado com Sucesso!");
        }
        return redirect()->route("product.show", compact('product'))->with("error", "Falha! Produto não atualizado.");
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product->delete()) {
            return redirect()->route("product.show", compact('product'))->with("warning", "Produto deletado com Sucesso!");
        }
        return redirect()->route("product.show", compact('product'))->with("danger", "Falha! Produto não Deletado.");
    }
}
