<?php

/**
 * This helper function for generate tag input
 * @param string $type = "text"|"email"|"number"|"date"|"checkbox"|"radio"
 * @param string $name
 * @param string $placeholder
 * @param array $class // default is null, if you add other class input in array to $class ex: ["form-add","form-test"]
 * @param array $attribute // default is null, if you add other class input in array to $attribute
 * @return html
 */
function input(string $type = 'text', string $name = '', string $placeholder = '', array $class = [], array $attribute = [])
{
    $stringClass = implode(' ', $class);
    $stringAttribute = '';
    $temp = '';
    foreach ($attribute as $k => $v) {
        if (is_int($k)) {
            $temp = $v;
        } else {
            $stringAttribute .= ' ' . $k . '="' . $v . '" ';
        }
    }
    $html = '';
    $html .= '
             <input type="' . $type . '" name="' . $name . '" class="' . (($type == "checkbox" || $type == "radio") ? "form-check-input" : "form-control") . ' mb-1' . $stringClass . '" placeholder="' . $placeholder . '" ' . $stringAttribute . ' ' . $temp . ' autofocus />

             ';
    return $html;
}

/**
 * this function for generate input group
 * @param string $label
 * @param array $data | ['<span class="input-group-text">Full Name</span>',input('text','firstName'),input('text','lastName'),]
 * @param array $classOnInputGroup | for add class into tag div input group
 * @return html
 */
function inputGroupWithFormGroup(string $label = '', array $data = [], array $classOnInputGroup = [])
{
    if ($label != '') {
        $label = '<label>' . $label . '</label>';
    }
    $input = '';
    foreach ($data as $d => $k) {
        $input .= $k;
    }
    $html = '
        <div class="form-group">
            ' . $label . '
            <div class="input-group ' . implode(' ', $classOnInputGroup) . '">
                ' . $input . '
            </div>
        </div>
    ';
}

/**
 * This helper function for generate tag input with form group
 * @param string $label
 * @param string $type = "text"|"email"|"number"|"date"
 * @param string $name
 * @param string $placeholder
 * @param array $class // default is null, if you add other class input in array to $class ex: ["form-add","form-test"]
 * @param array $attribute // default is null, if you add other class input in array to $attribute
 * @return html
 */
function inputWithFormGroup(string $label = '', string $type = 'text', string $name = '', string $placeholder = '', array $class = [], array $attribute = [])
{
    $stringClass = implode(' ', $class);
    $stringAttribute = '';
    foreach ($attribute as $k => $v) {
        $stringAttribute .= ' ' . $k . '="' . $v . '" ';
    }

    $html = '';
    $html .= '<div class="form-group">
                <label>' . $label . '</label>

                ' . input($type, $name, $placeholder, $class, $attribute) . '
                <p class="text-danger mt-1" ' . $name . 'Err></p>
              </div>
                ';
    return $html;
}


/**
 * This helper function for generate checkbox
 * 
 * @param string $name untuk atribut name pada tag input
 * @param array $label | ['Create Group' => 'CG', 'Delete Group' => 'DG']
 * @param array $selected | ['CG', 'DG']
 * @param array|null $atribut untuk tambahan atribut pada tag input
 * 
 * @return string
 */

function checkbox(string $name, array $label = ['' => '', '' => ''], array $selected = [], array $atribut = [])
{
    $html = '';
    foreach ($label as $k => $v) {
        $html .= '<div class="form-check mb-1">';
        $new_atribut = $atribut;
        if (in_array($v, $selected)) {
            array_push($new_atribut, 'checked');
        }
        $new_atribut['value'] = $v;
        $html .= input('checkbox', $name, '', [], $new_atribut);
        $html .= '<label class="custom-control-label" >' . $k . '</label>';
        $html .= '</div>';
    }

    return $html;
}


/**
 * This helper function for generate checkbox
 * 
 * @param string $name untuk atribut name pada tag input
 * @param array $label | ['Laki-laki' => 'l', 'Perempuan' => 'p']
 * @param string $checked | memilih label yang langsung di check 
 * @param array|null $atribut untuk tambahan atribut pada tag input
 * 
 * @return string
 */
function radio(string $name, array $label = ['' => '', '' => ''], string $checked = '',  array $atribut = [])
{
    $html = '';
    foreach ($label as $k => $v) {
        $html .= '<div class="form-check mb-1">';
        $new_atribut = $atribut;
        if ($v == $checked) {
            array_push($new_atribut, 'checked');
        }
        $new_atribut['value'] = $v;
        $html .= input('radio', $name, '', [], $new_atribut);
        $html .= '<label class="custom-control-label" >' . $k . '</label>';
        $html .= '</div>';
    }

    return $html;
}
