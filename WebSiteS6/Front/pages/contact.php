<?php include("header.php");?>

 <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="form">
                            <form action="traitementContact.php" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="nom" placeholder="Votre nom"  />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" name="mail" placeholder="Votre adresse mail " />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="sujet" placeholder="Sujet" onkeyup="javascript:MaxLengthTextarea(this, 200);" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" onkeyup="javascript:MaxLengthTextarea(this, 1000);" placeholder="Message"></textarea>
                                </div>
                                <div><button class="btn" type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                 
            </div>
        </div>
        <!-- Contact End -->

<?php include("footer.php");?>