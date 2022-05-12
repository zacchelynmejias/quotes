<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function front()
    {
        $data = Quote::orderBy('id', 'DESC')->skip(0)->take(3)->get();
        return view('welcome', compact('data'));
    }

    public function search(Request $request)
    {
        if ($request->search) {
            $ss = Quote::select("*")
                ->where("name", "like", "%" . $request->search . "%")
                ->get();

            if ($ss) {
                foreach ($ss as $k => $v) {
                    echo  "<div class='card mb-2' style='width: 50rem;'> <div class='card-body'> <h5 class='card-title'>No.$v->id.</h5> <p class='card-text'>'.$v->quotes.'</p> <footer class='blockquote-footer text-right'>'.$v->name.'footer> <div class='col-md-12 text-center'> </div> </div> </div>";
                }
            }
        }
    }


    public function loadMore()
    {

        $data = Quote::orderBy('id', 'DESC')->skip(0)->take(5)->get();
        // $data = Quote::inRandomOrder()->first()->get();
        return response()->json($data);
    }
}
