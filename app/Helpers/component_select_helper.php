
<?
/**
 * This function for generate select
 * @param string $name
 * @param array $option | ["value"=>"text", "value 2"=>"text 2"]
 * @param string $selected
 * @return html
 */
function select(string $name = '', array $option = [], string $selected = '', array $class = [], array $attribute = [])
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
    $optionHtml = '';
    foreach ($option as $o => $v) {
        $optionHtml .= '<option value="' . $o . '" ' . (($o == $selected) ? 'selected' : '') . '>' . $v . '</option>';
    }
    $html = '
        <select class="form-control selectpicker ' . $stringClass . '"  name="' . $name . '" ' . $stringAttribute . ' ' . $temp . '>
            ' . $optionHtml . '
        </select>
    ';
    return $html;
}

/**
 * This function for generate select
 * @param string $id
 * @param string $label
 * @param string $name
 * @param array $option | ["value"=>"text", "value 2"=>"text 2"]
 * @param string $selected
 * @return html
 */
function selectWithFormGroup(string $id = '', string $label = '', string $name = '', array $option = [], string $selected = '')
{

    $html = '
    <div class="form-group">
        <label for="' . $id . '">' . $label . '</label>
        '
        . select($name, $option, $selected, [], ["id" => $id]) .
        '
        <p class="text-danger mt-1" ' . $name . 'Err></p>
    </div>
    ';
    return $html;
}
