<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/LandingPageStyle.css" />
    <link rel="stylesheet" href="css/Menu.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Результаты поиска маршрутов</title>
    <style>
      /* Стили для макета страницы */
      /* ... */

      /* Стили для таблицы с результатами */
      table {
        width: 100%;
        border-collapse: collapse;
      }

      th,
      td {
        padding: 8px;
        border-bottom: 1px solid #ddd;
      }

      tr:hover {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <div id="page">
      <header>
        <div class="Logo">
          <img src="img/logoza.ru.png" height="100%" width="15%" />
          <ul style="margin : 3%;" id="MainMenu">
            <li align="right">
              <span style="color: black">Меню навигации</span>

              <ul>
                <li>
                  <a href="javascript:scrollToSection('section4')">Управление бронированием</a>
                </li>
                <li><a href="index.html">Главная страница</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </header>
      <div id="MainSite">
        <h2>Результаты поиска маршрутов</h2>
        <form method="post">
          <table>
            <thead>
              <tr>
                <th>Регион</th>
                <th>Название маршрута</th>
                <th>Сложность маршрута</th>
                <th>Предполагаемые даты похода</th>
                <th>Количество интересных зон</th>
                <th>Выбор маршрута</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th><!--<input type="text" name="Region" id="Region" />--><?php echo $_POST['Region']?></th>
                <th>
                  <!--<input type="text" name="NameTravel" id="NameTravel " />--><?php echo $_POST['NameTravel']?>
                </th>
                <th><!--<input type="text" name="LvlTravel" id="LvlTravel" />--><?php echo $_POST['LvlTravel']?></th>
                <th><!--<input type="date" name="DateTravel" id="DateTravel" />--><?php echo $_POST['DateTravel']?></th>
                <th><input type="text" name="PosTravel" id="PosTravel" /></th>
                <th><input type="text" name="Travel" id="Travel" /></th>
              </tr>
              <!-- ... -->
            </tbody>
          </table>
        </form>
        <button onclick="message()">Выбрать</button>
        <a
          id="zone"
          style=" text-decoration: none; color: black"
          href="выбор_зон.html"
          >Перейти к выбору конкретных зон для посещения</a
        >
      </div>
      <footer>
	<div class="container">
	   <p style="color: red;">Телефон: 8 (800) 555-33-10</p>
	</div>
</div>
 </footer>
    </div>
    
    <script>
      // Функция для выбора маршрута
      function message() {
        // Здесь можно добавить логику для выбора маршрута
        // Например, можно отправить AJAX запрос на сервер для сохранения выбранного маршрута
        alert(Region);
      }
    </script>
  </body>
</html>
<!--echo ['Вы выбрали путешествие в регион'+'Region'+'название путешествия'+'NameTravel'+'уровень подготовки к путешествию'+'LvlTravel'+'дата путешествия:'+'DateTravel'+'номер маршрута:'+'Travel'+'.Количество интересных мест:'+'PosTravel']?>-->






