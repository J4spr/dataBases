<?php
session_start();
?>
<?php
include "connect.php";
if(isset($_POST['postcodetoevoegen'])){
    $postcode = $_POST['postcode'];
    $plaats = $_POST['plaats'];
    $sql = "INSERT INTO tblpostcode(postcode,plaats) values($postcode,'".$plaats."') ";
    if ($mysqli->query($sql)) {
        echo "postcode succesvol toegevoegd!";
    } else {
        echo "error postcode toegevoegd!" . $mysqli->error;
    }
    echo '
<table>
<form action="add.php"method="post">
<tr><td>Naam:            </td>   <td><input type="text" name="naam" value="'.$_SESSION["naam"].'">        </td></tr>
<tr><td>Voornaam:        </td>   <td><input type="text" name="voornaam" value="'.$_SESSION["voornaam"].'">    </td></tr>
<tr><td>Straat:          </td>   <td><input type="text" name="straat" value="'.$_SESSION["plaats"].'">      </td></tr>
<tr><td>Postcode:        </td>   <td><input type="text" name="postcode" value="'.$postcode.'">    </td></tr>
<tr><td colspan=2><input type="submit" value="Aanmaken" name="submit">     </td></tr>
</form>
</table>';
}
elseif (isset ($_POST['submit'])) {
    $naam = $_POST['naam'];
    $voornaam = $_POST['voornaam'];
    $straat = $_POST['straat'];
    $postcode = $_POST['postcode'];
    $_SESSION["naam"] = $naam;
    $_SESSION["voornaam"] = $voornaam;
    $_SESSION["straat"] = $straat;
    $resultaat = $mysqli->query("select * from tblpostcode where postcode =" . $postcode);
    $row = $resultaat->num_rows;
    if ($row == 1) {
    $sql = "INSERT INTO  tblgegevens SET naam = '" . $naam . "', voornaam = '" . $voornaam . "', straat ='" . $straat . "', postcode='" . $postcode . "'";
    if ($mysqli->query($sql)) {
        echo "record succesvol toegevoegd!";
    } else {
        echo "error record toegevoegd!" . $mysqli->error;
    }
    echo '<a href="index.php">ga terug naar index</a>';
    }else{
        echo '
<table>
<form method="post" action="add.php">
<tr><td>postcode:            </td>   <td><input type="text" name="postcode" value="'.$postcode.'">        </td></tr>
<tr><td>plaats:        </td>   <td><input type="text" name="plaats">    </td></tr>
<tr><td colspan=2><input type="submit" value="Aanmaken" name="postcodetoevoegen">     </td></tr>

</form>
</table>';
    }
} else {
    echo '
<h1>Tabel aanpassen</h1>
<table>
<form action="add.php"method="post">
<tr><td>Naam:            </td>   <td><input type="text" name="naam">        </td></tr>
<tr><td>Voornaam:        </td>   <td><input type="text" name="voornaam">    </td></tr>
<tr><td>Straat:          </td>   <td><input type="text" name="straat">      </td></tr>
<tr><td>Postcode:        </td>   <td><input type="text" name="postcode">    </td></tr>
<tr><td colspan=2><input type="submit" value="Aanmaken" name="submit">     </td></tr>
</form>
</table>';
}
?>