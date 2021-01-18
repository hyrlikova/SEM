

<?php include_once "header.php";?>


<?php
session_start();

if (isset($_SESSION['user_email'])) {

    require "../CLASS/DBStorage.php";
    require "../CLASS/Evaluation.php";


    $storage = new DBStorage();

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

            <div id="hodnotenie">


                <label><b>Email: <?php echo $_SESSION['user_email'] ?></b></label><br><br>

                <label><b>Spokojnosť s dodaním jedla </b></label><br>

                <input type="radio" id="dodanie1" name="dodanie" value="rychlo" required>
                <label for="dodanie1">Doručenie bolo rýchle</label><br>

                <input type="radio" id="dodanie2" name="dodanie" value="Ok">
                <label for="dodanie2">Doručenie bolo priemerné</label><br>

                <input type="radio" id="dodanie3" name="dodanie" value="pomaly">
                <label for="dodanie3">Doručenie bolo pomalé</label> <br><br>


                <label><b>Spokojnosť s jedlom</b></label><br>

                <input type="radio" id="jedlo1" name="jedlo" value="Výborné" required>
                <label for="jedlo1">Jedlo mi chutilo </label><br>
                <input type="radio" id="jedlo2" name="jedlo" value="Ok">
                <label for="jedlo2">Jedlo bolo priemerné</label><br>
                <input type="radio" id="jedlo3" name="jedlo" value="Zle">
                <label for="jedlo3">Jedlo mi nechutilo </label> <br> <br>


                <label><b>Odporučili by ste nás ? (1-určite nie , 10-určite áno )</b></label><br>

                <input type="radio" name="spokojnost" id="spokojnost1" value="1" required>
                <label for="spokojnost1">1 </label>
                <input type="radio" name="spokojnost" id="spokojnost2" value="2">
                <label for="spokojnost2">2 </label>
                <input type="radio" name="spokojnost" id="spokojnost3" value="3">
                <label for="spokojnost3">3 </label>
                <input type="radio" name="spokojnost" id="spokojnost4" value="4">
                <label for="spokojnost4">4 </label>
                <input type="radio" name="spokojnost" id="spokojnost5" value="5">
                <label for="spokojnost5">5 </label>
                <input type="radio" name="spokojnost" id="spokojnost6" value="6">
                <label for="spokojnost6">6 </label>
                <input type="radio" name="spokojnost" id="spokojnost7" value="7">
                <label for="spokojnost7">7 </label>
                <input type="radio" name="spokojnost" id="spokojnost8" value="8">
                <label for="spokojnost8">8 </label>
                <input type="radio" name="spokojnost" id="spokojnost9" value="9">
                <label for="spokojnost9">9</label>
                <input type="radio" name="spokojnost" id="spokojnost10" value="10">
                <label for="spokojnost10">10 </label><br><br>



                <input id="submit" type="button" value="Ohodnotiť" class="evaluationButton">

<!--                <button class="evaluationButton" type="submit" onclick="formFun()" value="Submit">Odoslať</button>-->
                <br>

            </div>

        </div>
    </div>


    </body>
    </html>

<?php } else
    header("Location: http://localhost:63342/SEM/FILE/prihlasenie.php"); ?>