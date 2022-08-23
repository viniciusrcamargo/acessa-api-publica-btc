<?php

namespace Viniciusrcam\AccessApiBtc;

class AccessApi
{
    public function access($url): array
    {
        try{
            $data = file_get_contents($url);
            //var_dump($data);
            $result = json_decode($data,true);
        }catch(\Exception $e){
            $result = $e->getMessage();
        }

        return $result;
    }
}