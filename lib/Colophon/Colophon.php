<?php

namespace Colophon;



class Colophon
{
    public static function postUpdate($event)
    {
        self::postInstall($event);
    }
    
    public static function postInstall($event)
    {
        //$composer = $event->getComposer();
        
        // 1st pull
        system('bin/colophon print');
    }
}