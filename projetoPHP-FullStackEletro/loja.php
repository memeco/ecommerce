<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="script.js"></script>
    <title>Full Stack</title>
</head>
<body>
                  <!-- ***** MENU ***** -->
    <nav>
        <label class="logo">Full Stack Eletro</label>
        <ul class="nav-links">           
            <li><a target="blank" href= "index.php">Home</a></li>
            <li><a target="blank" href= "produtos.php">Produtos</a></li>
            <li><a target="blank" href= "loja.php">Loja</a></li>     
        </ul>
    </nav>
    <!-- ***** FORMA DE PAGAMENTO ***** -->
    <div class="pgto">
        <img onmouseover="aumentar(this)" onmouseout="normal(this)"  src="./img/formasdepgto.jpeg" alt=""  width="200px" height="50%">
    </div>
            <!-- ***** FORMULARIO ***** -->          
   <section class="newsletter">
       <h3>Nesletter</h3>
       <p>Dev´s receba nossas promoçoes por-mail</p>
       <form method="POST">
           <input type="text" placeholder="Seu Nome ">
           <input type="email" placeholder="Seu Email">
           <button>Cadastrar</button>
       </form>
   </section>
      <!-- ***** FOOTER ***** -->
    <footer class="rodape" >
        <p>  
            © Copyright 2020 Full Stack Eletro | Recode       
        </p>
        
    </footer>
</body>
</html>
