<?php

/**
 * This helper function is used to generate modal 
 * 
 * sebelum memanggil modal pastikan tag <button>/<a> sudah diberikan atribut: 
 * data-bs-toggle="modal" 
 * data-bs-target="#idModal"
 * 
 * untuk menutup modal bisa menggunakan atribut 
 * data-bs-dismiss="modal"
 * pada tag untuk menutup modal 
 * 
 * @param string $id untuk atribut "id" di modal
 * @param any $data untuk data yang akan ditampilkan di modal
 * 
 * 
 * @return string
 */

function modal(string $id,  $data)
{
    $html = '<div class="modal fade" id="' . $id . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">' .
        $data
        . '</div>
      </div>
    </div>
  </div>';
    return $html;
}
