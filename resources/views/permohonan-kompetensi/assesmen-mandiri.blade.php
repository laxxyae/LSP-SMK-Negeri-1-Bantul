@extends('layouts.main')

@section('content')
    
<!-- <div class="container"><div class="row"><br>
<div class ="col-md-12"><form id="user_form">  -->


<!-- tabel 1 (LOG.OO01.002.01) -->
  <table class="table" border="2">
    <thead class="thead-dark">
      <tr>
        <th scope="col">
          Unit Kompetensi :
          LOG.OO01.002.01 Prinsip - Prinsip  Keselamatan
          dan  Kesehatan  Kerja  di Lingkungan  Kerja
        </th>
      </tr>
    </thead>
      <tr>
        <td>
          <p>1. Mengikuti praktek - praktek kerja yang aman</p>
          <input type="checkbox" class="Present 1" name="attedence[]" id ="1"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 1" name="attedence[]" id ="1" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>2. Melaporkan bahaya - bahaya di tempat kerja</p>
          <br>
          <input type="checkbox" class="Present 2" name="attedence[]" id ="2"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 2" name="attedence[]" id ="2" value="A" required>
          <label class="layout" for="check2">BK</label>
          <br>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>3. Mengikuti prosedur - prosedur darurat</p>
          <br>
          <input type="checkbox" class="Present 3" name="attedence[]" id ="3"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 3" name="attedence[]" id ="3" value="A" required>
          <label class="layout" for="check2">BK</label>
          <br>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      </table>
<!--akhir tabel 1-->

<br>

<!-- tabel 2 (LOG.OO01.001.01) -->
  <table class="table" border="2">
    <thead class="thead-dark">
      <tr>
        <th scope="col">
        Unit Kompetensi :  
        LOG.OO01.001.01 Menerapkan Sistem Mutu</th>
      </tr>
    </thead>
      <tr>
        <td>
          <p>1. Memahami  dan mengikuti  operasi (kerja) yang
              terstandar maupun  persyaratan spesifikasi
          </p>
          <input type="checkbox" class="Present 4" name="attedence[]" id ="4"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 4" name="attedence[]" id ="4" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>2. Digunakan  dalam perbaikan  kualitas</p>
          <input type="checkbox" class="Present 5" name="attedence[]" id ="5"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 5" name="attedence[]" id ="5" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
  </table>
<!-- akhir tabel 2 -->

<br>

<!-- tabel 3 (TIK.OP01.002.01) -->
  <table class="table" border="2">
    <thead class="thead-dark">
      <tr>
        <th scope="col">
        Unit Kompetensi :  
        TIK.OP01.002.01 Mengidentifikasi  Aspek  Kode  
        Etik  dan  HAKI  di Bidang  TIK
        </th>
      </tr>
    </thead>
      <tr>
        <td>
          <p>1. Mengidentifikasi Kode Etik yang Berlaku di Dunia TIK</p>
          <input type="checkbox" class="Present 6" name="attedence[]" id ="6"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 6" name="attedence[]" id ="6" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
    <tr>
      <td>
        <p>2. Mengidentifikasi Hal - Hal yang Berkaitan dengan HAKI di Dunia TIK</p>
        <input type="checkbox" class="Present 7" name="attedence[]" id ="7"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 7" name="attedence[]" id ="7" value="A" required>
          <label class="layout" for="check2">BK</label>
        <div class="form-group">
          <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </td>
    </tr>
  </table>
<!-- akhir tabel 3 -->

<br>

<!-- tabel 4 (J.620100.005.02) -->
  <table class="table" border="2">
    <thead class="thead-dark">
      <tr>
        <th scope="col">
        Unit Kompetensi :  
        J.620100.005.02  Mengimplementasikan  User  Interface</th>
      </tr>
    </thead>
      <tr>
        <td>
          <p>1. Mengidentifikasi rancangan user interface</p>
          <input type="checkbox" class="Present 8" name="attedence[]" id ="8"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 8" name="attedence[]" id ="8" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>2. Melakukan implementasi rancangan user interface</p>
          <input type="checkbox" class="Present 9" name="attedence[]" id ="9"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 9" name="attedence[]" id ="9" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
  </table>
