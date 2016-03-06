<?php
/*
Template Name: page-pedido
*/
?>
<?php get_header(); 

$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'pedido'
);
$query = new WP_Query( $args );
?>

<div class="panel panel-default">

    <div class="panel-heading">
        <span class="panel-title"><i class="glyphicon glyphicon-barcode"></i> Pedidos</span>
    </div>

    <div id="w1" class="grid-view">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Cliente</th>
					<th>Produto</th>
				</tr>
			</thead>
			<tbody>
				<?php

				if( $query->have_posts() ){ ?>

					<?php while( $query->have_posts() ) : $query->the_post(); ?>
						<tr>
							<td><?=the_field('cliente')?></td>
							<td><?=the_field('produto')?></td>
						</tr>
					<?php endwhile; ?>

				<?php } else { ?>

					<tr>
						<td colspan="3">Não existem registros.</td>
					</tr>

				<?php } ?>
			
			</tbody>
		</table>
	</div>
</div>

<?php get_footer(); ?>