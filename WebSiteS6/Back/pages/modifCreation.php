<?php include("header.php");?>
<?php
  $id=$_GET['modif'];
    $news = getFiche($id);
 ?>
 <body>
 <form action="traitementCreation.php" method="POST" enctype="multipart/form-data">
    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Publication </h6>
                            <div class="form-floating mb-3">
                                <input type="text" name="titre" class="form-control" id="floatingInput"
                                    placeholder="Titre">
                                <label for="floatingInput">Titre</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" name="date" class="form-control" id="floatingInput"
                                    placeholder="Date">
                                <label for="floatingInput">Date publication</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="categorie">
                                    <option selected>Categorie</option>
                                    <?php while ($result = mysqli_fetch_assoc($category)){?>
                                    <option value="<?php echo $result['idCategorie']?>"><?php echo $result['nomCategorie']?></option>
                                    <?php }?>
                                </select>
                                <label for="floatingSelect">Les categories existantes</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="pays">
                                    <option selected>Pays</option>
                                    <?php while ($result = mysqli_fetch_assoc($pays)){?>
                                    <option value="<?php echo $result['idPays']?>"><?php echo $result['nomPays']?></option>
                                    <?php }?>
                                </select>
                                <label for="floatingSelect">Pays concernant l'article</label>
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Image </label>
                                <input class="form-control form-control-sm bg-dark" id="image" type="file" name="image">
                            </div>
                            <div class="form-floating">
                                <textarea name="resume" class="form-control" placeholder="Resume"
                                    id="floatingTextarea" style="height: 200px;"></textarea>
                                <label for="floatingTextarea">Resume</label>
                            </div>
                            <div class="form-floating">
                                <textarea name="contenu" class="form-control" placeholder="Contenu"
                                    id="floatingTextarea" style="height: 500px;"></textarea>
                                <label for="floatingTextarea">Contenu</label>
                            </div>
                   	  <input type = "submit" class="btn btn-primary" name="save" value="Save" />
                        </div>
                    </div>
                </form>
            </body>
            <?php include("footer.php");?> 