<!-- akhir tabel 4 -->

<br>

<!-- awal tabel 5 (J.620100.010.01) -->
  <table class="table" border="2">
    <thead class="thead-dark">
      <tr>
        <th scope="col">
        Unit Kompetensi :  
        J.620100.010.01 Menerapkan Perintah Eksekusi Bahasa
        Pemrograman Berbasis Teks, Grafik, dan Multimedia
        </th>
      </tr>
    </thead>
      <tr>
        <td>
          <p>1. Mengidentifikasi mekanisme running atau eksekusi source code</p>
          <input type="checkbox" class="Present 10" name="attedence[]" id ="10"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 10" name="attedence[]" id ="10" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>2. Mengeksekusi source code</p>
          <input type="checkbox" class="Present 11" name="attedence[]" id ="11"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 11" name="attedence[]" id ="11" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>3. Mengidentifikasi hasil eksekusi</p>
          <input type="checkbox" class="Present 12" name="attedence[]" id ="12"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 12" name="attedence[]" id ="12" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
  </table>
<!-- akhir tabel 5 -->

<br>

<!-- awal tabel 6 (J.620100.012.01) -->
  <table class="table" border="2">
    <thead class="thead-dark">
      <tr>
        <th scope="col">
        Unit Kompetensi :  
        J.620100.012.01 Melakukan Pengaturan Software Tools Pemrograman
        </th>
      </tr>
    </thead>
      <tr>
        <td>
          <p>1. Melakukan konfigurasi tools untuk pemrograman</p>
          <input type="checkbox" class="Present 13" name="attedence[]" id ="13"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 13" name="attedence[]" id ="13" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>2. Menggunakan tools sesuai kebutuhan pembuatan program</p>
          <input type="checkbox" class="Present 14" name="attedence[]" id ="14"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 14" name="attedence[]" id ="14" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
  </table>
<!-- akhir tabel 6 -->

<br>

<!-- awal tabel 7 (J.620100.018.02) -->
<table class="table" border="2">
    <thead class="thead-dark">
      <tr>
        <th scope="col">
        Unit Kompetensi :  
        J.620100.018.02 Mengimplementasikan Pemrograman Berorientasi Objek
        </th>
      </tr>
    </thead>
      <tr>
        <td>
          <p>1. Membuat program berorientasi objek dengan memanfaatkan class</p>
          <input type="checkbox" class="Present 15" name="attedence[]" id ="15"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 15" name="attedence[]" id ="15" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>2. Menggunakan tipe data dan control program pada metode atau operasi dari suatu kelas</p>
          <input type="checkbox" class="Present 16" name="attedence[]" id ="16"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 16" name="attedence[]" id ="16" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>3. Membuat program dengan konsep berbasis objek</p>
          <input type="checkbox" class="Present 17" name="attedence[]" id ="17"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 17" name="attedence[]" id ="17" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>4. Membuat program object oriented dengan interface dan paket</p>
          <input type="checkbox" class="Present 18" name="attedence[]" id ="18"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 18" name="attedence[]" id ="18" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>5. Mengkompilasi program</p>
          <input type="checkbox" class="Present 19" name="attedence[]" id ="19"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 19" name="attedence[]" id ="19" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
  </table>
<!-- akhir tabel 7 -->

<br>

