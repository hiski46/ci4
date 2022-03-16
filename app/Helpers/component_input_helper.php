<?php

/**
 * This helper function for generate tag input
 * @param string $label
 * @param string $type = "text"|"email"|"number"|"date"
 * @param string $name
 * @param string $placeholder
 * @param array $class // default is null, if you add other class input in array to $class ex: ["form-add","form-test"]
 * @param array $attribute // default is null, if you add other class input in array to $attribute
 * @return html
 */
function input(string $label = '', string $type = 'text', string $name = '', string $placeholder = '', array $class = [], array $attribute = [])
{
    $stringClass = implode(' ', $class);
    $stringAttribute = '';
    foreach ($attribute as $k => $v) {
        $stringAttribute .= ' ' . $k . '="' . $v . '" ';
    }
    $html = '';
    $html .= '<div class="form-group">
                <label>' . $label . '</label>
                <input type="' . $type . '" name="' . $name . '" class="form-control mb-1' . $stringClass . '" placeholder="' . $placeholder . '" ' . $attribute . ' autofocus>
                <p class="text-danger mt-1" ' . $name . 'Err></p>
              </div>
                ';
    return $html;
}
