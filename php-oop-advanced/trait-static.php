<?php

trait SmartElectric {
    public static $internet = "Telkom Indihome";
    public static function cekOS() {
        return "Android 9.0 (Pie)";
    }
}

echo SmartElectric::$internet . PHP_EOL;
echo SmartElectric::cekOS() . PHP_EOL;