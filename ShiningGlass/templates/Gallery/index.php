<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork $artwork
 * @var \App\Model\Entity\Enquiry $enquiry
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
<!--        <option value="--><?php //$categories->category_id?><!--">-->
<?php //echo $categories->name?><!--</option>-->
<!---->
<!--        --><?php //} ?>
<!--        --><?php //$category_id = $_POST['category_id']?>
<!--    </select>-->
<div
    style="padding-top: 30px; background-color: #d5d8db ;font-size: 20px ;text-align: center ; padding-bottom: 30px ; font-weight: bold; width:100%;">
    The Artworks of Sam Smith
</div>
<?= $this->Flash->render() ?>
<div class="filter">

    <?= $this->Form->create(null, ['type' => 'get']) ?>
    <?= $this->Form->label('Filter Through Categories',null, ['style' => 'float:left; font-size:20px']); ?>
    <?= $this->Form->control('category_id', ['label'=>'','options' => $categories, 'class' => 'form-control','style'=>' text-align: left; width: 30%;margin-top:10px', 'empty' => '[Show all artworks]', 'value' => $this->request->getQuery('category_id', "")]); ?>
    <?= $this->Form->submit('Filter',['style'=>'margin-top: 10px;  float: left;','class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>



</div>

<div class="container">

    <div class="row" style="margin-top: 60px">


        <?php $i = 1; ?>
        <?php foreach ($results as $artwork): ?>

                <div class="card card shadow mb-4 col-sm-3">
                    <?= $this->Html->image($artwork->image, ['class' => 'card-img-top', 'width' => '400px', 'height' => '250px']) ?>
                    <div class="card-body">
                        <h5 class="card-title"><?= h($artwork->name) ?></h5>
                        <p class="card-text">$<?= h($artwork->price) ?></p>
                        <!--                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Read-->
                        <!--                        More</a>-->
                        <button type="button" class="btn btn-primary " data-bs-toggle="modal"
                                data-bs-target="#myModal-<?php echo $i; // Displaying the increment ?>">
                            View More
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal-<?php echo $i; // Displaying the increment ?>" tabindex="-1"
                             role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-xl modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLongTitle"><?= h($artwork->name) ?></h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row align-items-center">
                                            <div
                                                class="col"><?= $this->Html->image($artwork->image, ['style' => 'max-height: 900px; max-width: 400px']) ?>
                                                <div style="max-width: 900px; margin-top: 15px">
                                                    <?= $this->Html->image($artwork->image2, ['style' => 'max-height: 150px; max-width: 150px']) ?>
                                                    <?= $this->Html->image($artwork->image3, ['style' => 'max-height: 150px; max-width: 150px']) ?>
                                                    <?= $this->Html->image($artwork->image4, ['style' => 'max-height: 150px; max-width: 150px']) ?>
                                                    <?= $this->Html->image($artwork->image5, ['style' => 'max-height: 150px; max-width: 150px']) ?>
                                                </div>
                                            </div>


                                            <div class="col">
                                                <h1 class="font-weight-light"><?= h($artwork->name) ?></h1>
                                                <h4>$<?= h($artwork->price) ?></h4>
                                                <hr>
                                                <!--                                            <br>-->
                                                <p style="text-align: left"><?= h($artwork->descriptions) ?></p>
                                                <hr>
                                                <!--                                            <br>-->
                                                <p style="text-align: left">Size: <?= h($artwork->size) ?> Cm Width and
                                                    Height<br>
                                                    Item Weight: <?= h($artwork->weight) ?> Kg</p>
                                                <hr>
                                                <br>


                                                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    Open Order Form
                                                </a>



                                                    <?= $this->Form->create(null, ['id' => "form-$i", 'url' => ['controller' => 'Enquiries','action' => 'add']]); ?>
                                                <div class="collapse" id="collapseExample">
                                                    <div class="card card-body">
                                                        <fieldset>
                                                            <legend><?= __('Send new enquiry') ?></legend>
                                                            <?php
                                                            echo $this->Form->label('Your full name',null, ['style' => 'float:left;margin-bottom:10px;margin-top:10px']);
                                                            echo $this->Form->control('full_name', ['label' => '', 'class' => 'form-control']);
                                                            echo $this->Form->label('Your email address',null, ['style' => 'float:left;margin-bottom:10px;margin-top:10px']);
                                                            echo $this->Form->control('email', ['label' => '', 'class' => 'form-control']);
                                                            echo $this->Form->label('Any enquiries',null, ['style' => 'float:left;margin-bottom:10px;margin-top:10px']);
                                                            echo $this->Form->control('body', ['label' => '', 'rows' => 5, 'class' => 'form-control']);
                                                            ?>
                                                        </fieldset>
                                                        <br>
                                                        <?= $this->Form->button(__('Send enquiry'), ['class' => 'btn btn-success']) ?>
                                                        <?= $this->Form->end() ?>
                                                    </div>
                                                </div>


<!--                                                    <div class="form-row">-->
<!--                                                        <div class="form-group">-->
<!--                                                            <label for="full_name">Full name</label>-->
<!--                                                            <input class="form-control" id="full_name"-->
<!--                                                                   placeholder="Full Name">-->
<!--                                                        </div>-->
<!--                                                        <div class="form-group">-->
<!--                                                            <label for="email">Email</label>-->
<!--                                                            <input type="email" class="form-control" id="email"-->
<!--                                                                   placeholder="Email">-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="form-group">-->
<!--                                                        <label for="body">Address</label>-->
<!--                                                        <input type ="textarea" class="form-control" id="body"-->
<!--                                                               placeholder="Address">-->
<!--                                                    </div>-->
<!--                                                    <br>-->
<!--                                                    <button type="submit" class="btn btn-success" onclick="myFunction()">Submit Order Details</button>-->

<!--                                                </form>-->
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

<script>
    function myFunction() {
        confirm("Form uploaded! A Shinning Glass staff will contact you soon.");
    }
</script>
</body>
</html>

