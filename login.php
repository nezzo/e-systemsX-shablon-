<?php
/*
Template Name: Шаблон страницы "Авторизации"
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
  		<form action="" class="login-form">
  			<div class="form-group opacity">
  				<input type="text" class="form-control" placeholder="Эл.почта">
  			</div>
  			<div class="form-group opacity">
  				<input type="text" class="form-control" placeholder="Пароль">
  			</div>
  			<div class="form-group">
  				<input type="button" class="form-control login" value="Войти">
  			</div>
  			<div class="form-group">
  			<input type="button" class="form-control register" value="Регистрация">
  			</div>
  		</form>  	
  	</div>

<?php get_footer();?>