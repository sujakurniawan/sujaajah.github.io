<div class="content-wrepper container-fluid">
    <section class="content">
        <?php foreach ($siswa as $swa) { ?>
            
            <form action="<?php echo base_url().'siswa/update';?>" method="post">
                <div class="form-group">
        <label>Nis</label>
        <input type="hidden" name="id_siswa" class="form-control" value="<?php echo $swa->id_siswa ?>">
        <input type="text" name="nis" class="form-control"  value="<?php echo $swa->nis ?>">
        </div>
         <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control"  value="<?php echo $swa->nama ?>">
        </div>
         <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control"  value="<?php echo $swa->tgl_lahir ?>">

        <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control"  value="<?php echo $swa->alamat ?>">

        </div> <div class="form-group">
        <label>No Telpon</label>
        <input type="text" name="no_tlp" class="form-control"  value="<?php echo $swa->no_tlp ?>">

        </div> <div class="form-group">
        <label>Jurusan</label>
        <input type="text" name="jurusan" class="form-control" value="<?php echo $swa->no_tlp ?>">

        </div> <div class="form-group">
        <label>Agama</label>
        <input type="text" name="agama" class="form-control"  value="<?php echo $swa->agama ?>">
        </div>

        <div class="form-group">
        <label>Jenis Kelamin</label>
        <input type="text" name="jk" class="form-control"  value="<?php echo $swa->jk ?>">
        </div>

        <div class="form-group">
        <label>Angkatan</label>
        <input type="text" name="angkatan" class="form-control"  value="<?php echo $swa->angkatan ?>">
        </div>

        <div class="form-group">
        <label>Status</label>
        <input type="text" name="status" class="form-control" value="<?php echo $swa->status ?>">
        </div>
                 <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <?php } ?>
    </section>
</div>