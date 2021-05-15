<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
class DataController extends Controller
{
    public function index()
    {
        $dt=Data::paginate(5);
        return view('data' ,compact("dt"));
    }

    public function tambah(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'ktp' => 'required',
            'alamat' => 'required',  
            'penghasilan' => 'required',
            'tanggungan' => 'required',
            'lokasi' => 'required' ,
            'listrik' => 'required',  
            'jns_brg' => 'required',
            'kerja' => 'required'    
        ]);
        
        
        $Data= new Data([
            'nama' => $request->get('nama'),
            'ktp' => $request->get('ktp'),
            'alamat' => $request->get('alamat'),
            'penghasilan' => $request->get('penghasilan'),
            'tanggungan' => $request->get('tanggungan'),
            'lokasi' => $request->get('lokasi'),
            'listrik' => $request->get('listrik'),
            'jns_brg' => $request->get('jns_brg'),
            'kerja' => $request->get('kerja')
        ]);
        $Data->save();
        return redirect()->route('data');
        
    }
    public function delete(Request $request)
    {
        Data::where('id', $request->get('id'))->delete();
        return redirect()->route('data');
    }
}
