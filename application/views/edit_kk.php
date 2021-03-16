<div class="content-wrepper container-fluid">
    <section class="content">
        <?php foreach ($Kategori_keu as $kk) { ?>
            
            <form action="<?php echo base_url().'kategori_keu/update';?>" method="post">
                <div class="form-group">
                    <label>Nama Kategori Keu</label>
                    <input type="hidden" name="id_kk" class="form-control" value="<?php echo $kk->id_kk ?>">
                    <input type="text" name="nama_kk" class="form-control" value="<?php echo $kk->nama_kk ?>">
                </div>

                <div class="form-group">
                    <label>Jenis Kategori Keu</label>
                    <input type="text" name="jenis_kk" class="form-control" value="<?php echo $kk->jenis_kk ?>">
                </div>

                <div class="form-group">
                    <label>Statu</label>
                    <input type="text" name="status_kk" class="form-control" value="<?php echo $kk->status_kk ?>">
                </div>
                 <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <?php } ?>
    </section>
</div>