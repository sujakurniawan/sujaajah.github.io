<div class="conten-wrapper container-fluid">
<section class="content-header">
<h4>
Data Pegawai
<small> Control Panel</small>
</h4>
<ol class="breadcrumb">
<li><a href=""><i class="fa fa-dashboard"></i></a></li>
<li class="active">Data Pegawai</li>
</ol>
</section>

<section class="content">
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus">Tambah Data Pegawai</i></button>
<table class="table">
<tr>
<th>NO</th>
<th>nama</th>
<th>Jabatan</th>
<th>Tanggal Lahir</th>
<th>No Telpn</th>
<th>Alamat</th>
<th>Email</th>
<th>Password</th>
<th>Status</th>
<th colspan="2">AKSI</th>
</tr>

<?php

$no = 1;
foreach ($pegawai as $pgw) : ?>
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $pgw->nama ?></td>
<td><?php echo $pgw->jabatan ?></td>
<td><?php echo $pgw->tgl_lahir ?></td>
<td><?php echo $pgw->no_tlp ?></td>
<td><?php echo $pgw->alamat ?></td>
<td><?php echo $pgw->email ?></td>
<td><?php echo $pgw->password ?></td>
<td><?php echo $pgw->status ?></td>
<!-- <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('data/hapus/'.$pgw ->id_nik,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td> -->
<td><?php echo anchor('data/edit/'.$pgw->id_nik,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
        <form method ="post" action="<?php echo base_url().'data/tambah_aksi'?>">
        
        <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
        </div>
         <div class="form-group">
        <label>ID Jabatan</label>
        <input type="text" name="id_jabatan" class="form-control">
        </div>
         <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control">
        </div> <div class="form-group">
        <label>No Telpon</label>
        <input type="text" name="no_tlp" class="form-control">
        </div> <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control">
        </div> <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
        </div>

        <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" class="form-control">
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