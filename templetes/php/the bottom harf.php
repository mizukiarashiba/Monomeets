class Slime { //how to declear a class this is only a blueprint
    // オブジェクトの変数（値）
    public $type = 'スライム';
    public $hp = 10;
    public $power = 3;

    // オブジェクトの関数（処理）
    function attack($character_name) {
        print $this->type . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;
    }
}

// インスタンスの生成と、変数への代入
$slime_A = new Slime();
$slime_B = new Slime();
$slime_C = new Slime();

// インスタンスの使用
$slime_A->attack('主人公');
$slime_B->attack('主人公');
$slime_C->attack('主人公');

<?php
//上二つのまとめ
class Slime {
    public $type = 'スライム';
    public $hp = 10;
    public $power = 3;

    function attack($character_name) {
        print $this->type . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;
    }
}

$slime_A = new Slime();

$slime_A->attack('主人公');

print_r($slime_A);

$slime_A = new Slime();

// アロー演算子でメソッドを呼び出す場合
$slime_A->attack('主人公');

実行結果>スライムが主人公を攻撃して3ポイントのダメージを与えた！


// アロー演算子でメソッドを呼び出す場合
print $slime_A->type;

実行結果>スライム



<?php //constructors

class Slime {
    public $type = 'スライム';
    public $suffix = '';

    public $hp = 10;
    public $power = 3;

    function __construct($suffix) {
        $this->suffix = $suffix;
    }

    function name() {
        return $this->type . $this->suffix;
    }

    function attack($character_name) {
        print $this->name() . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;
    }
}

$slime_A = new Slime('A');

$slime_A->attack('主人公');

<?php

class Character {
    public $type = '';

    public $hp = 1;
    public $power = 1;

    function __construct($type, $hp, $power) {
        $this->type = $type;
        $this->hp = $hp;
        $this->power = $power;
    }

    function name() {
        return $this->type;
    }

    function attack($character) {
        $character->hp = $character->hp - $this->power;
        print $this->name() . 'が' . $character->name() . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;

        if ($character->hp <= 0) {
            $this->defeat($character);
        }
    }

    function defeat($character) {
        print $this->name() . 'は' . $character->name() . 'を倒した！' . PHP_EOL;
    }
}

class Slime extends Character {
    public $suffix = '';

    function __construct($suffix) {
        parent::__construct('スライム', 10, 3);
        $this->suffix = $suffix;
    }

    function name() {
        return parent::name() . $this->suffix;
    }
}

class Hero extends Character {
    function __construct() {
        parent::__construct('主人公', 1000, 30);
    }
}

$hero = new Hero();
$slime_A = new Slime('A');

$slime_A->attack($hero);
$hero->attack($slime_A);


<?php

class Character {
    // クラス変数
    public static $type = '';

    // インスタンス変数
    public $hp = 1;
    public $power = 1;

    function __construct($hp, $power) {
        $this->hp = $hp;
        $this->power = $power;
    }

    function name() {
        // $this:: によってインスタンス変数ではなく、クラス変数を呼び出している
        // （$this-> だとインスタンス変数を呼び出してしまう）
        return $this::$type;
    }

    function attack($character) {
        $character->hp = $character->hp - $this->power;
        print $this->name() . 'が' . $character->name() . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;

        if ($character->hp <= 0) {
            $this->defeat($character);
        }
    }

    function defeat($character) {
        print $this->name() . 'は' . $character->name() . 'を倒した！' . PHP_EOL;
    }
}

class Slime extends Character {
    // クラスの種類そのものなので、最初から代入して、以後変更しない
    public static $type = 'スライム';

    public $suffix = '';

    function __construct($suffix) {
        parent::__construct(10, 3);
        $this->suffix = $suffix;
    }

    function name() {
        // parent::name() は、 $this::$type を返すので、
        // この Slime クラスのクラス変数 $type ('スライム') を返す
        return parent::name() . $this->suffix;
    }

    // クラス関数
    static function description() {
        print self::$type . 'は、最弱のモンスターだ！' . PHP_EOL;
    }
}

class Hero extends Character {
    // クラスの種類そのものなので、最初から代入して、以後変更しない
    public static $type = '主人公';

    function __construct() {
        parent::__construct(1000, 30);
    }
    
    static function description() {
        print self::$type . 'は、この世界を守る勇者だ！' . PHP_EOL;
    }
}

$hero = new Hero();
$slime_A = new Slime('A');

$slime_A->attack($hero);
$hero->attack($slime_A);

Hero::description();
Slime::description();