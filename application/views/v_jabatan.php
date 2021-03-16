<div class="conten-wrapper container-fluid">
<section class="content-header">
<h4>
Data Jabatan
<small> Control Panel</small>
</h4>
<ol class="breadcrumb">
<li><a href=""><i class="fa fa-dashboard"></i></a></li>
<li class="active">Data Jabatan</li>
</ol>
</section>

<section class="content">
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus">Tambah Data Jabatan</i></button>
<table class="table">
<tr>
<th>NO</th>
<th>Jabatan</th>
<th>Status</th>
<th colspan="2">AKSI</th>
</tr>

<?php

$no = 1;
foreach ($jabatan AS $jbtn) : ?>
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $jbtn->jabatan ?></td>
<td><?php echo $jbtn->status ?></td>
<!-- <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('jabatan/hapus/'.$jbtn ->id_jabatan,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td> -->
<td><?php echo anchor('jabatan/edit/'.$jbtn->id_jabatan,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
        <form method ="post" action="<?php echo base_url().'jabatan/tambah_aksi'?>">

          <div class="form-group">
        <label>ID Jabatan</label>
        <input type="text" name="id_jabatan" class="form-control">
        </div>

        
        <div class="form-group">
        <label>Jabatan</label>
        <input type="text" name="jabatan" class="form-control">
        </div>
        <div class="form-group">
        <label for="status">Status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" value="Aktif">
                            <label class="form-check-label" for="status">
                                Aktif
                            </label>
        </div>

         <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" value="Tidak Aktif">
                            <label class="form-check-label" for="status">
                                Tidak Aktif
                            </label>
                        </div>
                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>