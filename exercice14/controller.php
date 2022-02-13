<?php
session_start();

$numb_correct = [];
$numb_incorrect = [];
$numb = ($_POST['numero']);
$ic = 0;
$iinc = 0;

$org = 0;
$free = 0;
$exp = 0;
$pro = 0;
if (isset($_POST['btn-textarea']) && !empty($_POST['btn-textarea'])) {
    $allNumb = array_map('trim', explode("\n", $numb));
    for ($i = 0; $i < count($allNumb); $i++) {
        if (is_numeric($allNumb[$i]) && strlen($allNumb[$i]) == 9 && (substr($allNumb[$i], 0, 2) == "77" || substr($allNumb[$i], 0, 2) == "78" || substr($allNumb[$i], 0, 2) == "76" || substr($allNumb[$i], 0, 2) == "70" || substr($allNumb[$i], 0, 2) == "75")) {
            $numb_correct[$ic] = $allNumb[$i];
            $ic++;
        } else {
            $numb_incorrect[$iinc] = $allNumb[$i];
            $iinc++;
        }
    }
    for ($i = 0; $i < count($numb_correct); $i++) {
        if ((substr($numb_correct[$i], 0, 2) == "77") || substr($numb_correct[$i], 0, 2) == "78") {
            $org++;
        } elseif (substr($numb_correct[$i], 0, 2) == "76") {
            $free++;
        } elseif (substr($numb_correct[$i], 0, 2) == "70") {
            $exp++;
        } else {
            $pro++;
        }
    }
    $operateur=[
        'orange'=>$org,
        'free'=>$free,
        'expresso'=>$exp,
        'pro mobile'=>$pro
    ];
    $_SESSION['operateur']=$operateur;
    $_SESSION['numb_correct'] = $numb_correct;
    $_SESSION['numb_incorrect'] = $numb_incorrect;
    header('location:index.php');
    die();
} else {
    $_SESSION['message_error'] = "veillez replir le champ.";
    header('location:index.php');
    die();
}
