<div class="conten-wrapper container-fluid">
<section class="content-header">
<h4>
Data Biaya
<small> Control Panel</small>
</h4>
<ol class="breadcrumb">
<li><a href=""><i class="fa fa-dashboard"></i></a></li>
<li class="active">Data Biaya</li>
</ol>
</section>

<section class="content">
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus">Tambah Data Biaya</i></button>
<table class="table">
<tr>
<th>NO</th>
<th>Jabatan</th>
<th>Kategori</th>
<th>angkatan</th>
<th>nominal</th>
<th>jadwal</th>
<th colspan="2">AKSI</th>
</tr>

<?php

$no = 1;
foreach ($biaya as $bya) : ?>
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $bya->jabatan ?></td>
<td><?php echo $bya->id_kk ?></td>
<td><?php echo $bya->angkatan ?></td>
<td><?php echo $bya->nominal ?></td>
<td><?php echo $bya->jadwal ?></td>
<!-- <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('biaya/hapus/'.$bya ->id_biaya,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td> -->
<td><?php echo anchor('biaya/edit_biaya/'.$bya->id_biaya,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
        <form method ="post" action="<?php echo base_url().'biaya/tambah_aksi'?>">
        
        <div class="form-group">
        <label>Angkatan</label>
        <input type="text" name="angkatan" class="form-control">
        </div>

        <div class="form-group">
        <label>Kategori</label>
        <input type="text" name="id_kk" class="form-control">
        </div>

        <div class="form-group">
        <label>ID Biaya</label>
        <input type="text" name="id_biaya" class="form-control">
        </div>

         <div class="form-group">
        <label>ID Jabatan</label>
        <input type="text" name="jabatan" class="form-control">
        </div>
         <div class="form-group">
        <label>nominal</label>
        <input type="int" name="nominal" class="form-control">
        </div> <div class="form-group">
        <label>Jadwal</label>
        <input type="text" name="jadwal" class="form-control">

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>