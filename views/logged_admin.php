
<style>
    body{
        background-color: #777777;
    }
</style>

<section class="sessao" style="padding-bottom: 10%; padding-top: 15%;">

    <a class="btn btn-logout" href="logout.php" style="position: absolute;"> Logout </a>

    <p class="tituloPagina" style="text-align: center; margin-bottom: 10%; border: none;"><b>Admin</b></p>

    <p class="tituloSessao">Postagens</p>

    <div class="table-admin">
        <table id="table_posts" class="table table-striped table-hover" style="text-align: center;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Data</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while ($item = mysqli_fetch_array($consulta_posts)) {
                        echo'<tr>
                            <td>'.$item["id_post"].'</td>
                            <td>'.$item["title"].'</td>
                            <td>'.$item["dia"].'</td>
                            <td><a href="?i=form_admin&type=post&order=edit&id='.$item["id_post"].'" class="btn-edit-delete"><i class="fas fa-pen"></i></a></td>
                            <td><a href="delete.php?type=post&id='.$item["id_post"].'" class="btn-edit-delete"><i class="fas fa-trash"></i></a></td>
                        </tr>';
                    }
                ?>
            </tbody>
            
        </table>
        
    </div>
    <a href="?i=form_admin&type=post&order=add" class="btn btn-logout" style="float: right;" >Adicionar</a>

</section>