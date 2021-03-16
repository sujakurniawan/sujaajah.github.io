<div class="conten-wrapper container-fluid">
<section class="content-header">
<h4>
Data Notif
<small> Control Panel</small>
</h4>
<ol class="breadcrumb">
<li><a href=""><i class="fa fa-dashboard"></i></a></li>
<li class="active">Data Notif</li>
</ol>
</section>

<section class="content">
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus">Tambah Data Notif</i></button>
<table class="table">
<tr>
<th>NO</th>
<th>Waktu Notif</th>
<th>Keterangan Notif</th>
<th>Nama notifikasi</th>
<th colspan="2">AKSI</th>
</tr>

<?php

$no = 1;
foreach ($notif AS $notif) : ?>
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $notif->nama_kk ?></td>
<td><?php echo $notif->waktu_notif ?></td>
<td><?php echo $notif->keterangan_notif ?></td>
<!-- <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('notif/hapus/'.$notif ->id_notif,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td> -->
<td><?php echo anchor('notif/edit_notif/'.$notif->id_notif,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
</tr>

<?php endforeach; ?>
</table>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA Notif</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method ="post" action="<?php echo base_url().'notif/tambah_aksi'?>">

        <div class="form-group">
        <label>ID Notif</label>
        <input type="text" name="id_notif" class="form-control">
        </div>

          <div class="form-group">
        <label>ID KK</label>
        <input type="hidden" name="id_kk" class="form-control">
        <input type="text" name="nama_kk" class="form-control">
        </div>
        
        <div class="form-group">
        <label>Waktu Notif</label>
        <input type="text" name="waktu_notif" class="form-control">
        </div>
        <div class="form-group">
        <label>Keterangan Notif</label>
        <input type="text" name="keterangan_notif" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>