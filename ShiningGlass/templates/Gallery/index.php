<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork $artwork
 * @var \Cake\Collection\CollectionInterface|string[] $categories
 *  * @var \App\Model\Entity\Artwork[]|\Cake\Collection\CollectionInterface $artworks

 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        form {
            padding: 15px;
            background: #fff;
            display: none;
        }
    </style>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Blog</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Core theme CSS (includes Bootstrap)-->

    <?= $this->Html->css('styles.css') ?>
</head>
<body id="page-top">
<!-- Navigation-->
<!--    <select style="width: 250px;margin-top: 10px" id="category_id" name="category_id">-->
<!---->
<!--        <option > --Select a category to filter--</option>-->
<!--        --><?php //foreach ($result as $categories) { ?>
<!--        <option value="--><?php //$categories->category_id?><!--">--><?php //echo $categories->name?><!--</option>-->
<!---->
<!--        --><?php //} ?>
<!--        --><?php //$category_id = $_POST['category_id']?>
<!--    </select>-->
<div
    style ="padding-top: 30px; background-color: #d5d8db ;font-size: 20px ;text-align: center ; padding-bottom: 30px ; font-weight: bold; width:100%;"> The Artworks of Sam Smith
</div>
 <div class="drop">


     <?= $this->Form->create(null,['type'=>'get'])?>
     <?= $this->Form->control('categories_id', ['options' => $categories, 'class' => 'form-control']);;?>
     <?= $this->Form->submit('Filter')?>
     <?= $this->Form->end()?>


 </div>

<div class="container">
    <div class="row" style="margin-top: 60px">
        <?php $i = 1; ?>
        <?php foreach ($results as $artwork): ?>
        <div class="col">
            <div class="card card shadow mb-4">
                <?= $this->Html->image($artwork->image, ['class' => 'card-img-top', 'width' => '400px', 'height' => '250px']) ?>
                <div class="card-body" >
                    <h5 class="card-title"><?= h($artwork->name) ?></h5>
                    <p class="card-text">$<?= h($artwork->price) ?></p>
                    <!--                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Read-->
                    <!--                        More</a>-->
                    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#myModal-<?php echo $i; // Displaying the increment ?>">
                        View More
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal-<?php echo $i; // Displaying the increment ?>" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-xl modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLongTitle"><?= h($artwork->name) ?></h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row gx-4 gx-lg-5 align-items-center my-5">
                                        <div class="col-lg-7"><?= $this->Html->image($artwork->image, ['style' => 'max-height: 900px; max-width: 400px']) ?>
                                            <div style="max-width: 900px; margin-top: 15px";>
                                                <?= $this->Html->image($artwork->image2, ['style' => 'max-height: 150px; max-width: 150px']) ?>
                                                <?= $this->Html->image($artwork->image3, ['style' => 'max-height: 150px; max-width: 150px']) ?>
                                                <?= $this->Html->image($artwork->image4, ['style' => 'max-height: 150px; max-width: 150px']) ?>
                                                <?= $this->Html->image($artwork->image5, ['style' => 'max-height: 150px; max-width: 150px']) ?>
                                        </div>
                                        </div>


                                        <div class="col-lg-5">
                                            <h1 class="font-weight-light"><?= h($artwork->name) ?></h1>
                                            <h4>$<?= h($artwork->price) ?></h4>
                                            <hr>
<!--                                            <br>-->
                                            <p style="text-align: left"><?= h($artwork->descriptions) ?></p>
                                            <hr>
<!--                                            <br>-->
                                            <p style="text-align: left">Size: <?= h($artwork->size) ?> Cm Width and Height<br>
                                                Item Weight: <?= h($artwork->weight) ?> Kg</p>
                                            <hr>
                                            <br>

                                            <script>
                                                $(document).ready(function() {
                                                    $("#formButton-<?php echo $i; // Displaying the increment ?>").click(function(){
                                                        $("#form-<?php echo $i; // Displaying the increment ?>").toggle();
                                                    });
                                                });
                                            </script>
                                            <button type="button" id="formButton-<?php echo $i; // Displaying the increment ?>">Open Order Form</button>

                                            <form id="form-<?php echo $i; // Displaying the increment ?>">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputEmail4">Email</label>
                                                            <input class="form-control" id="inputEmail4" placeholder="Email">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="inputPassword4">Password</label>
                                                            <input class="form-control" id="inputPassword4" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress">Address</label>
                                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress2">Address 2</label>
                                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputCity">City</label>
                                                            <input type="text" class="form-control" id="inputCity">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="inputState">State</label>
                                                            <select id="inputState" class="form-control">
                                                                <option selected>Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="inputZip">Zip</label>
                                                            <input type="text" class="form-control" id="inputZip">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                                            <label class="form-check-label" for="gridCheck">
                                                                Check me out
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $i++; ?>

        <?php endforeach; ?>
    </div>
</div>
</div>
<br>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>

