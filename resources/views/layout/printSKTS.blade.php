<!DOCTYPE html>
<head>
    <title>Surat Keterangan Tinggal Sementara</title>
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
    <div id=halaman>
        <h3 id=judul>SURAT KETERANGAN TINGGAL SEMENTARA (SKTS)</h3>

        <p>Saya yang bertanda tangan di bawah ini :</p>

        @foreach ($wilayah as $data)
            @if ($data->nama == Auth::user()->name)
                <table>
                    <tr>
                        <td style="width: 30%;">Nama</td>
                        <td style="width: 5%;">:</td>
                        <td style="width: 65%;">{{Auth::user()->name}}</td>
                    </tr>
                    <tr>
                        <td style="width: 30%;">NIK</td>
                        <td style="width: 5%;">:</td>
                        <td style="width: 65%;">{{Auth::user()->nik}}</td>
                    </tr>
                    <tr>
                        <td style="width: 30%;">Tempat Tinggal Sementara</td>
                        <td style="width: 5%;">:</td>
                        <td style="width: 65%;">{{ $data->nama_daerah }}</td>
                    </tr>
                    <tr>
                        <td style="width: 30%; vertical-align: top;">Alamat</td>
                        <td style="width: 5%; vertical-align: top;">:</td>
                        <td style="width: 65%;">{{ $data->alamat }}</td>
                    </tr>
                    <tr>
                        <td style="width: 30%;">Alasan</td>
                        <td style="width: 5%;">:</td>
                        <td style="width: 65%;">{{ $data->alasan }}</td>
                    </tr>
                </table>
            @endif
        @endforeach

        <p>menyatakan bahwa yang namanya tertera diatas berdomisili sementara disini.</p>

        <div style="width: 50%; text-align: left; float: right;">Malang, <span id="tanggalwaktu"></span></div><br>
        <div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
        <div style="width: 50%; text-align: left; float: right;">Ketua RT</div>

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
</body>

</html>
