<?php

return function($page, $model, $field) {

  $options = [];

  foreach($page->blueprint()->pages()->template() as $template) {
    $options[$template->name()] = $template->title();
  }

  $form = new Kirby\Panel\Form(array(
    'title' => array(
      'label'        => $field->l('field.sortable.add.template.label'),
      'type'         => 'title',
      'placeholder'  => 'pages.add.title.placeholder',
      'autocomplete' => false,
      'autofocus'    => true,
      'required'     => true
    ),
    'uid' => array(
      'label'        => 'pages.add.url.label',
      'type'         => 'text',
      'icon'         => 'chain',
      'autocomplete' => false,
      'required'     => true,
    ),
    'template' => array(
      'label'    => 'pages.add.template.label',
      'type'     => 'select',
      'options'  => $options,
      'default'  => key($options),
      'required' => true,
      'readonly' => count($options) == 1 ? true : false,
      'icon'     => count($options) == 1 ? $page->blueprint()->pages()->template()->first()->icon() : 'chevron-down',
    )
  ));

  $form->cancel($model);
  $form->buttons->submit->val($field->l('field.sortable.add'));

  return $form;

};
