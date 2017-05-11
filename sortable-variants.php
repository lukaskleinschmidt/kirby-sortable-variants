<?php

// Make sure that the sortable plugin is loaded
$kirby->plugin('sortable');

if(!function_exists('sortable')) return;

$kirby->set('field', 'variants', __DIR__ . DS . 'field');

$sortable = sortable();
$sortable->set('layout',  'variant', __DIR__ . DS . 'layout');
$sortable->set('variant', 'variants', __DIR__ . DS . 'variant');
$sortable->set('action',  '_add', __DIR__ . DS . 'actions' . DS . '_add');
$sortable->set('action',  '_paste', __DIR__ . DS . 'actions' . DS . '_paste');
$sortable->set('action',  '_duplicate', __DIR__ . DS . 'actions' . DS . '_duplicate');
