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

<?php 

    $anasayfa = $db->prepare("SELECT * FROM anasayfa WHERE id=:id");
    $anasayfa->execute(["id" => 1]);
    $row = $anasayfa->fetch(PDO::FETCH_OBJ);

?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">


        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Anasayfa Ayarları</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Yazı 1</label>
                    <textarea  name="yazi1" class="form-control"><?= $row->yazi1; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Yazı 2</label>
                    <textarea  name="yazi2" class="form-control"><?= $row->yazi2; ?></textarea>
                  </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Güncelle</button>
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
            $guncelle = $db->prepare("UPDATE anasayfa SET yazi1=:yazi1, yazi2=:yazi2 WHERE id=:id");
            $guncelle->execute([
                "yazi1" => $_POST["yazi1"],
                "yazi2" => $_POST["yazi2"],
                "id"    => 1
            ]);
            if($guncelle){
                echo "güncelleme başarılı";
                header("Refresh:0; url=anasayfa.php");
            }
            else{
                echo "bir hata oluştu";
            }
        }
    
    ?>

<?php include_once 'include/footer.php'; ?>
