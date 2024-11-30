@extends('layouts.main')

@section('content')
<div class="clearfix"></div>
<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
        <div class="x_content">
            <div class="container mt-5">
                @session('error')
                <div class="alert alert-danger alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    {{ $value }}
                </div>
                @endsession
                <form method="POST" action="tambahdatakriteria">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="exampleInputKriteria">Kode Kriteria</label>
                        <input id="exampleInputKriteria" type="text" class="form-control" name="kode_kriteria"
                            placeholder="Masukkan Kode" value="{{ old('kode_kriteria') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="exampleInputPassword1">Nama Kriteria</label>
                        <input type="text" class="form-control" name="nama_kriteria" placeholder="Masukkan Nama" value="{{ old('nama_kriteria') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="exampleInputPassword1">Bobot</label>
                        <input type="number" class="form-control" name="bobot" placeholder="Masukkan Bobot" value="{{ old('bobot') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection