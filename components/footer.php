<!-- Rodapé -->

<?php
    if($pagina!='contact' and $pagina!='admin' and $pagina!='logged_admin' and $pagina!='form_admin'){

        if ($pagina=="foryou"||$pagina=="about"||$pagina=="services"||$pagina=="blog"||$pagina=="article"||$pagina=="blog-completo") {
            echo '<div style="background-color:black; color: white;">

                <section class="sessao">
                    
                    <p class="tituloSessao">CONTATO</p>
                    <p>Av. Conselheiro Aguiar, 4599, sala 01; Recife - PE</p>
                    <p>(81) 99137-9744</p>
                    <p>Email: <a class="email-link2" href="mailto:contato@alphaengintegrada.com.br?subject=Contato%20site">contato@alphaengintegrada.com.br</a></p>
                    <div>
                        <a class="link-contato-footer2 mr-3" href="#" ><i class="fab fa-facebook-square"></i></a>
                        <a class="link-contato-footer2 mr-3" href="https://web.whatsapp.com/send?phone=5581991379744" ><i class="fab fa-whatsapp"></i></a>
                        <a class="link-contato-footer2 mr-3" href="#" ><i class="fab fa-instagram"></i></a>
                        <a class="link-contato-footer2 mr-3" href="#" ><i class="fab fa-linkedin"></i></a>
                    </div>
                    <p  >Espaço para captação de newsletter</p>
                    
                </section>
            
            </div>';
        }else {
            echo '<div style="background-color:white; color: black;">
    
                <section class="sessao">
                    
                    <p class="tituloSessao">CONTATO</p>
                    <p>Av. Conselheiro Aguiar, 4599, sala 01; Recife - PE</p>
                    <p>(81) 99137-9744</p>
                    <p>Email: <a class="email-link" href="mailto:contato@alphaengintegrada.com.br?subject=Contato%20site">contato@alphaengintegrada.com.br</a></p>
                    <div>
                        <a class="link-contato-footer mr-3" href="#"><i class="fab fa-facebook-square"></i></a>
                        <a class="link-contato-footer mr-3" href="https://web.whatsapp.com/send?phone=5581991379744"><i class="fab fa-whatsapp"></i></a>
                        <a class="link-contato-footer mr-3" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="link-contato-footer mr-3" href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <p  >Espaço para captação de newsletter</p>
                    
                </section>
            
            </div>';
        }
    }
?>