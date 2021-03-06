<div>
	<h2><?php echo __('Abreviações'); ?></h2>
	<?php echo $this->Html->tag('p',$this->Html->link('adicionar',array('action'=>'add',$city_id)),array('class'=>'actions')); ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name','nome'); ?></th>
                        <th class="actions"><?php echo __('ações'); ?></th>
	</tr>
	<?php
	foreach ($shorts as $short): ?>
	<tr>
		<td><?php echo h($short['Short']['name']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('gerenciadores'), array('action' => 'managers', $short['Short']['id'])); ?>
                    <?php echo $this->Html->link(__('editar'), array('action' => 'edit', $short['Short']['id'])); ?>
			<?php echo $this->Form->postLink(__('excluir'), array('action' => 'delete', $short['Short']['id']), null, __('Tem certeza que deseja deletar # %s?', $short['Short']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
