<html>
<head><!-- cabeçalho-->
  <meta charset="utf-8">
  <link rel="icon" href="img/greve.jpg">
  <title>#GreveGeral - Eu Apoio</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,800');
    html, button {
      font-family: 'Open Sans', sans-serif;
      color: white;
    }

    body{
      margin: 0;
    }

    button {
      background-color: transparent;
      margin-top: 20px;
      padding: 10px;
      font-weight: bold;
      font-size: 18px;
    }

    button:hover {
      background-color: gray;
    }

    form {
      width: 310px;
      margin: 100px auto;
    }

    input, label, textarea {
      display: block;
      font-size: 20px;
      width: 300px;
    }

    label {
      margin-top: 15px;
    }

    .vermelha {
      background-color: #CF2227
    }
  </style>
</head><!-- fim do cabeçalho-->

<body class="vermelha"><!--corpo -->
  <form action="http://localhost:8081/apoiar" method="post">
    <label for="nome">NOME:</label>
    <input type="text" id="nome" name="apoio_nome">
    <label for="email">E-MAIL:</label>
    <input type="text" id="email" name="apoio_email">
    <label for="mensagem">MENSAGEM:</label>
    <textarea id="mensagem" name="apoio_mensagem"></textarea>
    <button class="button" type="submit">APOIAR</button>
  </form>
</body><!-- fim do corpo-->
</html>
