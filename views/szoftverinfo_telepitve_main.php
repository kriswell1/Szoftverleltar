<div class=""container>
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8">
		<table class="table table-striped table-bordered table-hover">
				
			<thead>
				<tr>
					<th>Verzió</th>
					<th>Dátum</th>
					
				</tr>
			</thead>
			<tbody>
			<?php foreach( $viewData as $key => $item ) { ?>
				<tr>
					<td><?= $item['verzio'] ?></td>
					<td><?= $item['datum'] ?></td>
					
				</tr>	
			<?php } ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">&copy; 2023 Szotverleltár Bt.</td>
				</tr>		
			</tfoot>
		</table>
		</div>
		<div class="col-2"></div>
	</div>
</div>