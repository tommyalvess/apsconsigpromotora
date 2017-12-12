<!DOCTYPE HTML>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>APS Consig</title>
	<link rel="shortcut icon" href="img/LogoTriangulos50.png" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="APS CONSIG" />
	<meta name="keywords" content="consignado, aposentados, pensionistas, aps, consig, aps consig, apsconsigpromotora, promotora" />
	<meta name="author" content="aps consig" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="facebook:title" content="Aps Consig" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400, 900" rel="stylesheet"> -->
	<link rel="stylesheet" href="css/reset.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Meu Estilo -->
	<link rel="stylesheet" href="css/novoestilo.css">
	<link rel="stylesheet" href="css/newresponsivel.css">
	<!-- cliente logo -->
	<script src="js/clientelogo.js"></script>
	<!-- Validaçao do formSolicitar -->
	<script src="js/validacao.js"></script>

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>

	<script src="js/smothscroll.min.js"></script>

	<!-- Second -->
	<!-- CSS -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<!-- <link rel="stylesheet" href="css/stylee.css"> -->

	<!-- Js -->
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/plugins.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

		<style>
        /*customizar depois*/
      button.btn.btn-warning:hover{background-color: red;}
			#service {
			    background-color: rgba(5, 83, 147, 0.15);
			}
    </style>
		<script type="text/javascript">
		function id( el ){
		        return document.getElementById( el );
		}
		function hide_all(){
		        var divs = id('serviHide').getElementsByClassName('oculta');
		        for( var i=0; i<divs.length; i++ )
		        {
		                divs[i].style.display = 'none';
		        }
		}
		/* http://www.javascriptkit.com/jsref/event.shtml */
		function disablelink( e ){
		        var evt = window.event || e
		        if (evt.preventDefault) //supports preventDefault?
		                evt.preventDefault()
		        else //IE browser
		                return false
		}
		window.onload = function(){
		        hide_all();
		        var as = id('serviHide').getElementsByTagName('a');
		        for( var i=0; i<as.length; i++ )
		        {
		                as[i].onclick = function( e ){
		                        hide_all();
		                        var id_el = this.href.split('#')

		                        id( id_el[1] ).style.display = 'block';
		                        return disablelink( e );
		                }
		        }
		}

		function closeModal() {
			$('#cartoonVideo').remove();
			}
			function mascaraData( campo, e ){
				var kC = (document.all) ? event.keyCode : e.keyCode;
				var data = campo.value;

				if( kC!=8 && kC!=46 ){
					if( data.length==2 ){
						campo.value = data += '/';
					}
					else if( data.length==5 ){
						campo.value = data += '/';
					}
					else
						campo.value = data;
				}
			}
		</script>

		<script type="text/javascript">
			$(document).ready(function(){
				smoothScroll.init();

				var contatoForm = document.querySelector("#contatoForm");

				$(contatoForm).submit(function(event){
					event.preventDefault();

					$.ajax({
						type: "POST",
						url: "__email.php",
						data: $( this ).serialize(),
						success: function(e){
							alert(e);
						},
						error: function(e){
							alert(e);
						},
						dataType: "text"
					});
				});
				});
			</script>

			<script type="text/javascript">

				function rolarSuave() {
					$('a[href*=#]:not([href=#])').click(function() {
				    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				      var target = $(this.hash);
				      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				      if (target.length) {
				        $('html,body').animate({
				          scrollTop: target.offset().top
				        }, 1000);
				        return false;
				      }
				    }
				  });
				}
			</script>

			<script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "url": "http://www.apsconsigpromotora.com.br",
          "logo": "http://www.apsconsigpromotora.com.br/img/bgAPS.png",
          "description": "Especilista em crédito consignado com atendimento personalizado para você!",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "São Paulo",
            "addressRegion": "São Paulo",
            "addressCountry": "Brazil"
          },
          "contactPoint": [
            {
              "@type": "ContactPoint",
              "telephone": "+55 (011) 31050-7710",
              "contactType": "Aps Consig",
              "areaServed": [
                "BR"
              ],
              "availableLanguage": [
                "Portuguese"
              ]
            },
            {
              "@type": "ContactPoint",
              "telephone": "+55 (011) 9-9876-6454",
              "contactType": "whatsapp",
              "areaServed": [
                "BR"
              ],
              "availableLanguage": [
                "Portuguese"
              ]
            }
          ]
        }
        </script>
	</head>

