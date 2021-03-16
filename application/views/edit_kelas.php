<div class="content-wrepper container-fluid">
    <section class="content">
        <?php foreach ($kelas as $kls) { ?>
            
            <form action="<?php echo base_url().'kelas/update';?>" method="post">
                <div class="form-group">
                    <label>Tingkat_Kelas</label>
                    <input type="hidden" name="id_kelas" class="form-control" value="<?php echo $kls->id_kelas ?>">

                    <input type="text" name="tingkat_kelas" class="form-control" value="<?php echo $kls->tingkat_kelas ?>">
                </div>

                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="<?php echo $kls->jurusan ?>">
                </div>

                <div class="form-group">
                    <label>Wali Kelas</label>
                    <input type="text" name="wali_kelas" class="form-control" value="<?php echo $kls->wali_kelas ?>">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <input type="text" name="status" class="form-control" value="<?php echo $kls->status ?>">
                </div>
                 <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <?php } ?>
    </section>
</div>