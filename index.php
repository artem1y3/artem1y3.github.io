<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Продажа и монтаж кондиционеров в Ростове-на-Дону</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="images/logo1.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="slick/slick.css">
  <link rel="stylesheet" href="slick/slick-theme.css">
</head>
<body>
<!-- Modal window -->
<?php
$a = $_GET['in'];
$s = '';
if(!empty($a)) {
  $s = 'style="display: block"';
}
    ?>
  <div class="modal-win closes">
    <div class="modal-win-content">
      <span class="close-win">x</span>
      <h2>Заказать обратный звонок</h2>
      <form action="mail.php" method="POST">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-5">Ваше ФИО:</div>
            <div class="col-sm-7"><input type="text" name="fio" placeholder="Ваше ФИО"></div>
          </div>
          <div class="row">
            <div class="col-sm-5">Ваш телефон:</div>
            <div class="col-sm-7"><input type="text" name="tel" placeholder="Ваш телефон"></div>
          </div>
          <div class="row">
            <div class="col-sm-5"> Площадь комнаты, м2:</div>
            <div class="col-sm-7"><input type="text" name="area" placeholder="Площадь комнаты, м2"></div>
          </div>
          <div class="row">
            <div class="col-sm-5">Ориентация окон:</div>
            <div class="col-sm-7">
              <input type="text" name="window" placeholder="Ориентация окон (север, юг, запад, восток)">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">Бытовая техника:</div>
            <div class="col-sm-7">
              <div class="chkb"><input type="checkbox" name="tv" value="have"> Есть телевизор</div>
              <div class="chkb"><input type="checkbox" name="pc" value="have"> Есть компьютер</div>
            </div>
          </div>
        </div>

        <div><input type="submit" value="ОТПРАВИТЬ" class="button-sub"></div>
      </form>
    </div>
  </div>
<!-- End modal window -->
<!--welcome-->
<div class="modal-win closes1" <?php echo $s ?>>
  <div class="modal-win-content">
    <span class="close-win">x</span>
    <h2>Ваша заявка отправлена</h2>
    <h4 class="backss bk">Вернуться на страницу</h4>
  </div>
</div>
<!--end welcome-->
<section class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 my-flex logo">
        <div class="inner-logo flex-center flex-row">
          <img src="images/logo1.png" alt="" class="logo-footer">
          <div class="logo-text">Климат-N</div>
        </div>
      </div>
      <div class="col-lg-3 my-flex cntks">
        <div>
          <i class="fas fa-phone"></i>
          7 (812) <b>633-0-332</b>
        </div>
        <div>
          <i class="fas fa-envelope"></i>
          mail@<b>spmp-spb.ru</b>
        </div>
      </div>
      <div class="col-lg-4 my-flex ord">
        <div class="order flex-center open-win">Заказать обратный звонок</div>
      </div>
    </div>
    <hr align="center" width="100%" size="2" color="#EEF1F4"/> <!-- #EEF1F4 -->
    <div class="header-title">
      Продажа и монтаж кондиционеров в Ростове-на-Дону и области <br>
      100% гарантия до 5 лет на монтаж и оборудование.
    </div>
  </div>
