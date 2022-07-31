
<style>
    body{
        background-color: #777777;
    }
</style>

<!-- Admin Login Form -->
<section class="sessao" style="padding-top: 6%; padding-bottom: 6%;">
 
<?php 
    if (isset($_GET['type']) and isset($_GET['order'])) {
        $type = $_GET['type'];
        $order = $_GET['order'];
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }

        switch ($type) {
#posts
            case 'post':
                if ($order == 'add') {
                    echo '<!-- title, imagem, data  -->
                    <p class="tituloPagina" style="text-align: center; margin-bottom: 5%; font-weight: bold; border: none;">Adicionar Posts</p>

                    <form action="insert.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="type" value="post" hidden>

                        <label for="title" class="tituloSessao" style="margin-bottom: 1%;">Titulo*</label>
                        <input id="title" type="text" class="formulario input-texto input3" name="title" style="margin-bottom: 5%;" required>

                        <label for="texto" class="tituloSessao" style="margin-bottom: 1%;">Texto*</label>
                        <textarea id="texto" class="formulario input-texto input3" name="texto" rows="4" style="margin-bottom: 5%;" required></textarea>

                        <label for="imagem" class="tituloSessao" style="margin-bottom: 1%;">Imagem*</label>
                        <input id="imagem" type="file" class="formulario input-texto input3" name="imagem" accept="image/*" style="margin-bottom: 5%;" required>

                        <input  type="text" name="data" hidden value="'.date("d/m/Y").'">

                        <input type="submit" value="Salvar" class="btn btn-logout" style="float: right;">
                        <a href="?i=logged_admin" class="btn btn-logout" style="float: right; margin-right: 2%;">Cancelar</a>
                    </form>';
                }
                elseif($order == 'edit'){
                    $query = 'SELECT * FROM posts WHERE id_post = '.$id.'';
                    $local_query = mysqli_query($conn, $query);
                    if ($item = mysqli_fetch_array($local_query)){
                        echo '<!-- title, imagem-post, data  -->

                        <p class="tituloPagina" style="text-align: center; margin-bottom: 5%; font-weight: bold; border: none;">Editar Posts</p>
            
                        <form action="update.php" method="post" enctype="multipart/form-data">
                            <input type="text" name="type" value="post" hidden>
                            <input type="text" name="id" value="'.$id.'" hidden>

                            <label for="title" class="tituloSessao" style="margin-bottom: 1%;">Titulo*</label>
                            <input id="title" type="text" class="formulario input-texto input3" name="title" style="margin-bottom: 2%;" value="'.$item["title"].'" required>

                            <label for="texto" class="tituloSessao" style="margin-bottom: 1%;">Texto</label>
                            <textarea id="texto" class="formulario input-texto input3" name="texto" rows="4" style="margin-bottom: 2%;">'.$item["texto"].'</textarea>

                            <label for="imagem" class="tituloSessao" style="margin-bottom: 1%;">Imagem</label>
                            <input id="imagem" type="file" class="formulario input-texto input3" name="imagem" accept="image/*" style="margin-bottom: 5%;">
        
                            <input type="submit" value="Salvar" class="btn btn-logout" style="color:black; float: right;">
                            <a href="?i=logged_admin" class="btn btn-logout" style="color:black; float: right; margin-right: 2%;">Cancelar</a>
                        </form>';
                    }
                    
                }
                break;

            default:
                header('location:index.php?i=logged_admin');
                break;
        }



    }



?>

</section>