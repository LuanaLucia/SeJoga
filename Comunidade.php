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
                
                

              <!--  <ul  class="chatNews">
                <li><a href="#">MSG</a></li>
               <li><a href="#">Not</a></li>
                <li><a href="#">IMG</a></li>-->
                </ul>
                </ul>
            </nav>

    </header>
<body>
    
<h1 class="tituloPG">Comunidade</h1>
    <main>

        <div class="main__content">
        <div class="">

            <form method="POST" action="">
            <div id="divBusca">
                <input type="text" id="txtBusca" placeholder="Buscar..."/>
                <img src="search3.png" id="btnBusca" alt="Buscar" width="30"/>
            </div>
            </br>
            <input type="submit" class="btn2" value="+ Machismo">
            <input type="submit" class="btn2" value="+ Profissional">
            <input type="submit" class="btn2" value="+ Steam">
            <input type="submit" class="btn2" value="+ LOL">

</br></br>

            
            <div id="msg">
               <div class="nomeComu"> Giulia<br></div>
               <div class="msgComu">Estou jogando Dota, quem quer vir junto?</div>
               <div class="tagComu"> #jogandoagora, #vamosjuntes, #dota</div>

            </div>

            </br>

            <div id="msg">
               <div class="nomeComu"> Larissa<br></div>
               <div class="msgComu">Olá amigs, Está acontecendo um problema no Steam que está muito lento. </br>
               Reinstalei o Steam, mas o mesmo problema está acontecendo. Alguma ideia galera como </br>
               posso consertar o problema? Qualquer ajuda seria muito apreciada.</div>
               <div class="tagComu"> #jogandoagora, #vamosjuntes, #dota</div>

            </div>
            
</br>
</br>
            
            </form>
       
            <form method="POST" action="">

                <div class="mb-3">
                    <textarea id="beneficios1" name="beneficios1">Postar...</textarea>
                </div>

                <input type="submit" class="btn   mt-3" value="Publicar">
                
            </form>
        </div>

    </main>

</body>

</html>