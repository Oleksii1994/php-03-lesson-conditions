<?php


// != або !== або <> не рівно


////////////// if else

if (1 == '1') {
  echo "hello <br>";
}

if (1 === '1') {
  echo "you will never see this";
}

$a = 0;
$b = 1;

if ($a) {
  echo "false";
} else {
  echo "variable a returns false";
}

if ($a) { ?>
  <h1> "false" </h1>
<?php } else { ?>
  <h1> "if with HTML" </h1>
<?php }

//another syntax

if ($a) : ?>
  <h1> "false" </h1>
<?php else : ?>
  <h1> "alternative syntax" </h1>
<?php endif;

//0, '', 0.0, null === false

$result = (!$a) ? "True <br>" : "False <br>"; //тернарний оператор з умовою від зворотнього
echo $result;

//скорочений синтаксис якщо один рядок коду

if (1 > 2)
  echo "True <br>";
else
  echo "False <br>";


echo ($a) ?: '2 <br>';   //!!!!!

if ($a === 1 and $b === 1) { //or-|| , and - && 
  echo "a = 1";
} elseif ($a === 2) {
  echo "a = 2";
} elseif ($a === 3) {
  echo "a = 3";
} else {
  echo "a = 0 <br>";
}

//теж саме але інший синтаксис

if ($a === 1 and $b === 1) :
  echo "a = 1";
elseif ($a === 2) :
  echo "a = 2";
elseif ($a === 3) :
  echo "a = 3";
else :
  echo "a = 0 <br>";
endif;




////////switch case перевіряє на ==

switch ($a) {
  case 1:
    echo "a = 1";
    break;

  case 2:
    echo "a = 2";
    break;

  case 3:
    echo "a = 3";
    break;

  default:
    echo "a = 0 <br>";
}


$c = "best";

switch ($c) {
  case "test":
    echo "case 1 test here";
    break;

  case "next":
    echo "case 2 next here";
    break;

  case "best":
    echo "case 3 best here <br>";
    break;

  default:
    echo "a = ''"; //блок дефолт може бути навіть спочатку але рекомендується завжди вкінці
}

//синтаксис без фігурних дужок

$d = "next";

switch ($d):
  case "test":
    echo "case 1 test here <br>";
    break;

  case "next":
    echo "case 2 next here <br>";
    break;

  case "best":
    echo "case 3 best here <br>";
    break;

  default:
    echo "a = '' <br>";

endswitch;



///////// match перевіряє на ===

$fruit = 'mango';

$result = match ($fruit) {
  'apple' => "apple is in the basket",
  'banana' => "banana is in the basket",
  'mango' => "mango is in the basket <br>",
};

echo $result;

$num = 7;

$result2 = match ($num) {
  1 => "1",
  2 => "2",
  3 => "3",
  default => 'no matches <br>'
};

echo $result2;


$result3 = match (true) {
  $num > 10 => "more than 10",
  $num <= 10 => "less or equal 10",
  $num >= 10 => "more or equal 10",
  default => 'no matches'
};

echo $result3;


?>