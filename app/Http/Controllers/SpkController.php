<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\norm;
class SpkController extends Controller
{
    public function index()
    {
        $nrm=norm::orderBy('sum', 'desc')->paginate(5);
        return view('hasil',compact('nrm'));
    }
    public function norm()
    {
        norm::truncate();
        $dt=Data::all(); 
        $rpeng=Data::max('penghasilan');
        $rtang=Data::min('tanggungan');
        $rlok=Data::max('lokasi');
        $rlist=Data::max('listrik');
        foreach($dt as $row)
        {
            $peng=($row['penghasilan']/$rpeng)*0.4;
            $tang=($rtang/$row['tanggungan'])*0.3;
            $lok=($row['lokasi']/$rlok)*0.2;
            $list=($row['listrik']/$rlist)*0.1;
            $sum=$peng+$tang+$lok+$list;
                    $spk= new norm([
                        'id' => $row['id'],
                        'peng' => $peng,
                        'tang' => $tang,
                        'lok' =>  $lok,
                        'list' =>  $list,
                        'sum' =>  $sum
                    ]);
                    $spk->save();
        }
        return redirect()->route('SPK');
    }
}