</section>
<section class="form">
  <div class="container">
    <div class="row shadow">
      <div class="col-lg-8 inner-background no-padding">
        <div class="slider">
          <div class="sl1 slider-element">
            <div class="title-slide">
              Мой первый слайд
            </div>
          </div>
          <div class="sl2 slider-element">
            <div class="title-slide">
              Мой второй слайд
            </div>
          </div>
          <div class="sl3 slider-element">
            <div class="title-slide">
              Мой третий слайд
            </div>
          </div>
          <div class="sl4 slider-element">
            <div class="title-slide">
              Мой четвертый слайд
            </div>
          </div>
        
        
        </div>
        <!-- <img src="images/form_1.jpg" alt=""> -->
      </div>
      <div class="col-lg-4 inner-form">
        <div class="contact-form">
          <div class="flex-center flex-row">
							<span>
								<i class="fas fa-thumbs-up" style="font-size: 30pt"></i>
							</span>
            <span>
								ПОДОБРАТЬ КОНДИЦИОНЕР ДЛЯ МОЕЙ КОМНАТЫ
							</span>
          </div>
          <hr align="center" width="100%" size="2" color="#EEF1F4"/>
          <form action="mail.php" method="POST">
            <input type="text" name="fio" placeholder="Ваше ФИО">
            <input type="text" name="tel" placeholder="Ваш телефон">
            <input type="text" name="area" placeholder="Площадь комнаты, м2">
            <input type="text" name="window" placeholder="Ориентация окон (север, юг, запад, восток)">
            <div>
              <span><input type="checkbox" name="tv"> Есть телевизор</span>
              <span><input type="checkbox" name="pc"> Есть компьютер</span>
            </div>
            <div><input type="submit" value="ОТПРАВИТЬ ЗАЯВКУ" class="button-sub"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="list">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="list-item text-center">
          <div class="img-lst flex-center">
            <img src="images/lst3.png" alt="">
          </div>
          <h4>ТОЛЬКО<br>
            НОВАЯ<br>
            ПРОДУКЦИЯ</h4>
          <div>
            Работая с поставщиками
            напрямую, мы всегда в
            курсе о всех новинках и
            поступлениях самого
            современного
            оборудования
          </div>
        </div>
      </div>
      <div class="col">
        <div class="list-item text-center">
          <div class="img-lst flex-center">
            <img src="images/lst5.png" alt="">
          </div>
          <h4>ПОЛНОСТЬЮ<br>
            БЕСПЛАТНОЕ<br>
            ОБСЛУЖИВАНИЕ</h4>
          <div>
            Наши специалисты
            бесплатно выедут к Вам
            после 3-ех месяцев
            эксплуатации, проведут
            диагностику и выдадут
            рекомендации по
            дальнейшему
            использованию
            оборудованию
          </div>
        </div>
      </div>
      <div class="col">
        <div class="list-item text-center">
          <div class="img-lst flex-center">
            <img src="images/lst1.png" alt="">
          </div>
          <h4>100%<br>
            ГАРАНТИЯ<br>
            КАЧЕСТВА</h4>
          <div>
            Мы являемся прямыми
            дилерами известных марок
            кондиционеров, что
            позволяет нам работать по
            официальной гарантии
            производителя
          </div>
        </div>
      </div>
      <div class="col">
        <div class="list-item text-center">
          <div class="img-lst flex-center">
            <img src="images/lst4.png" alt="">
          </div>
          <h4>СОБСТВЕННЫЙ<br>
            ПРОЕКТНЫЙ<br>
            ОТДЕЛ</h4>
          <div>
            Только наши
            проектировщики сделают
            точный расчет
            необходимой мощности, а
            так же предложат самый
            оптимальный состав
            оборудования для Ваших
            задач
          </div>
        </div>
      </div>
      <div class="col">
        <div class="list-item text-center">
          <div class="img-lst flex-center">
            <img src="images/lst2.png" alt="">
          </div>
          <h4>100%<br>
            СОБЛЮДЕНИЕ<br>
            СРОКОВ</h4>
          <div>
            Наличие отдельного склада
            и штатных сотрудников
            позволяет выполнять
            работу в кратчайшие сроки
          </div>
        </div>
      </div>
    </div>
    <hr align="center" width="100%" size="2" color="#EEF1F4"/>
  </div>
</section>

