@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Footer</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-add me-1"></i>
                Edit Footer BU Malang
            </div>

            <div class="card-body">
                <form action="{{ route('admin.update-footer', $footer->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat Organisasi</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" required
                                    value="{{ $footer->alamat }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Organisasi</label>
                                <input type="email" name="email" id="email" class="form-control" required
                                    value="{{ $footer->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="no_telp" class="form-label">No Telp Organisasi</label>
                                <input type="text" name="no_telp" id="no_telp" class="form-control" required
                                    value="{{ $footer->no_telp }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="pengembang" class="form-label">No Telp Pengembang</label>
                                <input type="text" name="pengembang" id="pengembang" class="form-control" required
                                    value="{{ $footer->no_pengembang }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="youtube" class="form-label">Link Youtube Organisasi</label>
                                <input type="url" name="youtube" id="youtube" class="form-control" required
                                    value="{{ $footer->link_youtube }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="instagram" class="form-label">Link Instagram Organisasi</label>
                                <input type="url" name="instagram" id="instagram" class="form-control" required
                                    value="{{ $footer->link_instagram }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="linkedin" class="form-label">Link Linkedin Organisasi</label>
                                <input type="url" name="linkedin" id="linkedin" class="form-control" required
                                    value="{{ $footer->link_linkedin }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="tiktok" class="form-label">Link Tiktok Organisasi</label>
                                <input type="url" name="tiktok" id="tiktok" class="form-control" required
                                    value="{{ $footer->link_tiktok }}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Data Footer
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
