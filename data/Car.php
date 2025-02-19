<?php

namespace Data;

interface HasBrand {
    function getBrand(): string;
}

interface IsMainTenance {
    function isMaintenance():bool;
}
interface Car extends HasBrand, IsMainTenance
{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car {
    function drive() : void {
        echo "Drive : avanza" . PHP_EOL;
    }

    function getBrand(): string {
        return "Brand : Toyota" . PHP_EOL;
    }

    function isMaintenance(): bool {
        return true ;
    }
    function getTire(): int {
        return 4;
    }
}