<body>

			<div class="gtco-loader"></div>
				<div id="page">
					<nav class="gtco-nav" role="navigation">
						<div class="container">
							<div class="row">

								<div class="col-sm-2 col-xs-12">
									<div id="gtco-logo"><img id="logo" src="img/logoapsbig.png" alt="APS Consig"></div>
								</div>

								<div class="col-xs-10 text-right menu-1 main-nav">
									<ul>
										<li class="active"><a href="#" data-nav-section="home">Home</a></li>
										<li><a href="#" data-nav-section="sobre">Sobre Nós</a></li>
										<li><a href="#" data-nav-section="servico">Serviços</a></li>
										<li class="btn-cta"><a href="#" data-nav-section="contato"><span>Contato</span></a></li>
									</ul>
								</div>

							</div>

						</div>
					</nav>

					<section id="gtco-hero" data-section="home" data-stellar-background-ratio="0.5">
						<!-- Inicio carrossel -->
								<div id="meu-carrossel" class="carousel slide" data-ride="carousel">
								<!-- bolas de marcação -->
								<ol class="carousel-indicators">
								<li data-target="#meu-carrossel" data-slide-to="0" class="active"></li>
								<li data-target="#meu-carrossel" data-slide-to="1"></li>
								<li data-target="#meu-carrossel" data-slide-to="2"></li>
								</ol>

								<!-- Slides -->
								<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img class="img-responsive" src="img/banner3.1.jpg" alt="...">
									<!-- <div class="carousel-caption">
										<h3></h3>
										<p></p>
									</div> -->
								</div>

								<div class="item">
									<img class="img-responsive" src="img/banner2.1.jpg" alt="...">
									<!-- <div class="carousel-caption">
										<p></p>
									</div> -->
								</div>

								<div class="item">
									<img class="img-responsive" src="img/banner1.1.jpg" alt="...">
									<!-- <div class="carousel-caption">
										<p></p>
									</div> -->
								</div>
								</div>

								<!-- Controle -->
								<a class="left carousel-control" href="#meu-carrossel" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								</a>
								<a class="right carousel-control" href="#meu-carrossel" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</a>
								</div>
								<!-- Fim carrossel -->


					</section>

					<!-- Area de sobre Nós -->
					<section id="gtco-about" data-section="sobre">
						<div class="container">
							<div class="row">
								<div class="row row-pb-md">
									<div id="tituloresp" class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
										<h1 id="resT">Especialista em crédito consignado com atendimento personalizado para você!</h1>
									</div>
								</div>
								<div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
										<img src="img/logoeaps.png" id="respImg" class="img-responsive">
								</div>

								<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
									<h2 class="heading-colored">Sobre a APS Consing</h2>
									<p>A APS CONSIG é uma empresa com objetivo de ajudar as pessoas a realizarem seus sonhos através da
										oferta de produtos financeiros de qualidade.<br> Oferecendo um rigoroso padrão em qualidade dos
										serviços ofertados.<br>Surge a partir da rica experiência entre os sócios na prestação de serviços
										financeiros e atendimento aos clientes, solida união de esforços, com objetivo de facilitar a
										concessão	de crédito à seus clientes.<br>
								 <p><b>Missão:</b></p>
								 <p>Fazer chegar até os nossos clientes, informações e serviços de qualidade, que proporcionem:
									 satisfação, segurança e tranquilidade, por meios de equipes bem treinadas
									 e capacitadas, atuando como correspondente bancário, consultoria e prestação de serviços à terceiros.
									 Buscando principalmente, relacionamentos duradouros gerando harmonia entre os interesses.</p>
								<p><b>Valores:</b></p>
									<ul>
				            <li class="subTTec">Honestidade</li>
				            <li class="subTTec">Segurança</li>
										<li class="subTTec">Compromisso com nossos clientes e parceiros</li>
				            <li class="subTTec">Bom Relacionamento</li>
				          </ul>

							</div>
						</div>
					</section>

				<!-- Area de Serviços -->
				<section id="service"  data-section="servico">
			    <div id="serviHide">
			      <div class="container">
			        <div class="row">
			            <div class="row row-pb-md">
			              <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn"><br>
			                <h1 id="txtAjust">Nossos Serviços</h1>
			                <p class="sub"></p>
			              </div>
			            </div>

			        <div class="row">
			                <div id="consigCenter"class="col-md-3 .col-md-pull-9">
			                  <div class="service-item">
			                    <i class="ion-compass"></i>
			                    <h4 id="txtCentro">CRÉDITO CONSIGNADO</h4>
			                    <p id="TextoMar">É uma linha de crédito destinada a aposentados e pensionistas, funcionários,
			                      servidores públicos, federais, estaduais e municipais.
			                      Ativos, inativos.</p>
														<!-- <p id="btnSoli"><a href="#titulo"  class="read-more"><i class="icon-chevron-right"></i></a></p> -->
			                      <p><a href="#credConsig" onclick="rolarSuave();" class="read-more sumir">Saiba Mais<i class="icon-chevron-right"></i></a></p>
												</div>
			                </div>
											<div class="btnSolicite">
											</div>
			                <div class="col-md-3 .col-md-pull-9">
			                  <div class="service-item">
			                    <i class="ion-compass"></i>
			                    <h4 id="txtCentro">CARTÃO DE CRÉDITO</h4>
			                    <p id="TextoMar">O cartão do aposentado e pensionista. Além de ter as melhores taxas de juros do mercado,
			                      você pode contar com benefícios e vantagens exclusivas.</p>
			                      <p><a id="" href="#credCartao" class="read-more sumir">Saiba Mais<i class="icon-chevron-right"></i></a></p>
			                  </div>
			                </div>

			                <div class="col-md-3 .col-md-pull-9">
			                  <div class="service-item">
			                    <i class="ion-earth"></i>
			                    <h4 id="txtCentro">REFINANCIAMENTO</h4>
			                    <p id="TextoMar">Está operação é feita dentro da mesma instituição que o cliente já possui
			                      empréstimo.</p>
														<p id="btnSoli"><a href="#titulo"  class="read-more sumir"><i class="icon-chevron-right"></i></a></p>
			                </div>
			              </div>

										<div class="col-md-3 .col-md-pull-9">
		                  <div class="service-item">
		                    <i class="ion-earth"></i>
		                    <h4 id="txtCentro">PORTABILIDADE</h4>
		                    <p id="TextoMar">A Portabilidade de Crédito permite a transferência de empréstimos e financiamentos
		                      de outros bancos ou financeiras que possuem taxas excessivas para um banco com
		                      taxas mais flexíveis e justas.</p>
													<a href="#credPort" class="read-more sumir" onclick="scrolear();">Saiba Mais<i class="icon-chevron-right"></i></a>
			                </div>
			              </div>

									<div class="col-md-8 oculta" id="credConsig">
												<div class="row row-pb-md">
													<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn"><br>
														<h1 id="txtAjust">Crédito Consignado</h1>
														<p class="sub"></p>
													</div>
												</div>
												<p id="TextoMar">Trata-se de um Crédito com taxas de juros especiais e prestações debitadas diretamente
													na folha de pagamento ou benefício, sem necessidade de avalista. Sua contratação é rápida,
													sem burocracia. Não é necessário possuir Conta Corrente.</p>
												<p id="TextoMar">Essa modalidade de Crédito pode ser contratada por Aposentados e Pensionistas do INSS,
													por Funcionários Públicos Municipais, Estaduais e Federais e Servidores Públicos das
													Forças Armadas do Brasil. Também podem ser beneficiados por essa modalidade de Crédito,
													os Funcionários de Empresas Privadas que possuem o convênio.</p>
												<p id="TextoMar"><b>Solicite uma consulta e faremos o melhor para você!</b></p>
												<p id="TextoMar"><b>Benefícios:</b></p>
													<ul>
														<li class="subTTec">Facilidade na contratação, sem necessidade de avalista</li>
														<li class="subTTec">Segurança Rapidez na liberação do dinheiro</li>
														<li class="subTTec">Comodidade (parcelas descontadas diretamente na folha de pagamento)</li>
														<li class="subTTec">Taxas Especiais e bem atrativas</li>
														<li class="subTTec">Parcelamento em até 72 meses (dependendo da aprovação do Convênio)</li>
														<li class="subTTec">Não é necessário possuir conta corrente</li>
														<li class="subTTec">Sem necessidade de ir até agências bancárias ou financeiras.</li>
													</ul>
											</div>
											<div class="col-md-4"></div>
								<section data-section="cartao">
									<!-- Area de inf  -->
				            <div class="col-md-8 oculta" id="credCartao">
											<div class="row row-pb-md">
					              <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn"><br>
					                <h1 id="txtAjust">Cartão de Crédito</h1>
					                <p class="sub"></p>
					              </div>
					            </div>
				              <p id="TextoMar">Com os cartões de crédito fica muito mais fácil realizar compras e pagar contas.
				                Além de ter as melhores taxas de juros do mercado, você pode contar com benefícios
				                e vantagens exclusivas.
				                Para servidores públicos, aposentados e pensionistas (consulte se o seu órgão pagador
				                possui convênio), o BMG oferece o BMGCard, cartão de crédito consignado com a bandeira
				                MasterCard, que permite o desconto do pagamento mínimo diretamente na folha ou no
				                benefício.</p>

				                <p id="TextoMar"><b>Conheça as vantagens:</b></p>
				                  <ul>
				                    <li class="subTTec">5% a mais de margem</li>
				                    <li class="subTTec">Cartão Internacional</li>
				                    <li class="subTTec">Bandeiras Visa e MasterCard</li>
				                    <li class="subTTec">Sem taxa de anuidade</li>
				                    <li class="subTTec">Sem taxa de aquisição</li>
				                    <li class="subTTec">Sem multa por atraso</li>
				                    <li class="subTTec">Sem consulta ao SPC/Serasa</li>
				                    <li class="subTTec">Melhor taxa de juros, 3% na rotativa</li>
				                    <li class="subTTec">Até 98% do limite diponivel para saque</li>
				                    <li class="subTTec">Aceito em todos estabelecimentos</li>
				                    <li class="subTTec">1/3 dos juros dos cartões convencionais</li>
				                  </ul>
				            </div>
										<div class="col-md-4"></div>
								</section>
								<section data-section="port">
									<!-- Area de inf  -->
				            <div class="col-md-8 oculta" id="credPort">
											<div class="row row-pb-md">
					              <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn"><br>
					                <h1 id="txtAjust">Portabilidade de Crédito</h1>
					                <p class="sub"></p>
					              </div>
					            </div>
				              <p id="TextoMar">A Portabilidade de Crédito permite a transferência de empréstimos e financiamentos de
				                outros bancos ou financeiras que possuem taxas excessivas para um banco com taxas mais
				                flexíveis e justas. O valor da parcela pode diminuir e por resolução do Banco Central
				                do Brasil, o prazo do contrato permanece o mesmo.</p>
				              <p id="TextoMar">Simplifique sua vida: organize-se e planeje melhor o seu futuro. Centralize
				                todas as suas despesas em um só lugar.</p>
				              <p id="TextoMar">Sujeito a análise de cadastro e crédito e averbação da margem consignável  no momento
				                da contratação da operação.</p>
				              <p id="TextoMar">Na operação há incidência de juros e IOF – Imposto sobre Operações Financeiras e não
				                há cobrança de tarifas. Para operações trazidas de outros bancos (portabilidade de crédito),
				                não há incidência de IOF.</p>
				              <h3 id="TextoMar">Como funciona?</h3>
				              <p id="TextoMar">Com a portabilidade, você transfere o seu empréstimo para nós, como utilizamos taxas
				                exclusivas para portabilidade, o valor do seu saldo devedor (empréstimo antigo) cai
				                gerando uma diferença significativa, que pode ser utilizada para diminuir a parcela ou
				                então pegar a diferença em dinheiro. O prazo do empréstimo se mantém o mesmo independente
				                da opção de uso da diferença de valor.</p>
				            </div>
										<div class="col-md-4"></div>
								</section>
								<section data-section="ref">
									<!-- Area de inf  -->
				            <div class="col-md-8 oculta" id="credRef">
											<div class="row row-pb-md">
					              <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn"><br>
					                <h1 id="txtAjust">Refinanciamento</h1>
					                <p class="sub"></p>
					              </div>
					            </div>
				            </div>
										<div class="col-md-4"></div>
								</section>
			          </div>
			          <!-- fim da servHide -->

			        </div>
			        <!-- fim da row 1 -->
			      </div>
			      <!-- fim container -->
			    </div>
			  <!-- fim da div hide -->
				<hr>
			  </section>

					<!-- Area de formalização -->
					<section id="gtco-contact" data-section="formProposta">
						<div class="container">
							<div class="row row-pb-md">
								<div class="col-md-8 col-md-offset-2 heading animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
									<h1 id="titulo"><b id="solicitar">Quanto você precisa para realizar seu sonho?</b></h1>
									<!-- <p class="subtle-text animate-box" data-animate-effect="fadeIn"> </p> -->
								</div>
							</div>
							<div class="row" id="contato">
								<div class="col-md-4 animate-box fadeInUp animated-fast">
									<p id="infSolicita">Solicitar seu Empréstimo Consignado com a Aps Consig é super fácil.<br>
										Você só precisa preencher o formulário e aguardar nossa avaliação. <br>
										Todo o processo é rápido e sem burocracia!</p>
								</div>
								<!-- Formulario  -->
								<div class="formSolicitar">
									<div class="col-md-8  animate-box fadeInUp animated-fast">
											<div class="gtco-contact-info">
													<form id="contatoForm" name="contatoForm" method="post">
												  <!-- Nome -->
												  <div class="form-group">
												    <input type="text" class="form-control" name="inputNome" id="inputNome" placeholder="Nome Completo*" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
												    <span class="msg-erro msg-nome"></span>
												  </div>
												  <!-- Email -->
												  <div class="form-group">
												    <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email*" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
												    <span class="msg-erro msg-email"></span>
												  </div>
												  <div class="subFormOne">
														<!-- Valor -->
													  <div class="form-group" id="valor">
													    <input type="text" maxlength="14" onKeyUp="moeda(this);" type="text" name="inputValor" class="form-control" id="inputValor" placeholder="Qual valor desejado?*" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
													    <span class="msg-erro msg-valor"></span>
													  </div>
													  <!-- Convenio -->
													  <div class="form-group" id="setor">
													    <select class="form-control" id="inputSetor" name="setor">
													      <option value="0">Qual seu convênios?*</option>
													      <option value="1">INSS - Aposentados e Pensionistas</option>
													    </select>
													  </div>
													  <!-- Telefone -->
													  <div class="form-group" id="tell">
													    <input type="text" class="form-control" name="inputTelefone" id="inputTelefone" onkeypress="mascara(this,telefone)" maxlength="15" placeholder="Telefone*" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
													    <span class="msg-erro msg-telefone"></span>
													  </div>
													</div>
													<!-- fin da sub1  -->
													<div class="subFormTwo">
													  <!-- CPF -->
													  <div class="form-group" id="cpf">
													    <input type="text" class="form-control" name="inputCPF" id="inputCPF" onkeypress="mascara(this,cpf)" maxlength="14" placeholder="CPF" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
													    <span class="msg-erro msg-cpf"></span>
													  </div>
													  <div class="form-group" id="nasc">
														    <input class="form-control" name="inputDataNas" id="inputDataNas"  onkeypress="mascaraData( this, event )" placeholder="Data de nascimento*" maxlength="10" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
													    <span class="msg-erro msg-cpf"></span>
													  </div>
													  <div class="form-group" id="benef">
													    <input type="text" class="form-control" name="inputBeneficio" id="inputBeneficio" placeholder="Numero do Benefício*" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
													    <span class="msg-erro msg-cpf"></span>
													  </div>
													</div>
													<!-- fim da sub2 -->
													<div class="btnEnviar">
														<button type="submit" class="btn btn-warning" id="btnSolicitar" onclick="return checkForm()"><span class="btnText">Enviar Proposta</spam></button>
													</div>
												</form>
											</div>
									</div>
								</div>

							</div>
						</div>
					</section>

				<!-- area de contato  -->

					<section id="gtco-contact" data-section="contato">
						<div class="container">
							<div class="row row-pb-md">
								<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
									<h1>Contato</h1>
									<p class="sub" id="subAjust">Não feche com ninguém antes de falar com a gente.<br><b>Faremos o nosso melhor
										para buscar o melhor para você!</b></p>
									<!-- <p class="subtle-text animate-box" data-animate-effect="fadeIn">Contato</p> -->
								</div>
							</div>
							<div class="row" id="contato">

								<div class="col-md-6 col-md-push-6 animate-box map-responsive">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.487625352472!2d-46.63944688548169!3d-23.55092416709104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59ac84f537ab%3A0x91d2072ba73c306!2sViaduto+Brg.+Lu%C3%ADs+Ant%C3%B4nio%2C+54+-+Centro%2C+S%C3%A3o+Paulo+-+SP%2C+01318-000!5e0!3m2!1sen!2sbr!4v1512049769555" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
								<div class="col-md-4 col-md-pull-6 animate-box">
									<div class="gtco-contact-info">
										<p>Fale com um <b>CONSULTOR.</b></p>
										<ul>
											<li class="address">Viaduto Brigadeiro Luís Antonio, 54 - Conj 18 C</li>
											<li class="phone"><a href="tel:(11) 3105-0770">+ (11) 3105-0770</a></li>
											<li class="phone"><a href="tel:(11) 99876-6454">+ (11) 99876-6454</a></li>
											<li class="email"><a id="emailResp"href="mailto:atendimento@apsconsigpromotora.com.br">atendimento@apsconsigpromotora.com.br</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</section>

					<footer id="gtco-footer" role="contentinfo">
						<div class="container">
							<div class="col-md-12">
				            <!-- <div class="footer-manu">
				              <ul>
				                <li><a href="work.php">About Us</a></li>
				                <li><a href="#">Contact us</a></li>

				              </ul>
				            </div> -->
				          </div>
							<div class="row copyright">
								<div class="col-md-12">
									<p class="pull-right">
										<small class="block">&copy; 2017 APS Consig. All Rights Reserved.</small>
									</p>
									<p class="pull-left">
										<ul class="gtco-social-icons pull-left">
											<li><img id="imgfooter" src="img/logoapsbig.png" alt=""></li>
											<li><a href="#"><i class="icon-twitter"></i></a></li>
											<li><a href="https://www.facebook.com/apsconsig/"><i class="icon-facebook"></i></a></li>
											<li><a href="tel:(11) 3105-0770"><i class="fa fa-whatsapp" style="font-size:25px"></i></a></li>
											<!-- <li><a href="#"><i class="icon-linkedin"></i></a></li> -->
											<!-- <li><a href="#"><i class="icon-dribbble"></i></a></li> -->
										</ul>
									</p>
								</div>
							</div>

						</div>
					</footer>
					</div>

					<div class="gototop js-top">
						<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
					</div>

		</div>
		<!-- fim  do container showcase -->

			 <!-- MODAL -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modal-video-label">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" onclick="closeModal();" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-video">
                            <div class=" embed-responsive">
																<iframe id="cartoonVideo" type="text/html" width="720" height="405"
																	src="//www.youtube.com/embed/ralWLUacuPg?autoplay=1&controls=0&showinfo=0"
																	frameborder="0" allowfullscreen></iframe>
														</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

			 <?php
			$situacao_usuario = "pendente";
			if($situacao_usuario == "pendente"){ ?>
				<script>
					$(document).ready(function(){
						$('#myModal').modal('show');
					});
				</script>
			<?php } ?>


	<!-- jQuery -->
	<!-- <script src="js/jquery.min.js"></script> -->
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script src="js/mycustom.js"></script>
	<!-- <script src="js/meumain.js"></script> -->
	<script src="js/scripts.min.js"></script>
	<script src="js/validar.js"></script>




	</body>
</html>
