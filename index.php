<?php



function formatArray($arrLength, $data)
{
    $newArr=[];

    foreach ($data as $key => $value) {
        if ($key < $arrLength) {
            $prevNo;
            $afterNo;
            ($key == 0) ? $prevNo = 0 : $prevNo = $data[$key -1] ;
            ($key == count($data)-1) ? $afterNo = 0 : $afterNo = $data[$key +1] ;
            $curNo = $data[$key] + $prevNo + $afterNo;
            array_push($newArr,$curNo);
        }
      
    }
    print_r($newArr);
}
$data = [4, 0, 1, -2, 3];
$arrLength = 5;

formatArray($arrLength, $data);