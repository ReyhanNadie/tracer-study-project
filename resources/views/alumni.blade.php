<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumni</title>
</head>
<body>
    @extends('layouts.main')

    @section('container')
    <section id="hero">
        <div class="container p-3">
            <h1 class="text-center">Cari Mahasiswa</h1>
            <div class="row justify-content-center mt-5">
                <div class="col-md-5">
                    <div class="form">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="nim" class="form-control" id="nim" name="nim">
                            </div>
                            <div class="row text-end">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Cari Mahasiswa</button>
                               
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline">
                    <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">NIM</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="button-lg-primary">Cari Mahasiswa</button>
                    </form>
                </div>
            </div>
        </div> --}}
    </section>
    @endsection
</body>
</html>
