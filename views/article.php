         
<!-- Topo da página -->
<div class="topo-pagina" style="background-image: url(./resources/topo-blog.png);">
    <div class="textoTopo">
        <p class="tituloPagina">BLOG</p>
    </div>
</div>

<div class="sessao">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-10 mx-auto" style="background-color: white; color: black;">

                <?php 

                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        $local_query = mysqli_fetch_array(mysqli_query($conn, 'SELECT * FROM posts WHERE id_post ='.$id.''));

                        echo '<div class="w-100 img-post-principal" style="background-image: url('.$local_query['imagem_post'].');">

                            <div class="info-post-principal" style="color: white;">
                                <p style="font-weight: lighter; text-align: right;">'.$local_query['dia'].'</p>
                                <p><b>'.$local_query['title'].'</b></p>
                                
                            </div>

                        </div>';

                        $texto = explode(PHP_EOL, $local_query['texto']);

                        echo '<div class="articleText">';
                        
                        for($contador = 0; $contador < count($texto); $contador++){
                            
                            if (str_contains($texto[$contador], "youtu.be/") or str_contains($texto[$contador], "youtube.com/")){
                        
                                $embed = 'https://www.youtube.com/embed/'.substr($texto[$contador],-11);
        
                                echo '<iframe class="playerYoutube" src="'.$embed.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                                
                            } else{
                                echo '<p>'.$texto[$contador].'</p>';
                            }
                            
                        
                        }
                        
                        echo '</div>';
                        
                        

                    }else{
                        header("location: index.php?i=blog");
                    }

                ?>  

            </div>


        </div>


        <div class="row">

            <?php 

                $counter=0;

                while ($linha = mysqli_fetch_array($consulta_posts) and $counter < 4) {

                    if ($counter%2 == 0) {
                        echo '<div class="col-md-5 ms-auto">

                            <div class="postHome2 mb-3" style="background-image: url('.$linha['imagem_post'].');" onclick="accessPost('.$linha['id_post'].')">
                                <div class="postHomeText2" style="color: white;">
                                    <p style="font-weight: lighter; text-align: right;">'.$linha['dia'].'</p>
                                    <p class="tituloPost1 tituloPost">'.$linha['title'].'</p>
                                </div>
                            </div>

                        </div>';

                    }else {
                        echo '<div class="col-md-5 me-auto">

                            <div class="postHome2 mb-3" style="background-image: url('.$linha['imagem_post'].');" onclick="accessPost('.$linha['id_post'].')">
                                <div class="postHomeText2" style="color: white;">
                                    <p style="font-weight: lighter; text-align: right;">'.$linha['dia'].'</p>
                                    <p class="tituloPost1 tituloPost">'.$linha['title'].'</p>
                                </div>
                            </div>

                        </div>';
                        
                    }

                    $counter++;
                }

            ?>

            <div class="col-md-10 mx-auto">
                <p style="text-align: right;">
                    <a class="link-blog2" href="?i=blog-completo">Todas as postagens <i class="fas fa-angle-right"></i></a>
                </p>
            </div>

        </div>

    </div>

</div>


<section class="sessao" style="background-color: white; color: black; margin-top: 5%;">
    
    <p class="tituloSessao">QUER SABER ALGUM TEMA ESPECÍFICO?</p>
    <p class="tituloSugestao"><b>Deixe uma sugestão!</b></p>

    <form class="form-contact" action="sendSuggestion.php" name="form-contato" method="post">
        <?php 
            if (isset($_GET['id'])) {
                echo '<input type="text" name="previous_page" value="index.php?i=article&id='.$id.'" hidden>'; 
            }else{
                echo '<input type="text" name="previous_page" value="index.php?i=blog" hidden>'; 
            }
        ?>
        
        <input class="input-texto input1" type="text" name="nome" maxlength="40" placeholder="NOME" required/><br>
        <input class="input-texto input1" type="email" name="email" maxlength="30" placeholder="EMAIL" required/><br>
        <textarea class="input-texto input1" name="msg" rows="5" placeholder="SUGESTÃO" required></textarea><br>
        <input class="input-botao" type="submit" value="Enviar"/>
    </form>

</section>