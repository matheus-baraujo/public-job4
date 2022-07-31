
<!-- Topo da página -->
<div class="topo-pagina" style="background-image: url(./resources/topo-blog.png);">
    <div class="textoTopo">
        <p class="tituloPagina">BLOG</p>
    </div>
</div>

<div class="sessao">

    <div class="container-fluid">

        <div class="row">

            <?php 

                if ($linha = mysqli_fetch_array($consulta_posts)) {
                    echo '<div class="col-md-10 mx-auto">

                        <div class="postHome3 mb-3" style="background-image: url('.$linha['imagem_post'].');" onclick="accessPost('.$linha['id_post'].')">
                            <div class="postHomeText" style="color: white;" onclick="accessPost('.$linha['id_post'].')">
                                <p style="font-weight: lighter; text-align: right;">'.$linha['dia'].'</p>
                                <p class="tituloPost1 tituloPost">'.$linha['title'].'</p>
                                <p class="textoPost1">'.$linha['texto'].'</p>
                            </div>
                        </div>
        
                    </div>';

                }else {
                    echo '<div class="col-10 mx-auto" style="padding: 10%;"><p style="text-align: center; margin: auto;"><b>Mais posts em breve...</b></p></div>';
                }
            
                $counter=0;

                while ($linha = mysqli_fetch_array($consulta_posts) and $counter < 4) {

                    if ($counter%2 == 0) {
                        echo '<div class="col-md-5 ms-auto">

                            <div class="postHome2 mb-3" style="background-image: url('.$linha['imagem_post'].');" onclick="accessPost('.$linha['id_post'].')">
                                <div class="postHomeText2" style="color: white;" onclick="accessPost('.$linha['id_post'].')">
                                    <p style="font-weight: lighter; text-align: right;">'.$linha['dia'].'</p>
                                    <p class="tituloPost1 tituloPost">'.$linha['title'].'</p>
                                </div>
                            </div>
            
                        </div>';

                    }else {
                        echo '<div class="col-md-5 me-auto">

                            <div class="postHome2 mb-3" style="background-image: url('.$linha['imagem_post'].');" onclick="accessPost('.$linha['id_post'].')">
                                <div class="postHomeText2" style="color: white;" onclick="accessPost('.$linha['id_post'].')">
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

<section class="sessao">

    <p class="tituloSessao">QUER SABER ALGUM TEMA ESPECÍFICO?</p>

    <p class="tituloSugestao"><b>Deixe uma sugestão!</b></p>

    <form class="form-contact" action="sendSuggestion.php" name="form-contato" method="post">
        <input type="text" name="previous_page" value="index.php?i=blog" hidden>
        <input class="input-texto input1" type="text" name="nome" maxlength="40" placeholder="NOME" required/><br>
        <input class="input-texto input1" type="email" name="email" maxlength="30" placeholder="EMAIL" required/><br>
        <textarea class="input-texto input1" name="msg" rows="5" placeholder="SUGESTÃO" required></textarea><br>
        <input class="input-botao" type="submit" value="Enviar"/>
    </form>

</section>

            

                


            

        