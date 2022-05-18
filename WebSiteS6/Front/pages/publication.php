<?php include("header.php");?>
<?php
    $id = $_GET['ct'];
    if($id > 0)
    {
        $news = getPublicationParCategory($id);
    }
    else {
        $news = getAllPublication(); 
    }       
    
    
?>
<!-- Top News Start-->
        <div class="top-news">
            <div class="container-fluid">
                <div class="row">
                    <!-- Voalohany -->
                    <?php while ($publication = mysqli_fetch_assoc($news)){?>
                    <div class="col-md-6 tn-left">
                        <div class="tn-img">
                            <img src="<?php echo $site_url?>assets/img/<?php echo $publication['image']?>" />
                            <div class="tn-content">
                                <div class="tn-content-inner">
                                    <a class="tn-date" href="liste.php?date=<?php echo $publication['datePublication']?>"><i class="far fa-clock"></i><?php echo $publication['datePublication']?></a>
                                    <a class="tn-title" href="fiche.php?id=<?php echo $publication['idPublication']?>"><?php echo $publication['titre']?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    
            </div>
        </div>
        <!-- Top News End-->

        

        <?php include("footer.php");?>