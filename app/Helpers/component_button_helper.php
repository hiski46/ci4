<?php

/**
 * This helper function for generate tag basic button
 * @param string $type 'button|submit|reset'
 * @param string $text
 * @param array $class
 * @param array $attribute
 * @return html
 */
function basicButton(string $type, string $text, array $class = [], array $attribute = [])
{
    $stringClass = implode(' ', $class);
    $stringAttribute = '';
    foreach ($attribute as $k => $v) {
        $stringAttribute .= ' ' . $k . '="' . $v . '" ';
    }
    $html = '';
    $html .= '<a class="btn ' . $stringClass . '" href="javascript:void(0)" ' . $stringAttribute . '>' . $text . '</a>';
    return $html;
}
