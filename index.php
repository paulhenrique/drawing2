<?php $authentication = false;  ?>
<?php include 'controller/bootstrap.php' ?>
<?php $page_title = "Início - Drawing Experience" ?>
<?php include 'controller/metainformations.php' ?>
<?php include 'view/style.php' ?>

<body class="main home-page white background-image">
	<?php include 'view/components/navbar_general.php' ?>
	<div class="container-fluid center pb-3">
		<div class="row header mt-2">
			<div class="col s4 offset-s4">
				<h1 style="font-size: 10rem;" ><span style="font-weight: 100; ">d</span>.exp</h1>
				<h1 style="font-size: 3rem; margin: 5rem 0 5rem 0;" ><span style="font-weight: 100; ">drawing</span>experience</h1>
				<a href="#modal_cadastro_index" class="waves-effect waves-light btn-flat btn-large white-text modal-trigger">Cadastrar</a>
				<a  href="#modal_login_index" class="white-text waves-effect waves-light btn-large btn modal-trigger">Entrar</a>
			</div>
		</div>
	</div>
	<div class="container-fluid white pt-3 pb-3 blue-grey-text text-darken-2 ">
		<div class="container mt-5">
			<div class="row">
				<div class="col m6 offset-m6">
					<h2 class="right-align light">É novo por aqui? </h2>
					<div class="right-align mt-2 light">
						<p class="flow-text">O Drawing ainda está em fase de desenvovimento, mas você pode acessar e conhecer o sistema, há  funcionalidades que ainda não estão prontas, então tenha paciencia com o <strong>d.exp</strong></p>
					</div>
				</div>
				<!-- <div class="col m5 offset-m1 mt-2">
					<video class="responsive-video" autoplay loop>
						<source src="webroot/images/drawing_video.mp4" type="video/mp4" /> 
					</video>
				</div> -->
				<?php// include 'view/components/elements/modal_cadastro_index.php' ?>
			</div>
		</div>
	</div>
	<div class="container-fluid blue-grey-text text-darken-2 white">
		<div class="container pb-5">
			<div class="row">
				<div class="col m3 offset-m1 mt-2 left-align">
					<video class="responsive-video" autoplay loop>
						<source src="webroot/images/drawing_video_2.mp4" type="video/mp4" /> 
					</video>
				</div>
				<div class="col m6 left-align">
					<h2 class="mt-5 light ">É simples</h2>
					<p class="flow-text light ">Você só precisa se cadastrar para começar a utilizar</p>
				</div>
			</div>
<!-- 			<div class="row mt-5">
				<div class="col m4 center-align orange-text">
					<i class="material-icons medium">mode_edit</i>
					<h5 class="light mt-2">Desenhe</h5>
					<p class="light grey-text text-darken-2 col m8 offset-m2">O Drawing te oferece ferramentas que possibilitam a criação de diversos tipos de desenhos.</p>
				</div>
				<div class="col m4 center-align blue-text text-darken-1">
					<i class="material-icons medium">save</i>
					<h5 class="light mt-2">Salve</h5>
					<p class="light grey-text text-darken-2 col m8 offset-m2">É possível salvar seus drawings e editá-los depois, além disso você não perde seus drawings quando atualiza a página ou resolve terminar depois.</p>
				</div>
				<div class="col m4 center-align green-text">
					<i class="material-icons medium">get_app</i>	
					<h5 class="light mt-2">Faça o Download</h5>
					<p class="light grey-text text-darken-2 col m8 offset-m2">Você pode fazer o download dos seus drawings, e também o download do código que faz ele ser um drawing no nosso sistema.</p>
				</div>
			</div> -->
			<div class="row mt-5">
				<div class="col m9 mt-6">
					<h2 class="right-align light">Crie sua conta hoje mesmo! </h2>
					<div class="right-align mt-2 light">
						<p class="flow-text">O <strong>d.exp</strong> é gratuito! E o plano é que seja assim por um bom tempo</p>
					</div>
				</div>
				<div class="col m3 mt-2 left-align">
					<video class="responsive-video" autoplay loop>
						<source src="webroot/images/drawing_video_3.mp4" type="video/mp4" /> 
					</video>
				</div>
			</div>
		</div>
	</div>
	<footer class="page-footer grey darken-4">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">d.exp</h5>
					<p class="grey-text text-lighten-4">Uma iniciativa do Instituto Federal de Educação Ciência e Tecnolgia de São Paulo Câmpus Itapetininga</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
						<li><a class="" href="https://github.com/paulhenrique/drawing2" target="_blank">Code on Github</a></li>
						<li><a href="mailto:santos.chs@gmail.com?Subject=Drawing%20again" target="_top">Carlos Henrique da Silva Santos</a></li>
						<li><a href="mailto:phvcandido@gmail.com?Subject=Drawing$%20again" target="_top">Paulo Henrique Vieira Cândido</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				 made with love and dedication &hearts;
				<a class="grey-text text-lighten-4 right" href="https://itp.ifsp.edu.br/ifspitap/" target="_blank">IFSP Itapetininga</a>
			</div>
		</div>
	</footer>
	<?php include 'view/components/elements/modal_login_index.php' ?>
	<?php include 'view/components/elements/modal_cadastro_index.php' ?>

</body>
<?php include 'view/script.php' ?>
<script type="text/javascript">
	verify_passwords();
</script>