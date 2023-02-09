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
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Data Identitas Peminjam</li>
                        </ol>
                    </div>
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
                    <th>Divisi</th>
                    <th>Posisi</th>
                    <th>Alamat</th>
                    <th>Email</th>
                </thead>
                <tbody>
                <?php $s=1; ?>
                @foreach ($p as $item)
                    
                <tr> 
                    <td><?=$s;?>.</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->divisi }}</td>
                    <td>{{ $item->posisi }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->email }}</td>
    
                    
                </tr> 
                <?php $s++ ?>
                @endforeach
                </tbody>
            </table>

        </div> <!-- .content -->
    </div><!-- /#right-pan
    </div>
@endsection