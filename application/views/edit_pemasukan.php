<div class="content-wrepper container-fluid">
    <section class="content">
        <?php foreach ($pemasukan as $pmskan) { ?>
            
            <form action="<?php echo base_url().'pemasukan/update';?>" method="post">
                <div class="form-group">
                    <label>Kategori Keuangan</label>
                    <input type="text" name="id_kk" class="form-control" value="<?php echo $pmskan->id_kk ?>">

                </div>

                <div class="form-group">
                    <label>Nominal</label>
                    <input type="text" name="nominal_keu" class="form-control" value="<?php echo $pmskan->nominal_keu ?>">
                </div>

                <div class="form-group">
                    <label>Sumber Dana</label>
                    <input type="text" name="sumber_dana" class="form-control" value="<?php echo $pmskan->sumber_dana ?>">
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan_pemsuk" class="form-control" value="<?php echo $pmskan->keterangan_pemsuk ?>">
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" name="tgl_keu" class="form-control" value="<?php echo $pmskan->tgl_keu ?>">
                </div>

                 <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <?php } ?>
    </section>
</div>