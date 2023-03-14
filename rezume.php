<?php
  $name = "Tatyana";
  $profession = "Тестировщик";
  $location = "Челябинск, Россия";
  $email = "tatyana.volkova1984@mail.ru";
  $phone = "+7 952 523 33 27";
  $age = 38;
  $currentYear = date("Y");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://sun2.is74.userapi.com/impg/oQ3fG2dQ3MHF9BQgAuwMyDSF_AsObyx86Z3bKQ/1gqz0qLVgMA.jpg?size=1920x1080&quality=95&sign=a8ac994a80d11a2b905e1e9ceebe5a33&type=album" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $name; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p>
            <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php echo $profession; ?>
          </p>
          <p>
            <i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php echo $location; ?>
          </p>
          <p>
            <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php echo $email; ?>
          </p>
          <p>
            <i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php echo $phone; ?>
          </p>
          <p>
            <i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php echo $currentYear - 1984; ?> лет (<?php echo ($currentYear - 1984)*365; ?> в днях)
          </p>
          <hr>

          <?php 
            $skills = [
              [
                "name" => "Adobe Photoshop",
                "percent" => 40,
              ],
              [
                "name" => "Tilda",
                "percent" => 88,
              ],
              [
                "name" => "Yandex/Google",
                "percent" => 67,
              ],
              [
                "name" => "VK/FB/Instagram",
                "percent" => 73,
              ],
            ];
          ?>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          
          <?php foreach($skills as $skill): ?>
            <p><?php echo $skill["name"]; ?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" 
                   style="width:<?php echo $skill["percent"]; 100%">
                   <?php echo $skill["percent"]; ?>%
              </div>
            </div>
          <?php endforeach; ?>

          <p>Tilda</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:88%">88%</div>
          </div>

          <p>Adobe Photoshop</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:40%">
              <div class="w3-center w3-text-white">40%</div>
            </div>
          </div>

          <p>Yandex/Google</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:67%">67%</div>
          </div>

          <p>VK/FB/Instagram</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:73%">73%</div>
          </div> -->

          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="height:24px;width:50%">50%</div>
          </div>
         
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Маркетинг</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Ноябрь 2017 - <span class="w3-tag w3-teal w3-round">Настоящее время</span></h6>
          <p>Создание, настройка и ведение рекламы в Яндекс, Google, ВКонтакте, MyTarget, Facebook</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Создание сайтов </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Декабрь 2019 - <span class="w3-tag w3-teal w3-round">Настоящее время</span></h6>
          <p>Создание сайтов на платформе Tilda, seo оптимизация, прорисовка баннеров и дизайна</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Графический дизайн</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Июнь 2021 - <span class="w3-tag w3-teal w3-round">Настоящее время</span></h6>
          <p>Оформление групп в социальных сетях, создание баннеров и логотипов</p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Настоящее</h6>
          <p>Тестеровщик</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Центр Дизайна и Образования "Арта"</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2021 - 2021</h6>
          <p>Web - дизайнер</p>
          <hr>
        </div>
       
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <form action="subscribe.php" method="post">
    <input type="text" name="email">
    <button>Подписаться</button>
  </form>
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>


