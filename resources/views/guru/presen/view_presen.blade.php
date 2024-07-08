@extends('guru.home')
@section('guru')



<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Presensi</h1>
            <a href="{{ route('gurupresen.add') }}" class="d-none d-sm-inline-block btn btn-success shadow"><i
                    class="mdi mdi-playlist-plus"></i> Ayo Presensi!</a>
        </div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            @csrf
                <!-- <p class="card-description"> Add class <code>.table-striped</code> -->
                </p>
                <div class="table-responsive">
                    <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Nama</center></th>
                                <th><center>Keterangan</center></th>
                                <th><center>Waktu</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td><center>{{$loop->iteration}}<center></td>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->keterangan}}</td>
                                <td><center>{{$item->created_at}}<center></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection