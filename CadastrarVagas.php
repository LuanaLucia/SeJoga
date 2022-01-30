<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    
    <title>Se Joga - Vagas</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
   
</head>
<header>
 
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu">&#9776</label>
        <nav class="menu">
            <ul class="logo"><img src="headerLogo.png" width="150"></ul>
                <ul>
           
               
                <li><a href="#">Vagas</a></li>
                <li><a href="#">Notícias</a></li>
                <li><a href="#">Jogos</a></li>
                <li><a href="#">Stream</a></li>
                
                

             <!--   <ul  class="chatNews">
                <li><a href="#"><img src="search3.png" id="btnBusca" alt="Buscar" width="30"/></a></li>
               <li><a href="#"><img src="search3.png" id="btnBusca" alt="Buscar" width="30"/></a></li>
                <li><a href="#"><img src="search3.png" id="btnBusca" alt="Buscar" width="30"/></a></li>-->
                </ul>
                </ul>
            </nav>

    </header>
<body>
    
<h1 class="tituloPG">Cadastro de vagas</h1>
    <main>

        <div class="main__content">
        <?php
        if(isset($_SESSION['msg']))
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        ?>
            <form method="POST" action="processaVagas.php">
                <div class="mb-3">
                    <label for="titulo1" class="form-label">Título da vaga:</label>
                    <input placeholder="Título para a vaga" type="text" class="form-control" name="titulo1">
                </div>
                
                <div class="mb-3">
                    <label for="cargo1" class="form-label">Nivel:</label>
                    <input placeholder="Nível da função (Junior, Pleno, Senior, Gerente...)" type="text" class="form-control" name="cargo1">
                </div>

                <div class="mb-3">
                    <label for="habilidades1">Habilidades necessárias:</label>
                    <textarea id="habilidades1" name="habilidades1"></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="salario1" class="form-label">Salário:</label>
                    <input placeholder="Salário" type="text" class="form-control" name="salario1">
                </div>

                <div class="mb-3">
                    <label for="regime1" class="form-label">Regime de contratação:</label>
                    <input placeholder="Regime de contratação (CLT, PJ...)" type="text" class="form-control" name="regime1">
                </div>

                <div class="mb-3">
                    <label for="empresa1" class="form-label">Empresa:</label>
                    <input placeholder="Empresa" type="text" class="form-control" name="empresa1">
                </div>

                <div class="mb-3">
                    <label for="beneficios1">Benefícios:</label>
                    <textarea id="beneficios1" name="beneficios1" cols="40" rows="5"></textarea>
                </div>

                <div class="mb-3">
                    <label for="datafim1" class="form-label">Data de expiração da vaga:</label>
                    <input placeholder="" type="date" class="form-control" name="datafim1">
                </div>


                <input type="submit" class="btn   mt-3" value="Cadastrar">
                
            </form>
        </div>

    </main>

</body>

</html>