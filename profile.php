<?php
/*
Template Name: Шаблон страницы "Профиль"
*/
?>
<?php 
  //если человек авторизировался и у него есть права то пускаем его в личный кабинет
  if( current_user_can( 'read' ) ){
  
  //получаем данные о текущем пользователе
  $user = wp_get_current_user();
  
  //по клику на кнопку "Назад" делаем редирект в аккаунт
  if(!empty($_POST['exit'])){
    wp_redirect( '/account/',301 ); 
  }
  
  //собераем нужные нам данные с полей
  if(!empty($_POST['upload'])){
     
     if(!empty($_POST['firstname'])){
      $firstname = $_POST['firstname'];
     }else{
      $firstname = "";
     }
     
     if(!empty($_POST['lastname'])){
      $lastname = $_POST['lastname'];
     }else{
      $lastname = "";
     }
     
     if(!empty($_POST['email'])){
      $email = $_POST['email'];
     }else{
      $email = "";
     }
     
     if(!empty($_POST['phone'])){
      $phone = $_POST['phone'];
     }else{
      $phone = "";
     }
     
     if(!empty($_POST['skype'])){
      $skype = $_POST['skype'];
     }else{
      $skype = "";
     }
     
     if(!empty($_POST['password'])){
      $password = $_POST['password'];
     }else{
      $password = "";
     }
     
     if(!empty($_POST['passwordLast'])){
      $passwordLast = $_POST['passwordLast'];
      
	//проверяем пароль, что бы был одинаковый иначе не апдейтим
	if($password == $passwordLast){
 	  $passwordChange = $passwordLast;
	}elseif($password != $passwordLast){
	    echo '<div class="error_reg">'; 
	    echo '<center>';
            echo '<strong>ERROR</strong>:';
            echo 'Возможно Вы ввели 2 разных пароля. Повторите попытку!' . '<br/>';
            echo '</center>';
            echo '</div>';
            exit();
 	}
     
     } 
     
      $mas = [
     'ID'		=>	$user->ID,
     'user_pass' 	=> 	$passwordChange,
     'user_login'	=>	$user->user_login,
     'user_email'	=>	$email,
     'first_name'	=>	$firstname,
     'last_name'	=>	$lastname,
     'phone'		=>	$phone,
     'skype'		=>	$skype,
     ];
     
     $upload = wp_update_user( $mas );
     
     if(!empty($upload)){
      wp_redirect( '/profile/',301 ); 
     }else{
	    echo '<div class="error_reg">'; 
	    echo '<center>';
            echo '<strong>ERROR</strong>:';
            echo 'Что то пошло не так, данные не сохранились!' . '<br/>';
            echo '</center>';
            echo '</div>';
     }
  }
?>
<?php get_header();?>
     <div id="wrapper-profile">
      <div class="container margin-bottom">
       <div class="row">
        <div class="col-lg-6 col-md-5">
         <div class="left-logo">
          <img src="<?php bloginfo('template_url') ?>/img/prof-logo.png" alt="">
          <h3>Профиль</h3>
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
 <form action="<?=$_SERVER['REQUEST_URI'] ?>" method="post" class="order_zayavki">
    <div class="col-lg-3 col-md-3">
     </div>
    <div class="col-lg-6 col-md-6">
      <div class="form-group">
        <input type="text" name="firstname" value="<?=(!empty($user->user_firstname)) ? $user->user_firstname : "" ;?>" class="form-control" placeholder="Имя">
      </div>
      <div class="form-group">
        <input type="text" name="lastname" value="<?=(!empty($user->user_lastname)) ? $user->user_lastname : "" ;?>" class="form-control" placeholder="Фамилия">
      </div>
      <div class="form-group">
        <input type="email" name="email" value="<?=(!empty($user->user_email)) ? $user->user_email : "" ;?>" class="form-control" placeholder="Email">
      </div>
       <div class="form-group">
        <input type="text" name="phone" value="<?=(!empty(get_user_meta( $user->ID, 'phone', true ))) ? get_user_meta( $user->ID, 'phone', true ) : "" ;?>" class="form-control" placeholder="Номер">
      </div>
      <div class="form-group">
        <input type="text" name="skype" value="<?=(!empty(get_user_meta( $user->ID, 'skype', true ))) ? get_user_meta( $user->ID, 'skype', true ) : "" ;?>" class="form-control" placeholder="Skype">
      </div>
       <div class="form-group">
        <input type="password" name="password" value="" class="form-control" placeholder="Новый пароль">
      </div>
       <div class="form-group">
        <input type="password" name="passwordLast" value="" class="form-control" placeholder="Подтвердите новый пароль">
      </div>       
    </div>  
    <div class="col-lg-3 col-md-3"></div>
     <div class="col-lg-6 col-md-6">
        <div class="form-group center-button-prof">
        <p class="text-left"><input type="submit" name="upload" class="form-control btn btn-success" value="Обновить профиль"></p>
      </div>
      </div>  
  </form>
   <form action="<?=$_SERVER['REQUEST_URI'] ?>" method="post" class="order_zayavki">
  <div class="col-lg-6 col-md-6">
      <div class="form-group center-button-prof">
        <p class="text-right"><input type="submit" name="exit" class="form-control btn btn-danger" value="Назад"></p>
      </div>
    </div>
 </form>
</div>
</div>
</div>
<?php get_footer();?>
<?php }else{
  wp_redirect( home_url() ); 
}

?>