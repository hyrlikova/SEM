<?php include_once "header.php" ?>

<?php
require "../CLASS/Product.php";
require "../CLASS/DBStorage.php";

session_start();


if (isset($_SESSION['user_email'])) {


//$storage = new FileStorage();
    $storage = new DBStorage();

    if (isset($_POST['id'])) {
        $storage->Remove($_POST['id']);
    }

    if ((isset($_GET['id'])) && (isset($_GET['note'])) && (!preg_match("/^[0-9]/", $_GET['note']))) {
        $storage->Update($_GET['note'], ($_GET['id']));

    } else if ((isset($_GET['id'])) && (isset($_GET['note'])) && (preg_match("/^[0-9]/", $_GET['note']))) {
        ?>
        <div class="zle" id="demo"></div>

        <script>
            function poznamkaFunction() {
                alert("Poznamka nesmie zacinat cislom!");
            }

            document.getElementById("demo").innerHTML = poznamkaFunction();
        </script>
    <?php } ?>


    <div class="obalovacZoznamu">

        <div class="zoznam">


            <?php foreach ($storage->LoadAll() as $product) { ?>
                <div class="kontainerKosik">


                    <div class="obsah">


                        <div class="oramovanieKosik"><?php echo $product->getNazov() ?></div>


                        <form method="get" class="update">
                            <div class="oramovanieKosik">

                                <input class="note" id="<?php echo $product->getId() ?>" type="text" name="note"
                                       value="<?php echo $product->getNote() ?>" maxlength="100">
                                <input type="hidden" name="id" value="<?php echo $product->getId() ?>">

                                <button type="submit" value="Submit" onclick="funUpdateSucc()" class="tlacidlo">
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

                                <button type="submit" value="Submit" class="tlacidlo">
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

                <div class="spoluSuma">
                    <?php $storage->Price(); ?>
                </div>

            </div>

        </div>
    </div>


    <div class="kontainerKosikBtnObjednat">

        <div id="demo">
            <button type="button" onclick="loadDoc()" class="btnObjednat">Objednať</button>
        </div>
    </div>


    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("POST", "../ajax_info", true);
            xhttp.send();
        }
    </script>


    <script>
        function funUpdateSucc() {
            <?php foreach ($storage->LoadAll() as $product){ ?>
            document.getElementById("<?php echo $product->getId() ?>").style.backgroundColor = "#92f895";
            <?php } ?>
        }

    </script>

<?php }  else
    header("Location: http://localhost:63342/SEM/FILE/prihlasenie.php");?>