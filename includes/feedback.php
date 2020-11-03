<?php 
if (!empty($_POST['name']) AND !empty($_POST['phone']) AND !empty($_POST['message'])){
  $headers = 'Новое сообщение!';
    
  $theme = 'Новое сообщение';
  $letter = 'Данные сообщения:';
    $letter .= "\r\n";
  $letter .='Имя: '.$_POST['name'].'';
    $letter .= "\n";
  $letter .='Телефон: '.$_POST['phone'].'';
    $letter .= "\n";
  $letter .='Сообщение: '.$_POST['message'].'';
  $letter .= "\n";
  if (mail('parnyuk.2001@gmail.com', $theme, $letter, $headers)){
    echo "Сообщение отправлено!";
      sleep(10);
      header("Location: index.html");
  } else {
    echo "Ошибка при отправке!";
    sleep(10);
    header("Location: index.html");
  }
} else {
  echo "Ошибка: Заполните все поля!";
} ?>