<!doctype html>
<html ⚡>
<head>
  <title>Editar Categoria</title>
  <meta charset="utf-8">

<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link  rel="stylesheet" type="text/css"  media="all" href="/assets/css/style.css" />
<link href="/https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
<meta name="viewport" content="width=device-width,minimum-scale=1">
<script src="js/bootstrap.min.js"></script>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-fit-text" src="/https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
<script async custom-element="amp-sidebar" src="/https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script></head>
  <!-- Header -->
<amp-sidebar id="sidebar" class="sample-sidebar" layout="nodisplay" side="left">
  <div class="close-menu">
    <a on="tap:sidebar.toggle">
      <img src="/assets/images/bt-close.png" alt="Close Menu" width="24" height="24" />
    </a>
  </div>
  <a href="{{'/'}}"><img src="/assets/images/menu-go-jumpers.png" alt="Welcome" width="200" height="43" /></a>
  <div>
    <ul>
      <li><a href="/categorias" class="link-menu">Categorias</a></li>
      <li><a href="/listar_produtos" class="link-menu">Produtos</a></li>
    </ul>
  </div>
</amp-sidebar>
<header>
  <div class="go-menu">
    <a on="tap:sidebar.toggle">☰</a>
    <a href="{{'/'}}" class="link-logo"><img src="/assets/images/go-logo.png" alt="Welcome" width="69" height="430" /></a>
  </div>
  <div class="right-box">
    <span class="go-title">Painel Administrador</span>
  </div>
</header>
<!-- Header -->
  <!-- Main Content -->
  <main class="content">
    <h1 class="title new-item">Editar Categoria</h1>

    <form method="POST" action="/editar_categoria/{{$editCategoria->categoria_id}}">

      @csrf
      <div class="input-field">
        <label for="category-name" class="label">Nome</label>
        <input type="text" id="category-name" name="category_name" class="input-text" value="{{$editCategoria->nome}}"/>
      </div>

      <div class="actions-form">
        <a href="/categorias" class="action back">Voltar</a>
        <input class="btn-submit btn-action"  type="submit" value="Editar" />
      </div>
    </form>
  </main>
  <!-- Main Content -->

 </body>
</html>
