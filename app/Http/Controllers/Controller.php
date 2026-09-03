<?php

namespace App\Http\Controllers;
class TransactionController extends Controller
{
    public function create()
    {
        return 'Halaman kasir (belum ada tampilan)';
    }
    public function store()
    {
        return 'Transaksi disimpan (belum ada logika penyimpanan)';
    }
    public function index()
    {
        return 'Daftar transaksi';
    }
    public function show(string $id)
    {
        return "Detail transaksi #{$id}";
    }
}
