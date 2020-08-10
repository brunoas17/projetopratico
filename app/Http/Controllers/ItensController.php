<?php


namespace App\Http\Controllers;


use App\Http\Requests\ItemRequest;
use App\Http\Requests\MovimentacoeRequest;
use App\Item;
use App\Movimentacoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItensController
{

    public function index(Request $request)
    {
        $itens = Item::all();

        $mensagem = $request->session()->get('mensagem');

        return view(
            'itens.index',
            compact('itens', 'mensagem')
        );
    }

    public function form($id = null)
    {
        $titulo = 'Adicionar Item';
        if($id != null) {
            $titulo = 'Editar Item';
            $item = Item::query()->where('id', $id)->first();
        }
        return view('itens.form', compact(!isset($item) ?: 'item', 'titulo'));
    }

    public function store(ItemRequest $request, $id = null)
    {
        if($id == null) {
            $data = $request->except('_token');

            if(Item::create($data)) {
                $request->session()->flash('mensagem', 'Item salvo com sucesso!');
                return redirect('/');
            }
        } else {
            $item = Item::find($id);
            $item->titulo = $request->titulo;
            if($item->save()) {
                $request->session()->flash('mensagem', 'Item editado com sucesso!');
                return redirect('/');
            }
        }

        $request->session()->flash('mensagem', 'Ocorreu um erro ao savar seu Item!');
        return redirect('/itens/form');
    }

    public function destroy(Request $request)
    {
        Item::destroy($request->id);
        $request->session()->flash(
            'mensagem', 'Item removido com sucesso!'
        );
        return redirect('/');
    }

}
