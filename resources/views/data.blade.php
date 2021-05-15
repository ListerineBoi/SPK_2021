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
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-header"> <strong> Input pengajuan kredit </strong> </div>
                <div class="card-body">
               
                <form method="post" action="{{route('tambah')}}">
                @csrf
                    <div class="form-group">
                    <label> Nama </label>
                    <input type="text" class="form-control" name="nama">
                    </div>

                    <div class="form-group">
                    <label> NIK </label>
                    <input type="number" class="form-control" name="ktp">
                    </div>

                    <div class="form-group">
                    <label> Alamat </label>
                    <input type="text" class="form-control" name="alamat">
                    </div>

                    <div class="form-group">
                    <label> Pekerjaan </label>
                    <input type="text" class="form-control" name="kerja">
                    </div>

                    <div class="form-group">
                      <label> Penghasilan </label>
                      <select name ="penghasilan" class="custom-select">
                      <option value="1">&lt;Rp2.000.000</option>
                      <option value="3">Rp2.000.000-15.000.000</option>
                      <option value="6">Rp15.000.000-25.000.000</option>
                      <option value="9">&gt;Rp25.000.000</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label> Tanggungan </label>
                      <select name ="tanggungan" class="custom-select">
                      <option value="1">Tidak ada</option>
                      <option value="3">Berkeluarga</option>
                      <option value="6">Berkeluarga lebih dari 2 anak</option>
                      <option value="9">Keluarga Besar</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label> Lokasi </label>
                      <select name ="lokasi" class="custom-select">
                      <option value="1">Tidak Strategis</option>
                      <option value="3">Cukup Strategis</option>
                      <option value="6">Sangat Strategis</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label> Tegangan Listrik </label>
                      <select name ="listrik" class="custom-select">
                      <option value="1">&lt;1300VA</option>
                      <option value="3">1300VA-3500VA</option>
                      <option value="6">&gt;4400VA</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label> Jenis Barang </label>
                      <select name ="jns_brg" class="custom-select">
                      <option value="0">Roda Dua</option>
                      <option value="1">Roda Empat</option>
                      </select>
                    </div>          
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
            <div class="card-header"> <strong> Tabel Pengaju kredit </strong> </div>
            <div class="card-body">
                            <table class="table table-hover" align="center">
                            <tr>
                                <th> No </th>
                                <th> Nama </th>
                                <th> No.KTP </th>
                                <th> Alamat </th>
                                <th> Penghasilan </th>
                                <th> Tanggungan </th>
                                <th> Lokasi </th>
                                <th> Listrik </th>
                               
                                <th> Pekerjaan </th>
                                <th> Action </th>
                            <tr>
                            @foreach($dt as $row)
                                <tr>
                                    <td> {{$loop->iteration+(($dt->currentPage()-1)*$dt->perPage())}} </td>
                                    <td> {{$row['nama']}} </td>
                                    <td> {{$row['ktp']}} </td>
                                    <td> {{$row['alamat']}}</td>
                                    @if($row['penghasilan']==1)
                                    <td> &lt;Rp2.000.000</td>
                                    @elseif($row['penghasilan']==3)
                                    <td> Rp2.000.000-15.000.000</td>
                                    @elseif($row['penghasilan']==6)
                                    <td> Rp15.000.000-25.000.000</td>
                                    @else
                                    <td> &gt;Rp25.000.000</td>
                                    @endif
                                    @if($row['tanggungan']==1)
                                    <td> Tidak ada</td>
                                    @elseif($row['tanggungan']==3)
                                    <td> Berkeluarga</td>
                                    @elseif($row['tanggungan']==6)
                                    <td> Berkeluarga lebih dari 2 anak</td>
                                    @else
                                    <td> Keluarga Besar</td>
                                    @endif
                                    @if($row['lokasi']==1)
                                    <td> Tidak Startegis</td>
                                    @elseif($row['lokasi']==3)
                                    <td> Cukup Strategis</td>
                                    @else
                                    <td> Sangat Strategis</td>
                                    @endif
                                    @if($row['listrik']==1)
                                    <td> &lt;1300VA</td>
                                    @elseif($row['listrik']==3)
                                    <td> 1300VA-3500VA</td>
                                    @else
                                    <td> &gt;4400VA</td>
                                    @endif
                                    <td> {{$row['kerja']}} </td>
                                    <form method="post" action="{{route('delete')}}">
                                    @csrf
                                        <input type="hidden" name="id" value="{{$row['id']}}">
                                        <td><button type="submit" class="btn btn-danger"> Delete </button></td>
                                    </form>
                                </tr>
                            @endforeach
                            </table>
                            {{$dt->links()}}
            </div>
            <button class="btn btn-success"> <a style="color:white;text-decoration: none;" href="{{ route('norm') }}"> Proses Data </a> </button>
        </div>
      </div>
  </div>
  
  @endsection