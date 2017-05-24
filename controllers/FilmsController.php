<?php

    class FilmsController
    {

        public function ActionIndex()
        {
            $user = new Films();
            $films =  $user::getFilms();


            if (isset($_POST['addfilm'])){
                $errors =false;
                $user->name = $name = $_POST['name'];
                $user->actors = $_POST['actors'];
                $user->year = $_POST['year'];
                @$user->format = array_pop(explode(".",@$_FILES['film']['name']));

                if ($user->checkName()){
                }else{
                    $errors[]= 'Название фильма  не должно быть пустым.';
                }

                if ($user->checkActors()){
                }else{
                    $errors[]= 'Поле актеров не должно быть пустым.';
                }

                if ($user->checkYear()){
                }else{
                    $errors[]= 'Поле года выхода не должно быть пустым.';
                }

                if ($user->checkTypeFilms()){
                }else{
                    $errors[]= 'Не правильный тип фильма';
                }

                if ($errors == false){
                    $result =$user->addFilm();
                }else{
                    $errors[]= 'Ваш фильм не добавлен';
                }
            }

            require_once ROOT.'/views/films/films.php';
            return true;

        }
        public function actionDelete($id){

            $delete=Films::deleteFilm($id);
            header("Location: /");
            return true;
        }
    }