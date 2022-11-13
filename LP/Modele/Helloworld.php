<?php

final class Helloworld
{
    private $_S_message = "Hello World";



    public function donneMessage()
    {
        return $this->_S_message ;
    }

    public function getJson()
    {
        $json = file_get_contents("eleves.json");
        $eleves = json_decode($json,true);
        return $this->$eleves ;
    }

}