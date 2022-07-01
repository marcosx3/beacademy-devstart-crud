<?php

namespace App\Http\Controllers;

use App\Produtos;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{   

    public function __construct(Produto $p)
    {
        $this->model = $p;
    }

        //Cadastrar Produto
        function cadastra(Request $request) {
            $nome = $request->input('name');
            $genero = $request->input('gender');
            $dese = $request->input('developer');
            $dist = $request->input('distributor');
            $lanca = $request->input('launch');
            $so = $request->input('so');
            $proce = $request->input('processor');
            $me = $request->input('memory_ram');
            $tam = $request->input('storage_req');
            $video = $request->input('video_card');

            DB::insert('insert into produtos (name,gender,developer,distributor,launch,so,processor,memory_ram,storage_req,video_card) values (?,?,?,?,?,?,?,?,?,?)',
            array($nome,$genero,$dese,$dist,$lanca,$so,$proce,$me,$tam,$video));
            return back()->with('success','Produto Adicionado com Sucesso.');
        }


        // Listar Produto
        function lista() {
            $produtos = DB::select('select * from produtos;');
            return view('pages.lista')->with('produtos',$produtos);
        }

        public function edita($id) {
            $p = Produto::find($id);
            return view('pages.atualiza', compact('p'));
        }



        //Update Produto
        function update(Request $request,$id)
        {       
            $p = $request->except('_token');
            DB::table('produtos')->where('id',$id)->update([
                'name'=> $p['name'],
                'gender'=> $p['gender'],
                'developer'=> $p['developer'],
                'distributor'=> $p['distributor'],
                'launch'=> $p['launch'],
                'so'=> $p['so'],
                'processor'=> $p['processor'],
                'memory_ram'=> $p['memory_ram'],
                'storage_req'=> $p['storage_req'],
                'video_card'=> $p['video_card']
            ]);
            // retornar uma view
            $produtos = DB::select('select * from produtos;');
            return view('pages.lista')->with('produtos',$produtos);
        }
        
       
}
