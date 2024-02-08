<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itemgroup;
use App\Models\Items;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
class ItemsController extends Controller
{
    public function api(){
        
        $apiurl = "https://bloomberg-market-and-financial-news.p.rapidapi.com/market/auto-complete?query=2";
        $apiUrl = "https://bloomberg-market-and-financial-news.p.rapidapi.com/market/auto-complete?query=2";
        $header= [
            'content-type' => 'application/json',
            'X-RapidAPI-Key' => '7215d2a015msh92bd2a9883c468bp1ff085jsn3696cf88618a'
        ];
        $response = Http::withHeaders($header)->get($apiUrl);
        $data=  $response->json();
        // dd($data);
        return view('coffee', ['items'=>$data]);
    }
    public function Showcartpage(){
        return view('cart');
    }
    public function addtocart($id){
        DB::table('cart')->insert(['iditem' => $id]);
        $idgroup = Session::get('id');
        $count = DB::table('cart')->get()->count();
        Session::put('countitem', $count);
        return redirect('showproduct/'. $idgroup);
    }
    public function showproduct($id){
        $data = Items::where('itemgroupnumber', $id)
        ->get();
        Session::put('id', $id);
        return view('showproduct',['data' => $data]);
    }
    public function showitemgroup(){
        $data = Itemgroup::All();
        $count= $data->count();
        return view('welcome', ['data'=>$data, 'count'=>$count]);
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

    public function displayadditemsgroup(){
        $data = Itemgroup::All();
        return view('dashboard.addgroupitem',['data'=>$data]);
    }
    public function displayitem(){
        $data= DB::table('itemgroups')
        ->join('items','itemgroups.id', '=' , 'items.itemgroupnumber')
        ->get();
        return view('dashboard.controlpanel',['data'=>$data]);
    }
    public function update(Request $request){
        $item = Itemgroup::find($request->id);
        $item ->itemgroupname = $request->namegroup;
        $item->save();
        return redirect('itemgroup');
    }
    public function edit($x){
        $item = Itemgroup::where('id',$x)
        ->first();

        return view('editgroupitem',['item'=>$item]);
    }


    public function del($x){
        $item = Itemgroup::find($x);
        $item ->delete();
        return redirect('itemgroup');
    }
    public function SaveGroupItems(Request $request){

        $data = Itemgroup::create([
            'itemgroupname'=>$request->itemgroupname
        ]);
        $data->save();

     return redirect('addgritem');
    }
    public $issave = false;
    public function GetItemGroup(){
    $data = Itemgroup::All();
    $issave = true;  
    return view('itemgroup',['data'=>$data, 'issave'=>$issave]);
    }   
}
