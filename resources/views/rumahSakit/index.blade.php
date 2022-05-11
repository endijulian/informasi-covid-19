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
    Rumah Sakit Rujukan Covid-19
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
                                        <li class="active">Rumah Sakit Rujukan Covid-19</li>
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
                            <div class="col-md-4">
                                <strong class="card-title">Rumah Sakit Rujukan Covid-19</strong>
                            </div>
                            <div class="col-md-5">
                                <form action="{{route('rsRujukan.index')}}" method="get">
                                    <div class="input-group">
                                        <input type="text" id="keyword" name="keyword" placeholder="Search" value="{{Request::get('keyword')}}"  class="form-control">
                                        <div class="input-group-btn"><button type="submit" class="btn btn-primary">Search</button></div>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
                <div class="table-stats order-table ov-h">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Wilayah</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $keyt => $value)
                                <tr>
                                    <td>{{ $value['nama'] ?? null }}</td>
                                    <td>{{ $value['wilayah'] ?? null }}</td>
                                    <td>{{ $value['telepon'] ?? null }}</td>
                                    <td>{{ $value['alamat'] ?? null }}</td>
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