<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return "Halaman Produk";
    }

    public function create()
    {
        return "Halaman Tambah Produk";
    }

    public function store(Request $request)
    {
        return "Data Produk Disimpan";
    }

    public function show(string $id)
    {
        return "Menampilkan Produk ID: " . $id;
    }

    public function edit(string $id)
    {
        return "Edit Produk ID: " . $id;
    }

    public function update(Request $request, string $id)
    {
        return "Update Produk ID: " . $id;
    }

    public function destroy(string $id)
    {
        return "Hapus Produk ID: " . $id;
    }
}