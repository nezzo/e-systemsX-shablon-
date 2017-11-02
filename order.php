<?php
/*
Template Name: Шаблон страницы "Оставить заявку"
*/
?>
<?php 
  //если человек авторизировался и у него есть права то пускаем его в личный кабинет
  if( current_user_can( 'read' ) ){
 
?>
<?php get_header();?>
  <div id="wrapper-profile">
      <div class="container margin-bottom">
       <div class="row">
        <div class="col-lg-6 col-md-5">
         <div class="left-logo">
          <img src="<?php bloginfo('template_url') ?>/img/logo-zayavki.png" alt="">
          <h3>Оставить заявку</h3>
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
  <?=set_orders_setting();?> 
</div>
</div>
</div>
<?php get_footer();?>
<?php }else{
  wp_redirect( home_url() ); 
}

?>