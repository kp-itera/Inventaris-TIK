<section class="content">
 <div class="row">
   <div class="col-lg-100 col-xs-4">
     <!-- small box -->
     <div class="info-box">
       <span class="info-box-icon  bg-green">
         <i class="fa fa-database"></i></span>
       <div class="info-box-content">
         <span class="info-box-text">Jumlah Barang</span>
         <span class="info-box-number"><?php echo $jumlah;?></span>
       </div>
       </div>
     </div>
     <div class="col-lg-100 col-xs-4">
       <!-- small box -->
       <div class="info-box">
         <span class="info-box-icon bg-aqua">
           <i class="fa fa-check-square-o"></i></span>
         <div class="info-box-content">
           <span class="info-box-text">Jumlah Barang Bagus</span>
           <span class="info-box-number"><?php echo $bagus;?></span>
         </div>
         </div>
       </div>

       <div class="col-lg-100 col-xs-4">
         <!-- small box -->
         <div class="info-box">
           <span class="info-box-icon bg-red">
             <i class="fa fa-info"></i></span>
           <div class="info-box-content">
             <span class="info-box-text">Jumlah Barang Rusak</span>
             <span class="info-box-number"><?php echo $rusak;?></span>
           </div>
           </div>
         </div>
       </div>

<div class="row">

   <div class="col-md-12">
     <div class="box box-danger">
       <div class="box-header with-border">
           <i class="fa fa-th"></i><h3 class="box-title text-center">Banyak Barang yang Diterima</h3>
           <div class="box-tools pull-right">
             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
             </button>
           </div>
       </div>
       <div class="box-body">
         <div class="box-body chart-responsive">
           <div class="chart" id="area-chart" style="height: 250px;">
           </div>
         </div>
       </div>
     </div>
   </div>

   <div class="col-md-12">
     <div class="box box-danger">
       <div class="box-header with-border">
           <i class="fa fa-th"></i><h3 class="box-title text-center">Banyak Barang Bagus & Rusak</h3>
           <div class="box-tools pull-right">
             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
             </button>
           </div>
       </div>
       <div class="box-body">
         <div class="box-body chart-responsive">
           <div class="chart" id="donut-chart" style="height: 250px;">
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</section>
