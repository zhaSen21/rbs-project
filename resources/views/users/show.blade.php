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
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">

                        <img style="width:150px" class="me-3 avatar-sm rounded-circle" src="{{ $user->getImageURL() }} "
                            alt="Avatar">
                        <div>
                            <h3 class="card-title mb-0">
                                <p> {{ $user->name }} </p>
                            </h3>
                            <label for="">Email : </label>
                            <span class="fs-6 text-muted"> {{ $user->email }} </span><br>
                            <label for="">Nomor Telepon : </label>
                            <span class="fs-6 text-muted mt-4"> {{ $user->nohp }} </span><br>
                            <label for="">Jenis Kelamin : </label>
                            <span class="fs-6 text-muted mt-4"> {{ $user->gender }} </span>

                        </div>
                    </div>
                    @auth
                        @if (Auth::id() === $user->id)
                            <div class="btn-container me-2">
                                <a href="{{ route('users.edit', $user->id) }}"
                                    class="btn btn-primary rounded-pill btn-lg ">Edit
                                </a>
                            </div>
                        @endif
                    @endauth
                </div>
                <div class="px-2 mt-4">
                    <h5 class="fs-5">Biodata</h5>
                    <p class="fs-6 fw-light">
                        {{ $user->bio }}
                    </p>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="px-2 mt-4">
                            <h5 class="fs-5">Tanggal Lahir</h5>
                            <p class="fs-6 fw-light">
                                {{ $user->tanggal_lahir }}
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="px-2 mt-4">
                            <h5 class="fs-5">Alamat</h5>
                            <p class="fs-6 fw-light">
                                {{ $user->alamat }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="px-2 mt-4">
                            <h5 class="fs-5">Asal Sekolah</h5>
                            <p class="fs-6 fw-light">
                                {{ $user->asalsekolah }}
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="px-2 mt-4">
                            <h5 class="fs-5">Kelas</h5>
                            <p class="fs-6 fw-light">
                                {{ $user->kelas }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    @include('components.footer')

    @include('components.script')
</body>

</html>
