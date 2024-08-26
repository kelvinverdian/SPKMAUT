@extends('layouts.main')

@section('content')
<div class="clearfix"></div>
<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
        <div class="x_content">
            <div class="d-flex justify-content-between">
                <div><p class="h3">Data Kriteria</p></div>
                <div><button class="btn btn-success"> <i class="bi bi-plus"></i> Tambah </button></div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th>
                            </th>
                            <th class="column-title">No </th>
                            <th class="column-title">Kode Kriteria </th>
                            <th class="column-title">Nama Kriteria</th>
                            <th class="column-title">Bobot</th>
                            <th class="column-title no-link last text-center"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                        class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even pointer">
                            <td class="a-center"></td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">121000039</td>
                            <td class="align-middle">DRC</td>
                            <td class="align-middle">50%</td>
                            <td class=" text-center">
                                <a href="#" class="btn btn-success btn-sm"><i class="bi bi-eye-fill"></i></a>
                                <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-heartbreak"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection