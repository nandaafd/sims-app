<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('produk', function ($trail) {
    $trail->push('Produk', url('produk'));
});

Breadcrumbs::for('create', function ($trail) {
    $trail->parent('produk');
    $trail->push('Tambah Data', url('produk/create'));
});
Breadcrumbs::for('edit', function ($trail) {
    $trail->parent('produk');
    $trail->push('Ubah Data', url('produk/{id}/edit'));
});
Breadcrumbs::for('profile', function ($trail) {
    $trail->parent('profile');
    $trail->push('Profile', url('profile/{id}'));
});
