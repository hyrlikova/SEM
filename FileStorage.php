<?php

class FileStorage implements IStorage
{
    /**
     * @return Product[]
     */
    public function LoadAll(){
        $result = [];
        $handle = fopen("product.csv", "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                // process the line read.
                $param = explode(";", $line);
                $result[] = new Product($param[0], $param[1]);
            }
            fclose($handle);
        } else {
            // error opening the file.
        }
        return $result;
    }

    public function Save(Product $param)
    {
        $toAppend = PHP_EOL.$param->getTitle().";".$param->getText();
        $myfile = fopen("product.csv", "a");
        fwrite($myfile, $toAppend);
        fclose($myfile);
    }
}