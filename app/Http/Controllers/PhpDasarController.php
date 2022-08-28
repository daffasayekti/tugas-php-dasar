<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpDasarController extends Controller
{
    public function tugasBootcamp()
    {
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo $hasil = self::luasPersegi($i) . ", ";
            } else if ($i % 3 == 0) {
                echo $hasil = self::luasLingkaran($i) . ", ";
            } else if ($i % 5 == 0) {
                echo $hasil = self::kelilingLingkaran($i) . ", ";
            }
        }
    }

    public function luasLingkaran($angka)
    {
        $jari_jari = $angka / 3;
        $pi        = 3.14;
        $luas      = $pi * pow($jari_jari, 2);

        return $luas;
    }
    public function kelilingLingkaran($angka)
    {
        $jari_jari = $angka / 5;
        $pi        = 3.14;
        $keliling  = 2 * $pi * $jari_jari;

        return $keliling;
    }
    public function luasPersegi($angka)
    {
        $luas = $angka * $angka;

        return $luas;
    }
}
