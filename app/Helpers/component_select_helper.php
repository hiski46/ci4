
<?
/**
 * This function for generate select
 * @param string $name
 * @param array $option | ["value"=>"text", "value 2"=>"text 2"]
 * @param string $selected
 * @return html
 */
function select(string $name = '', array $option = [], string $selected = '')
{
    $optionHtml = '';
    foreach ($option as $o => $v) {
        $optionHtml .= '<option value="' . $o . '" ' . (($o == $selected) ? 'selected' : '') . '>' . $v . '</option>';
    }
    $html = '
        <select class="form-control selectpicker"  name="' . $name . '">
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
    $optionHtml = '';
    foreach ($option as $o => $v) {
        $optionHtml .= '<option value="' . $o . '" ' . (($o == $selected) ? 'selected' : '') . '>' . $v . '</option>';
    }
    $html = '
    <div class="form-group">
        <label for="' . $id . '">' . $label . '</label>
        <select class="form-control selectpicker" id="' . $id . '" name="' . $name . '">
            ' . $optionHtml . '
        </select>
        <p class="text-danger mt-1" ' . $name . 'Err></p>
    </div>
    ';
    return $html;
}
