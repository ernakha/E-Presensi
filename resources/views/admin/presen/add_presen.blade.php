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
            <form action="{{ route('presen.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="kategori" class="form-label">Nama Guru</label>
                            <select type="select" class="form-control" name="guru" required>
                                <option selected>Pilih</option>
                                <option value="Abdul Aziz, S.Sos.i.">Abdul Aziz, S.Sos.i.</option>
                                <option value="Moh. Sholeh Hadi Muslim, S.PdI.">Moh. Sholeh Hadi Muslim, S.PdI.</option>
                                <option value="Anik Kholifatuz Zahro', S.Si.">Anik Kholifatuz Zahro', S.Si.</option>
                                <option value="Insan Solihin, S.Pd.">Insan Solihin, S.Pd.</option>
                                <option value="Miftakhul Jannah, S.Pd.">Miftakhul Jannah, S.Pd.</option>
                                <option value="Tutut Triyastutik, S.T.">Tutut Triyastutik, S.T.</option>
                                <option value="Ari Wicaksono, S.Pd.">Ari Wicaksono, S.Pd.</option>
                                <option value="Rizani Annisa', S.Pd.">Rizani Annisa', S.Pd.</option>
                                <option value="Rafie Khan Rahman, S.E.">Rafie Khan Rahman, S.E.</option>
                                <option value="Syaiful Arifin">Syaiful Arifin</option>
                                <option value="Jannaitun Naimah">Jannaitun Naimah</option>
                                <option value="Daimatul Mukhimah">Daimatul Mukhimah</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="kategori" class="form-label">Keterangan</label>
                            <select type="select" class="form-control" name="keterangan" required>
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
