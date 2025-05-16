<h1>Produtos</h1>
<?php foreach($data['produtos'] as $produto): ?>
  <div class="card" style="width: 18rem;">
    <img src="<?=$produto['imagem_link']?>" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title"><?=$produto['produto_descricao']?></h5>
      <p class="card-text"><?=$produto['produto_preco']?></p>
      <p class="card-text"><?=$produto['categoria_nome']?></p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
<?php endforeach; ?>