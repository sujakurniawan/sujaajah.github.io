<div class="content-wrepper container-fluid">
    <section class="content">
        <?php foreach ($Data as $pgw) { ?>
            
            <form action="<?php echo base_url().'Data/update';?>" method="post">
                <div class="form-group">
                    <label>Nama Jabatan</label>
                    <input type="hidden" name="id_nik" class="form-control" value="<?php echo $pgw->id_nik ?>">
                    <input type="text" name="nama" class="form-control" value="<?php echo $pgw->nama ?>">
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" class="form-control" value="<?php echo $pgw->tgl_lahir ?>">
                </div>

                <div class="form-group">
                    <label>No Telpn</label>
                    <input type="text" name="no_tlp" class="form-control" value="<?php echo $pgw->no_tlp ?>">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $pgw->alamat ?>">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $pgw->email ?>">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="<?php echo $pgw->password ?>">
                </div>

                <div class="form-group">
                    <label>Statu</label>
                    <input type="text" name="status" class="form-control" value="<?php echo $pgw->status ?>">
                </div>
                 <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <?php } ?>
    </section>
</div>