<!-- awal tabel 8 (J.620100.020.02) -->
<table class="table" border="2">
    <thead class="thead-dark">
      <tr>
        <th scope="col">
        Unit Kompetensi :  
        J.620100.020.02 Menggunakan SQL
        </th>
      </tr>
    </thead>
      <tr>
        <td>
          <p>1. Mempersiapkan perangkat lunak aplikasi data deskripsi/SQL</p>
          <input type="checkbox" class="Present 20" name="attedence[]" id ="20"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 20" name="attedence[]" id ="20" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>2. Menggunakan fitur aplikasi SQL</p>
          <input type="checkbox" class="Present 21" name="attedence[]" id ="21"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 21" name="attedence[]" id ="21" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>3. Mengisi tabel</p>
          <input type="checkbox" class="Present 22" name="attedence[]" id ="22"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 22" name="attedence[]" id ="22" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>4. Melakukan operasi relasional</p>
          <input type="checkbox" class="Present 23" name="attedence[]" id ="23"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 23" name="attedence[]" id ="23" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>5. Membuat stored procedure</p>
          <input type="checkbox" class="Present 24" name="attedence[]" id ="24"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 24" name="attedence[]" id ="24" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>6. Membuat function</p>
          <input type="checkbox" class="Present 25" name="attedence[]" id ="25"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 25" name="attedence[]" id ="25" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>7. Membuat trigger</p>
          <input type="checkbox" class="Present 26" name="attedence[]" id ="26"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 26" name="attedence[]" id ="26" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>8. Melakukan perintah commit dan rollback</p>
          <input type="checkbox" class="Present 27" name="attedence[]" id ="27"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 27" name="attedence[]" id ="27" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
  </table>
<!-- akhir tabel 8 -->

<br>

<!-- awal tabel 9 (J.620100.023.02) -->
<table class="table" border="2">
    <thead class="thead-dark">
      <tr>
        <th scope="col">
        Unit Kompetensi :  
        J.620100.023.02  Membuat Dokumen Kode Program
        </th>
      </tr>
    </thead>
      <tr>
        <td>
          <p>1. Melakukan identifikasi kode program</p>
          <input type="checkbox" class="Present 28" name="attedence[]" id ="28"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 28" name="attedence[]" id ="28" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>2. Membuat dokumentasi modul program</p>
          <input type="checkbox" class="Present 29" name="attedence[]" id ="29"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 29" name="attedence[]" id ="29" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>3. Membuat dokumentasi fungsi, prosedur atau method program</p>
          <input type="checkbox" class="Present 30" name="attedence[]" id ="30"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 30" name="attedence[]" id ="30" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>4. Men-generate dokumentasi</p>
          <input type="checkbox" class="Present 31" name="attedence[]" id ="31"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 31" name="attedence[]" id ="31" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
  </table>
<!-- akhir tabel 9 -->

<br>

<!-- awal tabel 10 (J.620100.030.02) -->
<table class="table" border="2">
    <thead class="thead-dark">
      <tr>
        <th scope="col">
        Unit Kompetensi :  
        J.620100.030.02  Menerapkan Pemrograman Multimedia
        </th>
      </tr>
    </thead>
      <tr>
        <td>
          <p>1. Menjelaskan kebutuhan platform</p>
          <input type="checkbox" class="Present 32" name="attedence[]" id ="32"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 32" name="attedence[]" id ="32" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>2.	Mempersiapkan bahasa pengolahan multimedia</p>
          <input type="checkbox" class="Present 33" name="attedence[]" id ="33"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 33" name="attedence[]" id ="33" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>3.	Menggunakan syntax khusus multimedia</p>
          <input type="checkbox" class="Present 34" name="attedence[]" id ="34"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 34" name="attedence[]" id ="34" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>4.	Menggunakan statement</p>
          <input type="checkbox" class="Present 35" name="attedence[]" id ="35"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 35" name="attedence[]" id ="35" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>5.	Menetapkan kompatibilitas dari hardware dan software</p>
          <input type="checkbox" class="Present 36" name="attedence[]" id ="36"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 36" name="attedence[]" id ="36" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
  </table>
<!-- akhir tabel 10 -->

<br>

