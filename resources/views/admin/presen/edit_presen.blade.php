@extends('admin.home')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Presensi</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('presen.update', $editpresen->id) }}" method="POST">
                @csrf
                <div class="col">
                    <label for="inputEmail4" class="form-label">Nama</label>
                    <select class="form-control" name="users_id" aria-label="Default select example" required>
                        <option value="{{$editpresen->users_id}}" selected>{{$editpresen->users->name}}</option>
                        @foreach ($data as $users)
                        <option value="{{ $users->id }}">
                            {{ $users->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="kategori" class="form-label">Keterangan</label>
                            <select type="select" class="form-control" name="keterangan" value="{{$editpresen->keterangan}}" required>
                                <option selected>Pilih</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Ijin">Ijin</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Alpha">Alpha</option>
                            </select>
                        </div>
                    </div>
                </div>
        </div>
        <br>
        <div>
            <button type="submit" class="btn btn-success shadow">Simpan</button>
            <button type="button" onclick="history.back()" class="btn btn-danger shadow">Batalkan</button>
        </div>
        </form>
    </div>
</div>
@endsection
