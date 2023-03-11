<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">
<meta name="csrf-token" content="{{csrf_token()}}">

<title>Halaman Form BAST</title>
<body>

    <div class="container">
        <h2 class="alert alert-danger text-center mt-3">FORM BERITA ACARA SERAH TERIMA</h2>

        <form id='BAST'>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="NO_BAST">NO BAST</label>
                        <input type="text" name="NO_BAST" class="form-control" placeholder="Masukkan No BAST Anda" id="NO_BAST">
                    </div>
                    <br>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="NO_INVENTARIS">NO INVENTARIS</label>
                        <input type="text" name="NO_INVENTARIS" class="form-control" placeholder="Masukkan No Inventaris Anda" id="NO_INVENTARIS">
                    </div>
                    <br>
                </div>
            </div>

            <div class="form-group">
                <label for="TANGGAL">TANGGAL</label>
                <input type="date" name="TANGGAL" class="form-control" id="TANGGAL">
                <br>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="NAMA_MENYERAHKAN">NAMA MENYERAHKAN</label>
                        <input type="text" name="NAMA_MENYERAHKAN" class="form-control" placeholder="Masukkan Nama Menyerahkan" id="NAMA_MENYERAHKAN">
                    </div>
                    <br>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="NAMA_MENERIMA">NAMA MENERIMA</label>
                        <input type="text" name="NAMA_MENERIMA" class="form-control" placeholder="Masukkan Nama Menerima" id="NAMA_MENERIMA">
                    </div>
                    <br>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="BADGE_MENYERAHKAN">BADGE MENYERAHKAN</label>
                        <input type="text" name="BADGE_MENYERAHKAN" class="form-control" placeholder="Masukkan Badge Menyerahkan" id="BADGE_MENYERAHKAN">
                    </div>
                    <br>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="BADGE_MENERIMA">BADGE MENERIMA</label>
                        <input type="text" name="BADGE_MENERIMA" class="form-control" placeholder="Masukkan Badge Menerima" id="BADGE_MENERIMA">
                    </div>
                    <br>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="JABATAN_MENYERAHKAN">JABATAN MENYERAHKAN</label>
                        <input type="text" name="JABATAN_MENYERAHKAN" class="form-control" placeholder="Masukkan Jabatan Menyerahkan" id="JABATAN_MENYERAHKAN">
                    </div>
                    <br>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="JABATAN_MENERIMA">JABATAN MENERIMA</label>
                        <input type="text" name="JABATAN_MENERIMA" class="form-control" placeholder="Masukkan Jabatan Menerima" id="JABATAN_MENERIMA">
                    </div>
                    <br>
                </div>
            </div>

            <div class="form-group">
                <label for="KETERANGAN">KETERANGAN</label>
                <textarea name="KETERANGAN" class="form-control" placeholder="Masukkan Keterangan" id="KETERANGAN"></textarea>
                <br>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="NAMA_PENGGUNA">NAMA PENGGUNA</label>
                        <input type="text" name="NAMA_PENGGUNA" class="form-control" placeholder="Masukkan Nama Pengguna" id="NAMA_PENGGUNA">
                    </div>
                    <br>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="LOKASI">LOKASI</label>
                        <input type="text" name="LOKASI" class="form-control" placeholder="Masukkan Lokasi" id="LOKASI">
                    </div>
                    <br>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="BADGE_PENGGUNA">BADGE PENGGUNA</label>
                        <input type="text" name="BADGE_PENGGUNA" class="form-control" placeholder="Masukkan Badge Pengguna" id="BADGE_PENGGUNA">
                    </div>
                    <br>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ID_UNIT_KERJA">ID UNIT KERJA</label>
                        <input type="text" name="ID_UNIT_KERJA" class="form-control" placeholder="Masukkan Id Unit Kerja" id="ID_UNIT_KERJA">
                    </div>
                    <br>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="JABATAN_PENGGUNA">JABATAN PENGGUNA</label>
                        <input type="text" name="JABATAN_PENGGUNA" class="form-control" placeholder="Masukkan Jabatan Pengguna" id="JABATAN_PENGGUNA">
                    </div>
                    <br>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="TELEPON">TELEPON</label>
                        <input type="text" name="TELEPON" class="form-control" placeholder="Masukkan Telepon" id="TELEPON">
                    </div>
                    <br>
                </div>

                <div>
                    <button type="button" id="button-save" class="btn btn-warning">Submit</button>
                    <button type="reset" id="button-delete" class="btn btn-danger" name="reset">Reset</button>
                </div>
        </form>

        <br>
        <div class="ⓒ copyright">
            <font style="color:#7e7474">2022 &copy;Layanan TI. DA</font>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">
            $('#BAST').on('click', '#button-save', function(e) {
                e.preventDefault();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    , method: 'POST'
                    , url: 'http://127.0.0.1:8000/Halaman/formBAST'
                    , data: $('#BAST').serialize(),

                    success: function(response) {
                        alert('data berhasil disimpan');
                        window.location.href = "/coba"
                    }
                    , error: function(xhr) {
                        alert('data gagal disimpan');
                    }
                });
            });

        </script>

</body>
</html>
