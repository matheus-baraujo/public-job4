
    <section class="sessao">
        <p class="tituloSessao">CONTATO</p>
        <p class="tituloSessao" style="border: none; margin: 5% 0%; width: 60%;">Entre em contato e solicite seu orçamento!</p>

        <?php         
            if(isset($_GET['status'])):
                if ($_GET['status']=="sucesso"):
                    echo "<p class='msg-sucess' > Email enviado com sucesso!</p>";
                elseif ($_GET['status']=="falha"):
                    echo "<p class='msg-fail'> Falha ao enviar o email.</p>";
                endif;
            endif;
        ?>

        <form class="form-contact" action="./email_sending/send_email.php" name="form-contato" method="post">
            <input class="input-texto input1" type="text" name="nome" maxlength="40" placeholder="NOME" required/><br>
            <input class="input-texto input1" type="email" name="email" maxlength="30" placeholder="EMAIL" required/><br>
            <textarea class="input-texto input1" name="msg" rows="5" placeholder="MENSAGEM" required></textarea><br>
            <input class="input-botao" type="submit" value="Enviar"/>
        </form>

        <p >Av. Conselheiro Aguiar, 4599, sala 01; Recife - PE</p>
        <p >(81) 99137-9744</p>
        <p >Email: <a class="email-link" href="mailto:contato@alphaengintegrada.com.br?subject=Contato%20site">contato@alphaengintegrada.com.br</a></p>
        
        <div>
            <a class="link-contato-footer mr-3" href="#"><i class="fab fa-facebook-square"></i></a>
            <a class="link-contato-footer mr-3" href="https://web.whatsapp.com/send?phone=5581991379744"><i class="fab fa-whatsapp"></i></a>
            <a class="link-contato-footer mr-3" href="#"><i class="fab fa-instagram"></i></a>
            <a class="link-contato-footer mr-3" href="#"><i class="fab fa-linkedin"></i></a>
        </div>
            
        <p >Espaço para captação de newsletter</p>

    </section>