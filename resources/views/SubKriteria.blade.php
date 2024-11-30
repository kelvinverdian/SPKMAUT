@extends('layouts.main')

@section('content')
<div class="clearfix"></div>
<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
        <div class="x_content">
            <div class="d-flex justify-content-between">
                <div><p class="h3">Sub Kriteria</p></div>
                <div><a class="btn btn-success" href="/datakriteria">Tambah</a></div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th class="column-title">No </th>
                            <th class="column-title">Kode Kriteria </th>
                            <th class="column-title">Nama Kriteria</th>
                            <th class="column-title">Bobot</th>
                            <th class="column-title no-link last">
                                <span class="nobr">Action</span>
                            </th>
                        </tr>
                    </thead>
                    
                    {{-- <tbody>
                        @if (count($datakriteria) > 0)
                            @foreach ($datakriteria as $data)
                            <tr>
                                <th scope="row"> {{ $loop->iteration }}</th>                                        
                                <th> {{ $data->kode_kriteria }}</th> 
                                <th> {{ $data->nama_kriteria }}</th> 
                                <th> {{ $data->bobot }}%</th>
                                <th><a href="/edit/{{ $data->id}}" class="btn btn-primary">Edit</a>
                                    <a href="/delete/{{ $data->id}}" class="btn btn-primary">Delete</a>
                                </th> 
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="5" class="text-center">No Data</th>
                            </tr>
                        @endif
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection