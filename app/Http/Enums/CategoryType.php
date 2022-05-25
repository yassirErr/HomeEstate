<?php

namespace App\http\Enums;

use PhpParser\Node\Stmt\Enum_;

//use Spatie\Enum\Enum;

final class CategoryType extends Enum_
{
    const mainCategory=1;
    const subCategory=2;
}

