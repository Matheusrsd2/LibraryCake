<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro $livro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Livro'), ['action' => 'edit', $livro->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Livro'), ['action' => 'delete', $livro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Livros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Livro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="livros view content">
            <h3><?= h($livro->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($livro->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Genero') ?></th>
                    <td><?= h($livro->genero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Isbn') ?></th>
                    <td><?= h($livro->isbn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categoria') ?></th>
                    <td><?= $livro->has('categoria') ? $this->Html->link($livro->categoria->titulo, ['controller' => 'Categorias', 'action' => 'view', $livro->categoria->titulo]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($livro->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ano') ?></th>
                    <td><?= $this->Number->format($livro->ano) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($livro->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($livro->updated) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
