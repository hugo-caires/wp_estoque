<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrap">

	<nav id="w0" class="navbar-inverse navbar-fixed-top navbar" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= esc_url( home_url( '/' ) ) ?>"><?php bloginfo( 'name' ); ?></a>
			</div>
			<div id="w0-collapse" class="collapse navbar-collapse">
				<ul id="w1" class="navbar-nav navbar-right nav">
					<?php global $post; ?>
					<li class="<?=($post->ID == get_page_by_path('home')->ID ? 'active' : '' )?>"><a href="<?= esc_url( home_url( '/' ) ) ?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li class="<?=($post->ID == get_page_by_path('pedido')->ID ? 'active' : '' )?>"><a href="<?= get_page_link( get_page_by_title( 'Pedidos' )->ID) ?>">Pedidos</a></li>
					<li class="<?=($post->ID == get_page_by_path('produto')->ID ? 'active' : '' )?>"><a href="<?= get_page_link( get_page_by_title( 'Produtos' )->ID) ?>">Produtos</a></li>
					<li class="<?=($post->ID == get_page_by_path('cliente')->ID ? 'active' : '' )?>"><a href="<?= get_page_link( get_page_by_title( 'Clientes' )->ID) ?>">Clientes</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">