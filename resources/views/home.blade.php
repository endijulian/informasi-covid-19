@extends('layouts.template_default')

<style>
    .clearfix{
        min-height: 550px;
    }

    .admin-logo{
        display: block;
        margin-top: 200px;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
</style>

@section('title')
    Home
@endsection

@section('content')

<div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text"><b>{{ $dki['key'] }}</b></div>
                            <div class="stat-digit">{{ $dki['jumlah_kasus'] }}</div>
                        </div><br>
                        <div class="stat-content dib">
                            <div class="stat-text">Sembuh</div>
                            <div class="stat-digit">{{ $dki['jumlah_sembuh'] }}</div>
                        </div>
                        <div class="stat-content dib">
                            <div class="stat-text">Meninggal</div>
                            <div class="stat-digit">{{ $dki['jumlah_meninggal'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text"><b>{{ $jawa_tengah['key'] }}</b></div>
                            <div class="stat-digit">{{ $jawa_tengah['jumlah_kasus'] }}</div>
                        </div><br>
                        <div class="stat-content dib">
                            <div class="stat-text">Sembuh</div>
                            <div class="stat-digit">{{ $jawa_tengah['jumlah_sembuh'] }}</div>
                        </div>
                        <div class="stat-content dib">
                            <div class="stat-text">Meninggal</div>
                            <div class="stat-digit">{{ $jawa_tengah['jumlah_meninggal'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text"><b>{{ $jawa_timur['key'] }}</b></div>
                            <div class="stat-digit">{{ $jawa_timur['jumlah_kasus'] }}</div>
                        </div><br>
                        <div class="stat-content dib">
                            <div class="stat-text">Sembuh</div>
                            <div class="stat-digit">{{ $jawa_timur['jumlah_sembuh'] }}</div>
                        </div>
                        <div class="stat-content dib">
                            <div class="stat-text">Meninggal</div>
                            <div class="stat-digit">{{ $jawa_timur['jumlah_meninggal'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
