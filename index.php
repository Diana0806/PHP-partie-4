<!-- Exercice 1 -->

<?php

function returnTrue() {
    return true;
}
 echo returnTrue();
?>
<br>

<!-- Exercice 2 -->

<?php

function chaineIdentique($chaine) {
    return $chaine;
}

echo chaineIdentique("Hello");
?>
<br>

<!-- Exercice 3 -->

<?php

function concatChaines($chaine1, $chaine2) {
    return $chaine1 . $chaine2;
}
echo concatChaines("Hello, ", "world!");
?>
<br>

<!-- Exercice 4 -->

<?php

function compareNumbers($number1, $number2) {
    if ($number1 > $number2) {
        return "Le premier nombre est plus grand";
    } elseif ($number1 < $number2) {
        return "Le premier nombre est plus petit";
    } else {
        return "Les deux nombres sont identiques";
    }
}

echo compareNumbers(3, 11);
echo compareNumbers(7, 2);
echo compareNumbers(4, 4);

?>
<br>


<!-- Exercice 5 -->

<?php

function concatenate($number, $string) {
    return $number . $string;
}


$number = 42;
$string = "Hello, world!";
$result = concatenate($number, $string);
echo $result; 

?>
<br>

<!-- Exercice 6 -->

<?php

function generateGreeting($lastname, $firstName, $age) {
    $greeting = "Hello, " . $lastname . " " . $firstName . ", you are " . $age . " years old.";
    return $greeting;
}

$lastname = "Green";
$firstName = "John";
$age = 40;
$result = generateGreeting($lastname, $firstName, $age);
echo $result;

?>
<br>

<!-- Exercice 7 -->

<?php

function generateMessage($age, $gender) {
    if ($gender === 'Homme') {
        if ($age >= 18) {
            return "You are a man and you are of legal age.";
        } else {
            return "You are a man and you are a minor.";
        }
    } elseif ($gender === 'Femme') {
        if ($age >= 18) {
            return "You are a woman and you are of legal age.";
        } else {
            return "You are a woman and you are a minor.";
        }
    } else {
        return "Invalid gender provided.";
    }
}


$age = 24;
$gender = 'Femme';
$result = generateMessage($age, $gender);
echo $result; 

?>
<br>

<!-- Exercice 8 -->

<?php

function calculateSum($num1 = 0, $num2 = 0, $num3 = 0) {
    
    return $num1 + $num2 + $num3;
}

$result = calculateSum(5, 10, 15);
echo $result;

$result = calculateSum(1, 5);
echo $result;

$result = calculateSum();
echo $result;

?>
<br>