<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('welcomes',[
            "items"=> Item::get()
        ]);
    }
    function detail($id){
        $item =DB::table('items')
        ->where('id','=',$id)
        ->get();
        return view("detailitem",["row"=>$item[0]]);
    //    dd($item[0]);
    }
        public function search(){

        $items = Item::latest();

        if(request('search')) {
            $items->where('name', 'LIKE', '%'.request('search').'%')->get();
        }

        $items = $items->paginate(8);

            return view('Search.search',['items' => $items]);

    }

}