<section class="scheme">
  <p class="title-block">Как мы работаем? Все очень просто</p>
  <div class="container">
    <div class="scheme-wrap">
      <div class="row">
        <div class="col-md-3">
          <div class="scheme-element">
            <img src="images/sch1.png" alt="">
            <div class="element-inner elem1">
              Звонок или заявка
            </div>
          </div>
        </div>
        <div class="col-md-2 d-none d-md-flex">
          <div class="scheme-pointer">
            <img src="images/sch6.png" alt="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="scheme-element">
            <img src="images/sch2.png" alt="">
            <div class="element-inner elem2">
              Рассчеты
            </div>
          </div>
        </div>
        <div class="col-md-4 d-none d-md-flex">
          <div class="scheme-pointer2">
            <img src="images/sch7.png" alt="">
          </div>
        </div>
        <!-- 					<div class="scheme-element">
                    <img src="images/sch3.png" alt="">
                  </div> -->
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 offset-xl-3 offset-lg-3 offset-md-0 offset-sm-1 inner-two-row no-hid">
          <div class="call-us flex-center">
            <p>Звонить нам!</p>
            <div class="scheme-number">7 (812) <b>633-0-332</b></div>
            <div class="order flex-center open-win">ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</div>
          </div>
        </div>
        <div class="col-md-3 offset-md-1 offset-lg-0 step-3">
          <div class="scheme-element">
            <img src="images/sch3.png" alt="">
            <div class="element-inner elem3">
              3 варианта решения
              <div class="family-normal">(дешевый, средний, и V.I.P.)</div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 ord1">
          <div class="scheme-element">
            <img src="images/sch5.png" alt="">
            <div class="element-inner elem5">
              Монтаж
            </div>
          </div>
        </div>
        <div class="col-md-2 d-none d-md-flex">
          <div class="scheme-pointer">
            <img src="images/sch9.png" alt="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="scheme-element">
            <img src="images/sch4.png" alt="">
            <div class="element-inner elem4">
              Сервис
            </div>
          </div>
        </div>
        <div class="col-md-4 d-none d-md-flex">
          <div class="scheme-pointer3">
            <img src="images/sch8.png" alt="">
          </div>
        </div>
      </div>
      <div class="row hid">
        <div class="call-us flex-center">
          <p>Звонить нам!</p>
          <div class="scheme-number">7 (812) <b>633-0-332</b></div>
          <div class="order flex-center">ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pick">
  <div class="pick-inner">
    <div class="container">
      <div class="pick-inner-title">ПОДОБРАТЬ КОНДИЦИОНЕР ДЛЯ МОЕЙ КОМНАТЫ</div>
      <hr align="center" width="100%" size="2" color="#EEF1F4"/>
      <form action="mail.php" method="POST">
        <div class="row">
          <div class="col-md-4 inp">
            <input type="text" name="fio" placeholder="Ваше ФИО"><br>
            <input type="text" name="tel" placeholder="Ваше телефон"><br>
          </div>
          <div class="col-md-4 inp">
            <input type="text" name="area" placeholder="Площадь комнаты, м2"><br>
            <input type="text" name="window" placeholder="Ориентация окон"><br>
          </div>
          <div class="col-md-4">
            <div class="checks"><input type="checkbox" name="tv"> У меня в комнате есть телевизор</div>
            <div class="checks"><input type="checkbox" name="pc"> У меня в комнате есть компьютер</div>
          </div>
        </div>
        <div><input type="submit" value="ОТПРАВИТЬ ЗАЯВКУ"></div>
      </form>
    
    </div>
  </div>
</section>
<section class="solutions">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <p>Наши решения</p>
        <div class="description-solutions">
          На какую стену повесить кондиционер?
          Возможно ли спрятать его за потолком? А
          может объединить кондиционер с системой
          вентиляции? Наши специалисты помогут
          выбрать оптимальное решение для Вашей
          квартиры или офиса.
        </div>
      </div>
      <div class="col-lg-4">
        <!-- <img src="images/sol1.jpg" alt=""> -->
        <div style="background: url(images/sol1.jpg);" class=solutions-item>
          <div class="sol-title">
            Настенные кондиционеры
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div style="background: url(images/sol2.jpg);" class="solutions-item">
          <div class="sol-title">
            Канальные кондиционеры
          </div>
        </div>
        <!-- <img src="images/sol2.jpg" alt=""> -->
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div style="background: url(images/sol3.jpg);" class="solutions-item">
          <div class="sol-title">
            Мультисплит системы
          </div>
        </div>
        <!-- <img src="images/sol3.jpg" alt=""> -->
      </div>
      <div class="col-lg-4">
        <div style="background: url(images/sol4.jpg);" class="solutions-item">
          <div class="sol-title">
            Совмещенные с вентиляцией
          </div>
        </div>
        <!-- <img src="images/sol4.jpg" alt=""> -->
      </div>
      <div class="col-lg-4">
        <div style="background: url(images/sol5.jpg);" class="solutions-item">
          <div class="sol-title">
            Мобильные кондиционеры
          </div>
        </div>
        <!-- <img src="images/sol5.jpg" alt=""> -->
      </div>
    </div>
  </div>
