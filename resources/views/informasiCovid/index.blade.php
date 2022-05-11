@extends('layouts.template_default')

<style>
    .clearfix{
        min-height: 550px;
    }

    .my-active span{
        background-color: #01C292 !important;
        color: white !important;
        border-color: #01C292 !important;
    }

</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

@section('title')
    Informasi Covid-19
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Dashboard</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="{{ route('home') }}">Dashboard</a></li>
                                        <li class="active">Informasi Covid-19</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header">
                    <div class="row">
                            <div class="col-md-2">
                                <strong class="card-title">Data Covid-19</strong>
                            </div>
                    </div>
                </div>
                <div class="table-stats order-table ov-h">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Provinsi</th>
                                <th>Jumlah Kasus</th>
                                <th>Sembuh</th>
                                <th>Meninggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['list_data'] as $keyt => $value)
                                <tr>
                                    <td>{{ $value['key'] }}</td>
                                    <td>{{ $value['jumlah_kasus'] }}</td>
                                    <td>{{ $value['jumlah_sembuh'] }}</td>
                                    <td>{{ $value['jumlah_meninggal'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> 
            </div>

            {{-- <div class="card">
                {{ $stnk->links('vendor.pagination.customPagination') }}
            </div> --}}
        </div>
    </div>
</div>
@endsection