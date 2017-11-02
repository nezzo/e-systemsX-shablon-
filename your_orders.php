<?php
/*
Template Name: Шаблон страницы "Ваши заявки"
*/
?>
<?php 
  //если человек авторизировался и у него есть права то пускаем его в личный кабинет
  if( current_user_can( 'read' ) ){
  
  //получаем имя текущего пользователя
  $user = wp_get_current_user();

?>
<?php get_header();?>
  	<div id="wrapper-profile">
  		<div class="container margin-bottom">
  			<div class="row">
  				<div class="col-lg-6 col-md-5">
  					<div class="left-logo">
  						<img src="<?php bloginfo('template_url') ?>/img/profile-logo.png" alt="">
  						<h3>Ваши заявки</h3>
  					</div>
  				</div>
  				<div class="col-lg-6 col-md-7">
  					<div class="right-logo">
  						<a href="<?php echo home_url();?>"><img src="<?php bloginfo('template_url') ?>/img/chargeback_logo.png" alt=""></a>
  						<p><i class="fa fa-phone"></i> 8 (800) 500-30-25</p>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="container">
  			<div class="row">
  				<div class="table-box-profile">
				    <?=get_orders_list();?>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-lg-4 col-md-4">
  					<div class="buttons-profile l">
  						<p><a href="/profile/"><img src="<?php bloginfo('template_url') ?>/img/profile-zayavki.png" alt=""></a></p>
  						<p>Профиль</p>
  					</div>
  					<div class="buttons-profile l">
  						<p><a href="/your_orders/"><img src="<?php bloginfo('template_url') ?>/img/invoice-zayavki.png" alt=""></a></p>
  						<p class="text-center">Ваши заявки</p>
  					</div>
  				</div>	
  				<div class="col-lg-4 col-md-4">
  					<form action="/account/" method="post">
  					<p class="text-center"><button class="btn btn-warning back-to-cabinet">Вернуться в кабинет</button></p>
  					</form>
  				</div>
  				<div class="col-lg-4 col-md-4">
  					<div class="buttons-profile r">
  						<p><a href="/order/"><img src="<?php bloginfo('template_url') ?>/img/invoice-zayavki1.png" alt=""></a></p>
  						<p>Оставить заявку</p>
  					</div>
  					<div class="buttons-profile r">
  						<p><a href="<?php echo wp_logout_url( home_url() ); ?>"><img src="<?php bloginfo('template_url') ?>/img/exit-zayavki.png" alt=""></a></p>
  						<p>Выйти</p>
  					</div>
  				</div>
  			</div>
  		</div>


  	</div>
<?php get_footer();?>
<?php }else{
  wp_redirect( home_url() ); 
}

?>