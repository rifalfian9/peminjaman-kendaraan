@extends('admin.index')

@section('konten')

    <div class="container">
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h2 class="mt-3">Data Kendaraan </h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right d-flex justify-content-start ">
                        <ol class="breadcrumb text-right me-3">
                            <li class="active"><a href="/admin/home" class="text-decoration-none"> Daftar Kendaraan </a></li>
                        </ol>
                         <ol class="breadcrumb text-right">
                            <li class="active"><a href="/admin/tambahkendaraan" class="text-decoration text-warning">+ Tambah Kendaraan</a></li>
                        </ol>
                </div>
            </div>
        </div>

        <div class="content mt-3">

        
             <div class="alert alert-warning" role="alert">
            A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
 
    
            <table class="table table-bordered bg-light border-primary">
                <thead>
                    <th width=5%>No</th>
                    <th>Kendaraan</th>
                    <th>Last Servis</th>
                    <th>Jadwal Servis</th>
                    <th>Stok</th>
                    <th>foto</th>
                    <th width=15%>Edit</th>
                </thead>
                <tbody>
                     <?php $s= 1; ?>
                    @foreach ($t as $item)
                <tr> 
                    <td><?=$s?></td>
                    <td>{{ $item->nama_kendaraan }}</td>
                    <td>{{ $item->terakhir_servis }}</td>
                    <td>{{ $item->jadwal_servis }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->foto }}</td>
                    <td>
                        <div class="text-center d-flex justify-content-start">
                            <a type=button class="me-2 btn btn-warning text-center"  href="/admin/editkendaraan/{{ $item->id_kendaraan }}">Edit</a>
                        <form action="/admin/hapuskendaraan" method="get">
                            <button type="input" class="btn btn-danger text-center" value="{{ $item->id_kendaraan }}" name="hapuskendaraan">Hapus</button>
                        </form>
                        </div>
                    </td>
                    
                </tr> 
                <?php $s++; ?>
                @endforeach
                </tbody>
            </table>

        </div> <!-- .content -->
    </div><!-- /#right-pan
    </div>
@endsection