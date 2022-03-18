class User {
    private const CITY = "Jaroslavl";
    public const AGE = 18;
    public static int $cash = "300$";
    public string $name = "Aboba";
    function __construct(string $in_name, string $in_cash) {
        self->name = $in_name;
        self::$cash = $in_cash;
    }
}
