@extends('master')
@section('content')
<div class="container">
   <div class="well well-lg">

     @if(Session::has('message'))
     <div class="alert alert-success">
       {{Session::get('message')}}
     </div>
     @endif

       <h2>Daftar Dokter</h2>
       <div class="well well-lg">
         <div class="well well-lg">
           <h5>Cari Dokter</h5>
           <form class="form-horizontal" role="form" method="GET">
             <div class="form-group">

               <select name="kategori" id="kategori">
                 <option value="id">ID Dokter</option>
                 <option value="nama_dokter">Nama</option>
                 <option value="nik">NIK</option>
                 <option value="spesialisasi">Spesialisasi</option>
               </select>
               <input id="keyword" type="text" placeholder="Masukkan kata kunci" name="keyword" value="{{ old('keyword') }}">
               <button type="submit" class="btn btn-primary">
                 Cari pasien
               </button>
             </div>
           </form>
         </div>
         <table class="table table-striped table-bordered">
           <thead>
             <tr>
               <td>ID</td>
               <td>Nama</td>
               <td>NIK</td>
               <td>Jenis kelamin</td>
               <td>Tanggal lahir</td>
               <td>Alamat</td>
               <td>No Telepon</td>
               <td>Spesialisasi</td>
               <td>E-mail</td>
             </tr>
           </thead>
         @foreach($dokter as $d)
         <tr>
           <td><a href="{{URL::to('dokter/'.$d->id)}}"> {{$d->id}}</a></td>
           <td>{{$d->nama_dokter}}</td>
           <td>{{$d->nik}}</td>
           <td>{{$d->jenis_kelamin}}</td>
           <td>{{$d->tanggal_lahir}}</td>
           <td>{{$d->alamat}}</td>
           <td>{{$d->telepon}}</td>
           <td>{{$d->spesialisasi}}</td>
           <td>{{$d->email}}</td>
         </tr>
         @endforeach
        </tbody>
      </table>
      </div>
    </div>

@endsection