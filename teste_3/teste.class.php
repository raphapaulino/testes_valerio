<?php

class Teste {

    public function lerTxt($filename)
    {

        $dataArray = file($filename);
        array_shift($dataArray);
        array_pop($dataArray);

        $data2 = [];

        foreach($dataArray as $d):

            $name_and_address = [
                "name" => substr($d, 234, 39), // 235, 274
                "address" => substr($d, 274, 49), // 275, 324
            ];
            
            array_push($data2, $name_and_address);

        endforeach;

        return $data2;
    }

    public function arrayToCsv($dataArray)
    {
        $outputBuffer = fopen("php://output", 'w');
        foreach($dataArray as $val) {
            fputcsv($outputBuffer, $val, ";");
        }
        fclose($outputBuffer);
    }

}

