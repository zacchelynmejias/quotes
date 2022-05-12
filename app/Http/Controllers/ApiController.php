<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function quote()
    {
        $quote_data = Quote::get();
        return response([
            'status' => true,
            'message' => 'Data fetched successfully',
            'data' => $quote_data
        ], 200);
    }
  
    public function quote_insert(Request $request)
    {
        $data = new Quote();
        $data->name = $request->name;
        $data->quotes = $request->quotes;
        $data->save();

        return response([
            'status' => true,
            'message' => 'Quotes data inserted succesfully',
            'data' => $data
        ], 201);
    }

    public function quote_update(Request $request, $id)
    {
        $data = Quote::find($id);
        $data->name = $request->name;
        $data->quotes = $request->quotes;
        $data->update();

        return response([
            'status' => true,
            'message' => 'Quotes data updated successfully',
            'data' => $data
        ], 200);
    }
}