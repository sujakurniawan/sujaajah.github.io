<div class="content-wrepper container-fluid">
    <section class="content">
        <?php foreach ($notif as $notif) { ?>
            
            <form action="<?php echo base_url().'notif/update';?>" method="post">
                 <div class="form-group">
                 <label>Waktu Notif</label>
                 <input type="hidden" name="id_notif" class="form-control" value="<?php echo $notif->id_notif ?>">
                <input type="text" name="waktu_notif" class="form-control" value="<?php echo $notif->waktu_notif ?>">
                </div>
                <div class="form-group">
                <label>Keterangan Notif</label>
                <input type="text" name="keterangan_notif" class="form-control" value="<?php echo $notif->keterangan_notif ?>">
                </div>
                 <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <?php } ?>
    </section>
</div>