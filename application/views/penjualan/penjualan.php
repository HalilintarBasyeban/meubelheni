<html>

<head>
 <title>Rekap Penjualan - Super Admin || Mebel Heni</title>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/superadmin_style.css">
 <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/dataTabless.bootstrap.css">
 <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/metisMenu.min.css">
 <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:400,700'>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <script src="<?=base_url();?>assets/js/metisMenu/metisMenu.min.js"></script>
 <script src="<?=base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
 <script src="<?=base_url();?>assets/js/dataTables/dataTables.bootstrap.js"></script>
 <script>
  $(document).ready(function(){
    $('#dataTables-example').dataTable();
  });
 </script>

 <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico">
</head>
<body>
  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        Daftar Penjualan Barang<
      </div>

      <div class="panel-body">
        <?php if( !empty($barang_keluar) ) { ?>
          <table class= "table table-hover table-responsive" id="dataTables-example">
            <thead>
             <tr>
              <td><strong>Nama Barang</strong></td>
              <td><strong>Jenis</strong></td>
              <td><strong>Tanggal Masuk</strong></td>
              <td><strong>Tanggal Keluar</strong></td>
              <td><strong>Harga</strong></td>
              <?php if($this->ion_auth->is_admin()){?>
                <td><strong>Laba</strong></td>
                <?php
              } ?>

              <td><strong>Keterangan</strong></td>
            </tr>
          </thead>

          <?php foreach($barang_keluar as $bk):?>
          <tr>
           <td><?php echo $bk->nama_barang;?></td>
           <td><?php echo $bk->jenis_barang;?></td>
           <td><?php echo $bk->tgl_masuk;?></td>
           <td><?php echo $bk->tgl_keluar;?></td>
           <td><?php echo $bk->harga;?></td>
           <?php if($this->ion_auth->is_admin()){?>
             <td><?php echo $bk->laba;?></td>
             <?php } ?>
             <td><?php echo $bk->keterangan;?></td>
           </tr>
         <?php endforeach;
       }else{?>
         <div class="alert alert-warning"> Data kosong! </div>
         <?php
       }
       ?>
        </table>
      </div>
    </div>
  </div>

</body>
</html>
