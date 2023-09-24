<?php

namespace Buns;

class Recipe
{
    private string $name = 'How to make the best Buns Recipe';

    public function getName(): string
    {
        return $this->name;
    }
}