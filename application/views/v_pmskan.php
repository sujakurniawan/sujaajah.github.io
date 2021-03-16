<div class="conten-wrapper container-fluid">
<section class="content-header">
<h4>
Data Pemasukan
<small> Control Panel</small>
</h4>
<ol class="breadcrumb">
<li><a href=""><i class="fa fa-dashboard"></i></a></li>
<li class="active">Data Pemasukan</li>
</ol>
</section>

<section class="content">
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus">Tambah Data Pemasukan</i></button>
<table class="table">
<tr>
<th>NO</th>
<th>Kategori Keuangan</th>
<th>Nominal</th>
<th>Sumber Dana</th>
<th>Keterangan</th>
<th>Tanggal</th>

<th colspan="2">AKSI</th>
</tr>

<?php

$no = 1;
foreach ($pemasukan as $pmskan) : ?>
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $pmskan->nama_kk?></td>
<td><?php echo $pmskan->nominal_keu ?></td>
<td><?php echo $pmskan->sumber_dana ?></td>
<td><?php echo $pmskan->keterangan_pemsuk ?></td>
<td><?php echo $pmskan->tgl_keu ?></td>

<!-- <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('data/hapus/'.$pmskan ->id_keu,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td> -->
<td><?php echo anchor('pemasukan/edit_pemasukan/'.$pmskan->id_keu,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
        <form method ="post" action="<?php echo base_url().'pemasukan/tambah_aksi'?>">
        
        <div class="form-group">
        <label>Kategori Keuangan</label>
        <input type="text" name="id_kk" class="form-control">
        </div>
         <div class="form-group">
        <label>Nominal</label>
        <input type="text" name="nominal_keu" class="form-control">
        </div>
         <div class="form-group">
        <label>Sumber Dana</label>
        <input type="text" name="sumber_dana" class="form-control">
        </div>
         <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="keterangan_pemsuk" class="form-control">
        </div> 
        <div class="form-group">
        <label>Tanggal</label>
        <input type="date" name="tgl_keu" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>