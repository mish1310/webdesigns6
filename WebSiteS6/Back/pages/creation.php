<?php
include("header.php");
$category =  getAllCategory();
$pays = getAllPays();
$publication = getAllPublication();
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
<!-- Liste des contenus  -->
				<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Salse</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Pays</th>
                                    <th scope="col">Categorie</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Resume</th>
                                    <th scope="col">Contenu</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php while ($result = mysqli_fetch_assoc($publication)){?>
                                <tr>
                                    <td><?php echo $result['idPays']?></td>
                                    <td><?php echo $result['idCategorie']?></td>
                                    <td><?php echo $result['titre']?></td>
                                    <td><?php echo $result['resume']?>e</td>
                                    <td><?php echo $result['contenu']?></td>
                                    <td><?php echo $result['datePublication']?></td>
                                    <td><a class="btn btn-sm btn-danger" href="traitementCreation.php?suppr=<?php echo $result['idPublication']?>">Supprimer</a></td><!-- 
                                    <td><a class="btn btn-sm btn-secondary" href="modifCreation.php?modif=<?php echo $result['idPublication']?>">Modifier</a></td> -->
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
            <a class="btn btn-sm btn-secondary" href="message.php">Message</a>
</body>
<?php include("footer.php");?> 