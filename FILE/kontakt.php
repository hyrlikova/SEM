<?php include_once "header.php";
session_start();

if (isset($_SESSION['user_email'])) {

    require "../CLASS/DBStorage.php";
    require "../CLASS/Evaluation.php";


    $storage = new DBStorage();


    if (isset($_POST['dodanie'],$_POST['jedlo'],$_POST['spokojnost'])) {
        $storage->EvaluationSave(new Evaluation($_GET['id'], $_POST['dodanie'], $_POST['jedlo'],  $_POST['spokojnost'], $_SESSION['user_email']));

        echo '<script type="text/javascript">';
        echo 'window.location.href = "kontakt.php";';
        echo 'alert("Ďakujeme za Vaše hodnotenie!");';
        echo '</script>';

    }


    ?>


    <div class="kontainer">
        <div class="kontakt">
            <h2>GOOD FOOD s.r.o <br></h2>
            <img class="icon" src="https://www.freeiconspng.com/uploads/home-button-png-icon-30.png" alt="home"> Adresa:
            Borová 3345/33<br>
            <img class="icon" src="https://www.freeiconspng.com/uploads/envelope-icon-3.png" alt="envelope"> Email:
            hyrlikova@stud.uniza.sk<br>
            <img class="icon" src="https://www.freeiconspng.com/uploads/phone-icon-old-phone-telephone-icon-9.png"
                 alt="phone"> Tel.číslo: 0917083698
        </div>

        <div class="obalovac">
            <div class="mapa">
                <iframe width="311" height="261" id="gmap_canvas"
                        src="https://maps.google.com/maps?width=311&amp;height=261&amp;hl=en&amp;q=Borov%C3%A1%203345/33%20%C5%BDilina+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <script src='https://maps.google.com/maps?q=Borov%C3%A1%203345/33&t=&z=15&ie=UTF8&iwloc=&output=embed'></script>
            </div>
        </div>
    </div>

    <div class="tabulka">
        <table class="hodiny">
            <tr>
                <th colspan="2">Otváracie hodiny</th>
            </tr>
            <tr>
                <td>Pondelok</td>
                <td>10:00 - 19:00</td>
            </tr>
            <tr>
                <td>Utorok</td>
                <td>10:00 - 19:00</td>
            </tr>
            <tr>
                <td>Streda</td>
                <td>10:00 - 19:00</td>
            </tr>
            <tr>
                <td>Štvrtok</td>
                <td>10:00 - 19:00</td>
            </tr>
            <tr>
                <td>Piatok</td>
                <td>10:00 - 22:00</td>
            </tr>
            <tr>
                <td>Sobota</td>
                <td>10:00 - 22:00</td>
            </tr>
            <tr>
                <td>Nedeľa</td>
                <td class="zatvorene">Zatvorené</td>
            </tr>
        </table>
    </div>

    <div class="pata">
        <h1 class="napisteNam">NAPÍŠTE NÁM</h1>
        <p>Ak máte akékoľvek otázky, chceli by ste pochváliť naše jedlo, alebo máte nápad, ako naše služby zlepšiť,
            napíšte nám. </p>

        <div class="spokojnostZakaznikov">
            <h1 class="napisteNam">OHODONOŤTE NÁS</h1>
            <form method="post">


                <label for="email"><b>Email: <?php echo $_SESSION['user_email'] ?></b></label><br><br>

                <label><b>Spokojnosť s dodaním jedla </b></label><br>

                <input type="radio" id="dodanie" name="dodanie" value="rychlo">
                <label for="dodanie">Doručenie bolo rýchle</label>

                <input type="radio" id="dodanie" name="dodanie" value="Ok">
                <label for="dodanie">Doručenie bolo priemerné</label>

                <input type="radio" id="dodanie" name="dodanie" value="pomaly">
                <label for="dodanie">Doručenie bolo pomalé</label> <br><br>


                <label><b>Spokojnosť s jedlom</b></label><br>

                <input type="radio" id="jedlo" name="jedlo" value="Výborné">
                <label for="jedlo">Jedlo mi chutilo </label>
                <input type="radio" id="jedlo" name="jedlo" value="Ok">
                <label for="jedlo">Jedlo bolo priemerné</label>
                <input type="radio" id="jedlo" name="jedlo" value="Zle">
                <label for="jedlo">Jedlo mi nechutilo </label> <br> <br>


                <label><b>Odporučili by ste nás ? (1-určite nie , 10-určite áno )</b></label><br>

                <input type="radio" name="spokojnost" id="spokojnost" value="1">
                <label for="spokojnost">1 </label>
                <input type="radio" name="spokojnost" id="spokojnost"  value="2">
                <label for="spokojnost">2 </label>
                <input type="radio" name="spokojnost" id="spokojnost"  value="3">
                <label for="spokojnost">3 </label>
                <input type="radio" name="spokojnost" id="spokojnost"  value="4">
                <label for="spokojnost">4 </label>
                <input type="radio" name="spokojnost" id="spokojnost"  value="5">
                <label for="spokojnost">5 </label>
                <input type="radio" name="spokojnost" id="spokojnost"  value="6">
                <label for="spokojnost">6 </label>
                <input type="radio" name="spokojnost" id="spokojnost"  value="7">
                <label for="spokojnost">7 </label>
                <input type="radio" name="spokojnost" id="spokojnost"  value="8">
                <label for="spokojnost">8 </label>
                <input type="radio" name="spokojnost" id="spokojnost"  value="9">
                <label for="spokojnost">9</label>
                <input type="radio" name="spokojnost" id="spokojnost"  value="10">
                <label for="spokojnost">10 </label><br><br>


                <button class="evaluationButton" type="submit" value="Submit">Odoslať</button>
                <br>

            </form>

        </div>
    </div>

    </body>
    </html>
<?php } else
    header("Location: http://localhost:63342/SEM/FILE/prihlasenie.php"); ?>