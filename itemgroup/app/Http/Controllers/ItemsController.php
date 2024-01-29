<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itemgroup;
use App\Models\Items;
use Illuminate\Support\Facades\DB;
use Auth;
class ItemsController extends Controller
{


    public function addtocart($id){
        DB::table('cart')->insert(['iditem' => $id]);
        return redirect('showproduct/'. $id);
    }
    public function showproduct($id){
        $data = Items::where('itemgroupnumber', $id)
        ->get();

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
