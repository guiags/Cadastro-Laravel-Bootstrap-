<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content= "ie=edge">
    <title>Cadastrar Produto</title>

    <link rel="stylesheet" type="text/css" href="/css/welcome.css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <link rel="shortcut icon" href="/images/iconcadprod.jpg">
</head>

<!--<body>
    <form action="<?php echo e(route('registrar_produto')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="">Nome</label></br>
        <input type="text" name="nome_prod"></br>
        <label for="">Custo</label></br>
        <input type="text" name="custo_prod"></br>
        <label for="">Preço</label></br>
        <input type="text" name="preco_prod"></br>
        <label for="">Quantidade</label></br>
        <input type="text" name="quantidade_prod"></br>
        <button>Salvar</button>
    </form>
</body>-->



<body>

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 " style = "background-color: #15253F; margin: 0;">
      <a href="/" class="navbar-brand d-flex align-items-center col-md-3 mb-2 mb-md-0 text-light text-decoration-none" style= "margin-left: 1%;">
        <img src="/images/iconcadprod.jpg" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
        <h4 style ="font-family: Arial, sans-serif;">Cadprod</h4>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-light"><h5>Home</h5></a></li>
        <li><a href="/produtos/novo" class="nav-link px-2 link-light"><h5>Cadastro</h5></a></li>
        <li><a href="/produtos/ver" class="nav-link px-2 link-light"><h5>Produtos</h5></a></li>
        <li><a href="#" class="nav-link px-2 link-light"><h5>Exclusão</h5></a></li>
      </ul>

      <div class="col-md-3 text-end">
        
      </div>
    </header>
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-1" src="/images/logo.jpg" alt="" width="50" height="50">
      <h2>Cadastro de produtos</h2>
      <p class="lead">O seguinte formulário tem por finalidade o cadastro de novos itens e produtos no sistema:</p>
    </div>
        <form action="<?php echo e(route('registrar_produto')); ?>" method="POST" style="align-itens: center;">
            <?php echo csrf_field(); ?>
            <div class="col-md-6 offset-md-3 mb-2">
              <label for="address" class="form-label">Nome do produto:</label>
              <input type="text" class="form-control" name="nome_prod" placeholder="Produto..." required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-6 offset-md-3 mb-2">
              <label for="address" class="form-label">Custo:</label>
              <input type="text" class="form-control" name="custo_prod" placeholder="R$ 100,00" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-6 offset-md-3 mb-2">
              <label for="address" class="form-label">Preço:</label>
              <input type="text" class="form-control" name="preco_prod" placeholder="R$ 100,00" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-6 offset-md-3 mb-2">
              <label for="address" class="form-label">Quantidade:</label>
              <input type="text" class="form-control" name="quantidade_prod" placeholder="2" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

          <hr class="my-4">

          <button class="w-20 btn btn-primary btn-md offset-md-3">Cadastrar</button>
        </form>
      </div>
    </div>
  </main>


    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    


    <footer class="text-muted py-4" style = "background-color: #15253F; width: 100%; bottom: 0; position: fixed;"><!-- bottom: 0; position: fixed;-->
        <div class="container" style = "color: white;">
            <p class="float-end mb-1">
            <a href="#" class= "link-light">Back to top</a>
            </p>
            <p class="mb-1">Album example is © Bootstrap, but please download and customize it for yourself!</p>
            <p class="mb-0">New to Bootstrap? <a href="/" class= "link-light">Visit the homepage</a> or read our <a href="/docs/5.3/getting-started/introduction/" class= "link-light">getting started guide</a>.</p>
        </div>
    </footer>
  

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script><?php /**PATH C:\Users\Sonner\Documents\cadphp\resources\views/produtos/create.blade.php ENDPATH**/ ?>