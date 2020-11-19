<?php include_once "header.php" ?>

<?php
require "Product.php";
require "DBStorage.php";


//$storage = new FileStorage();
$storage = new DBStorage();

if (isset($_POST['id'])) {
    $storage->Remove($_POST['id']);
}

if (isset($_POST['poznamka'])) {
     $storage->redirect();}


?>





<div class="kontainerKosik">
    <div class="obsah">
        <?php foreach ($storage->LoadAll() as $product) { ?>
            <table class="tabulkaKosik">
                <tr>
                    <th class="oramovanieKosik"><?php echo $product->getTitle() ?></th>

                    <th class="oramovanieKosik"></th>

                    <form method="post" class="remove">


                        <input type="hidden" name="id" value="<?php echo $product->getId()?>">
                        <th class="oramovanieKosik"><?php echo $product->getText(), "0&#8364" ?>


                            <button type="submit" value="Submit" class="tlacidlo">
                                <img class="trash"
                                     src="https://www.freeiconspng.com/uploads/remove-icon-png-31.png"
                                     alt="trash">

                            </button>
                    </form>
                            <form method="post" class="update">

                                <input type="hidden" name="poznamka" value="<?php echo $product->getId()?>">
                                <button type="submit" value="Submit" class="tlacidlo" >
                                    <a href="poznamka.php" > <img class="trash" src="https://www.freeiconspng.com/uploads/edit-editor-pen-pencil-write-icon-14.png" alt="pero" ></a>

                                </button>
                            </form>

                        </th>


                </tr>

            </table>

        <?php } ?>


    </div>

</div>

<div class="kontainerSuma">
    <div class="suma">
        <table class="tabulkaKosik">
            <tr>
                <th class="oramovanieKosik">Celková suma</th>
                <th class="oramovanieKosik"></th>
                <th class="oramovanieKosik"><?php $storage->Price(); ?></th>
            </tr>
        </table>

    </div>
</div>

