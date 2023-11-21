<div class=""container>
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8">
		<table class="table table-striped table-bordered table-hover">
				<caption>Szoftverinformáció</caption>
			<thead>
				<tr>
					<th>Név</th><th>Kategória</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach( $viewData as $key => $item ) { ?>
				<tr>
					<td><?= $item['nev'] ?></td>
					<td><?= $item['kategoria'] ?></td>
				</tr>	
			<?php } ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">&copy; 2023 Szoftverleltár Bt.</td>
				</tr>		
			</tfoot>
		</table>
		</div>
		<div class="col-2"></div>
	</div>
</div>