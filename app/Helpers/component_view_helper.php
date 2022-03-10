<?php

/**
 * This Function for generate table
 * @param string $title Judul Tabel
 * @param array|null $col Nama-nama kolom
 * @param array|null $data Data tabel
 * @param array|null $key 
 * @return string
 */

function table(string $title = '', $col = [], $data = [], $key = [])
{
    $html = '
    <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>' . $title . '</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead> <tr>';
    foreach ($col as $c) {
        $html .= '
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">' . $c . '</th>
                ';
    }

    $html .= '</tr>
                </thead>
                                    <tbody>';
    foreach ($data as $d) {

        $html .= ' 
        <tr>';
        foreach ($key as $k) {

            $html .= '<td>' .
                $d[$k]
                . '</td>';
        }
        $html .= '</tr>';
    }
    $html .= '</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    ';

    return $html;
}