<!-- awal tabel 11 (J.620100.033.02) -->
<table class="table" border="2">
    <thead class="thead-dark">
      <tr>
        <th scope="col">
        Unit Kompetensi :  
        J.620100.033.02  Melaksanakan Pengujian Unit Program
        </th>
      </tr>
    </thead>
      <tr>
        <td>
          <p>1.	Menentukan kebutuhan uji coba dalam pengembangan</p>
          <input type="checkbox" class="Present 37" name="attedence[]" id ="37"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 37" name="attedence[]" id ="37" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>2.	Mempersiapkan dokumentasi uji coba</p>
          <input type="checkbox" class="Present 38" name="attedence[]" id ="38"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 38" name="attedence[]" id ="38" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>3.	Mempersiapkan data uji</p>
          <input type="checkbox" class="Present 39" name="attedence[]" id ="39"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 39" name="attedence[]" id ="39" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>4.	Melaksanakan prosedur uji coba</p>
          <input type="checkbox" class="Present 40" name="attedence[]" id ="40"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 40" name="attedence[]" id ="40" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>5.	Mengevaluasi hasil uji coba</p>
          <input type="checkbox" class="Present 41" name="attedence[]" id ="41"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 41" name="attedence[]" id ="41" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
  </table>
<!-- akhir tabel 11 -->

<br>

<!-- tabel 12 (J.620100.042.01) -->
<table class="table" border="2">
    <thead class="thead-dark">
      <tr>
        <th scope="col">
        Unit Kompetensi :  
        J.620100.042.01  Melakukan Konfigurasi Perangkat
        Lunak  Sesuai Environment (Development, Staging, Production) 
        </th>
      </tr>
    </thead>
      <tr>
        <td>
          <p>1.	Melakukan analisis keberadaan dan kebutuhan environment</p>
          <input type="checkbox" class="Present 42" name="attedence[]" id ="42"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 42" name="attedence[]" id ="42" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>2.	Melakukan konfigurasi perangkat lunak masing-masing environment</p>
          <input type="checkbox" class="Present 43" name="attedence[]" id ="43"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 43" name="attedence[]" id ="43" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
  </table>
<!-- akhir tabel 12 -->

<br>

<!-- tabel 13 (J.620100.046.01) -->
<table class="table" border="2">
    <thead class="thead-dark">
      <tr>
        <th scope="col">
        Unit Kompetensi :  
        J.620100.046.01  Melakukan Logging Aplikasi
        </th>
      </tr>
    </thead>
      <tr>
        <td>
          <p>1.	Analisis informasi yang perlu di log pada suatu aplikasi</p>
          <input type="checkbox" class="Present 44" name="attedence[]" id ="44"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 44" name="attedence[]" id ="44" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>2.	Membuat modul pembuatan log aplikasi</p>
          <input type="checkbox" class="Present 45" name="attedence[]" id ="45"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 45" name="attedence[]" id ="45" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p>3.	Membuat modul pengambilan data dan informasi log</p>
          <input type="checkbox" class="Present 46" name="attedence[]" id ="46"  value="P" required>
          <label class="layout" for="check1">K</label>
          <br>
          <input type="checkbox" class="Present 46" name="attedence[]" id ="46" value="A" required>
          <label class="layout" for="check2">BK</label>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><br>Bukti yang relevan :<br></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </td>
      </tr>
  </table>
<!-- akhir tabel 13 -->



 </tbody>

  </table></form></div></div></div>

  <br>

  <div class="text-end me-5">
  <a href="form2_3.php" type="button" class="btn btn-primary">Submit</a>
</div>

<p></p>



<script type="text/javascript">

  $('input:checkbox').click(function(){

   var id = ($(this).attr('id'));

   alert(id)

    var $inputs = $("#id")

        if($(this).is(':checked')){

            $("."+id).prop('disabled', true); // <-- disable all but checked one

             $("."+id).not(this).prop('disabled',true);

        }else{

           $inputs.prop('disabled',false); // <--

           $("."+id).prop('disabled', false);

        }

    })

</script> 
@endsection