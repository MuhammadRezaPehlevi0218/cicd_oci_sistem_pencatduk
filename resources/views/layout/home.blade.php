@extends('layout.template')

@section('content')
<div class="content">
    <h2 class="display-4"><strong>Selamat Datang Di Website Pencatatan Penduduk</strong></h2>
    @if (auth()->user()->level==1)
        {{-- Card --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">portrait</i>
                            </div>
                            <p class="card-category">Jumlah User</p>
                            <h3 class="card-title">{{DB::table('penduduks')->count('id_penduduk')}}
                                <small>Users</small>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">article</i>
                            </div>
                            <p class="card-category">Perizinan</p>
                            <h3 class="card-title">{{DB::table('regions')->count('id_region')}}
                                <small>Users</small>
                            </h3>
                        </div>
                    </div>
                </div>
                    </div>
        </div>
        <h3>Anda adalah Admin</h3>

    @elseif (auth()->user()->level==2)
    <h3 class="display-4">NIK :{{ Auth::user()->nik }}</h3>
    @endif
    <blockquote class="blockquote">
        <p class="mb-0">Untuk mekanisme Website ini yaitu:</p>
        <footer class="blockquote-footer">Melakukan isi data diri pada bagian<cite title="Source Title"> Penduduk</cite></footer>
        <footer class="blockquote-footer">Setelah itu melakukan isi data diri pada bagian<cite title="Source Title"> Wilayah</cite></footer>
        <footer class="blockquote-footer">Melakukan Cektak pada bagian<cite title="Source Title"> Cetak Surat</cite></footer>
    </blockquote>
</div>

@endsection
