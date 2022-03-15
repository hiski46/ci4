<?php

/**
 * This helper function for generate breadcrumb
 * @param array $breadcrumb
 * @param string $title
 * @return html
 */
function breadcrumb(array $breadcrumb = [], string $title = '')
{
    $html = '';
    $i = 1;
    $count = count($breadcrumb);
    $html .= '
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    ';
    foreach ($breadcrumb as $k => $v) {
        if ($i == $count) {
            $html .= '<li class="breadcrumb-item text-sm active">' . $v['text'] . '</li>';
        } else {
            $html .= '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="' . $v['url'] . '">' . $v['text'] . '</a></li>';
        }
    }

    $html .= '
          </ol>
          <h6 class="font-weight-bolder mb-0">' . $title . '</h6>
        </nav>
    ';
    return $html;
}
