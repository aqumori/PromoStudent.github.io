<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PromoStudent - Магазины</title>
    <link rel="icon" href="logo.png" type="image/svg+xml"> 
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
       <div class="container">
            <a href="promo.html">
        <div class="logo-container">
          <img src="logo.png" alt="Логотип PromoStudent" class="logo-image">
          <h1 class="logo">PromoStudent</h1>
        </div>
      </a>
            <nav>
                <ul>
                    <li><a href="promo.html">Главная</a></li>
					<li><a href="store.html">Магазины</a></li>
                    <li><a href="favourities.html">Избранное</a></li>
					<li><a href="partners.html">Партнёры</a></li>
            </nav>
        </div>
    </header>
  <main>
  <section class="profile">
            <div class="describe">
                <div class="profile-content">
                    <div class="profile-image">
                        <img src="rabbit.png" alt="Фото профиля" class="profile-image">
                    </div>
                    <div class="profile-form">
                        <h2>Ваш профиль</h2>
                        <form name="form1" method="post" action="a.php"> 
							<p>Фамилия: <input type="text" name="Surname"></p> 
							<p>Имя: <input type="text" name="Name"></p> 
							<p>Отчество: <input type="text" name="Patr"></p> 		
							<p>ВУЗ: <input type="text" name="Univer"></p> 
							<p>Курс: <input type="number" name="Kours"></p> 
							<p><input type="submit" value="Сохранить"></p> 
						</form>
						<?php 
							/* Подключаемся к базе данных */ 
							$link = mysqli_connect("localhost", "root", ""); 
							mysqli_select_db($link, base"); 
							 
							/* Выбираем данные */ 
							$sql="SELECT Surname, Name, Patr, Univer, Kours FROM baa"; 
							$result=mysqli_query($link, $sql); 
							 
							while ($line=mysqli_fetch_row($result))
							{
								echo "<b>Фамилия:</b>".$line[0]."<br>"; 
								echo "<b>Имя:</b>".$line[1]."<br>"; 
								echo "<b>Отчество:</b>".$line[2]."<br>"; 
								echo "<b>ВУЗ:</b>".$line[3]."<br>"; 
								echo "<b>Курс:</b>".$line[4]."<br><br>"; 
							} 
						?>	
                    </div>
                </div>
            </div>
        </section>
    </main>  
    <footer>
        <div class="describe">
            <p>&copy; 2024 PromoStudent. Все права защищены.</p>
        </div>
    </footer>
</body>  	