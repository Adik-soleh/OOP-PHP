<?php

namespace Helper;

class MathHelper {
   static public string $name = "Math Helper..";

   static public function sum(... $numbers) : int
   {
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }

    return $total;
   }
}