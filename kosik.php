<?php include_once "header.php" ?>

<?php
require "Product.php";
require "DBStorage.php";
require "IStorage.php";
require "FileStorage.php";


//$storage = new FileStorage();
$storage = new DBStorage();

?>


<div class="kontainerKosik">
    <div class="obsah">

        <?php foreach ($storage->LoadAll() as $product) { ?>
            <table class="tabulkaKosik">
                <tr>
                    <th class="oramovanieKosik"><?php echo $product->getTitle() ?></th>
                    <th class="oramovanieKosik"></th>
                    <form method="post" class="remove">
                        <th class="oramovanieKosik"><?php echo $product->getText(), "0&#8364" ?>

                            <button type="submit" value="Submit" class="tlacidlo">
                                <img class="trash"
                                     src="https://www.freeiconspng.com/uploads/remove-icon-png-31.png"
                                     alt="trash">
                            </button>

                        </th>
                    </form>
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

