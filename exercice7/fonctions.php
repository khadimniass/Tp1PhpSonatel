<?php
function bissextile(int $year): bool
{
    return (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0);
}
function nombre_jour(int $month, int $year): int
{
    if ($month == 2) {
        if (bissextile($year)) {
            $nmbrejour = 29;
        } else {
            $nmbrejour = 28;
        }
    } elseif ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
        $nmbrejour = 30;
    } elseif ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) {
        $nmbrejour = 31;
    }
    return $nmbrejour;
}

function date_valide($j, $m, $a): bool
{
    return (($j >= 1 && $j <= nombre_jour($m, $a)) && (1 <= $m && $m <= 12));
}

function date_suivante($jour, $moi, $annee)
{
    if (date_valide($jour, $moi, $annee)) {
        if ($jour == nombre_jour($moi, $annee)) {
            $jour = 1;
            if ($moi != 12) {
                $moi++;
            } else {
                $moi = 1;
                $annee++;
            }
        } else {
            $jour++;
        }
        print("la date suivante est : $jour / $moi / $annee \n");
    } else {
        print("veillez verifier la date saisie ! \n");
    }
}

function date_precedente($jour, $moi, $annee)
{
    if (date_valide($jour, $moi, $annee)) {
        if ($jour != 1) {
            $jour--;
        } else {
            $jour = nombre_jour($moi - 1, $annee);
            if ($moi == 1) {
                $moi = 12;
                $annee--;
            } else {
                $moi--;
            }
        }
        print("la date precedente est : $jour / $moi / $annee \n");
    } else
        print("veillez verifier la date saisie ! \n");
}
