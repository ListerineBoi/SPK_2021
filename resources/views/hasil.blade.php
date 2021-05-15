@extends('nav.navbar')

@section('content')
<div class="container">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger"> 
                            <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                            </ul>
                            </div>
                    @endif
                    @if(\Session::has('Forbidden'))
                        <div class="alert alert-danger">
                            <p>{{\Session::get('Forbidden')}}</p>
                        </div>
                    @endif
<div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="card">
            <div class="card-header"> <strong> Hasil SAW </strong> </div>
            <div class="card-body">
                            <table class="table table-hover" align="center">
                            <tr>
                                <th> Nama </th>
                                <th> No.KTP </th>
                                <th> Alamat </th>
                                <th> Nilai </th>
                                <th> Kandidat </th>
                            <tr>
                            @foreach($nrm as $row)
                            <tr>
                            <td> {{DB::table('data')->where('id', $row['id'])->value('nama')}}</td>
                            <td> {{DB::table('data')->where('id', $row['id'])->value('ktp')}}</td>
                            <td> {{DB::table('data')->where('id', $row['id'])->value('alamat')}}</td>
                            <td> {{$row['sum']}}</td>
                            <td> {{$loop->iteration}}</td>
                            </tr>

                            @endforeach
                            
            </div>
        </div>
      </div>
  </div>
  
  @endsection