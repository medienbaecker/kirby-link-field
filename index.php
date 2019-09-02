<?php

Kirby::plugin('medienbaecker/link', [
    'blueprints' => [
        'fields/link' => __DIR__ . '/link.yml'
    ],
    'fieldMethods' => [
        'toHref' => function ($field) {
            $type = $field->value();
            if($type == "email") {
                return "mailto:" . $field->parent()->email()->value();
            }
            if($type == "int" AND $linkPage = $field->parent()->int()->toPage()) {
                return $linkPage->url();
            }
            if($type == "ext") {
                return $field->parent()->ext()->value();
            }
        }
    ]
]);