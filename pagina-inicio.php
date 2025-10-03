<!-- Header -->
<?php 
// Template name: Inicio
get_header(); 
?>

<?php if (have_posts()) { while (have_posts()) {
  the_post(); ?>


  <!-- Hero -->
  <section class="hero">
    <div class="container hero-content">
      <div class="hero-wrapper">
        <div class="hero-text">
          <h1>Transformamos <span>ideias</span> em soluções digitais</h1>
          <p>Impulsionamos seu negócio com tecnologia de ponta, integrações 
            inteligentes e inovação contínua.
          </p>
          <a href="#" class="btn btn-primary">
            Conheça nossas soluções  
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-arrow-right-blue.svg" alt="Icone seta para direita">
          </a>
        </div>
        <div class="hero-solutions">
          <div class="hero-solutions-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/cloud.svg" alt="Icone cloud computing" />
            <p>Cloud Computing</p>
          </div>
          <div class="hero-solutions-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/inteligencia-artifical.svg" alt="Icone inteligencia artificial " />
            <p>Inteligência Artificial</p>
          </div>
          <div class="hero-solutions-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/integracoes.svg" alt="Icone integrações" />
            <p>Integrações</p>
          </div>
        </div>
      </div>
      <div class="hero-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/hero-mobile.png" alt="Apresentação" class="hero-img-mobile" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/hero.png" alt="Apresentação" class="hero-img-desktop" />
      </div>
    </div>
  </section>

  <!-- Sobre -->
  <section class="sobre" id="sobre">
    <div class="container">
      <div class="wrapper">
      <div class="sobre-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/sobre-mobile.png" alt="Sobre a N1" class="sobre-img-mobile" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/sobre.png" alt="Sobre a N1" class="sobre-img-desktop" />
      </div>
      <div class="sobre-right">
        <h2>Sobre a N1.AG</h2>
        <p>Somos uma empresa de tecnologia especializada em transformação digital, 
          oferecendo soluções inovadoras que conectam estratégia de negócio com excelência técnica. 
          Nossa equipe multidisciplinar trabalha com paixão para entregar resultados excepcionais.
        </p>
        <div class="stats">
          <div class="stats-top">
            <div class="stats-item">
              <strong>150+</strong>
              <p>Projetos Entregues</p>
            </div>
            <div class="stats-item">
              <strong>5</strong>
              <p>Anos de Experiência</p>
            </div>
          </div>
          <div class="stats-bottom">
            <div class="stats-item">
              <strong>98%</strong>
              <p>Satisfação do Cliente</p>
            </div>
            <div class="stats-item">
              <strong>50+</strong>
              <p>Clientes Ativos</p>
            </div>
         </div>
        </div>
      </div>
      </div>
      <div class="sobre-valores">
        <div class="sobre-valores-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-missao.svg" alt="Icone missão" />
          <h3>Missão</h3>
          <p>
            Democratizar o acesso à tecnologia avançada, oferecendo soluções 
            personalizadas que impulsionam o crescimento dos nossos clientes.
          </p>
        </div>
        <div class="sobre-valores-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-visao.svg" alt="Icone visão" />
          <h3>Visão</h3>
          <p>
            Ser referência em inovação tecnológica, criando um futuro digital 
            mais conectado e eficiente para empresas de todos os portes.
          </p>
        </div>
        <div class="sobre-valores-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-valores.svg" alt="Icone valores" />
          <h3>Valores</h3>
          <p>
            Excelência, transparência, inovação contínua e compromisso total 
            com o sucesso dos nossos parceiros de negócio.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Serviços -->
  <section class="servicos" id="servicos">
    <div class="container">
      <h2>Nossos Serviços</h2>
      <p>
        Oferecemos soluções completas em tecnologia para impulsionar 
        sua empresa rumo ao futuro digital
      </p>
      <div class="grid">
        <div class="card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-desenvolvimento.svg" alt="Icone desenvolvimento">
          <h3>Desenvolvimento</h3>
          <p>
            Aplicações web e mobile modernas, escaláveis e performáticas, 
            utilizando as tecnologias mais avançadas do mercado.
          </p>
          <ul>
            <li>React/Next.js</li>
            <li>Node.js</li>
            <li>React Native</li>
            <li>Progressive Web Apps</li>
          </ul>
          <button>
            Saiba mais 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-arrow-right.svg" alt="Icone seta para direita">
          </button>
        </div>
        <div class="card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-integracoes.svg" alt="Icone integrações">
          <h3>Integrações</h3>
          <p>
            Conectamos seus sistemas de forma inteligente, automatizando 
            processos e otimizando fluxos de trabalho.
          </p>
          <ul>
            <li>APIs RESTful</li>
            <li>Microserviços</li>
            <li>Webhooks</li>
            <li>Sincronização de dados</li>
          </ul>
           <button>
            Saiba mais 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-arrow-right.svg" alt="Icone seta para direita">
          </button>
        </div>
        <div class="card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-cloud.svg" alt="Icone cloud computing">
          <h3>Cloud Computing</h3>
          <p>
            Migração e otimização de infraestrutura em nuvem para máxima 
            disponibilidade e economia.
          </p>
          <ul>
            <li>AWS/Azure</li>
            <li>DevOps</li>
            <li>Monitoramento</li>
            <li>Backup & Recovery</li>
          </ul>
           <button>
            Saiba mais 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-arrow-right.svg" alt="Icone seta para direita">
          </button>
        </div>
        <div class="card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-consultoria.svg" alt="Icone consultoria">
          <h3>Consultoria</h3>
          <p>
            Estratégias personalizadas de transformação digital para acelerar 
            seu crescimento tecnológico.
          </p>
          <ul>
            <li>Auditoria técnica</li>
            <li>Arquitetura de soluções</li>
            <li>Metodologias ágeis</li>
            <li>Gestão de projetos</li>
          </ul>
           <button>
            Saiba mais 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-arrow-right.svg" alt="Icone seta para direita">
          </button>
        </div>
        
      </div>
      <div class="cta-card">
        <h2>Pronto para transformar seu negócio?</h2>
        <p>
          Entre em contato conosco e descubra como podemos acelerar sua jornada
          de transformação digital
        </p>
        <a href="#" class="btn btn-primary">Conversar com especialista</a>
     </div>
    </div>
  </section>

  <!-- Cases -->
  <section class="cases" id="cases">
    <div class="container">
      <h2>Cases de Sucesso</h2>
      <p>
        Conheça algumas das empresas que confiaram na TechInova para suas transformações digitais
      </p>
      <div class="grid">
        <div class="card"> 
          <div class="card-icon-aspas">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-aspas-duplas.svg" alt="Icone aspas duplas" />
          </div>
          <div class="card-stars">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-star.svg" alt="Icone estrela" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-star.svg" alt="Icone estrela" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-star.svg" alt="Icone estrela" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-star.svg" alt="Icone estrela" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-star.svg" alt="Icone estrela" />
          </div>
          <p>
            “A TechInova transformou completamente nossa infraestrutura digital. 
            O resultado foi um aumento de 300% na eficiência operacional.”
          </p> 

          <div class="cases-author">
            <div class="cases-author-avatar">
              <p>CS</p>
            </div>
            <div class="cases-author-name">
              <p>Carlos Silva</p>
              <p>CTO, InnovaCorp</p>
              <p>InnovaCorp</p>
            </div>
          </div>
          
        </div>
        <div class="card"> 
          <div class="card-icon-aspas">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-aspas-duplas.svg" alt="Icone aspas duplas" />
          </div>
          <div class="card-stars">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-star.svg" alt="Icone estrela" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-star.svg" alt="Icone estrela" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-star.svg" alt="Icone estrela" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-star.svg" alt="Icone estrela" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-star.svg" alt="Icone estrela" />
          </div>
          <p>
            “Profissionalismo exemplar e soluções que realmente funcionam. 
            Nossa migração para a nuvem foi perfeita e sem interrupções.”
          </p> 

          <div class="cases-author">
            <div class="cases-author-avatar">
              <p>AC</p>
            </div>
            <div class="cases-author-name">
              <p>Ana Costa</p>
              <p>Diretora de TI, TechFlow</p>
              <p>TechFlow</p>
            </div>
          </div>
          
        </div>
        <div class="card"> 
          <div class="card-icon-aspas">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-aspas-duplas.svg" alt="Icone aspas duplas" />
          </div>
          <div class="card-stars">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-star.svg" alt="Icone estrela" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-star.svg" alt="Icone estrela" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-star.svg" alt="Icone estrela" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-star.svg" alt="Icone estrela" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-star.svg" alt="Icone estrela" />
          </div>
          <p>
            “Equipe altamente qualificada que entende as necessidades do negócio. 
            Superaram nossas expectativas em todos os aspectos.”
          </p> 

          <div class="cases-author">
            <div class="cases-author-avatar">
              <p>RM</p>
            </div>
            <div class="cases-author-name">
              <p>Roberto Mendes</p>
              <p>CEO, DataMax Solutions</p>
              <p>DataMax</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Blog -->
  <section class="blog" id="blog">
    <div class="container">
      <h2>Insights & Blog</h2>
      <p>
        Fique por dentro das últimas tendências em tecnologia e 
        transformação digital com nossos artigos especializados
      </p>
      <div class="grid">
        <div class="post"> 
          <div class="post-information-img">
            <span>Desenvolvimento</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image-futuro-desenvolvimento.png" alt="Imagem blog futuro desenvolvimento"> 
          </div>
          
          <div class="post-data">
              <ul>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-user-blog.svg" alt="Icone usuário" />
                  <span>João Silva</span>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-calendar-blog.svg" alt="Icone calendario" />
                  <span>15 Set 2024</span>
                </li>
                <li>
                  <span>5 min</span>
                </li>
              </ul>
              <h3>O Futuro do Desenvolvimento Web: Tendências para 2024</h3>
              <p>
                Descubra as principais tecnologias e frameworks que estão moldando o 
                futuro do desenvolvimento web e como se preparar para as mudanças.
              </p>
              <button>
                Ler mais
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-arrow-right.svg" alt="Icone seta direita" />
              </button>
          </div> 
        </div>
        <div class="post"> 
          <div class="post-information-img">
            <span>Inteligência Artificial</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image-ia-generativa.png" alt="Imagem IA generativa"> 
          </div>
          
          <div class="post-data">
              <ul>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-user-blog.svg" alt="Icone usuário" />
                  <span>Maria Santos</span>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-calendar-blog.svg" alt="Icone calendario" />
                  <span>10 Set 2024</span>
                </li>
                <li>
                  <span>8 min</span>
                </li>
              </ul>
              <h3>IA Generativa: Como Implementar em sua Empresa</h3>
              <p>
                Um guia prático sobre como integrar inteligência artificial 
                generativa nos processos empresariais para aumentar produtividade e inovação.
              </p>
              <button>
                Ler mais
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-arrow-right.svg" alt="Icone seta direita" />
              </button>
          </div> 
        </div>
        <div class="post"> 
          <div class="post-information-img">
            <span>Cloud Computing</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image-seguranca-cloud.png" alt="Imagem segurança em cloud"> 
          </div>
          
          <div class="post-data">
              <ul>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-user-blog.svg" alt="Icone usuário" />
                  <span>Carlos Oliveira</span>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-calendar-blog.svg" alt="Icone calendario" />
                  <span>5 Set 2024</span>
                </li>
                <li>
                  <span>6 min</span>
                </li>
              </ul>
              <h3>Segurança em Cloud: Melhores Práticas e Estratégias</h3>
              <p>
                Aprenda as estratégias essenciais para manter seus dados 
                seguros na nuvem e implementar uma política de segurança robusta.
              </p>
              <button>
                Ler mais
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-arrow-right.svg" alt="Icone seta direita" />
              </button>
          </div> 
        </div>
      </div>
      <button>
        Ver todos os artigos
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-arrow-right-blue.svg" alt="Icone seta para direita" />
      </button>
    </div>
  </section>

  <?php }; }; ?> 
  <!-- Footer -->
 <?php get_footer(); ?>
