<?php
/*
Template Name: Шаблон страницы "Личный кабинет"
*/
?>
<?php 
  //если человек авторизировался и у него есть права то пускаем его в личный кабинет
  if( current_user_can( 'read' ) ){
  
  //получаем имя текущего пользователя
  $user = wp_get_current_user();
  if(!empty($user->user_firstname)){
    $name = $user->user_firstname;
  }else{
    $name = $user->user_login;
  }

?>
<?php get_header();?>
     <div id="wrapper-profile" class="cabinet">
      <div class="container margin-bottom">
       <div class="row">
        <div class="col-lg-6 col-md-5">
         <div class="left-logo">
          <h3>Здравствуйте, <?=$name;?>!</h3>
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
  <div class="center-cabinet">
    <div>
      <p><a href="/order/"><img src="<?php bloginfo('template_url') ?>/img/invoice-zayavki22.png" alt=""></a></p>
      <h4>Оставить заявку</h4>
    </div>
    <div>
      <p><a href="/your_orders/"><img src="<?php bloginfo('template_url') ?>/img/invoice-zayavki2.png" alt=""></a></p>
      <h4>Ваши заявки</h4>
    </div>
    <div>
      <p><a href="/profile/"><img src="<?php bloginfo('template_url') ?>/img/profile-zayavki2.png" alt=""></a></p>
      <h4>Профиль</h4>
    </div>
    <div>
      <p><a href="<?php echo wp_logout_url( home_url() ); ?>"><img src="<?php bloginfo('template_url') ?>/img/exit-zayavki2.png" alt=""></a></p>
      <h4>Выйти</h4>
    </div>
  </div>
</div>

</div>
<footer class="cabinet-footer">
  <div class="col-lg-6 col-md-6">
    <h4>
      ООО "Юридическая компания "Щит и Меч" <br>
      ИНН/КПП: 1658151459/165501001 <br>
      ОГРН: 1131690081522 <br>
      Дата учреждения: 26.11.2013г.
    </h4>
  </div>
  <div class="col-lg-6 col-md-6">
    <p class="icons-cabinet">
     <i class="fa fa-facebook-square"></i>
     <i class="fa fa-vk"></i>
     <i class="fa fa-instagram"></i>
   </p>
   <h4>Created by Sitro, 2017</h4>
 </div>
</footer>
</div>
<?php get_footer();?>
<?php }else{
  wp_redirect( home_url() ); 
}

?>