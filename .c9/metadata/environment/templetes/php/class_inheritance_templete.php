{"filter":false,"title":"class_inheritance_templete.php","tooltip":"/templetes/php/class_inheritance_templete.php","ace":{"folds":[],"scrolltop":551.09375,"scrollleft":0,"selection":{"start":{"row":55,"column":24},"end":{"row":55,"column":24},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":114,"mode":"ace/mode/php"}},"hash":"ac1fc72fa4364ccc36ab918207c16ebdb562a00d","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":55,"column":24},"action":"insert","lines":["<?php","","class Character {","    public $type = '';","","    public $hp = 1;","    public $power = 1;","","    function __construct($type, $hp, $power) {","        $this->type = $type;","        $this->hp = $hp;","        $this->power = $power;","    }","","    function name() {","        return $this->type;","    }","","    function attack($character) {","        $character->hp = $character->hp - $this->power;","        print $this->name() . 'が' . $character->name() . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;","","        if ($character->hp <= 0) {","            $this->defeat($character);","        }","    }","","    function defeat($character) {","        print $this->name() . 'は' . $character->name() . 'を倒した！' . PHP_EOL;","    }","}","","class Slime extends Character {","    public $suffix = '';","","    function __construct($suffix) {","        parent::__construct('スライム', 10, 3);","        $this->suffix = $suffix;","    }","","    function name() {","        return parent::name() . $this->suffix;","    }","}","","class Hero extends Character {","    function __construct() {","        parent::__construct('主人公', 1000, 30);","    }","}","","$hero = new Hero();","$slime_A = new Slime('A');","","$slime_A->attack($hero);","$hero->attack($slime_A);"],"id":1}]]},"timestamp":1526451775110}