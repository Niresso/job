<?php


function getFilms(){
    $params =  array(
        'host' => 'localhost',
        'dbname' => 'films',
        'user' => 'root',
        'password' => '',
    );

    $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
    $db = new PDO($dsn, $params['user'], $params['password']);

    $sql = 'SELECT * FROM films ORDER BY id DESC ';

    $result = $db->query($sql);
    $i = 0;
    $films = [];
    while ($row = $result->fetch()){
        $films[$i] = $row;
        $i++;
    }
    return $films;

}

    // Формируем массив для JSON ответа

if (empty($_POST['btnn'])){

    $films =  getFilms();

    // Переводим массив в JSON
    echo json_encode($films);
}



?>