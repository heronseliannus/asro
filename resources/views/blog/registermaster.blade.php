@extends('layout.menu')
@section('title','Data Mahasiswa Kalbar')


@section('content')



<section class="section-padding gray-bg">
<div class="container">
<div class="row">
    <table class="table">
    
    <thead>
        <tr class="bg-warning">
            <th scope="col-sm-12">Id</th>
            <th scope="col-sm-12">Nama Lengkap</th>
            <th scope="col-sm-12">Alamat</th>
            <th scope="col-sm-12">Jenis Kelamin</th>
            <th scope="col-sm-12">Eamil</th>
            <th scope="col-sm-12">Re Email</th>
            <th scope="col-sm-12">Kabupaten</th>
            <th scope="col-sm-12">Kota</th>
            <th scope="col-sm-12">Perguruan Tinggi</th>
            <th scope="col-sm-12">Jurusan</th>
            <th scope="col-sm-12">Kelola Data</th>            
        </tr>
    </thead>
    <tbody>
@foreach($registers as $register)
        <tr class="bg-success">
            <td> {{$register->id}} </td>
            <td> {{$register->namalengkap}} </td>
            <td> {{$register->alamat}} </td>
            <td> {{$register->jenis_kelamin}} </td>
            <td> {{$register->email}} </td>
            <td> {{$register->re_email}} </td>
            <td> {{$register->kabupaten}} </td>
            <td> {{$register->kota}} </td>
            <td> {{$register->perguruan_tinggi}} </td>
            <td> {{$register->jurusan}} </td>    
            <td>
                <form action ="#" metohod="#">
                <input type="hidden" name="_method" value="Post">
                <button type="submit" class="btn btn-success">Ubah</button>
                </form>
                <form action="#" method="#">
                <input type="hidden" class="_method" value="PUT">
                <button type="submit" class="btn btn-warning">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>
</div>
</section>


@endsection