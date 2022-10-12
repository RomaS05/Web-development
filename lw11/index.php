<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8"/>
    <title>Don't do it</title>
    <link rel="stylesheet" href="styles/styles.css"/>
    <link rel="stylesheet" href="styles/form-styles.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>
<script src="index.js"></script>
  <header>
    <div class="header">
      <div class="header__text-dont">
        <a>Don`t <span class="color-pink"> do</span> it</a>
      </div>
      <div class="header__links">
        <a class="header__links-text">Что будет на курсе?</a>
        <a class="header__links-text">Вопросы</a>
        <a class="header__links-text">Автор</a>
      </div>
      <button id="review-btn" class="header__button button">
        <a class="button__text">Записаться на курс</a>
      </button>
    </div>
  </header>
  <div class="main-frame">
    <div class="main-frame__header">
      <a class="main-frame__title">Не<span class="color-pink"> делай</span> это</a>
      <div class="main-frame__subtitle subtitle">
        <a class="subtitle__text">Онлайн-курс для творческих людей, о том, как управлять своим временем</a>
      </div>
      <button id="main-btn" class="main-frame__button button">
        <a class="button__text">Записаться на курс</a>
      </button>
    </div>
    <div class="main-frame__image">
      <img src="images/illustration.svg">
    </div>
  </div>
  <div class="description">
    <div class="description__time">
      <img class="description__time-img" src="images/time.svg"/>
      <div class="description__plate plate">
        <a class="plate__text">Для тех, у кого слишком много идей и слишком мало времени</a>
      </div>
    </div>
    <div class="description__notebook">
      <img class="description__notebook-img" src="images/notebook.svg"/>
      <div class="description__plate plate">
        <a class="plate__text">Метод «списка не дел», который позволит успевать и реализовывать</a>
      </div>
    </div>
    <div class="description__target">
      <img class="description__target-img" src="images/target.svg"/>
      <div class="description__plate plate">
        <a class="plate__text">Курс научит творческих людей сосредоточиваться</a>
      </div>
    </div>
  </div>
  <div class="reasons">
    <div class="reasons__finances">
      <div class="reasons__finances-img">
        <img src="images/finances.svg">
      </div>
      <div class="reasons__finances-main">
        <a class="reasons__header">Ты не успеешь</a>
        <div class ="reasons__title title">
          <a class="title__text">Всех творческих людей объединяет одна проблема - отсутствие времени на реализацию идей. Как прибавить суткам часы, рассмотрим в нашем курсе.</a>
        </div>
      </div>
    </div>
    <div class="reasons__mind">
      <div class="reasons__mind-main">
        <a class="reasons__header">Опять дедлайн</a>
        <div class="reasons__title title">
          <a class="title__text">В мире, где столько всего интересного, когда же успевать жить?</a>
        </div>
      </div>
      <div class="reasons__mind-img">
        <img src="images/mind_blowing.svg">
      </div>
    </div>
  </div>
  <div class="opportunities">
    <div class="opportunities__header">
        <a class="opportunities__header-text">На курсе ты<span class="color-pink"> сможешь</span></a>
    </div>
    <div class="opportunities__table table">
      <div class="table__ticket ticket">
        <img class="ticket__image" src="images/hand-1.svg"/>
        <div class="ticket__card card">
          <a class="card__text">Понять, что нужно делать, а что делать не стоит.</a>
        </div>
      </div>
      <div class="ticket">
        <img class="ticket__image" src="images/hand-2.svg"/>
        <div class="ticket__card card">
          <a class="card__text">Перестать себя искусственно ограничивать.</a>
        </div>
      </div>
      <div class="ticket">
        <img class="ticket__image" src="images/hand-3.svg"/>
        <div class="ticket__card card">
          <a class="card__text">Определить сильные стороны и начать использовать слабые.</a>
        </div>
      </div>
      <div class="ticket">
        <img class="ticket__image" src="images/hand-4.svg"/>
        <div class="ticket__card card">
          <a class="card__text">Научиться достигать любой цели в 3 понятных шага.</a>
        </div>
      </div>
      <div class="ticket">
        <img class="ticket__image" src="images/hand-5.svg"/>
        <div class="ticket__card card">
          <a class="card__text">Сотрудничать эффективно и с правильными людьми.</a>
        </div>
      </div>
      <div class="ticket">
        <img class="ticket__image" src="images/hand-6.svg"/>
        <div class="ticket__card card">
          <a class="card__text">Оптимизировать общение с клиентами и проведение совещаний.</a>
        </div>
      </div>
    </div>
  </div>
  <div id="back" class="outside">
    <div class="form__border">
        <article id="popup" class="form">
            <div class="form__images">
                <img class="form__image" src="images/Welcome.svg" alt="картинка не загрузилась">
                <img id="vector" class="form__close" src="images/Vector.svg" alt="картинка не загрузилась">
            </div>
            <h2 class="form__title">Записаться на курс</h2>
            <div id="user-form" class="form__user-form">
                <input class="form__text-place" type="text" placeholder="Ваше имя" name="name">
                <input class="form__text-place" type="email" placeholder="Email" name="email">
                <select class="form__list" name="activity">
                    <option class="form__option_special" disabled selected>Деятельность</option>
                    <option class="form__option" value="programmer">Программист</option>
                    <option class="form__option" value="designer">Дизайнер</option>
                    <option class="form__option" value="marketer">Маркетолог</option>
                </select>
                <div class="form__user-deal">
                    <input class="form__checkbox" type="checkbox" name="agreement">
                    <p for="subscribeNews" class="form__text">Согласен получать информационные материалы о старте курса</p>
                </div>
                <button id="form-submit" class="form__target">Записаться на курс</button>
            </div>
        </article>
        <article id="error-popup" class="form__content_error hidden">
          <h2 class="form__title_error">Упс.. Произошла ошибка!</h2>
          <img class="form__close" src="images/Vector.svg" alt="картинка не загрузилась">
        </article>
    </div>
  </div>
  <footer class="footer">
    <div class="footer__text">
        <a class="footer__text-text">Don`t<span class="color-pink"> do</span> it</a>
    </div>
  </footer>
</body>
</html>