</section>
<!-- <section class="objects">
  <div class="container">
    <div class="objects-title">
      Наши объекты
    </div>
    <div class="row">
      <div class="col-sm-4">
        <img src="images/obj1.jpg" alt="" class="image-obj">
        <p>Ресторан Brother's Pizza</p>
        <div>
          <i>[ Коломяжский 17 ]</i><br>
          Проект и монтаж систем вентиляции, канализации, водопровода, электросетей и систем кондиционирования в ресторане Brother's Pizza площадью 800м2. Заказчик ООО "РАДУГА"
        </div>
      </div>
      <div class="col-sm-4">
        <img src="images/obj1.jpg" alt="" class="image-obj">
        <p>Ресторан Brother's Pizza</p>
        <div>
          <i>[ Коломяжский 17 ]</i><br>
          Проект и монтаж систем вентиляции, канализации, водопровода, электросетей и систем кондиционирования в ресторане Brother's Pizza площадью 800м2. Заказчик ООО "РАДУГА"
        </div>
      </div>
      <div class="col-sm-4">
        <img src="images/obj1.jpg" alt="" class="image-obj">
        <p>Ресторан Brother's Pizza</p>
        <div>
          <i>[ Коломяжский 17 ]</i><br>
          Проект и монтаж систем вентиляции, канализации, водопровода, электросетей и систем кондиционирования в ресторане Brother's Pizza площадью 800м2. Заказчик ООО "РАДУГА"
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <img src="images/obj1.jpg" alt="" class="image-obj">
        <p>Ресторан Brother's Pizza</p>
        <div>
          <i>[ Коломяжский 17 ]</i><br>
          Проект и монтаж систем вентиляции, канализации, водопровода, электросетей и систем кондиционирования в ресторане Brother's Pizza площадью 800м2. Заказчик ООО "РАДУГА"
        </div>
      </div>
      <div class="col-sm-4">
        <img src="images/obj1.jpg" alt="" class="image-obj">
        <p>Ресторан Brother's Pizza</p>
        <div>
          <i>[ Коломяжский 17 ]</i><br>
          Проект и монтаж систем вентиляции, канализации, водопровода, электросетей и систем кондиционирования в ресторане Brother's Pizza площадью 800м2. Заказчик ООО "РАДУГА"
        </div>
      </div>
      <div class="col-sm-4">
        <img src="images/obj1.jpg" alt="" class="image-obj">
        <p>Ресторан Brother's Pizza</p>
        <div>
          <i>[ Коломяжский 17 ]</i><br>
          Проект и монтаж систем вентиляции, канализации, водопровода, электросетей и систем кондиционирования в ресторане Brother's Pizza площадью 800м2. Заказчик ООО "РАДУГА"
        </div>
      </div>
    </div>
  </div>
</section> -->
<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 my-flex logo">
        <div class="inner-logo flex-center flex-row">
          <img src="images/logo-footer.png" alt="" class="logo-footer">
          <div>Климат-N</div>
        </div>
      </div>
      <div class="col-lg-3 my-flex cont">
        <div>
          <i class="fas fa-phone"></i>
          7 (812) <b>633-0-332</b></div>
        <div>
          <i class="fas fa-envelope"></i>
          mail@<b>spmp-spb.ru</b></div>
      </div>
      <div class="col-lg-4 my-flex ord">
        <div class="footer-order flex-center open-win">Заказать обратный звонок</div>
      </div>
    </div>
  </div>
</section>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="slick/slick.min.js"></script>
<script src="js/js.js"></script>
<!--<script src="js/snow-fall.js"></script>-->
</body>
</html>


<!-- 		<div class="my-flex-container">
			<div class="my-flex-block">item1</div>
			<div class="my-flex-block">item2</div>
			<div class="my-flex-block">adsfasdgag</div>

		</div> -->