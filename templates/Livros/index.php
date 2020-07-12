<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro[]|\Cake\Collection\CollectionInterface $livros
 */
?>
<div class="livros index content">
    <?= $this->Html->link(__('Cadastrar Livro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Livros') ?></h3>

    <?= $this->Form->create(null, ['type' => 'get']) ?>
	<?= $this->Form->control('search', 
		['label' => 'Pesquisar Livro',
        'placeholder' => 'Buscar livros pelo Nome, Autor ou Genero', 
		'value' => $this->request->getQuery('search')]) ?>
    <?= $this->Form->submit('Pesquisar') ?>
    <?= $this->Form->end() ?>

    <br>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('genero') ?></th>
                    <th><?= $this->Paginator->sort('isbn') ?></th>
                    <th><?= $this->Paginator->sort('ano') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th><?= $this->Paginator->sort('categorias_produto_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($livros as $livro): ?>
                <tr>
                    <td><?php echo $livro['id']; ?></td>
                    <td><?= h($livro->titulo) ?></td>
                    <td><?= h($livro->genero) ?></td>
                    <td><?= h($livro->isbn) ?></td>
                    <td><?= h($livro->ano) ?></td>
                    <td><?= h($livro->created) ?></td>
                    <td><?= h($livro->updated) ?></td>
                    <td><?= $livro->has('categoria') ? $this->Html->link($livro->categoria->titulo, ['controller' => 'Categorias', 'action' => 'view', $livro->categoria->titulo]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $livro->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $livro->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $livro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
