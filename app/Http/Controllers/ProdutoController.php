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

        public function edita($id) {
            $p = Produto::find($id);
            return view('pages.atualiza', compact('p'));
        }
        function update(Request $request,$id)
        {       
                $p = Produto::find($id);
                $data = $request->all();
                $p->update($data);
                return redirect('/lista');
        }
        
}
