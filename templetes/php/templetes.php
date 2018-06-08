<?php
	print'hello';
	
    $hensuu = "variable";
    print $hensuu;
    $variable = "これも一緒";
    print $variable;
?>

<?php
    $ichiniti_no_zikan = 24;
    $ichizikan_no_hun = 60;
    $ippun_no_byou = 60;

    $ichiniti_no_byousuu = $ichiniti_no_zikan * $ichizikan_no_hun * $ippun_no_byou;

    print $ichiniti_no_byousuu;
?>

<?php
    $num = 1.2;
    var_dump($num);
?>

<?php
    $str1 = 'テキスト';
    $str2 = "テキスト";
    var_dump($str1);
    var_dump($str2);
?>

<?php
    $t = true;
    $f = false;
    var_dump($t);
    var_dump($f);
?>

<?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ'];
    var_dump($fruits);
    /*
      This is a comment

      array(3) {
        [0] =>
        string(9) "リンゴ"
        [1] =>
        string(9) "バナナ"
        [2] =>
        string(12) "オレンジ"
      }
      The above is the output of the var_dump()
    */
?>

<?php
    $a;
    var_dump($a);
    $b = null;
    var_dump($b);
?>

<?php
    $num1 = 1 + 2;       // 3
    $num2 = 1 - 2;       // -1
    $num3 = 2 * 5;       // 10
    $num4 = 6 / 3;       // 2
    $num5 = 5 % 2;       // 1 (the remainder of division)
?>

<?php
    $result = 1 < 2;
    var_dump($result);

    $result = 1 == 2;
    var_dump($result);
?>

<?php
    // 10 > 5 is true, so this becomes if (true), and {...} is run
    if (10 > 5) {
        print 'ここだけ表示される' . PHP_EOL;
    }

    // 10 <= 5 is false, so this becomes if (false), and {...} is not run
    if (10 <= 5) {
        print 'ここには絶対来ない' . PHP_EOL;
    }
?>
<?php
    if (10 == 5) {
        print '10 == 5 は false なのでここは実行されない' . PHP_EOL;
    }
    else {
        print 'if側が実行されないので、ここだけ実行される' . PHP_EOL;
    }
?>

<?php //if
    $number = mt_rand() % 10;

    if ($number < 5) {
        print $number . 'は5より小さい数' . PHP_EOL;
    }
    else {
        print $number . 'は5以上の数' . PHP_EOL;
    }
?>

<?php //branching 
    $number = mt_rand() % 10;

    if ($number < 3) {
        print $number . 'は3より小さい数' . PHP_EOL;
    }
    elseif ($number < 6) {
        print $number . 'は3以上で6より小さい数' . PHP_EOL;
    }
    elseif ($number < 8) {
        print $number . 'は6以上で8より小さい数' . PHP_EOL;
    }
    else {
        print $number . 'は8か9しか来ません' . PHP_EOL;
    }
?>

<?php // looping
    $count = 0;
    $number = 0;

    while ($number != 9) {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
        $count++;
    }

    print '9が出るまで' . $count . '回かかった。' . PHP_EOL;
?>

<?php //for_loop
    for ($i = 0; $i < 10; $i++) {
        print $i . '回目' . PHP_EOL;
    }
?>

<?php //foreachでcount は必要なくなる
    $fruits = ['リンゴ', 'バナナ', 'オレンジ', 'ぶどう', '桃'];
    $count = count($fruits);         // assign the number of items in the array to $count
    for ($i = 0; $i < $count; $i++) {
        print $i . '回目: ' . $fruits[$i] . PHP_EOL;
    }
?>

<?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ', 'ぶどう', '桃'];
    foreach ($fruits as $key => $fruit) {
        print $key . '回目: ' . $fruit . PHP_EOL;
    }
?>

<?php
    // Define a function
    function sum() {
        $result = 0;
        for ($i = 1; $i <= 9; $i++) {
            $result = $result + $i;
        }
        print $result . PHP_EOL;
    }

     // Call the function
    sum();            // The function is run, printing the result of adding the numbers 1~9
?>

