@extends('admin.layouts.templates')

@section('content')
    <div class="shadow p-3">
        <h3 class="text-center mb-4">FORM EDIT DATA SISWA</h3>
        <P class="lead">Silahkan isi data dalam form di bawah ini dengan benar :</P>
        <form action="{{ route('admin.edit-siswa') }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $siswa->id }}">
            <div class="form-group row mb-3 align-items-center">
                <label for="" class="form-label col-3">Nama</label>
                <div class="col-9">
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Siswa ..." value="{{ $siswa->user->nama }}">
                    @error('nama')
                       <div class="invalid-feedback">
                           {{ $message }}
                       </div>
                    @enderror
                </div>
            </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="" class="form-label col-3">Email</label>
                    <div class="col-9">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Alamat Email ..." value="{{ $siswa->user->email }}">
                        @error('email')
                           <div class="invalid-feedback">
                               {{ $message }}
                           </div>
                        @enderror
                    </div>
                </div>
                 <div class="form-group row mb-3 align-items-center">
                     <label for="username" class="form-label col-3">Username</label>
                      <div class="col-9">
                        <input type="text" name="username" class="form-control @error ('username') is-invalid @enderror" placeholder="Username ..." value="{{ $siswa->user->username }}">
                         @error('username')
                           <div class="invalid-feedback">
                               {{ $message }}
                           </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="" class="form-label col-3">NIS</label>
                    <div class="col-9">
                        <input type="text" name="nis" class="form-control @error('nis') is-invalid @enderror" placeholder="Nomor Induk Siswa ..." value="{{ $siswa->nis }}">
                        @error('nis')
                           <div class="invalid-feedback">
                               {{ $message }}
                           </div>
                        @enderror
                    </div>
                </div>
                    <div class="form-group row mb-3 align-items-center">
                        <label for="kelas" class="form-label col-3">Kelas</label>
                        <div class="col-9">
                            <select name="kelas" class="form-control  @error('kelas') is-invalid @enderror">
                                <option value="">Pilih Kelas</option>
                                <option value="12 RPL" {{ $siswa->kelas == '12 RPL' ? 'selected' : '' }}>12 RPL</option>
                                <option value="11 RPL" {{ $siswa->kelas == '11 RPL' ? 'selected' : '' }}>11 RPL</option>
                                <option value="10 RPL" {{ $siswa->kelas == '10 RPL' ? 'selected' : '' }}>10 RPL</option>
                                <option value="12 AKL" {{ $siswa->kelas == '12 AKL' ? 'selected' : '' }}>12 AKL</option>
                                <option value="11 AKL" {{ $siswa->kelas == '11 AKL' ? 'selected' : '' }}>11 AKL</option>
                                <option value="10 AKL" {{ $siswa->kelas == '10 AKL' ? 'selected' : '' }}>10 AKL</option>
                                <option value="12 BR" {{ $siswa->kelas == '12 BR' ? 'selected' : '' }}>12 BR</option>
                                <option value="11 BR" {{ $siswa->kelas == '11 BR' ? 'selected' : '' }}>11 BR</option>
                                <option value="10 BR" {{ $siswa->kelas == '10 BR' ? 'selected' : '' }}>10 BR</option>
                                <option value="12 UPW" {{ $siswa->kelas == '12 UPW' ? 'selected' : '' }}>12 UPW</option>
                                <option value="11 UPW" {{ $siswa->kelas == '11 UPW' ? 'selected' : '' }}>11 UPW</option>
                                <option value="10 UPW" {{ $siswa->kelas == '10 UPW' ? 'selected' : '' }}>10 UPW</option>
                                <option value="12 MP" {{ $siswa->kelas == '12 MP' ? 'selected' : '' }}>12 MP</option>
                                <option value="11 MP" {{ $siswa->kelas == '11 MP' ? 'selected' : '' }}>11 MP</option>
                                <option value="10 MP" {{ $siswa->kelas == '10 MP' ? 'selected' : '' }}>10 MP</option>
                            </select>
                             @error('kelas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                        </div>
                    </div>
                <div class="form-group row mb-3 align-items-center">
                    <label for="jurusan" class="form-label col-3">Jurusan</label>
                    <div class="col-9">
                        <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                            <option value="">Pilih Jurusan</option>
                            <option value="PPLG" {{ $siswa->jurusan == 'PPLG' ? 'selected' : '' }}>PPLG</option>
                            <option value="AKL" {{ $siswa->jurusan == 'AKL' ? 'selected' : '' }}>AKL</option>
                            <option value="PMS" {{ $siswa->jurusan == 'PMS' ? 'selected' : '' }}>PMS</option>
                            <option value="ULP" {{ $siswa->jurusan == 'ULP' ? 'selected' : '' }}>ULP</option>
                            <option value="MPLB" {{ $siswa->jurusan == 'MPLB' ? 'selected' : '' }}>MPLB</option>
                            
                        </select>
                         @error('jurusan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                         @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success px-5" type="submit">
                        <i class="fas fa-edit"></i> Update
                    </button>
                    <a href="{{ route('admin.siswa') }}" class="btn btn-secondary px-4">
                        <i class="fas fa-undo"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection