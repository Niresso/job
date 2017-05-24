<?php

// array routers

return array(


    'films/delete/([0-9]+)' => 'films/delete/$1',
    'films' => 'films/index',

    '' => 'films/index',

);