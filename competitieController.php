<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13-May-19
 * Time: 10:35
 */


require 'config.php';

$sql = "SELECT * FROM `teams` ORDER BY `teams`.`name`";
$query = $db->query($sql);
$teams = $query->fetchAll(PDO::FETCH_ASSOC);

$rand = rand();

function halfmatch(array $teams, $rand = false) {
    $numPlayers = count($teams);

    // bij een oneven een op tellen en een place holder
    if($numPlayers%2) {
        $teams[] = null;
        $numPlayers++;
    }

    // uit rekenen hoeveel wedstrijden er moeten zijn
    $numSets = $numPlayers-1;
    $numMatches = $numPlayers/2;

    $matchups = array();

    // iedere wedstrijd genereren
    for($j = 0; $j < $numSets; $j++) {
        // lijst door 2 delen
        $halves = array_chunk($teams, $numMatches);
        // draai de lijst om
        $halves[1] = array_reverse($halves[1]);
        // maken van iedere math in een setje
        for($i = 0; $i < $numMatches; $i++) {
            // laat iedere team tegenelkaar spelen
            $matchups[$j][$i][0] = $halves[0][$i];
            $matchups[$j][$i][1] = $halves[1][$i];
        }
        // verwijder de 1e team
        $first = array_shift($teams);
        // verplaats de tweede speler naar het einde
        $teams[] = array_shift($teams);
        // plaats de item weer terug op zijn positie
        array_unshift($teams, $first);
    }
                                                             
    // schud de teams als dit nodig is
    if($rand) {
        foreach($matchups as &$match) {
            shuffle($match);
        }
        shuffle($matchups);
    }

    return $matchups;
}


echo 'wedstrijd schemas: ' ;
echo '<ul>';
echo print_r(halfmatch($teams));
echo '</ul>';

//foreach ($teams as $team){
//    $random_keys=array_rand( $team,3);
//    echo $team[$random_keys[0]]."<br>";
//    echo $team[$random_keys[1]]."<br>";
//    echo $team[$random_keys[2]];
//}

//kijken hoeveel teams er in de database zitten
//$sql1= "SELECT COUNT(*) FROM ORDER BY `teams`. `name`";
//$query = $db->query($sql1);
//$teamss = $query->fetchAll(PDO::FETCH_ASSOC);

//$total = $teamss[0];

//foreach ($total as $totals){
//    echo $total;
//}

//

//hoeveelheid in kwadraat - hoeveelheid
//$number = pow($total, 2) - $total;

// number delen door 2 = aantal wedstijden
//$result = $number / 2;

//result moet nu teams onderelkaar zetten op hoeveel heid

// teams naast elkaar plaatsen

//teams mogen niet tegen zig zelf
//if (){

//}
