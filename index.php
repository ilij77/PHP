<!DOCTYPE html>
<html>

<head>
    <?php
    $title = 'Сайт нашей школы';
    $header = "$welcome, Гость!";
    $id = strtolower(strip_tags(trim($_GET['id'])));
    switch($id){ case 'about': $title = 'О сайте';
    $header = 'О нашем сайте'; break; case 'contact': $title = 'Контакты';
    $header = 'Обратная связь'; break; case 'table': $title = 'Таблица умножения';
    $header = 'Таблица умножения'; break; case 'calc': $title = 'Он-лайн калькулятор';
    $header = 'Калькулятор'; break; }
    ?>
  <title><?php echo $title?></title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1><?php echo $header?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
      <?php switch($id){ case 'about': include 'about.php';
      break; case 'contact': include 'contact.php'; break;
      case 'table': include 'table.php'; break; case 'calc': include 'calc.php';
      break; default: include 'index.inc.php'; } ?>
    <?php
    $n = "Iliyaа";
    $len = mb_strlen($n);
    $pos=$len-1;
echo $len;
    $x="10dsdfds";

    echo $n{$len};
    echo (int)($x);

    $shop=false;
    if($shop)
    {
       echo "Иду в магазин";
       echo "Покупаю хлеб";
    }
    echo "Иду домой";
    echo isset($shop);
    ?>
    <h3>Зачем мы ходим в школу?</h3>
    <p>
      У нас каждую минуту что-то происходит и кипит жизнь. Проходят уроки и шумят перемены, кто-то отвечает у доски, кто-то отчаянно зубрит перед контрольной пройденный материал, кому-то ставят «пятерку» за сочинение, кого-то ругают за непрочитанную книгу, на школьной спортивной площадке ребята играют в футбол, а девочки – в волейбол, некоторые готовятся к соревнованиям, другие участвуют в репетициях праздников…
    </p>
    <h3>Что такое ЕГЭ?</h3>
    <p>
      Аббревиатура ЕГЭ расшифровывается как "Единый Государственный Экзамен". Почему "единый"? ЕГЭ одновременно является и вступительным экзаменом в ВУЗ и итоговой оценкой каждого выпускника школы. К тому же на всей территории России используются однотипные задания и единая система оценки.
    </p>
    <p>
      Результаты ЕГЭ оцениваются по 100-балльной и пятибалльной системам и заносятся в свидетельство о результатах единого государственного экзамена. Срок действия данного документа истекает 31 декабря года, следующего за годом его выдачи, поэтому у абитуриентов есть возможность поступать в ВУЗы со свидетельством ЕГЭ в течение двух лет.
    </p>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
      <?php
      $leftMenu=[
          ['link'=>'Домой','href'=>'index.php?id=about'],
          ['link'=>'О нас','href'=>'about.php'],
          ['link'=>'Контакты','href'=>'?id=contact'],
          ['link'=>'Таблица умножения','href'=>'?id=table'],
          ['link'=>'Калькулятор','href'=>'?id=calc'],
      ];

      ?>

      <?php
      function menu($leftMenus,$vert=true){
         $style="";

          if (!$vert){
            $style=" style='display:inline; margin-right:25px'";
          }
          echo "<ul>";
          foreach ($leftMenus as $item){
              echo "<li$style>";
              echo "<a href={$item["href"]}>{$item["link"]}</a>";
          }
          echo "</ul>";
      }

       ?>
      <?php
      menu($leftMenu)
      ?>
    <!-- Меню -->
    <!-- Навигация -->
    
  </div>
  <div id="footer">
      <hr>
      <?
      menu($leftMenu,false);
      ?>
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; <?php
    echo strftime("%Y");?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>