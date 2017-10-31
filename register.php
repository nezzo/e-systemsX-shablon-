<?php

/*
Template Name: Шаблон страницы "Регистрация клиента"
*/

?>
<?php get_header();?>
  	<div id="wrapper-login">
  		<nav class="top-grey">
  			<div class="container">
  				<div class="row">
  					<ul class="nav navbar-nav login-menu">
  						<li><a href="#">Как это работает?</a></li>
  						<li><a href="#">Схема возврата</a></li>
  						<li><a href="#">Цена</a></li>
  						<li><a href="#">О компании</a></li>
  						<li><a href="#">Примеры возвратов</a></li>
  						<li><a href="#">Контакты</a></li>
  					</ul>
  				</div>
  			</div>
  		</nav>
  		<?php echo  custom_registration_function();?>
  	</div>
<?php get_footer();?>