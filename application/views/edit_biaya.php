<div class="content-wrepper container-fluid">
    <section class="content">
        <?php foreach ($biaya as $bya) { ?>
            
            <form action="<?php echo base_url().'biaya/update';?>" method="post">
                <input type="hidden" name="id_biaya" class="form-control" value="<?php echo $bya->id_biaya ?>">
                <div class="form-group">
                    <label>Angkatan</label>
                    <input type="text" name="angkatan" class="form-control" value="<?php echo $bya->angkatan ?>">
                </div>

                                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" name="id_kk" class="form-control" value="<?php echo $bya->id_kk ?>">
                </div>

                                <div class="form-group">
                    <label>Jadwal</label>
                    <input type="text" name="jadwal" class="form-control" value="<?php echo $bya->jadwal ?>">
                </div>

                <div class="form-group">
                    <label>Nominal</label>
                    <input type="text" name="nominal" class="form-control" value="<?php echo $bya->nominal ?>">
                </div>

                 <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <?php } ?>
    </section>
</div>