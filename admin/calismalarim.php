<?php include_once 'include/header.php'; ?>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">


        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Çalışmaları Ekle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Başlık</label>
                    <input type="text" name="baslik" class="form-control" placeholder="Başlığı Giriniz">
                  </div>
                  <div class="form-group">
                    <label>Resim</label>
                    <input type="file" name="resim">
                  </div>
                  <div class="form-group">
                    <label>Açıklama</label>
                    <textarea name="aciklama" class="form-control" placeholder="Açıklama Giriniz"></textarea>
                  </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Ekle</button>
                </div>
              </form>
            </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <?php 
        if($_POST){
            $resimAdi = $_FILES["resim"]["name"];
            $resimYolu = "../assets/upload/".$resimAdi;

            if(move_uploaded_file($_FILES["resim"]["tmp_name"],$resimYolu)){

                $ekle = $db->prepare("INSERT INTO calismalar SET 
                                    baslik =: baslik, 
                                    resim =: resim, 
                                    aciklama =: aciklama");
                $ekle->execute([
                "baslik"   => $_POST["baslik"],
                "resim"    => $resimAdi,
                "aciklama" => $_POST["aciklama"]
                ]);
            
                if($ekle){
                    echo "ekleme başarılı";
                }
                else{
                    echo "bir hata oluştu";
                }
            }
        }
    
    ?>

<?php include_once 'include/footer.php'; ?>