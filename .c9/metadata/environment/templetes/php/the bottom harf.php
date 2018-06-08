{"filter":false,"title":"the bottom harf.php","tooltip":"/templetes/php/the bottom harf.php","ace":{"folds":[],"scrolltop":2580.125,"scrollleft":0,"selection":{"start":{"row":210,"column":19},"end":{"row":210,"column":19},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"bc6da6cee492b52b2834d44a9b0038fd93ab2739","undoManager":{"mark":11,"position":11,"stack":[[{"start":{"row":38,"column":18},"end":{"row":39,"column":0},"action":"insert","lines":["",""],"id":42},{"start":{"row":39,"column":0},"end":{"row":40,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":40,"column":0},"end":{"row":51,"column":9},"action":"insert","lines":["$slime_A = new Slime();","","// アロー演算子でメソッドを呼び出す場合","$slime_A->attack('主人公');","","実行結果>スライムが主人公を攻撃して3ポイントのダメージを与えた！","","","// アロー演算子でメソッドを呼び出す場合","print $slime_A->type;","","実行結果>スライム"],"id":43}],[{"start":{"row":51,"column":9},"end":{"row":52,"column":0},"action":"insert","lines":["",""],"id":44}],[{"start":{"row":52,"column":0},"end":{"row":53,"column":0},"action":"insert","lines":["",""],"id":45},{"start":{"row":53,"column":0},"end":{"row":54,"column":0},"action":"insert","lines":["",""]},{"start":{"row":54,"column":0},"end":{"row":55,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":55,"column":0},"end":{"row":79,"column":24},"action":"insert","lines":["<?php","","class Slime {","    public $type = 'スライム';","    public $suffix = '';","","    public $hp = 10;","    public $power = 3;","","    function __construct($suffix) {","        $this->suffix = $suffix;","    }","","    function name() {","        return $this->type . $this->suffix;","    }","","    function attack($character_name) {","        print $this->name() . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;","    }","}","","$slime_A = new Slime('A');","","$slime_A->attack('主人公');"],"id":46}],[{"start":{"row":55,"column":5},"end":{"row":55,"column":6},"action":"insert","lines":[" "],"id":47},{"start":{"row":55,"column":6},"end":{"row":55,"column":7},"action":"insert","lines":["/"]},{"start":{"row":55,"column":7},"end":{"row":55,"column":8},"action":"insert","lines":["/"]},{"start":{"row":55,"column":8},"end":{"row":55,"column":9},"action":"insert","lines":["c"]},{"start":{"row":55,"column":9},"end":{"row":55,"column":10},"action":"insert","lines":["o"]}],[{"start":{"row":55,"column":10},"end":{"row":55,"column":11},"action":"insert","lines":["n"],"id":48},{"start":{"row":55,"column":11},"end":{"row":55,"column":12},"action":"insert","lines":["s"]},{"start":{"row":55,"column":12},"end":{"row":55,"column":13},"action":"insert","lines":["t"]},{"start":{"row":55,"column":13},"end":{"row":55,"column":14},"action":"insert","lines":["r"]},{"start":{"row":55,"column":14},"end":{"row":55,"column":15},"action":"insert","lines":["u"]},{"start":{"row":55,"column":15},"end":{"row":55,"column":16},"action":"insert","lines":["c"]}],[{"start":{"row":55,"column":16},"end":{"row":55,"column":17},"action":"insert","lines":["t"],"id":49},{"start":{"row":55,"column":17},"end":{"row":55,"column":18},"action":"insert","lines":["o"]},{"start":{"row":55,"column":18},"end":{"row":55,"column":19},"action":"insert","lines":["r"]},{"start":{"row":55,"column":19},"end":{"row":55,"column":20},"action":"insert","lines":["s"]}],[{"start":{"row":79,"column":24},"end":{"row":80,"column":0},"action":"insert","lines":["",""],"id":50},{"start":{"row":80,"column":0},"end":{"row":81,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":81,"column":0},"end":{"row":136,"column":24},"action":"insert","lines":["<?php","","class Character {","    public $type = '';","","    public $hp = 1;","    public $power = 1;","","    function __construct($type, $hp, $power) {","        $this->type = $type;","        $this->hp = $hp;","        $this->power = $power;","    }","","    function name() {","        return $this->type;","    }","","    function attack($character) {","        $character->hp = $character->hp - $this->power;","        print $this->name() . 'が' . $character->name() . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;","","        if ($character->hp <= 0) {","            $this->defeat($character);","        }","    }","","    function defeat($character) {","        print $this->name() . 'は' . $character->name() . 'を倒した！' . PHP_EOL;","    }","}","","class Slime extends Character {","    public $suffix = '';","","    function __construct($suffix) {","        parent::__construct('スライム', 10, 3);","        $this->suffix = $suffix;","    }","","    function name() {","        return parent::name() . $this->suffix;","    }","}","","class Hero extends Character {","    function __construct() {","        parent::__construct('主人公', 1000, 30);","    }","}","","$hero = new Hero();","$slime_A = new Slime('A');","","$slime_A->attack($hero);","$hero->attack($slime_A);"],"id":51}],[{"start":{"row":136,"column":24},"end":{"row":137,"column":0},"action":"insert","lines":["",""],"id":52},{"start":{"row":137,"column":0},"end":{"row":138,"column":0},"action":"insert","lines":["",""]},{"start":{"row":138,"column":0},"end":{"row":139,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":139,"column":0},"end":{"row":217,"column":21},"action":"insert","lines":["<?php","","class Character {","    // クラス変数","    public static $type = '';","","    // インスタンス変数","    public $hp = 1;","    public $power = 1;","","    function __construct($hp, $power) {","        $this->hp = $hp;","        $this->power = $power;","    }","","    function name() {","        // $this:: によってインスタンス変数���はなく、クラス変数を呼び出している","        // （$this-> だとインスタンス変数を呼び出してしまう）","        return $this::$type;","    }","","    function attack($character) {","        $character->hp = $character->hp - $this->power;","        print $this->name() . 'が' . $character->name() . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;","","        if ($character->hp <= 0) {","            $this->defeat($character);","        }","    }","","    function defeat($character) {","        print $this->name() . 'は' . $character->name() . 'を倒した！' . PHP_EOL;","    }","}","","class Slime extends Character {","    // クラスの種類そのものなので、最初から代入して、以後変更しない","    public static $type = 'スライム';","","    public $suffix = '';","","    function __construct($suffix) {","        parent::__construct(10, 3);","        $this->suffix = $suffix;","    }","","    function name() {","        // parent::name() は、 $this::$type を返すので、","        // この Slime クラスのクラス変数 $type ('スライム') を返す","        return parent::name() . $this->suffix;","    }","","    // クラス関数","    static function description() {","        print self::$type . 'は、最弱のモンスターだ！' . PHP_EOL;","    }","}","","class Hero extends Character {","    // クラスの種類そのものなので、最初から代入して、以後変更しない","    public static $type = '主人公';","","    function __construct() {","        parent::__construct(1000, 30);","    }","    ","    static function description() {","        print self::$type . 'は、この世界を守る勇者だ！' . PHP_EOL;","    }","}","","$hero = new Hero();","$slime_A = new Slime('A');","","$slime_A->attack($hero);","$hero->attack($slime_A);","","Hero::description();","Slime::description();"],"id":53}]]},"timestamp":1526455028570}