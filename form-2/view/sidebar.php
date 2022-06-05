<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<!-- Created by CodingLab |www.youtube.com/CodingLabYT (modificada //  n fui o criador)-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assents/sidebar.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <img src="../images/logo.png" style="width: 50px; height: 50px; margin-left: 15px; margin-top: 25px;">
      <span class="logo_name" style="margin-left: 5px; margin-top: 25px;">Ficha Biográfica</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
        <i class='bx bx-menu' ></i>
          <span class="link_name">Inicio</span>
        </a>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bx-building-house' ></i>
            <span class="link_name">Familiar</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Dados Pessoais</a></li>
          <li><a href="dadosPessoais.php">Informações do <br> Estudantes</a></li>
          <li><a href="dadosResponsaveis.php">Informações dos <br> Responsáveis</a></li>
          <li><a href="composiçãoFamiliar.php">Composição <br> Familiar</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bxs-graduation'></i>
            <span class="link_name">Academico</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Academico</a></li>
          <li><a href="vidaEscolar.php">Vida Escolar</a></li>
          <li><a href="deslocamentoEscolar.php">Escolar e Deslocamento</a></li>
        </ul>
        <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="../images/user.png" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">user</div>
        <div class="job">user</div>
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>
