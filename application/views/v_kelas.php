<div class="content-wrapper container-fluid ">
<section class="content-header">
<h4>
Data Kelas
<small> Control Panel</small>
</h4>
<ol class="breadcrumb">
<li><a href=""><i class="fa fa-dashboard"></i></a></li>
<li class="active">Data Kelas</li>
</ol>
</section>

<section class="content">
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus">Tambah Data Kelas</i></button>
<table class="table">
<tr>
<th>NO</th>
<th>Kelas</th>
<th>Jurusan</th>
<th>Wali Kelas</th>
<th>Status</th>
<th colspan="2">AKSI</th>
</tr>

<?php

$no = 1;
foreach ($kelas as $kls) : ?>
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $kls->tingkat_kelas ?></td>
<td><?php echo $kls->jurusan ?></td>
<td><?php echo $kls->wali_kelas ?></td>
<td><?php echo $kls->status ?></td>
<td><?php echo anchor('kelas/edit_kelas/'.$kls->id_kelas,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
</tr>

<?php endforeach; ?>
</table>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA JABATAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method ="post" action="<?php echo base_url().'kelas/tambah_aksi'?>">
        
        <div class="form-group">
        <label>Tingkat Kelas</label>
        <input type="text" name="tingkat_kelas" class="form-control">
        </div>

        <div class="form-group">
        <label>Jurusan</label>
        <input type="text" name="jurusan" class="form-control">
        </div>

        <div class="form-group">
        <label>Wali Kelas</label>
        <input type="text" name="wali_kelas" class="form-control">
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