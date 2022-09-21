<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Tabel Data Warga RT23</h2>

        <!-- Tombol Tambah Data Warga -->
        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalTambah">
            Tambah Data Warga
        </button>

        {{-- Tabel Warga --}}
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama Warga</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($warga as $w)
                        <tr>
                            <td>{{ $w->nik }}</td>
                            <td>{{ $w->nama_warga }}</td>
                            <td>{{ $w->umur }}</td>
                            <td>{{ $w->jenis_kelamin }}</td>
                            <td>{{ $w->alamat }}</td>
                            <td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modalUbah">
                                    Update
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" >
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal Body -->
        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
        <div class="modal fade" id="modalTambah" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
            role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Form Tambah Data Warga</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/datawarga/store" method="post">
                            @csrf
                            <div class="form-floating">
                                <input type="number" class="form-control" placeholder="Recipient's username"
                                    id="nik" name="nik" required>
                                <label for="nik">NIK</label>
                            </div><br>
                            <div class="form-floating">
                                <input type="text" class="form-control" placeholder="Recipient's username"
                                    id="nama_warga" name="nama_warga" required>
                                <label for="nama">Nama Warga</label>
                            </div><br>
                            <div class="form-floating">
                                <input type="number" class="form-control" placeholder="Recipient's username"
                                    id="umur" name="umur" required>
                                <label for="umur">Umur</label>
                            </div><br>
                            <select class="form-select" aria-label="Default select example" name="jenis_kelamin"
                                required>
                                <option value="">Jenis Kelamin</option>
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select><br>
                            <div class="form-floating">
                                <input type="text" class="form-control" placeholder="Recipient's username"
                                    id="alamat" name="alamat" required>
                                <label for="alamat">Alamat</label>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="save"></input>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalUbah" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
            role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Form Ubah Data Warga</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/datawarga/store" method="post">
                            @method('put')
                            @csrf
                            <div class="form-floating">
                                <input type="number" class="form-control" placeholder="Recipient's username"
                                    id="nik" name="nik" value="{{ $w-> }}" required>
                                <label for="nik">NIK</label>
                            </div><br>
                            <div class="form-floating">
                                <input type="text" class="form-control" placeholder="Recipient's username"
                                    id="nama_warga" name="nama_warga" required>
                                <label for="nama">Nama Warga</label>
                            </div><br>
                            <div class="form-floating">
                                <input type="number" class="form-control" placeholder="Recipient's username"
                                    id="umur" name="umur" required>
                                <label for="umur">Umur</label>
                            </div><br>
                            <select class="form-select" aria-label="Default select example" name="jenis_kelamin"
                                required>
                                <option value="">Jenis Kelamin</option>
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select><br>
                            <div class="form-floating">
                                <input type="text" class="form-control" placeholder="Recipient's username"
                                    id="alamat" name="alamat" required>
                                <label for="alamat">Alamat</label>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="save"></input>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Optional: Place to the bottom of scripts -->
        <script>
            // tampil modal
            const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)

            function name(params) {

            }
        </script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
