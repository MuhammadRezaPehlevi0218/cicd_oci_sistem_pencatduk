@extends('layout.template')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">PERMOHONAN IZIN</h4>
                        </div>
                        <div class="card-body">
                            <form action="/wilayah">
                                @csrf
                                <table class="table">
                                    <tr>
                                        <th width="100px">Nama</th>
                                        <th width="30px">:</th>
                                        <th>{{$wilayah->nama}}</th>
                                    </tr>
                                    <tr>
                                        <th width="100px">Daerah</th>
                                        <th width="30px">:</th>
                                        <th>{{$wilayah->nama_daerah}}</th>
                                    </tr>
                                    <tr>
                                        <th width="100px">Alamat</th>
                                        <th width="30px">:</th>
                                        <th>{{$wilayah->alamat}}</th>
                                    </tr>
                                    <tr>
                                        <th width="100px">Kelurahan</th>
                                        <th width="30px">:</th>
                                        <th>{{$wilayah->kelurahan}}</th>
                                    </tr>
                                    <tr>
                                        <th width="100px">Kecamatan</th>
                                        <th width="30px">:</th>
                                        <th>{{$wilayah->kecamatan}}</th>
                                    </tr>
                                    <tr>
                                        <th width="100px">Alasan</th>
                                        <th width="30px">:</th>
                                        <th>{{$wilayah->alasan}}</th>
                                    </tr>
                                    <tr>
                                        <th width="100px">Status</th>
                                        <th width="30px">:</th>
                                        @if ($wilayah->status == 1)
                                            <th class="text-warning">Pending</th>
                                        @elseif ($wilayah->status == 2)
                                            <th class="text-success">Diterima</th>
                                            @elseif ($wilayah->status == 3)
                                            <th class="text-danger">Ditolak</th>
                                        @endif
                                    </tr>
                                </table>
                                <div class="form-group">
                                    <button class="btn btn-primary pull-right">Kembali</button>
                                </div>
                            </form><br><br>
                            <form action="/wilayah/izin/{{$wilayah->id_region}}" method="POST" >
                                <div>
                                    @csrf
                                    <button type="submit" class="btn btn-success pull-center" name="status" value="2">ACC</button>
                                    {{-- <button type="submit" class="btn btn-danger pull-center" name="status" value="3">Cencel</button> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
