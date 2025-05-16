<?php
class StaticCache {
    private static $cacheData = null;

    public static function getData() {
        if (self::$cacheData === null) {
            sleep(2);
            self::$cacheData = ['usd' => rand(35, 40), 'eur' => rand(38, 43)];
        }
        return self::$cacheData;
    }
}
?>
