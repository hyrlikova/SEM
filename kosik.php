<?php include_once "header.php" ?>

<?php
require "Product.php";
require "DBStorage.php";


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





<div class="kontainerKosik">
    <div class="obsah">
        <?php foreach ($storage->LoadAll() as $product) { ?>
            <table class="tabulkaKosik">
                <tr>
                    <th class="oramovanieKosik"><?php echo $product->getNazov() ?></th>
                    <th class="oramovanieKosik">
                        <form method="get" class="update">

                            <input class="note" id="<?php echo $product->getId() ?>" type="text" name="note" value="<?php echo $product->getNote() ?>" maxlength="100">
                            <input type="hidden"  name="id" value="<?php echo $product->getId() ?>">

                            <button type="submit" value="Submit" onclick="myFunction()" class="tlacidlo">
                                <img class="trash"
                                     src="https://www.freeiconspng.com/uploads/edit-editor-pen-pencil-write-icon-14.png"
                                     alt="pero">
                            </button>



                        </form>
                    </th>

                    <form method="post" class="remove">

                        <input type="hidden" name="id" value="<?php echo $product->getId() ?>">
                        <th class="oramovanieKosik ks">
                            <?php echo $product->getCena(), "0&#8364" ?>

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

        <br>
        <div class="spolu lavo">
            Celková suma:
        </div>
        <div class="spolu od">
            <?php $storage->Price(); ?>
        </div>

    </div>
</div>
<div class="kontainerKosikBtnObjednat">

    <div id="demo">
    <button type="button" onclick="loadDoc()" class="btnObjednat">Change Content</button>
    </div>
</div>


<script>
    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML =
                    this.responseText;
            }
        };
        xhttp.open("POST", "ajax_info", true);
        xhttp.send();
    }
</script>


<script>
    function myFunction() {
        <?php foreach ($storage->LoadAll() as $product){ ?>
        document.getElementById("<?php echo $product->getId() ?>").style.backgroundColor = "#92f895";
   <?php } ?>
    }

</script>
