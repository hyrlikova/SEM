<?php include_once "header.php" ?>


<?php
require "../CLASS/Product.php";
require "../CLASS/DBStorage.php";


session_start();


if (isset($_SESSION['user_email'])) {

    $storage = new DBStorage();

    if ((isset($_GET['id'])) && (isset($_GET['note'])) && (!preg_match("/^[0-9]/", $_GET['note']))) {
        $storage->UpdateNoteInCart($_GET['note'], ($_GET['id']));

    } else if ((isset($_GET['id'])) && (isset($_GET['note'])) && (preg_match("/^[0-9]/", $_GET['note']))) {
        echo '<script type="text/javascript">';
        echo 'alert("Poznámka nesmie začínať číslom!");';
        echo '</script>';
    } ?>


    <div class="obalovacZoznamu">

        <div class="zoznam" id="zoznam">

            <?php foreach ($storage->LoadAllProductsInCart($_SESSION['user_email']) as $product) { ?>

                <div class="kontainerKosik" id="n<?php echo $product->getId() ?>">


                    <div class="obsah">

                        <div class="oramovanieKosik"><?php echo $product->getNazov() ?></div>

                        <form method="get" class="update">
                            <div class="oramovanieKosik">

                                <input class="note" id="<?php echo $product->getId() ?>" type="text" name="note"
                                       value="<?php echo $product->getNote() ?>" maxlength="100"
                                       placeholder="Vložte poznámku...">
                                <input type="hidden" name="id" value="<?php echo $product->getId() ?>">


                                <button type="submit" value="Submit" class="tlacidloPero">

                                    <img class="trash"
                                         src="https://www.freeiconspng.com/uploads/edit-editor-pen-pencil-write-icon-14.png"
                                         alt="pero">
                                </button>
                            </div>
                        </form>


                        <form method="post" class="remove">

                            <input type="hidden" name="id" value="<?php echo $product->getId() ?>">

                            <div class="oramovanieKosik ks">
                                <?php echo $product->getCena(), "0&#8364;" ?>

                                <button type="button" value="Submit" class="tlacidloTrash bin"
                                        id="bin<?php echo $product->getId() ?>" onclick="removeFromCart(bin<?php echo $product->getId() ?>);"
                                        data-id-type="<?php echo $product->getId() ?>">
                                    <img class="trash"
                                         src="https://www.freeiconspng.com/uploads/remove-icon-png-31.png"
                                         alt="trash">
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php } ?>


            <div class="obalovacSpolu">

                <div class="spoluSuma">
                    Celková suma:
                </div>

                <div class="spoluSuma">
                </div>

                <div class="spoluSuma" id="suma">
                    <?php
                    echo $storage->CountCartPrice($_SESSION['user_email']);
                    ?>
                </div>
            </div>
        </div>
    </div>


    <script>

    </script>

    </body>
    </html>

<?php } else
    header("Location: http://localhost:63342/SEM/FILE/prihlasenie.php"); ?>

