<div class="conten-wrapper container-fluid">
<section class="content-header">
<h4>
Data Siswa
<small> Control Panel</small>
</h4>
<ol class="breadcrumb">
<li><a href=""><i class="fa fa-dashboard"></i></a></li>
<li class="active">Data Siswa</li>
</ol>
</section>

<section class="content">
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus">Tambah Data Siswa</i></button>
<table class="table">
<tr>
<th>NO</th>
<th>Nis</th>
<th>Nama</th>
<th>Kelas</th>
<th>Tanggal Lahir</th>
<th>Alamat</th>
<th>No Telpn</th>
<th>Jurusan</th>
<th>Agama</th>
<th>Jenis Kelamin</th>
<th>Angkatan</th>
<th>Status</th>
<th colspan="2">AKSI</th>
</tr>

<?php

$no = 1;
foreach ($siswa as $swa) : ?>
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $swa->nis ?></td>
<td><?php echo $swa->nama ?></td>
<td><?php echo $swa->tingkat_kelas ?></td>
<td><?php echo $swa->tgl_lahir ?></td>
<td><?php echo $swa->alamat ?></td>
<td><?php echo $swa->no_tlp ?></td>
<td><?php echo $swa->jurusan ?></td>
<td><?php echo $swa->agama ?></td>
<td><?php echo $swa->jk ?></td>
<td><?php echo $swa->angkatan ?></td>
<td><?php echo $swa->status ?></td>
<td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('siswa/hapus/'.$swa ->id_siswa,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
<td><?php echo anchor('siswa/edit_siswa/'.$swa->id_siswa,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
</tr>

<?php endforeach; ?>
</table>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA Pegawai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method ="post" action="<?php echo base_url().'siswa/tambah_aksi'?>">
        
        <div class="form-group">
        <label>Nis</label>
        <input type="text" name="nis" class="form-control">
        </div>

         <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
        </div>

            <div class="form-group">
          <label>ID Kelas</label>
        <input type="text" name="id_kelas" class="form-control">
        </div>

         <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control">
        </div>

        <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control">
        </div>

         <div class="form-group">
        <label>No Telpon</label>
        <input type="text" name="no_tlp" class="form-control">
        </div> 

        <div class="form-group">
        <label>Jurusan</label>
        <input type="text" name="jurusan" class="form-control">
        </div>

         <div class="form-group">
        <label>Agama</label>
        <input type="text" name="agama" class="form-control">
        </div>

        <div class="form-group">
        <label>Jenis Kelamin</label>
        <input type="text" name="jk" class="form-control">
        </div>

        <div class="form-group">
        <label>Angkatan</label>
        <input type="text" name="angkatan" class="form-control">
        </div>

        <div class="form-group">
        <label>Status</label>
        <input type="text" name="status" class="form-control">
        </div>

        

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>