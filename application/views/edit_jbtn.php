<div class="content-wrepper container-fluid">
    <section class="content">
        <?php foreach ($Jabatan as $jbtn) { ?>
            
            <form action="<?php echo base_url().'jabatan/update';?>" method="post">
                <div class="form-group">
                    <label>Nama Jabatan</label>
                    <input type="hidden" name="id_jabatan" class="form-control" value="<?php echo $jbtn->id_jabatan ?>">
                    <input type="text" name="jabatan" class="form-control" value="<?php echo $jbtn->jabatan ?>">
                </div>

                <div class="form-group">
                    <label>Statu</label>
                    <input type="text" name="status" class="form-control" value="<?php echo $jbtn->status ?>">
                </div>
                 <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <?php } ?>
    </section>
</div>