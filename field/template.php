<label class="label">
  <?= $field->label(); ?>
  <?= $field->counter(); ?>
  <?= $field->action('_add'); ?>
</label>

<?php if($field->entries()->count()): ?>
  <?= $field->layouts(); ?>
<?php else: ?>
  <div class="sortable__empty">
    <?= $field->l('field.sortable.empty'); ?>
    <?= $field->action('_add', ['label' => $field->l('field.sortable.add.first'), 'icon' => '', 'class' => '']); ?>
    <?= $field->l('field.sortable.or'); ?>
    <?= $field->action('_paste', ['label' => $field->l('field.sortable.paste.first'), 'icon' => '', 'class' => '']); ?>
  </div>
<?php endif; ?>

<div class="sortable__navigation">
  <?= $field->action('copy'); ?>
  <?= $field->action('_paste'); ?>
  <?= $field->action('_add'); ?>
</div>
