<!DOCTYPE html>

<html>

<head>

  <title>Hi</title>
<style type="text/css">
  //.test tr { line-height: 1px; }
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
  text-align: center;
}
* {
  box-sizing: border-box;
}

.box {
  float: left;
  width: 50%;
  padding: 50px;
  height: 300px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.logoLutim {
  position: absolute;
  left: 15px;
  top: 10px;
}
</style>
</head>

<body>
  <img class="logoLutim" src="{{ asset('foto/LOGO_KABUPATEN_LUWU_TIMUR.png') }}" alt="Luwu Timur" style="width:75px">
  <p align="center" style="margin-top: 1px;margin-bottom: 1px;"><font size="5">PEMERINTAH KABUPATEN LUWU TIMUR</font></p>
  <p align="center" style="margin-top: 1px;margin-bottom: 1px;"><font size="4">DINAS KOMUNIKASI DAN INFORMATIKA</font></p>
  <p align="center" style="margin-top: 1px;margin-bottom: 1px;">Alamat : Jalan Soekarno Hatta Nomor. Malili 92981</p>
  <p align="center" style="margin-top: 1px;margin-bottom: 1px;">Telepon : (0474) 321 337 Faks : (0474) 321 337</p>
  <p align="center" style="margin-top: 1px;margin-bottom: 1px;"><strong>email : kominfo@luwutimurkab.go.id</strong></p>
   <hr>
   <br>
  <!--<h1></h1>-->
  <table class="test">
    @foreach($daftar_kegiatan as $kegiatan)
    <tr>
      <td>Nama Kegiatan</td>
      <td width="5"></td>
      <td>:</td>
      <td width="5"></td>
      <td>{{$kegiatan->nama_kegiatan}}</td>
    </tr>
    <tr>
      <td>Penyelenggara Kegiatan</td>
      <td></td>
      <td>:</td>
      <td></td>
      <td>{{$kegiatan->nama_skpd}}</td>
    </tr>
    <tr>
      <td>Waktu</td>
      <td></td>
      <td>:</td>
      <td></td>
      <td>{{$kegiatan->waktu}}</td>
    </tr>
    <tr>
      <td>Tempat</td>
      <td></td>
      <td>:</td>
      <td></td>
      <td>{{$kegiatan->tempat}}</td>
    </tr>
    @endforeach
  </table>

  <br>
<table id="customers">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jabatan</th>
    <th>Instansi</th>
    <th>L/P</th>
    <th>No. HP</th>
    <th>TTD</th>

  </tr>
   <?php $index=1; ?>
    @foreach($daftar_hadir as $peserta)
  <tr>
    <td>{{$index++}}</td>
    <td>{{$peserta->nama}}</td>
    <td>{{$peserta->jabatan}}</td>
    <td>{{$peserta->instansi}}</td>
    <td>{{$peserta->jenis_kelamin==1?'L':'P'}}</td>
    <td>{{$peserta->hp}}</td>
    <td><img src="{{$peserta->tanda_tangan}}" alt="Red dot" width="100" /></td>
  </tr>
  @endforeach
</table>

</body>
</html>