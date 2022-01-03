<!DOCTYPE html>
<head>
    <title>Surat Keterangan Domisili Sementara</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

        #halaman{
            width: auto;
            height: auto;
            position: absolute;
            border: 1px solid;
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 80px;
        }

    </style>

</head>

<body>
    @foreach ($wilayah as $data)
    @if ($data->nama == Auth::user()->name)
        <div id=halaman>
            <h3 id=judul>SURAT KETERANGAN DOMISILI SEMENTARA (SKDS)</h3>

            <p>Yang bertanda tangan di bawah ini ketua RT.../RW... Kelurahan {{$data->kelurahan}},Kecamatan {{ $data->kecamatan }} dengan ini menerangkan :</p>

            <table>
                <tr>
                    <td style="width: 30%;">Nama</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;">{{ $data->nama }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">NIK</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;">{{Auth::user()->nik}}</td>
                </tr>
                <tr>
                    <td style="width: 30%; vertical-align: top;">Alamat Asal</td>
                    <td style="width: 5%; vertical-align: top;">:</td>
                    <td style="width: 65%;">{{ $data->alamat }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Tanggal mulai domisili sementara</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;">{{ $data->tanggal }}</td>
                </tr>
            </table>

            <p>Bahwa yang namanya tertera diatas benar berdomisili diwilayah kami. dan surat keterangan domisili ini untuk keperluan :</p>
            <p>{{ $data->alasan }}</p>

            <div style="width: 50%; text-align: left; float: right;">Malang, <span id="tanggalwaktu"></span></div><br>
            <div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
            <div style="width: 50%; text-align: left; float: right;">ketua RT.../RW...</div>

            <script>
                var tw = new Date();
                if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
                else (a=tw.getTime());
                tw.setTime(a);
                var tahun= tw.getFullYear ();
                var hari= tw.getDay ();
                var bulan= tw.getMonth ();
                var tanggal= tw.getDate ();
                var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
                var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
                document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
            </script>


        </div>
    @endif
    @endforeach
</body>

</html>
