        
        <?php 

            if(isset($_GET['service'])){
                $service = $_GET['service'];

                switch ($service) {
                    case 'contrucao':
                        $imagemTopo = "'./resources/servicos-slide (1).png'";
                        $titulo = 'CONSTRUÇÃO';
                        $service2 = 'build';
                        break;

                    case 'reforma':
                        $imagemTopo = "'./resources/servicos-slide (4).png'";
                        $titulo = 'REFORMA';
                        $service2 = 'remodeling';
                        break;

                    case 'manutencao':
                        $imagemTopo = "'./resources/servicos-slide (5).png'";
                        $titulo = 'MANUTENÇÃO';
                        $service2 = 'maintenance';
                        break;

                    case 'assessoria':
                        $imagemTopo = "'./resources/servicos-slide (2).png'";
                        $titulo = 'ASSESSORIA';
                        $service2 = 'advice';
                        break;

                    case 'consultoria':
                        $imagemTopo = "'./resources/servicos-slide (3).png'";
                        $titulo = 'CONSULTORIA';
                        $service2 = 'counseling';
                        break;
                    
                    default:
                        $imagemTopo = './resources/topo-servicos.png';
                        $titulo = 'SERVIÇOS';
                        $service2 = 'services';
                        break;
                }

            }else{
                $imagemTopo = './resources/topo-servicos.png';
                $titulo = 'SERVIÇOS';
                $service2 = 'services';
            }

            
            
        ?>


        <!-- Topo da página -->
        <div class="topo-pagina" style="background-image: url(<?php echo $imagemTopo; ?>);">
        
            <div class="textoTopo">
                <p class="tituloPagina"><?php echo $titulo?></p>
            </div>
        </div>
        
        <div class="content-where" style="background-image: none; background-color: white; color: black;">

            <?php 
            
                switch ($service2) {
                    case 'build':
                        echo '<section class="sessao">
                            <p>Na Alpha Engenharia Integrada seus projetos são vistos diferentes. Inicialmente, fazemos uma análise dos diferentes projetos elaborados, 
                                visitamos o local da obra com o intuito de promovermos a compatibilização entre eles e minimizarmos problemas na execução. Além disso, 
                                primamos pela utilização de materiais registrados e certificados pelos órgãos competentes visando garantir a qualidade da construção. 
                                Forneceremos, também, uma planilha detalhada de todos os serviços que serão executados.<br><br></p>

                            <p>Com um planejamento 4D, conseguimos promover uma coordenação entre as diferentes etapas da obra, promover o apoio logístico necessário 
                                e entregar a obra no prazo estabelecido em contrato. Isso mesmo, embora para a maioria a entrega de uma obra seja incerta, para nós a 
                                pontualidade se constitui em um de nossos pilares no processo de respeito e satisfação do cliente.<br><br></p>

                            <p>Atenta às tendências que as tecnologias disponíveis para o setor da construção civil proporcionam, a Alpha se destaca no uso delas para 
                                facilitar análises preliminares, identificar problemas, facilitar a execução e garantir um excelente resultado.<br><br></p>

                            <p>Após a conclusão da obra o cliente receberá o termo de encerramento, o manual de uso, operação e manutenção em conformidade com a NBR 
                                14037, assim como informações acerca dos prazos de garantia dos serviços, em atendimento à NBR 15.575 e suporte sobre orientações de uso.<br><br></p>
                
                            <a class="link-contato" href="?i=contact">ENTRE EM CONTATO</a>
                
                        </section>';
                        break;

                    case 'remodeling':
                        echo '<section class="sessao">
                        <p>É natural que o envelhecimento das obras construídas possa impor processos, por segurança, perda de função ou qualidade, 
                            assim como por questões culturais e econômicas podem levar a processos de alteração das construções.<br><br></p>

                        <p>Ao longo do tempo, as funções definidas em projeto para as edificações terão necessidade de ajustes, adequações e 
                            recuperação de suas propriedades técnicas.<br><br></p>

                        <p>Pois é, a execução de uma obra de reforma não é nada trivial. Uma reforma pede planejamento, elaboração de projetos 
                            executivos e a contratação de uma empresa de engenharia séria.<br><br></p>

                        <p>E você sabia que sua obra possui garantia, assim como cada um dos sistemas?<br><br></p>

                        <p>O código civil traz que a responsabilidade pela segurança e solidez é de 5 anos, e a NBR 15.575 estabelece os prazos 
                            de garantia para cada sistema ou elemento da edificação.<br><br></p>

                        <p>Na Alpha Engenharia Integrada seus projetos são vistos diferentes. Inicialmente, fazemos uma análise dos diferentes 
                            projetos elaborados, visitamos o local da obra com intuito de promovermos a compatibilização entre eles e minimizarmos 
                            problemas na execução. Além disso, primamos pela utilização de materiais registrados e certificados pelos órgãos 
                            competentes visando garantir a qualidade da reforma.<br><br></p>

                        <p>Com um planejamento 4D, conseguimos promover uma coordenação entre as diferentes etapas da obra, promover o apoio 
                            logístico necessário e entregar a obra no prazo estabelecido em contrato. Isso mesmo, embora para a maioria a entrega 
                            de uma obra seja incerta, para nós a pontualidade se constitui em um de nossos pilares no processo de respeito e 
                            satisfação do cliente.<br><br></p>

                        <p>Atenta às tendências que as tecnologias disponíveis para o setor da construção civil proporcionam, a Alpha se destaca 
                            no uso delas para facilitar análises preliminares, identificar problemas, facilitar a execução e garantir um excelente 
                            resultado.<br><br></p>

                        <p>Após a reforma o cliente receberá o termo de encerramento, o manual de uso, operação e manutenção em conformidade com a 
                            NBR 14037, assim como informações acerca dos prazos de garantia dos serviços, em atendimento à NBR 15.575 e suporte sobre 
                            orientações de uso.<br><br></p>
            
                        <a class="link-contato" href="?i=contact">ENTRE EM CONTATO</a>
            
                        </section>';
                        break;

                    case 'maintenance':
                        echo '<section class="sessao">
                            <p>Ao longo do tempo, as funções definidas em projeto para as edificações terão necessidade de ajustes, 
                                adequações e recuperação de suas propriedades técnicas.<br><br></p>
            
                            <p>A manutenção é um conjunto de atividades realizadas com o objetivo de recuperar a capacidade funcional 
                                da edificação e de seus sistemas. Ou seja, a manutenção promove o aumento da durabilidade da edificação, 
                                além de fornecer condições de segurança e habitabilidade.<br><br></p>
            
                            <p>A falta de atuação de manutenção conforme estabelece a legislação reduzirá a vida útil da edificação, 
                                assim como poderá ensejar responsabilidades pela omissão dos agentes.<br><br></p>
            
                            <p>Em Pernambuco, a lei 13.032/2006, regulamentada pelo decreto 33.747/2009, determinou a necessidade de 
                                se realizar vistorias períciais periódicas em edifícios residenciais, escolas e salas comerciais. Ainda 
                                segundo a lei, as vistorias deverão ser realizadas a cada 3 anos, ou 5 anos, dependendo do enquadramento 
                                da edificação.<br><br></p>
            
                            <p>Na Alpha Engenharia Integrada possuímos soluções corporativas, educacionais e condominiais, pois entendemos 
                                a importância em proporcionar uma manutenção clara, objetiva, ampla, estruturada e eficiente e com 
                                previsibilidade.<br><br></p>
            
                            <p>Com um planejamento 4D, conseguimos promover uma coordenação entre as diferentes etapas de um processo 
                                de manutenção e promover o apoio logístico necessário.<br><br></p>
            
            
                            <p>Pioneira e exclusiva na implementação de um plano de manutenção sistematizado e estruturado, a Alpha 
                                vai além da verificação rotineira dos itens na manutenção preventiva. Alinhada com a indústria 4.0 
                                atuamos na checagem de funcionamento dos sistemas no chamado planejamento 4D. Com uso de tecnologias 
                                e equipamentos de última geração conseguimos antecipar a solução de problemas futuros, verificar a 
                                conformidade com as normas e promover mais segurança e tranquilidade aos usuários. Assim, com o uso 
                                da termografia, de dataloggers, luxímetros, entre outros, é possível atingir níveis altos de eficiência 
                                na qualidade de prestação de serviço.<br><br></p>
            
                            <a class="link-contato" href="?i=contact">ENTRE EM CONTATO</a>
            
                        </section>';
                        break;

                    case 'advice':
                        echo '<section class="sessao">
                            <p>Diferente da consultoria, a assessoria está presente em todo o processo de implantação do 
                                processo responsável em solucionar o problema.<br><br></p>
            
                            <p>A finalidade essencial da assessoria é verificar as necessidades dos clientes por meio de 
                                diagnósticos e processos, identificando problemas e apontando soluções para o encerramento 
                                do problema, ações de mitigação ou recomendações de melhoria, com orientações no curso 
                                de todo o processo.<br><br></p>
            
                            <p>Dentro da engenharia o papel da assessoria tem se tornando imprescindível na solução de 
                                problemas, tendo em vista a composição multidisciplinar da equipe envolvida.<br><br></p>
            
                        
                            <p>Na Alpha Engenharia Integrada a experiência acumulada da equipe permite que você conte 
                                com uma assessoria objetiva e direcionada para solucionar questões envolvendo condomínios, 
                                serviços de manutenção, reformas e construções.<br><br></p>
            
                            <a class="link-contato" href="?i=contact">ENTRE EM CONTATO</a>
            
                        </section>';
                        break;

                    case 'counseling':
                        echo '<section class="sessao">
                            <p>A consultoria nada mais é do que um serviço oferecido por um profissional ou empresa 
                                com o intuito de solucionar um problema específico, verificando as necessidades dos 
                                clientes por meio de diagnósticos e processos, identificando problemas e apontando 
                                soluções para o encerramento do problema, ações de mitigação ou recomendações de melhoria.<br><br></p>
            
                            <p>Nossa consultoria é oferecida com foco em empreendimentos a serem projetados ou já 
                                existentes, promovendo suporte técnico e orientações em relação às melhores soluções 
                                a serem adotadas, levando em consideração os aspectos construtivos, econômicos, 
                                ambientais e funcionais.<br><br></p>
            
                            <p>Na Alpha Engenharia Integrada a experiência acumulada da equipe permite que você 
                                conte com uma consultoria direcionada para solucionar questões envolvendo condomínios, 
                                serviços de manutenção, reformas e construção.<br><br></p>
            
                            <a class="link-contato" href="?i=contact">ENTRE EM CONTATO</a>
            
                        </section>';
                        break;
                    
                    default:
                        echo '<div class="py-5 mx-auto slideServices">

                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    
                                    <div class="carousel-item active">
                                        <a href="?i=services&service=contrucao">
                                            <img class="d-block w-100 imgSlide" src="./resources/servicos-slide (1).png" alt="Second slide">
                                            <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.9);">
                                                <p class="tituloSlide2">CONSTRUÇÃO</p>
                                                <p>Foco em qualidade e prazo de entrega.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="?i=services&service=assessoria">
                                            <img class="d-block w-100" src="./resources/servicos-slide (2).png" alt="Third slide">
                                            <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.9);">
                                                <p class="tituloSlide2">ASSESSORIA</p>
                                                <p>Suporte técnico para solucionar problemas.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="?i=services&service=consultoria">
                                            <img class="d-block w-100" src="./resources/servicos-slide (3).png" alt="Fourth slide">
                                            <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.9);">
                                                <p class="tituloSlide2">CONSULTORIA</p>
                                                <p>Sugestão de ações, a partir de conhecimento técnico, para solução de problemas.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="?i=services&service=reforma">
                                            <img class="d-block w-100" src="./resources/servicos-slide (4).png" alt="Fhift slide">
                                            <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.9);">
                                                <p class="tituloSlide2">REFORMA</p>
                                                <p>Foco em qualidade e prazo de entrega.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="?i=services&service=manutencao">
                                            <img class="d-block w-100" src="./resources/servicos-slide (5).png" alt="Third slide">
                                            <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.9);">
                                                <p class="tituloSlide2">MANUTENÇÃO</p>
                                                <p>Ações para garantir condições de solidez, segurança e habitabilidade.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
            
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
            
                            </div>
            
                        </div>';
                        break;
                }

            ?>

        </div>
            

            
            
            