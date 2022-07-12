<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{

    public function __construct(Product $p)
    {
        $this->model = $p;
    }

    function register(Request $request)
    {
        $data = $request->all();
        $this->model->create($data);
        return back()->with('success', 'Produto Adicionado com Sucesso.');
    }
  
    function registerView()
    {
      return view('pages.create');
    }

    function show()
    {
        $products = Product::all();
        return view('pages.show')->with('products', $products);
    }

    public function edit($id)
    {
        $p = Product::find($id);
        return view('pages.update', compact('p'));
    }



    //Update Produto
    function update(Request $request, $id)
    {  
      
        $p = $request->except('_token');
        DB::table('products')->where('id', $id)->update([
            'name' => $p['name'],
            'gender' => $p['gender'],
            'developer' => $p['developer'],
            'distributor' => $p['distributor'],
            'launch' => $p['launch'],
            'so' => $p['so'],
            'processor' => $p['processor'],
            'memory_ram' => $p['memory_ram'],
            'storage_req' => $p['storage_req'],
            'video_card' => $p['video_card']
        ]);
  
        // retornar lista de produtos
        $products = Product::all();
        return view('pages.show')->with('products', $products);
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        DB::table('products')
        ->where('id',$id)
        ->delete();
        $products = DB::select('select * from products;');
        return view('pages.show')->with('products', $products);
    }
}
