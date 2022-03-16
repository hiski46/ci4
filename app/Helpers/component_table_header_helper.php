<?php

use phpDocumentor\Reflection\Types\Boolean;
use PhpParser\Node\Expr\Cast\Bool_;

/**
 * This Function for generate table
 * @param string $id untuk atribut "id" di tag tbody 
 * @param array|null $col Nama-nama kolom
 * @param string|null $title Judul tabel
 * 
 * @return string
 */

function tableHeader(string $id = '', $col = [], string $title = null)
{
    $head = tampil($col, array_depth($col), 1);
    $totalLength = array_length_child($col);

    $tr = [];
    $html = '
    <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>' . $title . '</h6>
                        </div>';

    $html .= '<div class="card-body px-5 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="  table align-items-center mb-0">
                                    <thead class=""> ';
    foreach ($head as $c => $v) {
        $tr[$v['level']][] = '<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan=' . $v['row'] . ' colspan=' . $v['col'] . '>' . $v['title'] . '</th>';
    }
    //Coloum Action
    // if ($action == true) {
    //     $tr[1][] = '<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan=' . array_depth($col) . ' colspan=' . 1 . '>' . "Action" . '</th>';
    // }
    foreach ($tr as $k => $v) {
        $html .= '<tr>' . implode("", $v) . '</tr>';
    }

    $html .= '
                </thead>
                    <tbody id="' . $id . '">
    
                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    ';

    return $html;
}

/**
 * fungsi untuk mencari semua header beserta colspan, rowspan, dan level
 * @param array $a Array yang akan digunakan
 * @param integer $depth Kedalaman array $a. Dapat dicari menggunakan fungsi array_depth()
 * @param integer $lev Level array.
 * @param array|null &$data array yang digunakan dalam rekursif
 */

function  tampil($a, $depth, $lev = 1, &$data = array())
{

    foreach ($a as $b => $value) {
        if (is_array($value)) {

            $col = array_length_child($value);
            array_push($data, [
                "title" => $b,
                "col" => $col,
                "row" => 1,
                "level" => $lev
            ]);
            // array_push($data, $lev);
            //echo $b . "(row:1 col:" . $col . " lev:" . $lev . ")" . "<br>";
            tampil($value, $depth - 1, $lev + 1, $data);
        } else {
            array_push($data, [
                "title" => $value,
                "col" => 1,
                "row" => $depth,
                "level" => $lev
            ]);
            // array_push($data, $lev);
            //echo $value . "(row:" . $depth . " col=1 lev:" . $lev . ")" . "|";
        }
    }
    return $data;
}

/**
 * Mencari kedalaman dari array (berapa aray child)
 * @param array $array aray yang ingin digunakan
 * 
 * @return integer
 */
function array_depth(array $array)
{
    $max_depth = 1;

    foreach ($array as $value) {
        if (is_array($value)) {
            $depth = array_depth($value) + 1;

            if ($depth > $max_depth) {
                $max_depth = $depth;
            }
        }
    }

    return $max_depth;
}



/**
 * Mencari Panjang dari satu array 
 * @param array $array aray yang ingin digunakan
 * 
 * @return integer
 */
function array_length(array $array)
{
    $length = 0;
    foreach ($array as $value) {

        $length++;
    }

    return $length;
}

/**
 * Mencari Panjang dari satu array child 
 * @param array $array aray yang ingin digunakan
 * 
 * @return integer
 */
function array_length_child(array $array)
{
    $length = array_length($array);
    $new_l = 0;
    foreach ($array as $value) {
        if (is_array($value)) {
            $new_l = array_length($value) - 1;
        }
    }

    return $new_l + $length;
}
