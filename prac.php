<!DOCTYPE html>
<html lang="en">
<head>
  <title>Clock's market</title>
  <link rel="stylesheet" href="prac.css">
</head>
<body>
   <header>
    <img src="images/kUZTCoTF3kM.jpg" class="logo"   width="50px" height="50px" alt=""> <p class="logoname">GENTELMEN'S</p>
    <nav>
      <ul>
        <li class="home"> 
          HOME
        </li>
        <li>
          ABOUT US
        </li>
        <li>
          COLLECTIONS
        </li>
        <li>
          HISTORY
        </li>
        <li>
          SHOP
        </li>
        <li>
          CONTACT
        </li>
        <li>
        <img src="images/icons8.png" width="25px" alt="">
        </li>
        <li>
          <img src="images/user.png" width="20px" alt="">
          <p>Log in</p>
        </li>
      </ul>
    </nav>
    
  </header>
  <div class="div">
    <section>
      <h1>
        <b>DEVISED WITH <br>
        PRECISION</b>
      </h1>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus corrupti 
        soluta exercitationem doloremque eos voluptates reprehenderit sed?
      </p>
      <button>
        DISCOVER MODEL
      </button>
    </section>
    <img src="images/clockbg.png" class="clocks" alt="">
  </div>
  
  <?php
  // Подключение к базе данных
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "watch";

  $conn = new mysqli($host, $username, $password, $database);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Запрос к базе данных для получения рекламных объявлений
  $sql = "SELECT * FROM advertisements";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '<div class="advertisement">';
      echo '<h3>' . $row["title"] . '</h3>';
      echo '<p>' . $row["description"] . '</p>';
      echo '</div>';
    }
  } else {
    echo "No advertisements found.";
  }
  $conn->close();
  ?>
</body>

</html>