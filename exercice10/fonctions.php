<?php

function gen_champ($number)
{
    for ($i = 1; $i <= $number; $i++){
       echo "<input style='margin-top: 1.5vh;' type='text' placeholder='champ $i' > <br>";
    }
}