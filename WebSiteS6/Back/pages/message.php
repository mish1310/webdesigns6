<?php
include("header.php");
$mess = getMessage();
?>


	<div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Message</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Sujet</th>
                                            <th scope="col">Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($result = mysqli_fetch_assoc($mess)){?>
                                        <tr>
                                            <td><?php echo $result['nom']?></td>
                                            <td><?php echo $result['mail']?></td>
                                            <td><?php echo $result['sujet']?></td>
                                            <td><?php echo $result['message']?></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<?php include("footer.php");?>