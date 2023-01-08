@extends('layouts.backend.master')

@section('content')

<div class="container">

        @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif

        <div class="card shadow mb-4 my-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Pengaduan</h6>
            </div>

            <form action="{{ route('pengaduan.update', [$pengaduan->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}

                <div class="card-body">
                    <div class="form-gorup">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                        <div class="mb-3">
                            <label for="tgl">Tanggal Pengaduan</label>
                            <input id="tgl" type="date" name="tgl_pengaduan" value="{{ $pengaduan->tgl_pengaduan }}"
                                class="form-control @error('tgl_pengaduan') is-invalid @enderror">

                                @error('tgl_pengaduan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="isi">Deskripsi</label>
                            <textarea name="isi_laporan" id="isi" value="" class="form-control @error('isi_laporan') is-invalid @enderror" cols="30" rows="10" >{{ $pengaduan->isi_laporan }}</textarea>

                            @error('isi_laporan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="user_id">User</label>
                            <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                                <option value="">Pilih Kategori</option>
                                @foreach (App\Models\User::all() as $user)
                                <option value="{{ $user->id }}" @if ($user->id==$pengaduan->user_id) selected @endif>{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @error('user')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                            <option value="0">0</option>
                            <option value="proses">Proses</option>
                            <option value="selesai">Selesai</option>
                            </select>
                            @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" value="{{ $pengaduan->image }}"
                            class="form-control  @error('image') is-invalid @enderror">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-outline-primary" type="submit">Submit</button>

                            <button class="btn btn-outline-danger" type="reset">Reset</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection