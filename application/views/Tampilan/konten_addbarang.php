<section class="content">
 <div class="row">
   <!-- ./col -->
   <div class="col-xs-12">
    <div class="box box-warning">
       <div class="box-header">
           <i class="fa fa-paperclip" aria-hidden="true"></i>
           <h3 class="box-title text-center">Tambah Barang Baru</h3>
       </div>
       <?php foreach ($data->result() as $row ) {
         ?>
         <?php }?>
       <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
				<div class="form-group">
          <div class="form-group">
              <input type="text" name="oldfile" value="<?php base_url() ?>assets/foto_brg/<?php echo $row->foto_master;?>" hidden>
          </div>
        </div>

            <div class="form-group">
              <label for="Inputnamabrg" class="col-sm-2 control-label">Nama Barang</label>
              <div class="col-sm-4">
              <input type="text" class="form-control" id="Inputnamabrg" name="namabrg" readonly value="<?php echo $row->nama_master; ?>">
            </div>
          </div>

            <div class="form-group">
              <label for="inputMerkbrg" class="col-sm-2 control-label">Merk Barang</label>
              <div class="col-sm-4">
              <input type="text" class="form-control" id="inputMerkbrg" name="merkbrg" readonly value="<?php echo $row->merk_master; ?>">
            </div>
          </div>

        <div class="form-group">
          <label for="inputTipe" class="col-sm-2 control-label">Tipe Barang</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputMerkbrg" name="merkbrg" readonly value="<?php echo $row->nama_tipe; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="inputversi" class="col-sm-2 control-label">Versi</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputversi" name="versi" readonly value="<?php echo $row->versi_master; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="inputumur" class="col-sm-2 control-label">Umur Barang Efektif</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputUmur" name="umurbrg" readonly value="<?php echo $row->umur_master; ?> Bulan">
          </div>
        </div>

        <div class="form-group">
          <label for="inputumur" class="col-sm-2 control-label">Umur Barang Efektif</label>
          <div class="col-sm-offset-8 col-sm-4">
            <input type="text" class="form-control" id="inputUmur" name="umurbrg" placeholder="Satuan Bulan" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-10 col-sm-2">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp&nbspTambah</button>
          </div>
        </div>
      </form>
      <div class="box-body">
      </div>
      <!-- /.box-body-->
       </div>
   </div>
 </div>
   </section>