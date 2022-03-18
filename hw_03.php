interface Human {
    public function IDontUnderstand();
    public function WheresTheTruth();
}

class User {
    private const CITY = "Jaroslavl";
    public const AGE = 18;
    public static int $cash = 300;
    public string $name = "Aboba";
    function __construct(string $in_name, int $in_cash) {
        $this->$name = $in_name;
        self::$cash = $in_cash;
        echo "Конструктор";
    }
    function __destruct() {
        echo "Уничтожается " . __CLASS__ ;
    }
    public function IDontUnderstand() {
        return "What's going on here?";
    }
    public function WheresTheTruth() {
        return "Your're " . (string)AGE . " years old?";
    }
}

abstract class Client {
    abstract public function WhatsUp(string $emotion);
    private static function ImOk() {
        return "I'm okey, dude!";
    }
}

class AngryClient extends Client {
    public function WhatsUp(string $emotion) {
        if ($emotion == "anger") {
            echo "Dude, wtf, i need my money back!";
        } else {
            echo self::ImOk();
        }
    }
}



