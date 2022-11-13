<?php

final class ControleurHelloworld
{
    public function defautAction()
    {
        $O_helloworld =  new Helloworld();

        Vue::montrer('helloworld/voir', array('helloworld' =>  $O_helloworld->donneMessage()));

    }
    public function getJson()
    {
        $O_helloworld=  new Helloworld();

        Vue::montrer('helloworld/voir', array('json' =>  $O_helloworld->getJson()));

    }



}
