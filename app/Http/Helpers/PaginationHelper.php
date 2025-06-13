<?php

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

function paginate($items, $perPage = 10, $page = null, $options = []){
    $page = $page ?: LengthAwarePaginator::resolveCurrentPage();

    $items = $items instanceof Collection ? $items : collect($items);

    // Potong data sesuai halaman
    $currentItems = $items->slice(($page - 1) * $perPage, $perPage)->values();

    return new LengthAwarePaginator($currentItems, $items->count(), $perPage, $page, $options);
}