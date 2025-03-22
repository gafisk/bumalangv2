@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Jumlah Awardee</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-add me-1"></i>
                Edit Jumlah Awardee BU Malang
            </div>
            <div class="card-body">
                <form action="{{ route('admin.update-jumlahawardee', $jumlahawardee->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="kategori_awardee" class="form-label">Kategori Awardee</label>
                        <input type="text" name="kategori_awardee" id="kategori_awardee" class="form-control" required
                            value="{{ $jumlahawardee->kategori_awardee }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="total_awardee">Total Awardee</label>
                        <input type="number" name="total_awardee" id="total_awardee" class="form-control" required
                            value="{{ $jumlahawardee->total_awardee }}">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Data Jumlah Awardee
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
