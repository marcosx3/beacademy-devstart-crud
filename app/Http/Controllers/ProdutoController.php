<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{   
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



        function lista() {
            $produtos = DB::select('select * from produtos;');
            return view('pages.lista')->with('produtos',$produtos);
        }

        function atualiza($id){
            DB::select('select * from produtos where id = (?)',
            $id);
            var_dump($id);
            // preciso recupera o do botao e mostrar na view de listage,
        }
        // function remove($id){
        //     $produto = Produto::find($id);
        //     $produto->delete();
        //     return back()->with('success','Produto Deletado com sucesso.');
        // }
}
