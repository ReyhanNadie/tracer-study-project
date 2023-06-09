<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracer Study PILKOM || Alumni</title>
</head>
<body>
    @extends('layouts.main')

    @section('container')
    <section id="hero2">
        <div class="container p-3">
            <div class="cont">
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
                                        <button type="submit" class="button-mhs">Cari Mahasiswa</button>
                                
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
</body>
</html>
