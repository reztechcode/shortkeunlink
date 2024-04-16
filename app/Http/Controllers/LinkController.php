<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;

class LinkController extends Controller
{
    public function index(){
        $data = Link::OrderBy('id','desc')->get();
        return view('short.index',['data'=>$data]);

    }
    public function short(Request $request){
        $request->validate([
            'url' => ['required','url'],
        ],[
            'url.required' => 'Isi dulu url nya ya..'
        ]);
        $create = Link::create([
            'url_ori' => $request->url,
            'generate' => Str::random(10),
        ]);
        if ($create) {
            return redirect('/')->with('alert', ['class' => 'info', 'message' => 'Berhasil Di tambahkan']);;
        }
        return 'error';


    }

    public function destroy($id)
    {
        Link::where('id',$id) -> delete();
        return redirect()-> to('/')->with('alert',['class'=>'warning','message'=>'data berhasil di delete']);
    }
    public function direk($id){
        $data = Link::where('generate',$id)->first();
        if ($data) {
            return redirect()->to($data->url_ori);
        }
        return 'error';

    }

}
