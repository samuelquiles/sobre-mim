@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css"/>
  <title>Video Youtube - Parallax</title>
  <!--
    YOUTUBE: https://www.youtube.com/c/Sujeitoprogramador/
    BLOG: https://sujeitoprogramador.com
    INSTAGRAM: https://instagram.com/sujeitoprogramador
  -->
</head>
<body>
  
  <div class="wrapper">
    <main>
      <section class="module parallax parallax-1">
        <h1>Samuel Quiles</h1>
      </section>

      <section class="module content">
        <div class="container">
          <h2>SOBRE MIM</h2>
          <p>
            Tenho 23 anos, to no penultimo esemestre da faculdade AMÉM
          </p>
          <p>
            gosto muito de jogos, filmes, series e tudo que envolve o universo geek
          </p>          
        </div>
      </section>

      <section class="module parallax parallax-2">
        <h1>E SOU DEV JUNIOR PEGA ESSA RAPAZ</h1>
      </section>

      <section class="module content">
        <div class="container">
          <h2>MINHAS QUALIDADES</h2>
          <p>
            Qualquer coisa tira o meu foco, mas se n tirarem se eu trancar em alguma coisa que estou aprendendo eu vou ficar horas ou dia tentando achar a solução
        </p>
          <p>
            SOU EXTREMAMENTE AMIGAVEL E SOCIAVEL
        </p>          
        </div>
      </section>

      <section class="module parallax parallax-3">
        <h1>CONTINUE LENDO</h1>
      </section>

      <section class="module content">
        <div class="container">
          <h2>MINHAS NÃO QUALIDADES</h2>
          <p>
            tenho ego do tamanho do mundo e esta profissão vai fazer eu quebrar muito a cara ainda
        </p>
          <p>
            NÃO TENHO MAIS NADA PRA DIZER PODE PARAR DE ROLAR ACABOU
        </p>          
        </div>
      </section>

    </main>
  </div>

</body>
</html>
<style>
   body{
  margin:0;
  padding:0;
  color: #242424;
  font-family: sans-serif;
  word-wrap: break-word;
  overflow-wrap: break-word;
}

h1,h2,h3,h4,h5,h6{
  font-weight: 900;
  color: #000;
}

.wrapper{
  width: 100%;
  margin: 0 auto;
}

main{
  display: block;
  background-color: #FFF;
}

.container{
  width: 100%;
  max-width: 760px;
  margin: 0 auto;
  padding: 0 20px;
}

section.module p{
  margin-bottom: 40px;
}

section.module:last-child{
  margin-bottom: 0;
}

section.module h2{
  margin-bottom: 40px;
  font-size: 30px;
}

section.module.content{
 padding: 40px 0;
 background: #ece7d5; 
}

section.module.parallax{
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100vh !important;
  width: 100%;
  position: relative;
  overflow: hidden;
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
}

section.module.parallax:after{
  content: "";
  height: 100%;
  width: 100%;
  position: absolute;
  z-index: 8;
  background: -moz-linear-gradient(to bottom, rgba(0,0,0,0) 0, rgba(0,0,0,0) 40%, #000 100% );
  background: -webkit-linear-gradient(to bottom, rgba(0,0,0,0) 0, rgba(0,0,0,0) 40%, #000 100% );
  background: linear-gradient(to bottom, rgba(0,0,0,0) 0, rgba(0,0,0,0) 40%, #000 100% );
}


section.module.parallax-1{
  background-image: url("https://images.unsplash.com/photo-1464823063530-08f10ed1a2dd?dpr=1&auto=format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=");
}

section.module.parallax-2{
  background-image: url("https://images.unsplash.com/photo-1473181488821-2d23949a045a?dpr=1&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=");
}

section.module.parallax-3{
  background-image: url("https://images.unsplash.com/photo-1472162314594-eca3c3d90df1?dpr=1&auto=format&fit=crop&w=1500&h=1001&q=80&cs=tinysrgb&crop=");
}

section.module.parallax h1{
  color: #FFF;
  text-align: center;
  font-size: 78px;
  z-index: 50;
  text-transform: uppercase;
}

@media all and (max-width: 820px) {
  section.module h2 {
    font-size: 32px;
  }
  .module h2, p{
    padding: 0 8px;
  }

  .container{
    margin:0;
    padding:0;
  }

  section.module.parallax h1 {
    font-size: 36px;
  }
} 
</style>
@endsection