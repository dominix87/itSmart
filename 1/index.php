<?php
require_once 'db/data.php'

?>

<!DOCTYPE html>
<html lang="ru-RU">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" type="image/ico" sizes="256x256" href="img/favicon.ico">
    <meta name="description" content="Запишитесь на бесплатную профориентацию в детской IT-школе СМАРТ — узнайте, в каком направлении развивать ребенка, чтобы сделать его успешным и финансово независимым в будущем.">
    <meta name="keywords" content="IT-курсы для детей, IT-школа для детей, детские курсы IT, программирование для детей, дизайн для детей, СМАРТ Днепр, школа СМАРТ Днепр, профориентация для детей">
    <meta property="og:image" content="">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="itSmart">
    <meta property="og:title" content="Детская IT-школа СМАРТ — IT-обучение для детей 5-16 лет">
    <meta property="og:description" content="Запишитесь на бесплатную профориентацию в детской IT-школе СМАРТ — узнайте, в каком направлении развивать ребенка, чтобы сделать его успешным и финансово независимым в будущем.">
    <title>Детская IT-школа СМАРТ — IT-обучение для детей 5-16 лет</title>
  </head>
  <body>
    <header>
      <div class="siteWidth container-fluid">
        <div class="innerWrapper"><a class="logo" href="#section1" onclick="Index.go_to(this, event)"><img src="img/logo.png" alt=""></a>
          <nav class="navigation" id="mobMenu">
            <ul>
              <li><a href="#section3" onclick="Index.go_to(this, event)">О нас</a></li>
              <li><a href="#section5" onclick="Index.go_to(this, event)">Как мы работаем</a></li>
              <li><a href="#section6" onclick="Index.go_to(this, event)">Учебный процесс</a></li>
              <li><a href="#section6" onclick="Index.go_to(this, event)">Этапы развития</a></li>
              <li><a href="#section6" onclick="Index.go_to(this, event)">Отзывы</a></li>
            </ul>
            <button class="closeMenu" onclick="Index.closeMenu();">
                  <svg class="icon icon-closeModal ">
                    <use xlink:href="img/svg/sprite.svg#closeModal"></use>
                  </svg>
            </button>
          </nav>
          <div class="additionBtns"><a class="phone" href="tel:+380678072101" target="_blank">+38 (067) 707 21 01</a>
            <button class="callBackBtn" onclick="Index.callBackForm()"><span>Заказать звонок</span>
                  <svg class="icon icon-arrow ">
                    <use xlink:href="img/svg/sprite.svg#arrow"></use>
                  </svg>
            </button>
            <button class="openMenu" onclick="Index.openMenu()">
                  <svg class="icon icon-menuBurger ">
                    <use xlink:href="img/svg/sprite.svg#menuBurger"></use>
                  </svg>
            </button>
          </div>
        </div>
      </div>
    </header>
    <main>
      <section class="section1" id="section1">
        <div class="siteWidth container-fluid">
          <div class="innerWrapper">
            <div class="playBtnBlock">
              <div class="text">Узнать<br> о школе<br> за 2 минуты</div>
              <button class="playBtn openVideo" href="https://www.youtube.com/watch?v=AvOSkk6N6Ik"><i class="fa fa-play" aria-hidden="true"></i></button>
            </div>
            <div class="textBlock">
              <h3 class="title">Детская IT-школа<br> в Днепре</h3>
              <div class="text1 content_text">Даем детям важные знания<br class='later2'> и навыки для успешного будущего<br class='later2'> в цифровом мире</div>
              <div class="text2 content_text">Запишитесь на бесплатную профориентацию, чтобы раскрыть потенциал ребенка и получить персональный план развития</div>
              <div class="btnWrap">
                <button class="btn" onclick="Index.showFormSpec(this)" data-title="Записаться на бесплатную консультация" data-btnName="Записаться" data-orderType="Запись на бесплатную консультацию">Записаться</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section2" id="section2">
        <div class="siteWidth container-fluid">
          <div class="topSide">
            <div class="titleBlock">
              <h2 class="title">За 7 лет работы<br class='later2'> детской IT-школы СМАРТ<br class='later2'> <span>мы сотни раз сталкивались<br class='later2'> с&nbsp;вопросами, которые<br class='later2'> волнуют родителей</span></h2>
            </div>
            <div class="content">
              <div class="item">
                    <svg class="icon icon-icon1 ">
                      <use xlink:href="img/svg/sprite.svg#icon1"></use>
                    </svg>
                <div class="text content_text"><span>Какое направление выбрать</span> для будущей профессии?</div>
              </div>
              <div class="item">
                    <svg class="icon icon-icon2 ">
                      <use xlink:href="img/svg/sprite.svg#icon2"></use>
                    </svg>
                <div class="text content_text"><span>На что делать акцент в&nbsp;обучении</span> и&nbsp;как не перегрузить ребенка?</div>
              </div>
              <div class="item">
                    <svg class="icon icon-icon3 ">
                      <use xlink:href="img/svg/sprite.svg#icon3"></use>
                    </svg>
                <div class="text content_text"><span>Какие навыки развивать</span> сейчас, чтобы ребенок стал успешным в&nbsp;будущем?</div>
              </div>
              <div class="item">
                    <svg class="icon icon-icon10 ">
                      <use xlink:href="img/svg/sprite.svg#icon10"></use>
                    </svg>
                <div class="text content_text"><span>Как помочь ребенку найти свое предназначениеи</span> сделать его счастливым?</div>
              </div>
            </div>
          </div>
          <div class="bottomSide">
            <div class="textBlock">
              <div class="descriptionTop desc">Мы сами родители и&nbsp;прекрасно понимаем, насколько для вас важно обеспечить успешный старт в&nbsp;жизни ребенка</div>
              <div class="descriptionBottom content_text">Поэтому разработали с&nbsp;методистами профессиональную консультацию по&nbsp;профориентации, которая ответит на&nbsp;все эти вопросы и поможет выбрать правильный вектор развития ребёнка</div>
              <div class="btnWrap">
                <button class="btn" onclick="Index.showFormSpec(this)" data-title="Записаться на профориентацию" data-btnName="Записаться" data-orderType="запись на проориентацию">Записаться на профориентацию</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section3" id="section3">
        <div class="siteWidth container-fluid">
          <div class="topSide">
            <div class="leftSide">
              <h2 class="title">Каждый<br class='later2'> ребенок уникален</h2>
              <div class="imageBlock mobile"><img src="img/bl3img1.jpg" alt=""></div>
              <div class="description content_text">Профориентация помогает<br class='later2'> раскрыть эту уникальность<br class='later2'> и составить индивидуальный<br class='later2'> план развития ребенка</div>
            </div>
            <div class="rightSide">
              <div class="imageBlock"><img src="img/bl3img1.jpg" alt=""></div>
            </div>
          </div>
          <div class="bottomSide">
            <div class="item">
              <div class="imageWrap"><img src="img/bl3img2.jpg" alt=""></div>
              <div class="textBlock">
                <div class="title content_title">Преподаватель-методист проведёт беседу с&nbsp;вашим ребенком</div>
                <ul class="content_text">
                  <li><span>Проверит уровень знаний и&nbsp;навыки</span> в&nbsp;компьютерных технологиях. Определит, что&nbsp;вдохновляет,<br class='later2'> а&nbsp;что&nbsp;не&nbsp;нравится в&nbsp;учёбе и&nbsp;деятельности.</li>
                  <li><span>Общение происходит наедине</span>, чтобы исключить желание ребёнка нравиться родителям и&nbsp;выявить истинные желания, потребности, интересы.</li>
                </ul>
              </div>
            </div>
            <div class="item">
              <div class="imageWrap"><img src="img/bl3img3.jpg" alt=""></div>
              <div class="textBlock">
                <div class="title content_title">Составим план персонального развития ребёнка</div>
                <div class="text1 content_text">Вы получите наглядную визуальную карту, в&nbsp;которой будут:</div>
                <ul class="content_text">
                  <li><span>направление</span> обучения, технологии для изучения;</li>
                  <li><span>список</span> конкретных навыков, которыми овладеет ребенок;</li>
                  <li><span>примеры:</span> как и где применить полученные знания уже сейчас;</li>
                  <li><span>конкретный результат</span> в виде будущей специальности и промежуточные итоги.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section4" id="section4">
        <div class="siteWidth container-fluid">
          <div class="formWrap">
            <div class="el1"><img src="img/bl4img1.png" alt=""></div>
            <div class="wrapper">
              <h3 class="title">Запишитесь на&nbsp;бесплатную профориентацию</h3>
              <div class="description content_text">чтобы определить оптимальное для ребенка<br class='later2'> направление в обучении</div>
              <form onsubmit="Index.sendInit(this);return false" novalidate>
                <input type="hidden" name="project_name" value="">
                <input type="hidden" name="admin_email" value="">
                <input type="hidden" name="registration_type" value="форма">
                <input type="hidden" name="order_type" value="Запись на бесплатную проориентацию (4 блок)">
                <input type="hidden" name="page_url" value="">
                <input type="hidden" name="user_agent" value="&lt;?php echo $user_agent?&gt;">
                <input type="hidden" name="utm_source" value="&lt;?php echo $data[&quot;utm_source&quot;]?&gt;">
                <input type="hidden" name="utm_campaign" value="&lt;?php echo $data[&quot;utm_campaign&quot;]?&gt;">
                <input type="hidden" name="utm_medium" value="&lt;?php echo $data[&quot;utm_medium&quot;]?&gt;">
                <input type="hidden" name="utm_term" value="&lt;?php echo $data[&quot;utm_term&quot;]?&gt;">
                <input type="hidden" name="utm_content" value="&lt;?php echo $data[&quot;utm_content&quot;]?&gt;">
                <input type="hidden" name="ref" value="&lt;?php echo $data[&quot;ref&quot;]?&gt;">
                <input type="hidden" name="ip_address" value="&lt;?php echo $data[&quot;ip_address&quot;]?&gt;">
                <input type="hidden" name="city" value="">
                <input type="hidden" name="region" value="">
                <input type="hidden" name="country" value="">
                <input type="hidden" name="client_id" value="&lt;?php echo $data[&quot;client_id&quot;]?&gt;">
                <input type="hidden" name="utmcsr" value="&lt;?php echo $data[&quot;utmcsr&quot;]?&gt;">
                <input type="hidden" name="utmccn" value="&lt;?php echo $data[&quot;utmccn&quot;]?&gt;">
                <input type="hidden" name="utmcmd" value="&lt;?php echo $data[&quot;utmcmd&quot;]?&gt;">
                <input type="hidden" name="click_id" value="&lt;?php echo $data[&quot;click_id&quot;]?&gt;">
                <input type="hidden" name="affilliate_id" value="&lt;?php echo $data[&quot;affiliate_id&quot;]?&gt;">
                <div class="inputWrapper">
                  <input name="name" type="text" required>
                  <div class="text">Имя</div>
                </div>
                <div class="inputWrapper">
                  <input name="phone" type="tel" required>
                  <div class="text">Телефон</div>
                </div>
                <div class="btnWrap">
                  <button class="btn">Записаться</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <section class="section5" id="section5">
        <div class="siteWidth container-fluid">
          <div class="topSide">
            <h2 class="title">Детская<br class='later2'> IT-школа СМАРТ<br class='later2'> <span>это пространство<br class='later2'> для&nbsp;развития<br class='later2'> и&nbsp;самореализации<br> детей через IT</span></h2>
          </div>
          <div class="middleSide">
            <div class="videoBlock">
              <div class="img_wrap"><span class="el" id="pgzvpxJDn1s" onclick="Index.openYoutube(this)" data-params="modestbranding=1&amp;showinfo=0&amp;controls=1&amp;vq=hd720"><span class="playBtn"><i class="fa fa-play" aria-hidden="true"></i></span><img src="https://img.youtube.com/vi/pgzvpxJDn1s/hqdefault.jpg" alt=""></span></div>
            </div>
            <div class="textBlock">
              <div class="description desc">С помощью современных технологий мы развиваем у&nbsp;школьников знания о&nbsp;бизнесе, навыки общения и&nbsp;управления собой.</div>
              <div class="text1 content_text">Именно эти навыки помогут им в&nbsp;будущем стать успешными специалистами, руководителями, бизнесменами.</div>
            </div>
          </div>
          <div class="bottomSide">
            <h3 class="title">Наши принципы</h3>
            <div class="content content_text">
              <div class="item">
                <div class="topItem">
                      <svg class="icon icon-icon11 ">
                        <use xlink:href="img/svg/sprite.svg#icon11"></use>
                      </svg><span>Фокус на современные<br> технологии.</span>
                </div>
                <div class="bottomItem">Мы знаем профессии будущего и&nbsp;следим за трендами. Постоянно обновляем программы, методики и&nbsp;внедряем инновации в&nbsp;обучение детей</div>
              </div>
              <div class="item">
                <div class="topItem">
                      <svg class="icon icon-icon5 ">
                        <use xlink:href="img/svg/sprite.svg#icon5"></use>
                      </svg><span>Обучение<br> через практику</span>
                </div>
                <div class="bottomItem">После каждого занятия ребенок видит практический результат своей работы. А&nbsp;также знает, как применить полученный навык в&nbsp;повседневной жизни</div>
              </div>
              <div class="item">
                <div class="topItem">
                      <svg class="icon icon-icon7 ">
                        <use xlink:href="img/svg/sprite.svg#icon7"></use>
                      </svg><span>У нас дружеская<br> атмосфера</span>
                </div>
                <div class="bottomItem">Нет разделения на учитель и&nbsp;ученики, есть наставник и&nbsp;команда вдохновленных ребят, которые создают собственные проекты</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section6" id="section6">
        <div class="siteWidth container-fluid">
          <div class="innerWrapper">
            <div class="titleBlock">
              <h2 class="title">Этапы<br class='later2'> развития ребенка<br class='later2'> в IT-школе<br class='later2'> СМАРТ</h2>
            </div>
            <div class="item">
              <div class="switcher">
                    <svg class="icon icon-plus ">
                      <use xlink:href="img/svg/sprite.svg#plus"></use>
                    </svg>
              </div>
              <div class="imageBlock"><img src="img/bl6img1.jpg" alt=""></div>
              <div class="textBlock">
                <div class="age">5-7<span>лет</span></div>
                <div class="title content_title">Формирование личности</div>
                <div class="text content_text">Закладываем базовые навыки<br> и готовим к дальнейшему обучению<br> в школе с&nbsp;помощью цифровой<br> грамотности, эмоциональной<br> и&nbsp;социальной подготовки.</div>
              </div>
            </div>
            <div class="item">
              <div class="switcher">
                    <svg class="icon icon-plus ">
                      <use xlink:href="img/svg/sprite.svg#plus"></use>
                    </svg>
              </div>
              <div class="imageBlock"><img src="img/bl6img2.jpg" alt=""></div>
              <div class="textBlock">
                <div class="age">8-10<span>лет</span></div>
                <div class="title content_title">Базовая подготовка</div>
                <div class="text content_text">Учимся использовать современные<br> технологии, применять их<br> в&nbsp;повседневной жизни, искать ответы<br> на&nbsp;вопросы: «Что и&nbsp;как работает?»</div>
              </div>
            </div>
            <div class="item">
              <div class="switcher">
                    <svg class="icon icon-plus ">
                      <use xlink:href="img/svg/sprite.svg#plus"></use>
                    </svg>
              </div>
              <div class="imageBlock"><img src="img/bl6img3.jpg" alt=""></div>
              <div class="textBlock">
                <div class="age">11-13<span>лет</span></div>
                <div class="title content_title">Профориентация</div>
                <div class="text content_text">Дети получают фундаментальные<br> знания по&nbsp;программированию,<br> дизайну, инженерии. Закладываем<br> умение работать над собственным<br> проектом, даем навыки тайм-<br>менеджмента.</div>
              </div>
            </div>
            <div class="item">
              <div class="switcher">
                    <svg class="icon icon-plus ">
                      <use xlink:href="img/svg/sprite.svg#plus"></use>
                    </svg>
              </div>
              <div class="imageBlock"><img src="img/bl6img4.jpg" alt=""></div>
              <div class="textBlock">
                <div class="age">13-16<span>лет</span></div>
                <div class="title content_title">Основы профессии</div>
                <div class="text content_text">Ученики получают углубленные<br> знания и&nbsp;навыки в&nbsp;выбранном<br> направлении: программирование,<br> дизайн, инженерия. Работают над<br> собственными и&nbsp;командными проектами.</div>
              </div>
            </div>
            <div class="descBlock">
              <div class="text desc">Полученные<br> в&nbsp;СМАРТ знания<br> и&nbsp;навыки усилят вашего<br> ребенка в&nbsp;любой профессии.<br> Если он захочет получить<br> профессию в&nbsp;IT, <span>можно<br> продолжить обучение<br> в&nbsp;нашем IT-центре<br> Level Up.</span></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section7" id="section7">
        <div class="siteWidth container-fluid">
          <div class="innerWrapper">
            <div class="leftSide">
              <h2 class="title">4 составляющих учебного процесса в&nbsp;СМАРТ</h2>
            </div>
            <div class="rightSide">
              <div class="content">
                <div class="item">
                      <svg class="icon icon-icon9 ">
                        <use xlink:href="img/svg/sprite.svg#icon9"></use>
                      </svg>
                  <div class="text content_text"><span>Проектный подход в обучении.</span> Каждый учебный модуль заканчивается проектом, из которых ребята формируют свое портфолио</div>
                </div>
                <div class="item">
                      <svg class="icon icon-icon8 ">
                        <use xlink:href="img/svg/sprite.svg#icon8"></use>
                      </svg>
                  <div class="text content_text"><span>Геймификация</span> Мотивирующая система оценивания - ученики за свои успехи и активности зарабатывают бонусы и обменивают их на ценные призы</div>
                </div>
                <div class="item">
                      <svg class="icon icon-icon4 ">
                        <use xlink:href="img/svg/sprite.svg#icon4"></use>
                      </svg>
                  <div class="text content_text"><span>Экскурсии в IT-компании</span> Встречи и мотивирующие лекции с предпринимателями и IT-экспертами города</div>
                </div>
                <div class="item">
                      <svg class="icon icon-icon6 ">
                        <use xlink:href="img/svg/sprite.svg#icon6"></use>
                      </svg>
                  <div class="text content_text"><span>Занятия в лаборатории Soft Skills</span> Тренинги по развитию творческого и логического мышления, командной работе, управлению временем, самопрезентации, ораторскому искусству и актерскому мастерству</div>
                </div>
              </div>
              <div class="bottomSide">
                <div class="leftBottomSide">
                  <div class="description desc"><span>Обучение легко совмещать с&nbsp;занятиями</span> в общеобразовательной школе и кружками</div>
                </div>
                <div class="rightBottomSide">
                  <ul class="content_text">
                    <li><span>1.5 - 2 часа</span> длительность одного занятия</li>
                    <li><span>1-2 раза в неделю</span> на выходных или в будние<br> после школы</li>
                    <li><span>с сентября по май</span> учебный год</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section8" id="section8">
        <div class="siteWidth container-fluid">
          <div class="topSide">
            <div class="leftSide">
              <h2 class="title">Родители — часть нашей команды</h2>
              <div class="description content_text">Помогаем родителям лучше понимать увлечения и интересы ребенка, быть на&nbsp;одной волне, а&nbsp;детям — стать ближе к&nbsp;родителям, быть открытыми и делиться своими успехами</div>
            </div>
            <div class="rightSide"><img src="img/bl8img1.jpg" alt=""></div>
          </div>
          <div class="bottomSide">
            <div class="title desc"><span>Что мы<br class='later2'> для этого делаем:</span></div>
            <ul class="content_text">
              <li><span>Постоянная</span> обратная связь<br class='later'> от преподавателей<br class='later'> и тьютора школы.</li>
              <li><span>Открытые занятия</span> (демонстрация<br> промежуточных<br class='later'> результатов обучения).</li>
              <li><span>Публичная защита</span> проектов.</li>
              <li><span>Школа родителей —</span> тематические встречи<br class='later'> родителей с IT-экспертами<br class='later'> и тьюторами школы.</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section9" id="section9">
        <div class="siteWidth container-fluid">
          <div class="innerWrapper">
            <div class="leftSide">
              <h2 class="title">Что<br class='later2'> говорят наши<br class='later2'> ученики и их<br class='later2'> родители</h2>
              <div class="sliderWrapper">
                <div class="currentSlide">01</div>
                <div class="sliderBlock">
                  <div class="item">
                    <div class="img_wrap"><span class="el" id="jDIeFpQwK8U" onclick="Index.openYoutube(this)" data-params="modestbranding=1&amp;showinfo=0&amp;controls=1&amp;vq=hd720"><span class="playBtn"><i class="fa fa-play" aria-hidden="true"></i></span><img src="http://i1.ytimg.com/vi/jDIeFpQwK8U/maxresdefault.jpg" alt=""></span></div>
                  </div>
                  <div class="item">
                    <div class="img_wrap"><span class="el" id="4LFngcry3Ys" onclick="Index.openYoutube(this)" data-params="modestbranding=1&amp;showinfo=0&amp;controls=1&amp;vq=hd720"><span class="playBtn"><i class="fa fa-play" aria-hidden="true"></i></span><img src="http://i1.ytimg.com/vi/4LFngcry3Ys/maxresdefault.jpg" alt=""></span></div>
                  </div>
                  <div class="item">
                    <div class="img_wrap"><span class="el" id="lf5e9o7_bJw" onclick="Index.openYoutube(this)" data-params="modestbranding=1&amp;showinfo=0&amp;controls=1&amp;vq=hd720"><span class="playBtn"><i class="fa fa-play" aria-hidden="true"></i></span><img src="https://img.youtube.com/vi/lf5e9o7_bJw/hqdefault.jpg" alt=""></span></div>
                  </div>
                  <div class="item">
                    <div class="img_wrap"><span class="el" id="Rhw4gRZWJ4k&amp;" onclick="Index.openYoutube(this)" data-params="modestbranding=1&amp;showinfo=0&amp;controls=1&amp;vq=hd720"><span class="playBtn"><i class="fa fa-play" aria-hidden="true"></i></span><img src="http://i1.ytimg.com/vi/Rhw4gRZWJ4k/maxresdefault.jpg" alt=""></span></div>
                  </div>
                </div>
                <div class="sliderControls">
                  <div class="navigation"></div>
                  <div class="arrows"></div>
                </div>
              </div>
            </div>
            <div class="rightSide">
              <h2 class="title">Что<br class='later2'> говорят наши<br class='later2'> ученики и их<br class='later2'> родители</h2>
              <div class="btnWrap">
                <button class="btn" onclick="Index.showFormSpec(this)" data-title="Записаться на экскурсию в школу" data-btnName="Записаться" data-orderType="Запись на экскурсию в школу">Записаться на экскурсию в школу</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section10" id="section10">
        <div class="siteWidth container-fluid">
          <div class="innerWrapper">
            <h2 class="title">Как<br class='later2'> мы поможем<br class='later2'> реализовать<br class='later2'> потенциал<br class='later2'> вашего ребенка</h2>
            <div class="content">
              <div class="item">
                <div class="title content_title">Личная встреча для профориентации ребенка</div>
                <div class="text content_text">Каждый ребенок — талантлив! Мы помогаем выявить интересы, способности, сильные стороны ребенка и дать правильный вектор для развития.</div>
              </div>
              <div class="item">
                <div class="title content_title">Составляем Персональный План Развития</div>
                <div class="text content_text">По результатам профориентации мы&nbsp;составляем визуальную карту развития ребенка, включающую направления обучения, технологии и конкретный результат —<br class='later2'> будущую специальность.</div>
              </div>
              <div class="item">
                <div class="title content_title">Плодотворно учимся<br class='later2'> и создаем свои проекты</div>
                <div class="text content_text">Все теоретические темы подкреплены практикой. Ребенок узнает, где и как применить полученные знания и навыки в&nbsp;повседневной жизни.</div>
              </div>
              <div class="item">
                <div class="title content_title">Открытая защита<br class='later2'> итогового проекта</div>
                <div class="text content_text">Итоговый проект — это демонстрация полученных ребенком знаний, навыков в&nbsp;течение года в&nbsp;присутствии одногруппников и&nbsp;родителей. Ребенок получает сертификат и&nbsp;подарки.</div>
              </div>
              <div class="item">
                <div class="title content_title">Анализируем полученный результат и&nbsp;двигаемся<br class='later2'> к&nbsp;новым достижениям</div>
                <div class="text content_text">Вместе анализируем успехи, достижения и&nbsp;сложности, с&nbsp;которыми столкнулся ребенок. Даем рекомендации к&nbsp;персональному плану развития и&nbsp;двигаемся к&nbsp;следующему<br class='later2'> уровню обучения.</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section11" id="section11">
        <div class="siteWidth container-fluid">
          <div class="innerWrapper">
            <div class="leftSide">
              <h3 class="title">Давайте вместе найдем верный путь для успешного будущего вашего ребенка</h3>
              <div class="description content_text">Поможем вам выбрать такие направления для развития, в&nbsp;которых ребенок сможет самореализоватьсяи будет чувствовать себя счастливым</div>
            </div>
            <div class="rightSide">
              <div class="formWrapper">
                <div class="element1"><img src="img/bl11BG2.png" alt=""></div>
                <div class="wrapper">
                  <div class="title content_title"><span>Запишитесь на бесплатную профориентацию,</span> чтобы сделать первый шаг к успешному будущему ребенка</div>
                  <form onsubmit="Index.sendInit(this);return false" novalidate>
                    <input type="hidden" name="project_name" value="B-lawyer">
                    <input type="hidden" name="admin_email" value="">
                    <input type="hidden" name="registration_type" value="pop-up форма">
                    <input type="hidden" name="order_type" value="Запись на бесплатную проориентацию (футер)">
                    <input type="hidden" name="page_url" value="">
                    <input type="hidden" name="user_agent" value="&lt;?php echo $user_agent?&gt;">
                    <input type="hidden" name="utm_source" value="&lt;?php echo $data[&quot;utm_source&quot;]?&gt;">
                    <input type="hidden" name="utm_campaign" value="&lt;?php echo $data[&quot;utm_campaign&quot;]?&gt;">
                    <input type="hidden" name="utm_medium" value="&lt;?php echo $data[&quot;utm_medium&quot;]?&gt;">
                    <input type="hidden" name="utm_term" value="&lt;?php echo $data[&quot;utm_term&quot;]?&gt;">
                    <input type="hidden" name="utm_content" value="&lt;?php echo $data[&quot;utm_content&quot;]?&gt;">
                    <input type="hidden" name="ref" value="&lt;?php echo $data[&quot;ref&quot;]?&gt;">
                    <input type="hidden" name="ip_address" value="&lt;?php echo $data[&quot;ip_address&quot;]?&gt;">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="region" value="">
                    <input type="hidden" name="country" value="">
                    <input type="hidden" name="client_id" value="&lt;?php echo $data[&quot;client_id&quot;]?&gt;">
                    <input type="hidden" name="utmcsr" value="&lt;?php echo $data[&quot;utmcsr&quot;]?&gt;">
                    <input type="hidden" name="utmccn" value="&lt;?php echo $data[&quot;utmccn&quot;]?&gt;">
                    <input type="hidden" name="utmcmd" value="&lt;?php echo $data[&quot;utmcmd&quot;]?&gt;">
                    <input type="hidden" name="click_id" value="&lt;?php echo $data[&quot;click_id&quot;]?&gt;">
                    <input type="hidden" name="affilliate_id" value="&lt;?php echo $data[&quot;affiliate_id&quot;]?&gt;">
                    <div class="inputWrapper">
                      <input name="name" type="text" required>
                      <div class="text">Имя</div>
                    </div>
                    <div class="inputWrapper">
                      <input name="phone" type="tel" required>
                      <div class="text">Телефон</div>
                    </div>
                    <div class="btnWrap">
                      <button class="btn">Записаться</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="footerTop">
        <div class="siteWidth container-fluid">
          <div class="innerWrapper"><a class="logo" href="#section1" onclick="Index.go_to(this, event)"><img src="img/logo.png" alt=""></a><a class="content_text address adr1" href="https://goo.gl/maps/H3fhk9PZckre8T4VA" target="_blank">ул. Троицкая, 21Г.,<br> ТСК «Новый металлург», 3 эт.</a><a class="content_text address adr2" href="https://goo.gl/maps/fZ7Jig6xZ1PgMHN87" target="_blank">ул. Запорожское<br> шоссе, 53Б., 2-й этаж.</a>
            <div class="phones"><a href="tel:+380678072101" target="_blank">+38 (067) 807 21 01</a><a href="tel:+380663330523" target="_blank">+38 (066) 333 05 23</a></div>
            <div class="additionElements">
              <button class="callBackBtn" onclick="Index.callBackForm()"><span>Заказать звонок</span>
                    <svg class="icon icon-arrow ">
                      <use xlink:href="img/svg/sprite.svg#arrow"></use>
                    </svg>
              </button>
              <div class="socials"><a href="#">
                      <svg class="icon icon-facebook ">
                        <use xlink:href="img/svg/sprite.svg#facebook"></use>
                      </svg></a><a href="#">
                      <svg class="icon icon-youtube ">
                        <use xlink:href="img/svg/sprite.svg#youtube"></use>
                      </svg></a><a href="#">
                      <svg class="icon icon-instagram ">
                        <use xlink:href="img/svg/sprite.svg#instagram"></use>
                      </svg></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="footerBottom">
        <div class="siteWidth container-fluid">
          <div class="innerWrapper">
            <div class="politics"><a href="#" onclick="Index.showPolitics(1);">Политика конфиaденциальности</a><a href="#" onclick="Index.showPolitics(2);">Отказ от ответственности</a><a href="#" onclick="Index.showPolitics(3);">Согласие с рассылкой</a></div><a class="rezartLogo" href="https://rezart.agency/" target="_blank">
                  <svg class="icon icon-rezart_logo ">
                    <use xlink:href="img/svg/sprite.svg#rezart_logo"></use>
                  </svg></a>
          </div>
        </div>
      </div>
    </footer>
    <div class="hiddenBlock">
      <div class="orderPanel" id="mainForm">
        <div class="wrapper">
          <p class="title">Заказать звонок</p>
          <form onsubmit="Index.sendInit(this);return false" novalidate>
            <input type="hidden" name="project_name" value="B-lawyer">
            <input type="hidden" name="admin_email" value="">
            <input type="hidden" name="registration_type" value="pop-up форма">
            <input type="hidden" name="order_type" value="Call request">
            <input type="hidden" name="page_url" value="">
            <input type="hidden" name="user_agent" value="&lt;?php echo $user_agent?&gt;">
            <input type="hidden" name="utm_source" value="&lt;?php echo $data[&quot;utm_source&quot;]?&gt;">
            <input type="hidden" name="utm_campaign" value="&lt;?php echo $data[&quot;utm_campaign&quot;]?&gt;">
            <input type="hidden" name="utm_medium" value="&lt;?php echo $data[&quot;utm_medium&quot;]?&gt;">
            <input type="hidden" name="utm_term" value="&lt;?php echo $data[&quot;utm_term&quot;]?&gt;">
            <input type="hidden" name="utm_content" value="&lt;?php echo $data[&quot;utm_content&quot;]?&gt;">
            <input type="hidden" name="ref" value="&lt;?php echo $data[&quot;ref&quot;]?&gt;">
            <input type="hidden" name="ip_address" value="&lt;?php echo $data[&quot;ip_address&quot;]?&gt;">
            <input type="hidden" name="city" value="">
            <input type="hidden" name="region" value="">
            <input type="hidden" name="country" value="">
            <input type="hidden" name="client_id" value="&lt;?php echo $data[&quot;client_id&quot;]?&gt;">
            <input type="hidden" name="utmcsr" value="&lt;?php echo $data[&quot;utmcsr&quot;]?&gt;">
            <input type="hidden" name="utmccn" value="&lt;?php echo $data[&quot;utmccn&quot;]?&gt;">
            <input type="hidden" name="utmcmd" value="&lt;?php echo $data[&quot;utmcmd&quot;]?&gt;">
            <input type="hidden" name="click_id" value="&lt;?php echo $data[&quot;click_id&quot;]?&gt;">
            <input type="hidden" name="affilliate_id" value="&lt;?php echo $data[&quot;affiliate_id&quot;]?&gt;">
            <div class="inputWrapper">
              <input name="name" type="text" required>
              <div class="text">Имя</div>
            </div>
            <div class="inputWrapper">
              <input name="phone" type="tel" required>
              <div class="text">Телефон</div>
            </div>
            <div class="btnWrap">
              <button class="btn">Отправить</button>
            </div>
          </form>
        </div>
      </div>
      <div class="orderPanel" id="callBackForm">
        <div class="wrapper">
          <p class="title">Заказать звонок</p>
          <form onsubmit="Index.sendInit(this);return false" novalidate>
            <input type="hidden" name="project_name" value="B-lawyer">
            <input type="hidden" name="admin_email" value="">
            <input type="hidden" name="registration_type" value="CallBack form">
            <input type="hidden" name="order_type" value="Call request">
            <input type="hidden" name="page_url" value="">
            <input type="hidden" name="user_agent" value="&lt;?php echo $user_agent?&gt;">
            <input type="hidden" name="utm_source" value="&lt;?php echo $data[&quot;utm_source&quot;]?&gt;">
            <input type="hidden" name="utm_campaign" value="&lt;?php echo $data[&quot;utm_campaign&quot;]?&gt;">
            <input type="hidden" name="utm_medium" value="&lt;?php echo $data[&quot;utm_medium&quot;]?&gt;">
            <input type="hidden" name="utm_term" value="&lt;?php echo $data[&quot;utm_term&quot;]?&gt;">
            <input type="hidden" name="utm_content" value="&lt;?php echo $data[&quot;utm_content&quot;]?&gt;">
            <input type="hidden" name="ref" value="&lt;?php echo $data[&quot;ref&quot;]?&gt;">
            <input type="hidden" name="ip_address" value="&lt;?php echo $data[&quot;ip_address&quot;]?&gt;">
            <input type="hidden" name="city" value="">
            <input type="hidden" name="region" value="">
            <input type="hidden" name="country" value="">
            <input type="hidden" name="client_id" value="&lt;?php echo $data[&quot;client_id&quot;]?&gt;">
            <input type="hidden" name="utmcsr" value="&lt;?php echo $data[&quot;utmcsr&quot;]?&gt;">
            <input type="hidden" name="utmccn" value="&lt;?php echo $data[&quot;utmccn&quot;]?&gt;">
            <input type="hidden" name="utmcmd" value="&lt;?php echo $data[&quot;utmcmd&quot;]?&gt;">
            <input type="hidden" name="click_id" value="&lt;?php echo $data[&quot;click_id&quot;]?&gt;">
            <input type="hidden" name="affilliate_id" value="&lt;?php echo $data[&quot;affiliate_id&quot;]?&gt;">
            <div class="inputWrapper">
              <input name="name" type="text" required>
              <div class="text">Имя</div>
            </div>
            <div class="inputWrapper">
              <input name="phone" type="tel" required>
              <div class="text">Телефон</div>
            </div>
            <div class="btnWrap">
              <button class="btn">Записаться</button>
            </div>
          </form>
        </div>
      </div>
      <div class="modalPolitics" id="modalPolitics1">
        <div class="title">
          <h2>Политика конфиденциальности</h2>
        </div>
        <div class="content">
          <p class="text">Ваша конфиденциальность очень важна для нас. Мы хотим, чтобы Ваша работа в Интернет по возможности была максимально приятной и полезной, и Вы совершенно спокойно использовали широчайший спектр информации, инструментов и возможностей, которые предлагает Интернет.</p>
          <p class="text">Личная информация Членов, собранная при регистрации (или в любое другое время) преимущественно используется для подготовки Продуктов или Услуг в соответствии с Вашими потребностями. Ваша информация не будет передана или продана третьим сторонам. Однако мы можем частично раскрывать личную информацию в особых случаях, описанных в «Согласии с рассылкой»</p>
          <p class="smallTitle">Какие данные собираются на сайте</p>
          <p class="text">При добровольной регистрации на получение рассылки вы отправляете свое Имя и E-mail через форму регистрации.</p>
          <p class="smallTitle">С какой целью собираются эти данные</p>
          <p class="text">Имя используется для обращения лично к вам, а ваш e-mail для отправки вам писем рассылок, новостей, полезных материалов, коммерческих предложений.</p>
          <p class="text">Ваши имя и e-mail не передаются третьим лицам, ни при каких условиях кроме случаев, связанных с исполнением требований законодательства.</p>
          <p class="text">Вы можете отказаться от получения писем рассылки и удалить из базы данных свои контактные данные в любой момент, кликнув на ссылку для отписки, присутствующую в каждом письме.</p>
          <p class="smallTitle">Как эти данные используются</p>
          <p class="text">При помощи этих данных собирается информация о действиях посетителей на сайте с целью улучшения его содержания, улучшения функциональных возможностей сайта и, как следствие, создания качественного контента и сервисов для посетителей.</p>
          <p class="text">Вы можете в любой момент изменить настройки своего браузера так, чтобы браузер блокировал все файлы или оповещал об отправке этих файлов. Учтите при этом, что некоторые функции и сервисы не смогут работать должным образом.</p>
          <p class="smallTitle">Как эти данные защищаются</p>
          <p class="text">Для защиты Вашей личной информации мы используем разнообразные административные, управленческие и технические меры безопасности. Наша Компания придерживается различных международных стандартов контроля, направленных на операции с личной информацией, которые включают определенные меры контроля по защите информации, собранной в Интернет.</p>
          <p class="text">Наших сотрудников обучают понимать и выполнять эти меры контроля, они ознакомлены с нашим Уведомлением о конфиденциальности, нормами и инструкциями.</p>
          <p class="text">Тем не менее, несмотря на то, что мы стремимся обезопасить Вашу личную информацию, Вы тоже должны принимать меры, чтобы защитить ее.</p>
          <p class="text">Мы настоятельно рекомендуем Вам принимать все возможные меры предосторожности во время пребывания в Интернете. Организованные нами услуги и веб-сайты предусматривают меры по защите от утечки, несанкционированного использования и изменения информации, которую мы контролируем. Несмотря на то, что мы делаем все возможное, чтобы обеспечить целостность и безопасность своей сети и систем, мы не можем гарантировать, что наши меры безопасности предотвратят незаконный доступ к этой информации хакеров сторонних организаций.</p>
          <p class="text">В случае изменения данной политики конфиденциальности вы сможете прочитать об этих изменениях на этой странице или, в особых случаях, получить уведомление на свой e-mail.</p>
        </div>
      </div>
      <div class="modalPolitics" id="modalPolitics2">
        <div class="title">
          <h2>Об ответственности</h2>
        </div>
        <div class="content">
          <p><b>В соответствии с действующим законодательством,</b> Администрация отказывается от каких-либо заверений и гарантий, предоставление которых может иным образом подразумеваться, и отказывается от ответственности в отношении Сайта, Содержимого и их использования.</p>
          <p>Ни при каких обстоятельствах Администрация Сайта не будет нести ответственности ни перед какой стороной за какой-либо прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется гиперссылка с нашего cайта, возникновение зависимости, снижения продуктивности, увольнения или прерывания трудовой активности, а равно и отчисления из учебных учреждений, за любую упущенную выгоду, приостановку хозяйственной деятельности, потерю программ или данных в Ваших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования Сайта, Содержимого или какого-либо связанного интернет-сайта, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в передаче, компьютерным вирусом или системным сбоем, даже если администрация будет явно поставлена в известность о возможности такого ущерба.</p>
          <p>Пользователь соглашается с тем, что все возможные споры будут разрешаться по нормам права.</p>
          <p>Пользователь соглашается с тем, что нормы и законы о защите прав потребителей не могут быть применимы к использованию им Сайта, поскольку он не оказывает возмездных услуг.</p>
          <p>Используя данный Сайт, Вы выражаете свое согласие с «Отказом от ответственности» и установленными Правилами и принимаете всю ответственность, которая может быть на Вас возложена.</p>
        </div>
      </div>
      <div class="modalPolitics" id="modalPolitics3">
        <div class="title">
          <h2>Согласие с рассылкой</h2>
        </div>
        <div class="content">
          <p>Заполняя форму на нашем сайте — вы соглашаетесь с нашей политикой конфиденциальности. Также вы соглашаетесь с тем, что мы имеем право разглашать ваши личные данные в следующих случаях:</p>
          <p><b>1) С Вашего согласия:</b> Во всех остальных случаях перед передачей информации о Вас третьим сторонам наша Компания обязуется получить Ваше явное согласие. Например, наша Компания может реализовывать совместное предложение или конкурс с третьей стороной, тогда мы попросим у Вас разрешение на совместное использование Вашей личной информации с третьей стороной.</p>
          <p><b>2) Компаниям, работающим от нашего лица:</b> Мы сотрудничаем с другими компаниями, выполняющими от нашего лица функции бизнес поддержки, в связи с чем Ваша личная информация может быть частично раскрыта. Мы требуем, чтобы такие компании использовали информацию только в целях предоставления услуг по договору; им запрещается передавать данную информацию другим сторонам в ситуациях, отличных от случаев, когда это вызвано необходимостью предоставления оговоренных услуг. Примеры функций бизнес поддержки: выполнение заказов, реализация заявок, выдача призов и бонусов, проведение опросов среди клиентов и управление информационными системами. Мы также раскрываем обобщенную неперсонифицированную информацию при выборе поставщиков услуг.</p>
          <p><b>3) Дочерним и совместным предприятиям:</b> Под дочерним или совместным предприятием понимается организация, не менее 50% долевого участия которой принадлежит Компании. При передаче Вашей информации партнеру по дочернему или совместному предприятию наша Компания требует не разглашать данную информацию другим сторонам в маркетинговых целях и не использовать Вашу информацию каким-либо путем, противоречащим Вашему выбору. Если Вы указали, что не хотите получать от нашей Компании какие-либо маркетинговые материалы, то мы не будем передавать Вашу информацию своим партнерам по дочерним и совместным предприятиям для маркетинговых целей.</p>
          <p><b>4) На совместно позиционируемых или партнерских страницах:</b> Наша Компания может делиться информацией с компаниями-партнерами, вместе с которыми реализует специальные предложения и мероприятия по продвижению товара на совместно позиционируемых страницах нашего сайта. При запросе анкетных данных на таких страницах Вы получите предупреждение о передаче информации. Партнер использует любую предоставленную Вами информацию согласно собственному уведомлению о конфиденциальности, с которым Вы можете ознакомиться перед предоставлением информации о себе.</p>
          <p><b>5) При передаче контроля над предприятием:</b> Наша Компания оставляет за собой право передавать Ваши анкетные данные в связи с полной или частичной продажей или трансфертом нашего предприятия или его активов. При продаже или трансферте бизнеса наша Компания предоставит Вам возможность отказаться от передачи информации о себе. В некоторых случаях это может означать, что новая организация не сможет далее предоставлять Вам услуги или продукты, ранее предоставляемые нашей Компанией.</p>
          <p><b>6) Правоохранительным органам:</b> Наша Компания может без Вашего на то согласия раскрывать персональную информацию третьим сторонам по любой из следующих причин: во избежание нарушений закона, нормативных правовых актов или постановлений суда; участие в правительственных расследованиях; помощь в предотвращении мошенничества; а также укрепление или защита прав Компании или ее дочерних предприятий.</p>
          <p>Вся личная информация, которая передана Вами для регистрации на нашем сайте, может быть в любой момент изменена либо полностью удалена из нашей базы по Вашему запросу. Для этого Вам необходимо связаться с нами любым удобным для Вас способом, использую контактную информацию, размещенную в специальном разделе нашего сайта.</p>
          <p>Если Вы захотите отказаться от получения писем нашей регулярной рассылки, вы можете это сделать в любой момент с помощью специальной ссылки, которая размещается в конце каждого письма.</p>
        </div>
      </div>
    </div>
    <script src="js/libs.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>