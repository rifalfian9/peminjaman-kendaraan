@extends('admin.index')

@section('konten')

    <div class="container">
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h2 class="mt-3">Data Peminjam</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                 <div class="page-header float-right d-flex justify-content-start ">
                        <ol class="breadcrumb text-right me-3">
                            <li class="active"><a href="/admin/home" class="text-decoration-none"> Daftar Sopir Aktif</a></li>
                        </ol>
                         <ol class="breadcrumb text-right">
                            <li class="active"><a href="/admin/tambahsopir" class="text-decoration text-warning">+ Tambah Sopir</a></li>
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
                    <th width=5%>No.</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Konfirmasi</th>
                </thead>
                <tbody>
                <?php $s=1; ?>
                @foreach ($q as $item)
                    
                <tr> 
                    <td><?=$s;?>.</td>
                    <td>{{ $item->nama_sopir }}</td>
                    <td>{{ $item->telepon_sopir }}</td>
                    <td>
                        <form action="/admin/hapussopir" method=get>
                            @csrf
                           <div class="text-center">
                             <button type="input" class="btn btn-danger text-center" name="hapussopir" value="{{ $item->id_sopir }}" >Delete</button>
                           </div>
                        </form>
                    </td>
                </tr> 
                <?php $s++ ?>
                @endforeach
                </tbody>
            </table>

        </div> <!-- .content -->
    </div><!-- /#right-pan
    </div>
@endsection