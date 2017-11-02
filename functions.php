<?php


//если пользователь захочет зайти в админку по ссылкам wp-login, wp-admin то  будет редирект в аккаунт
if ( !current_user_can( 'manage_options' ) && is_user_logged_in() && is_admin() ) {
  wp_redirect('/account/', 301);
}


//set_mail($email, $title, $mess)

//отправка письма админу из формы бесплатная консультация
function consultant_form_1(){

   
    if(!empty($_POST['email_consultation_1']) && !empty($_POST['phone_consultation_1'])){
    $email_admin = get_option('admin_email');
    $email = $_POST['email_consultation_1'];
    $phone = $_POST['phone_consultation_1'];
    $mess = "
      Email: $email
      Телефон: $phone
    ";
      set_mail($email_admin, 'Получение бесплатной консультации', $mess);
    }
 

  echo '
  <form  action="' . $_SERVER['REQUEST_URI'] . '" method="post" class="form-consultation">
                 <div class="form-group">
                   <input type="email" name="email_consultation_1" class="form-control" placeholder="Ваш емаил (для отправки презентации)">
                 </div>
                 <div class="form-group">
                   <input type="text" name="phone_consultation_1" class="form-control" placeholder="Ваш телефон (для оказание консультации)">
                 </div>
		 <div class="form-group">
                  <button class="btn btn-danger how-to-back">Узнать, как вернуть ваши деньги</button>
                 </div>
               </form>
  
  ';

}

//отправка письма админу из формы бесплатная консультация
function consultant_form_2(){

   
    if(!empty($_POST['email_consultation_2']) && !empty($_POST['phone_consultation_2'])){
    $email_admin = get_option('admin_email');
    $email = $_POST['email_consultation_2'];
    $phone = $_POST['phone_consultation_2'];
    $mess = "
      Email: $email
      Телефон: $phone
    ";
      set_mail($email_admin, 'Получение бесплатной консультации', $mess);
    }
 

  echo '
  <form  action="' . $_SERVER['REQUEST_URI'] . '" method="post" class="form-consultation">
                 <div class="form-group">
                   <input type="email" name="email_consultation_2" class="form-control" placeholder="Ваш емаил (для отправки презентации)">
                 </div>
                 <div class="form-group">
                   <input type="text" name="phone_consultation_2" class="form-control" placeholder="Ваш телефон (для оказание консультации)">
                 </div>
		 <div class="form-group">
                  <button class="btn btn-danger how-to-back">Узнать, как вернуть ваши деньги</button>
                 </div>
               </form>
  
  ';

}


//форма по отправке письма (Получить ответ)
function getAnswer(){

   
    if(!empty($_POST['email-answer']) && !empty($_POST['phone-answer'])){
    $email_admin = get_option('admin_email');
    $email = $_POST['email-answer'];
    $phone = $_POST['phone-answer'];
    $message = (!empty($_POST['message-answer'])) ? $_POST['message-answer'] : "";
    $mess = "
      Email: $email
      Телефон: $phone
      $message
    ";
      set_mail($email_admin, 'Получение бесплатной консультации', $mess);
    }
 

  echo '
	  <form action="' . $_SERVER['REQUEST_URI'] . '" method="post" class="bottom-input">
          <div class="form-group">
            <p>
              <input type="email" name="email-answer"  class="form-control" placeholder="Ваш Email (для ответа)">
            </p>
          </div>
          <div class="form-group">
            <p>
              <input type="text" name="phone-answer" class="form-control" placeholder="Ваш телефон (для консультации)">
            </p>
          </div>
          <div class="form-group">
            <p>
              <textarea name="message-answer" id="" placeholder="Напишите свой вопрос"></textarea>
            </p>
          </div>
          <div class="getanswer">
            <div class="capcha"></div>
            <div><button class="get-answer-bottom">Получить Ответ</button></div>
          </div>
        </form>
  
  ';
}



