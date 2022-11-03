<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Marque seu horário conosco">
    <title>Barbearia</title>
</head>
<body>
    <header class="cabecalho">
        <h1  class="conteudo-principal-escrito-titulo"> Barbearia Shave & Cut</h1>
        <img class="cabecalho-imagem" src="barbearia-removebg-preview.png" alt="" height="100px">
        <nav class="cabecalho-menu">
            
            <a class="cabecalho-menu-item1" href="http://localhost/novo%20site/cuida/">Inicio</a>
            <a class="cabecalho-menu-item2" href="#">Informação</a>
            <a class="cabecalho-menu-item3" href="#">Contato</a>
            <a class="cabecalho-menu-item4" href="https://www.google.com.br/maps/place/Jilbarbeiro/@-8.5094821,-39.3197821,17z/data=!3m1!4b1!4m6!3m5!1s0x70a61acca4b10d3:0x852d3c012c7c0429!8m2!3d-8.5094874!4d-39.3175934!16s%2Fg%2F11mwk6gnhz">Localização</a>
            <a class="cabecalho-menu-item5" href="http://127.0.0.1:5500/cuida/login.html">Login</a>
             
        </nav>
        <style>
            
        </style>

        
        <?php
    session_start();
     if (isset($_POST['usuario'], $_POST['senha'])){
        if($_POST['usuario']='maria' && $_POST['senha']='123'){
            $_SESSION['usuario'] = $_POST['usuario'];
            header ('Location: clientes.php');
        }
    }
    if (isset($_GET['erro'])){
        $erro = 'E necessario logar para acessar o sistema';
    }
      ?>
    </header>
    
    <div>
        <header>
        <div style="background-color:coral; margin:10px height: 10px">
         <?php echo $erro ?? '' ?>
        </div>
        </header>
    </div>
        
      
    <main class="conteudo">
     <section class="conteudo-principal">
        <div class="conteudo-principal-escrito">
            
            <h2  class="conteudo-principal-escrito-subtitulo">Marque seu horário conosco!!!</h2>
            
        </div>
        <img  class="conteudo-principal-imagem"src="barber.png" alt="" height="500px" width="500px">
        
     </section>

     <html>
 
    <form action="" method="post">
    <input type="text" name="usuario" placeholder="Usuario" >
    <input type="text" name="senha" placeholder="Senha">
    <input type="submit" name="Login" value=" login">
    <input type="submit" name="Cadastrar" value=" Cadastrar">
         </form>
    
    </html>
       

     
     
    </main>
     
    <footer class="rodape">

      <img  class="rodape-imagem" src="eeee.png" alt="" height="100px">
      <img class="rodape-insta" src="insta.png" alt="" height="100px" >
    </footer>
</body>
</html>