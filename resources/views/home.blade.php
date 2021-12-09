@extends('layout.layout')


@section('content')



  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>Sobre</h2>
              <p>Fundada em 2021 a ChainLight Technology é uma empresa com uma vocação definida: desenvolver soluções de sucesso para negócios. A ChainLight, nasceu da idéia de oferecer soluções de qualidade no setor de desenvolvimento de sites e sistemas Web para empresas de todo o Brasil, com o objetivo de proporcionar aos nossos clientes um novo conceito em desenvolvimento, que agregam valor e otimizam os seus negócios, possuindo ao mesmo tempo qualidade, responsabilidade e competitividade.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-bullseye"></i></i></div>
              <h4 class="title"><a href="">Missão</a></h4>
              <p class="description">A satisfação de nossos clientes através de resultados pela qualidade de nossos produtos, serviços e atendimento personalizado.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-eye-alt"></i></div>
              <h4 class="title"><a href="">Visão</a></h4>
              <p class="description">Ser sinônimo e referência em soluções tecnologicas. Essa visão é continuamente perseguida desde os nossos primeiros dias.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Lists Section ======= -->
    <section class="about-lists">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
            <span>01</span>
            <h4>Sucesso</h4>
            <p>O Sucesso de nossos clientes é o nosso sucesso</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <span>02</span>
            <h4>Lucratividade</h4>
            <p>É essencial para a melhoria contínua de nossos serviços e produtos.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <span>03</span>
            <h4>Honestidade</h4>
            <p>Porque nossa honra é nosso maior valor.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <span>04</span>
            <h4>Trabalho em Equipe</h4>
            <p>A colaboração mútua é fator indispensável para o sucesso de todos.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
            <span>05</span>
            <h4>Persistencia</h4>
            <p>É essencial para a melhoria contínua de nossos serviços e produtos.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="500">
            <span>06</span>
            <h4>Criatividade</h4>
            <p>Enxergamos o que os outros não conseguem ver transformando sonhos em realidade.</p>
          </div>

        </div>

      </div>
    </section><!-- End About Lists Section -->

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile" style="color: #20b38e;"></i>
              <span data-toggle="counter-up">128</span>
              <p>Clientes Satisfeitos</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-document-folder" style="color: #c042ff;"></i>
              <span data-toggle="counter-up">16</span>
              <p>Projetos</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="icofont-live-support" style="color: #46d1ff;"></i>
              <span data-toggle="counter-up">621</span>
              <p>Horas de Trabalho</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="icofont-users-alt-5" style="color: #ffb459;"></i>
              <span data-toggle="counter-up">8</span>
              <p>Colaboradores</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Serviços</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-web"></i></div>
            <h4 class="title"><a href="">WebSites</a></h4>
            <p class="description">Elaboração de sites empresarias, industriais e institucionais</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-chart-line-alt"></i></div>
            <h4 class="title"><a href="">Sistemas Web</a></h4>
            <p class="description">Sistemas melhoram, aceleram e viabilizam, aumentando a produtividade e lucratividade</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-network"></i></div>
            <h4 class="title"><a href="">Redes de computadores</a></h4>
            <p class="description">Compuradores e internet são fundamentais, mas organizar e manter regras são de extrema importancia</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-paint"></i></div>
            <h4 class="title"><a href="">Design</a></h4>
            <p class="description">Edição de videos e imagens são fundamentais para todo tipo de negócios, principalmente na era da informação.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-shield"></i></div>
            <h4 class="title"><a href="">Sistemas de segurança</a></h4>
            <p class="description">Sistemas de segurança consistem no uso de um ou vários dispositivos de segurança que ajudam a preservar a segurança de um estabelecimento ou domicílio contra possíveis riscos.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-thunder-light"></i></div>
            <h4 class="title"><a href="">Energias renováveis</a></h4>
            <p class="description">Energia renovável, ou seja, aquela gerada sem a emissão de poluentes, com o mínimo de prejuízo à natureza, como a energia solar, energia eólica.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Veja os nossos trabalhos e confirme tudo o que você ouviu sobre a ChainLight. Os clientes abaixo confiaram em nossos trabalhos e deram mais um passo a caminho do sucesso.</p>
          <h5 class="title"><strong>Agora é a sua vez, venha para a Chain.</strong></h5>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-sistemas">SistemasWeb</li>
              <li data-filter=".filter-portal">Portais</li>
              <li data-filter=".filter-web">Sites</li>


            <!-- Aguardando imagens

              <li data-filter=".filter-seg">Segurança</li>
              <li data-filter=".filter-painel">Painel solar</li>

              -->


            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
            <!--Portfolio item 1-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/chainweb.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Site</h4>
                <p>ChainLight</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/portfolio/chainweb.png') }}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                  <a href="https://chainlight.com.br" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!--Fim-->
            <!--Portfolio item 2
            <div class="col-lg-4 col-md-6 portfolio-item filter-portal">
              <div class="portfolio-wrap">
                <img src="{{ asset('img/portfolio/idacportal.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Portal</h4>
                  <p>IDAC</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('img/portfolio/idacportal.png') }}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                    <a href="https://idac.rj.gov.br" title="More Details"><i class="icofont-external-link"></i></a>
                  </div>
                </div>
              </div>
            </div> -->

            <!--Fim-->
            <!--Portfolio item 3-->
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('img/portfolio/photograuweb.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Site</h4>
                  <p>Photograu</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('img/portfolio/photograuweb.png') }}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                    <a href="https://photograu.com.br" title="More Details"><i class="icofont-external-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <!--Fim-->
            <!--Portfolio item 4-->
            <div class="col-lg-4 col-md-6 portfolio-item filter-sistemas">
              <div class="portfolio-wrap">
                <img src="{{ asset('img/portfolio/transparencia.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Sitemas</h4>
                  <p>Transparencia</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('img/portfolio/transparencia.png') }}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                    <a href="https://chainlight.com.br" title="More Details"><i class="icofont-external-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <!--Fim-->
            <!--Portfolio item 5-->
            <div class="col-lg-4 col-md-6 portfolio-item filter-sistemas">
              <div class="portfolio-wrap">
                <img src="{{ asset('img/portfolio/ouvidoria.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Sistemas</h4>
                  <p>Ouvidoria</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('img/portfolio/ouvidoria.png') }}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                    <a href="https://chainlight.com.br" title="More Details"><i class="icofont-external-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <!--Fim-->

        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Our Team Section =======
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Nossa Equipe</h2>
          <p>Colaboradores que viabilizam o nosso crescimento constante.</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <div class="pic"><img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>CEO</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="{{ asset('img/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Gerente de Contrato</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="{{ asset('img/team/team-3.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Desenvolvedor Master</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="{{ asset('img/team/team-4.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Gerente de Projetos</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- End Our Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Perguntas frequentes</h2>
        </div>

        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4>Sistemas Corporativos operam nos computadores da empresa. Quais as vantagens de se adotar uma solução baseada em web?</h4>
            <p>
              São várias. Citaremos três vantagens importantes: Não existe custo de distribuição e instalação do software, pois o sistema já estará disponibilizado pela Internet. Como consequência, não existe também o risco de utilização de versões divergentes e conflitantes entre os vários usuários. Em segundo lugar, a interface com o usuário em sistemas baseados em web utiliza normalmente os navegadores padrão, familiares a praticamente todos, simplificando o treinamento. Torna natural a utilização de um banco de dados centralizado, disponível para toda a empresa e suas diversas filiais.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>Tenho lido que as redes sociais tornarão os web sites corporativos inúteis. É verdade?</h4>
            <p>
              Não. As redes sociais desempenham um papel importante para as empresas seja como canal de contato com os clientes ou como mídia para divulgação de lançamentos e promoções. No entanto os sites corporativos desempenham outras funções, igualmente importantes. Para citar apenas três exemplos: canal de vendas diretas, acesso à rede de revendedores e repositório de catálogos e informações técnicas sobre produtos.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>Como garantir a dinâmica dos sites corporativos?</h4>
            <p>
              Os sites corporativos devem ter atualizações periódicas, sempre fornecendo informações úteis ao seu público alvo como agenda de eventos, notícias da empresa e do setor em que atua, fóruns, artigos técnicos, dentre outros. Estas atualizações devem ser comunicadas aos interessados por meio de Newsletters, e-mails ou redes sociais. Mas lembre-se: o interessado deve manifestar explicitamente o desejo de receber estes contatos, para que a sua mensagem não seja considerada SPAM.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
            <h4>A ChainLight oferece serviços para e-comerce?</h4>
            <p>
              Atualmente não trabalhamos com sistemas de vendas, mas quem sabe no futuro podemos começar a viabilizar esse tipo de serviço.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="400">
            <h4>Preciso de uma avaliação/orçamento. Vou ter algum custo?</h4>
            <p>
              A avaliação e o orçamento são realizados sem ônus para o cliente. Entre em contato e Solicite um orçamento e preencha as informações para um orçamento personalizado.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="500">
            <h4>Quanto custa um sistema de segurança eletrônica?</h4>
            <p>
              Para dimensionar o investimento é necessária uma visita técnica no local para avaliação dos riscos e especificação dos equipamentos necessários. Acesse a página Solicite um orçamento e preencha as informações para um orçamento personalizado.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contato</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Localização</h3>
              <p>Arraial do Cabo, Rio de Janeiro - Brasil</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>contato@chainlight.com.br</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Ligue</h3>
              <p>+55 (22) 99943-5421</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Titulo" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Menssagem"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Carregando</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensaagem foi enviada. Obrigado!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Menssagem</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

@endsection

