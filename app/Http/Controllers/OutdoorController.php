<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outdoor;
use Symfony\Component\Console\Output\Output;

class OutdoorController extends Controller
{
    public function index(){
        return view('welcome', ['list' => Outdoor::all()]);
    }

    public function saveRecord(Request $req){

        try{
        $outdoorObj = new Outdoor();
        $outdoorObj->batchNum = $req->batchNum;
        $outdoorObj->quantity = $req->quantity;
        $outdoorObj->status = $req->status;
        $outdoorObj->remarks = $req->remarks;


        $outdoorObj->save();
        }
        catch(Illuminate\Database\QueryException $e){}

        //save data to the database

        return redirect('/');
    }
    public function destroy($id){
        $data=Outdoor::find($id);
        $data->delete();
        // echo "Record deleted successfully.";
        return redirect('/');
    }

    public function edit($id){
        $data = Outdoor::find($id);
        return view('edit', ['data'=>$data]);
    }

    public function updateRecord(Request $req){
        $outdoorObj = Outdoor::find($req->id);
        $outdoorObj->batchNum = $req->batchNum;
        $outdoorObj->quantity = $req->quantity;
        $outdoorObj->status = $req->status;
        $outdoorObj->remarks = $req->remarks;

        $outdoorObj->save();

        return redirect('/');
    }
}