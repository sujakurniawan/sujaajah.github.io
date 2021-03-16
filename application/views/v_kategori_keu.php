<div class="conten-wrapper container-fluid">
<section class="content-header">
<h4>
Data Kategori Keuangan
<small> Control Panel</small>
</h4>
<ol class="breadcrumb">
<li><a href=""><i class="fa fa-dashboard"></i></a></li>
<li class="active">Data Kategori Keuangan</li>
</ol>
</section>

<section class="content">
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus">Tambah Data Kategori Keuangan</i></button>
<table class="table">
<tr>
<th>NO</th>
<th>Nama Kategori Keu</th>
<th>Jenis Kategori Keu</th>
<th>Status Kategori Kau</th>
<th colspan="2">AKSI</th>
</tr>

<?php

$no = 1;
foreach ($Kategori_keu as $kk) : ?>
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $kk->nama_kk ?></td>
<td><?php echo $kk->jenis_kk ?></td>
<td><?php echo $kk->status_kk ?></td>
<!-- <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('kategori_keu/hapus/'.$kk ->id_kk,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td> -->
<td><?php echo anchor('kategori_keu/edit_kk/'.$kk->id_kk,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
</tr>

<?php endforeach; ?>
</table>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA lategori_keu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method ="post" action="<?php echo base_url().'kategori_keu/tambah_aksi'?>">

        <div class="form-group">
          <label>ID KK</label>
        <input type="text" name="id_kk" class="form-control">
        </div>

        <div class="form-group">
            <label>Nama Kategori Keu</label>
        <input type="text" name="nama_kk" class="form-control">
        </div>

        <div class="form-group">
        <label>jenis_kk</label>
        <input type="text" name="jenis_kk" class="form-control">
        </div>

        <div class="form-group">
        <label>status_kk</label>
        <input type="text" name="status_kk" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>