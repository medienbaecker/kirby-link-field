<?php

Kirby::plugin('medienbaecker/link', [
    'blueprints' => [
        'fields/link' => __DIR__ . '/link.yml'
    ],
    'fieldMethods' => [
        'toHref' => function ($link) {
            if($linkObject = $link->toObject()) {
                $type = $linkObject->type();
                if($type == "email") {
                    return "mailto:" . $linkObject->email()->value();
                }
                if($type == "page" AND $linkPage = $linkObject->page()->toPage()) {
                    return $linkPage->url();
                }
                if($type == "url") {
                    return $linkObject->url()->value();
                }
            }
        }
    ]
]);