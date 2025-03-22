@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Jumlah Awardee</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-add me-1"></i>
                Tambah Jumlah Awardee BU Malang
            </div>
            <div class="card-body">
                <form action="{{ route('admin.store-jumlahawardee') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="kategori_awardee" class="form-label">Kategori Awardee</label>
                        <select name="kategori_awardee" id="kategori_awardee" class="form-control">
                            <option value="">--Pilih Kategori--</option>
                            <option value="Sarjana">Sarjana</option>
                            <option value="Magister">Magister</option>
                            <option value="Doktor">Doktor</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="total_awardee">Total Awardee</label>
                        <input type="number" name="total_awardee" id="total_awardee" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan Data Jumlah Awardee
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
