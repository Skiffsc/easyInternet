<?php

class HelloController
{
    public function indexAction($name)
    {
        return new Response($name);
    }
}