<?php include("header.php");?>

<?php
$date = $_GET['date'];
$news = getPublicationParDate($date);
    
?>


<!-- Top News Start LISTE CONTENU PAR DATE-->
        <div class="top-news">
            <div class="container-fluid">
                <div class="row">
    
                    <div class="col-md-12">
                        <div class="row">
                            <?php while ($publication = mysqli_fetch_assoc($news)){?>
                                <div class="col-md-6">
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
                </div>
            </div>
        </div>
        <!-- Top News End-->

<?php include("footer.php");?>