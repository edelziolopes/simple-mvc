<h1>Produtos</h1>
<?php 
foreach($data['produtos'] as $produto):
  echo "<br>".$produto['nome'];
endforeach;
?>
<h1>Categorias</h1>
<?php 
foreach($data['categorias'] as $categoria):
  echo "<br>".$categoria['nome'];
endforeach;
?>