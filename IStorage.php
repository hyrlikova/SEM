<?php

interface IStorage
{
    /**
     * @return Product[]
     */
    public function LoadAll();

    public function Save(Product $param);
}