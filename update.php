<?php

session_start();

if(isset($_SESSION['login'])){

    include 'connection.php';


    $tipo = $_POST['type'];

    switch ($tipo) {

        case 'post':
            $id = $_POST['id'];
            $title = $_POST['title'];
            $text = $_POST['texto'];

            if($_FILES['imagem']['size'] == 0){

                $query = 'UPDATE posts SET title = "'.$title.'", texto = "'.$text.'" WHERE id_post = '.$id.'';
                

            }else{
                
                $cover = $_FILES['imagem'];

                $ext = strtolower(substr($_FILES['imagem']['name'],-4)); //Pegando extensão do arquivo
                $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
                $dir = './post_images/'; //Diretório para uploads
            
                move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo

                $current_cover = mysqli_fetch_array(mysqli_query($conn, 'SELECT * FROM posts WHERE id_post = '.$id.''));
                unlink($current_cover['imagem_post']);

                $query = 'UPDATE posts SET title = "'.$title.'", imagem_post = "'.$dir.$new_name.'", texto = "'.$text.'" WHERE id_post = '.$id.'';
            }
            

            if ($sucess = mysqli_query($conn, $query)) {

                header('location: index.php?i=logged_admin');
            }
            

            break;

    
        default:
            header('location: index.php?i=logged_admin');
            break;
    }


}