@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <h1 class="m-0 h4 fw-bold">{{ $title }}</h1>
        <button class="px-3 rounded btn btn-primary">
            <i class="fas fa-plus me-2"></i>Tambah Murid
        </button>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">
                    <i class="fas fa-user-graduate"></i>
                    Daftar Murid
                </h2>
                <div class="filter-form">
                    <div class="form-group">
                        <select class="form-select">
                            <option value="">Semua Jurusan</option>
                            <option value="1">IPA</option>
                            <option value="2">IPS</option>
                            <option value="3">Bahasa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-select">
                            <option value="">Semua Kelas</option>
                            <option value="1">X IPA 1</option>
                            <option value="2">XI IPS 2</option>
                            <option value="3">XII Bahasa 3</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary btn-filter">
                        <i class="fas fa-filter"></i>
                        Terapkan Filter
                    </button>
                </div>
            </div>

            <div class="card-body">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" class="search-input" placeholder="Cari berdasarkan nama atau NISN...">
                </div>

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th width="30%">Nama Lengkap</th>
                                <th width="15%">Kelas</th>
                                <th width="15%">Jenis Kelamin</th>
                                <th width="15%">NIS</th>
                                <th width="20%">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($murid as $item)
                            <tr class="text-center">
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="p-2 border">{{ $item->user->nama }}</td>
                                <td class="p-2 border">{{ $item->kelas->tingkat }}</td>
                                <td class="p-2 border">{{ $item->jenis_kelamin }}</td>
                                <td class="p-2 border">{{ $item->nis }}</td>
                                <td class="p-2 border">
                                    <button class="btn btn-primary btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm"">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="page-info">
                    Menampilkan 1-5 dari 24 data
                </div>

                <div class="pagination">
                    <div class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </div>
                    <div class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </div>
                    <div class="page-item">
                        <a class="page-link" href="#">2</a>
                    </div>
                    <div class="page-item">
                        <a class="page-link" href="#">3</a>
                    </div>
                    <div class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
