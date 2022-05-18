 
<?php include("header.php");?>
<?php
  $id=$_GET['id'];
    $news = getFiche($id);
 ?>
 <?php while ($fiche = mysqli_fetch_assoc($news)) {?>
 <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Principal</a></li>
                    <li class="breadcrumb-item"><a href="#">Fiche</a></li>
                    <li class="breadcrumb-item active"><?php echo $fiche['titre']?></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        
        <!-- Single News Start-->
        
        <div class="single-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="sn-img">
                            <img src="<?php echo $site_url?>assets/img/<?php echo $fiche['image']?>" />
                        </div>
                        <div class="sn-content">
                            <a class="sn-title" href=""><?php echo $fiche['titre']?></a>
                            <a class="sn-date" href=""><i class="far fa-clock"></i><?php echo $fiche['datePublication']?></a>
                            <p>
                                <?php echo $fiche['resume']?>
                            </p>
                            <p>
                                <?php echo $fiche['contenu']?>
                            </p>
                        </div>
                    </div>

                    
            </div>
        </div>
    </div>
<?php }?>
        <!-- Single News End-->

        <?php include("footer.php");?>