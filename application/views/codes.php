<table colspan="4" width="100%">

	<tbody >

		<?php $cols = 1; ?>

		<?php foreach($codes as $index => $c): ?>

		<?php if($index == 0): ?>
			<tr>
		<?php endif; ?>

		
		<td><?php echo $c;?></td>
			<?php $cols++; ?>
			
		<?php if($cols > 3): ?>
			</tr>
			<tr>
			<?php $cols = 1; ?>	
		<?php endif; ?>

		

		<?php endforeach; ?>
		</tr>
	</tbody>
</table>