@extends('layouts.main')

@section('content')
<div class="clearfix"></div>
<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
        <div class="x_content">
                    <div class="container mt-5">
                        <form method="POST" action="/edit/{{$datakriteria->id}}">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="exampleInputKriteria">Kode Kriteria</label>
                                <input id="exampleInputKriteria" type="text" class="form-control" name="kode_kriteria" placeholder="Masukkan Kode" value="{{$datakriteria->kode_kriteria}}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="exampleInputPassword1">Nama Kriteria</label>
                                <input type="text" class="form-control" name="nama_kriteria" placeholder="Masukkan Nama" value="{{$datakriteria->nama_kriteria}}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="exampleInputPassword1">Bobot</label>
                                <input type="text" class="form-control" name="bobot" placeholder="Masukkan Bobot" value="{{$datakriteria->bobot}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection