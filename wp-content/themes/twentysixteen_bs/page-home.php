<?php
/*
Template Name: page-home
*/
?>
<?php get_header(); ?>

<div class="site-index">
<div class="jumbotron">
<h1>ABRIL Estoque</h1><!--more-->
<p class="lead">Sistema de controle de estoque</p>
<p>
<a class="btn btn-sm btn-success" href="<?= get_page_link( get_page_by_title( 'Pedidos' )->ID) ?>"><i class="glyphicon glyphicon-shopping-cart"></i> Pedidos</a> <a class="btn btn-sm btn-success" href="<?= get_page_link( get_page_by_title( 'Produtos' )->ID) ?>"><i class="glyphicon glyphicon-barcode"></i> Produtos</a> <a class="btn btn-sm btn-success" href="<?= get_page_link( get_page_by_title( 'Clientes' )->ID) ?>"><i class="glyphicon glyphicon-user"></i> Clientes</a>
</p>
</div>
</div>

<?php get_footer(); ?>