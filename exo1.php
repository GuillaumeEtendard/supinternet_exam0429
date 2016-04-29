<?php

class Jeu
{
    private $playerOne = "";
    private $playerTwo = "";
    private $TurnPlayerOne = 1;
    private $TurnPlayerTwo = 1;

    public function __construct($playerOne, $playerTwo)
    {
        $this->joueur1 = $playerOne;
        $this->joueur2 = $playerTwo;
    }

    public function turn($tab, $turn1, $turn2)
    {
        if (!isset($_POST['choice']) || empty($_POST['choice'])) {
            echo "Sélectionner 1 à 3 allumettes";
        } else {
            foreach ($_POST as $i) {
                $choiceAllumettes = $i;
            }

            $tempTab = [];
            array_push($tempTab, $choiceAllumettes);

            foreach ($tempTab as $i) {
                $allumettes = $i;
            }

            if (count($allumettes) == 1) {
                $index1 = $allumettes[0] - 1;
                unset($tab[$index1]);
            } elseif (count($allumettes) == 2) {
                $index1 = $allumettes[0] - 1;
                $index2 = $allumettes[0];
                unset($tab[$index1]);
                unset($tab[$index2]);
            } elseif (count($allumettes) == 3) {
                $index1 = $allumettes[0] - 1;
                $index2 = $allumettes[0];
                $index3 = $allumettes[1];
                unset($tab[$index1]);
                unset($tab[$index2]);
                unset($tab[$index3]);

            } elseif (count($allumettes) >= 4) {
                echo "Maximum 3 allumettes par tour";
            }
            return $tab;
        }
    }

    public function getNewTab($tab)
    {
        $newTab = $tab;
        return $newTab;
    }

    public function getTurnPlayerOne()
    {
        return $this->TurnPlayerOne;
    }

    public function getTurnPlayerTwo()
    {
        return $this->TurnPlayerTwo;
    }

    public function j1Turn($joueurTour1)
    {
        return $joueurTour1++;
    }

    public function j2Turn($joueurTour2)
    {
        return $joueurTour2++;
    }

}

$game = new Jeu("Joueur", "Ordinateur");//initialise le jeu
$allumettes = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13'];
$turn1 = $game->getTurnPlayerOne();
$turn2 = $game->getTurnPlayerTwo();
if ($turn1 == $turn2) {
    $data = $game->turn($allumettes, $turn1, $turn2);
    $turnJ1 = $game->j1Turn($turn1);
} elseif ($turn1 >= $turn2) {
    $turnJ2 = $game->j2Turn($turn2);
} elseif ($turn2 <= $turn1) {
    $turnJ2 = $game->j2Turn($turn2);
}
//Manque : systeme de comptage de tours pour l'utilisateur et pour l'ordinateur
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exo</title>
</head>
<body>
<form method="post">
    <?php for ($i = 1; $i <= 13; $i++): echo $i ?>
        <input type="checkbox" name="choice[]" value="<?php echo $i ?>"><br>
    <?php endfor; ?><br>
    <input type="submit" value="Tirer">
</form><br>
Allumettes restantes : <br>
<?php foreach ($data as $row) { ?>
    <?php echo $row ?><br>
<?php } ?>
</body>
</html>

