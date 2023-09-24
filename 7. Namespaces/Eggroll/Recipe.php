<?php

namespace Eggroll;

class Recipe
{
    private string $name = 'How to make the best Eggroll Recipe';

    public function getName(): string
    {
        return $this->name;
    }
}      