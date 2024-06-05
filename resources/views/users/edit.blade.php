<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #266CBD;
            background: rgb(255, 255, 255);
            background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(142, 203, 255, 1) 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content-wrapper {
            flex: 1;
        }
    </style>
</head>

<body>
    @include('components.navbar')

    <div class="container content-wrapper py-4">
        <div class="card">
            <div class="px-3 pt-4 pb-2">
                <form enctype="multipart/form-data" method="POST" action="{{ route('users.update', Auth::id()) }} ">
                    @csrf
                    @method('put')
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img style="width:150px" class="me-3 avatar-sm rounded-circle"
                                src="{{ $user->getImageURL() }}" alt="Avatar">
                            <div>
                                @if ($editing ?? false)
                                    <label for="" class="mt-4">Nama Lengkap</label>
                                    <input name="name" value="{{ $user->name }} " type="text"
                                        class="form-control mb-3 mt-2">
                                    @error('name')
                                        <span class="text-danger fs-6">{{ $message }} </span>
                                    @enderror
                                @else
                                    <h3 class="card-title mb-0"><a href="#"> {{ $user->name }}
                                        </a></h3>
                                @endif
                                <label for="">Email : </label>
                                <span class="fs-6 text-muted"> {{ $user->email }} </span><br>
                                <label for="" class="mt-4">Nomor Telepon</label>
                                <input name="nohp" value="{{ $user->nohp }} " type="text" class="form-control">
                                @error('nohp')
                                    <span class="text-danger fs-6">{{ $message }} </span>
                                @enderror
                                <label class="form-label mt-3">Jenis kelamin</label><br>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="gender" id="male"
                                        value="Laki-laki" {{ $user->gender === 'Laki-laki' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="lakiLaki">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="Perempuan" {{ $user->gender === 'Perempuan' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                                @error('gender')
                                    <span class="text-danger fs-6">{{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="px-2 mt-4">
                        <label for="">Foto Profil</label>
                        <input name="image" type="file" class="form-control">
                        @error('image')
                            <span class="text-danger fs-6">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="px-2 mt-4">
                        <h5 class="fs-5"> Biodata :</h5>
                        @if ($editing ?? false)
                            <div class="mb-3">
                                <textarea name="bio" class="form-control" id="bio" rows="3">{{ $user->bio }} </textarea>
                                @error('bio')
                                    <span class="d-block fs-6 text-danger mt-2">{{ $message }} </span>
                                @enderror
                            </div>
                        @else
                            <p class="fs-6 fw-light">
                                Isi Biodata dirimu!
                            </p>
                        @endif
                        <div class="row">
                            <div class="col">
                                <div class="px-2 mt-4">
                                    <h5 class="fs-5">Tanggal Lahir</h5>
                                    <input type="date" name="tanggal_lahir" class="form-control"
                                        value="{{ $user->tanggal_lahir }}">
                                    @error('tanggal_lahir')
                                        <span class="d-block fs-6 text-danger mt-2">{{ $message }} </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col">
                                <div class="px-2 mt-4">
                                    <h5 class="fs-5">Alamat</h5>
                                    <textarea name="alamat" class="form-control" id="alamat" rows="3">{{ $user->alamat }}</textarea>
                                    @error('alamat')
                                        <span class="d-block fs-6 text-danger mt-2">{{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="px-2 mt-4">
                                    <h5 class="fs-5">Asal Sekolah</h5>
                                    <textarea name="asalsekolah" class="form-control" id="asalsekolah" rows="1">{{ $user->asalsekolah }}</textarea>
                                    @error('asalsekolah')
                                        <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="px-2 mt-4">
                                    <h5 class="fs-5">Kelas</h5>
                                    <textarea name="kelas" class="form-control" id="kelas" rows="1">{{ $user->kelas }}</textarea>
                                    @error('kelas')
                                        <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <button class="btn btn-dark btn-sm mb-3 mt-4 px-2">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @include('components.footer')

    @include('components.script')
</body>

</html>
