<!DOCTYPE html>
<html>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">
<title>Halaman Form Aduan</title>
<body>

    <div class="container">
        <h2 class="alert alert-primary text-center mt-3">FORM ADUAN</h2>
        <form id='formaduan'>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fname">ID ADUAN</label>
                        <input type="text" name="ID_ADUAN" id="ID_ADUAN" class="form-control" readonly>
                    </div>
                    <br>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="noinventaris">NO INVENTARIS</label>
                        <input type="text" name="NO_INVENTARIS" id="NO_INVENTARIS" class="form-control" placeholder="Masukkan No Inventaris perangkat Anda" required>
                    </div>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">STATUS PERANGKAT</label>
                        <input type="text" name="STATUS_PERANGKAT" class="form-control" placeholder="Masukkan Status Perangkat Anda" id="status" required>
                    </div>
                    <br>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tanggal">TANGGAL</label>
                        <input type="date" name="TANGGAL" class="form-control" id="tanggal" required>
                    </div>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="namapengguna">NAMA PENGGUNA</label>
                        <input type="text" name="NAMA_PENGGUNA" class="form-control" placeholder="Masukkan Nama Pengguna" id="namapengguna" required>
                    </div>
                    <br>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="badgepengguna">BADGE PENGGUNA</label>
                        <input type="text" name="BADGE_PENGGUNA" class="form-control" placeholder="Masukkan Badge Pengguna" id="badgepengguna" required>
                    </div>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="namamengetahui">NAMA MENGETAHUI</label>
                        <input type="text" name="NAMA_MENGETAHUI" class="form-control" placeholder="Masukkan Nama Mengetahui" id="namamengetahui" required>
                    </div>
                    <br>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="badgemengetahui">BADGE MENGETAHUI</label>
                        <input type="text" name="BADGE_MENGETAHUI" class="form-control" placeholder="Masukkan Badge Mengetahui" id="badgemengetahui" required>
                    </div>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="namakontak">NAMA KONTAK</label>
                        <input type="text" name="NAMA_KONTAK" class="form-control" placeholder="Masukkan Nama Kontak" id="namakontak" required>
                    </div>
                    <br>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nowhatsapp">NO WHATSAPP</label>
                        <input type="text" name="NO_WHATSAPP" class="form-control" placeholder="Masukkan Nomor WA yang Aktif" id="nowhatsapp" required>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="idunitkerja">ID UNIT KERJA</label>
                        <input type="text" name="ID_UNIT_KERJA" class="form-control" placeholder="Masukkan Id Unit Kerja" id="idunitkerja" required>
                    </div>
                    <br>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lokasi">LOKASI</label>
                        <input type="text" name="LOKASI" class="form-control" placeholder="Masukkan Lokasi Anda" id="lokasi" required>
                    </div>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="emailpengguna">EMAIL PENGGUNA</label>
                        <input type="email" name="EMAIL_PENGGUNA" class="form-control" placeholder="Masukkan Email Pengguna" id="emailpengguna" required>
                    </div>
                    <br>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="emailmengetahui">EMAIL MENGETAHUI</label>
                        <input type="email" name="EMAIL_MENGETAHUI" class="form-control" placeholder="Masukkan Email Mengetahui" id="emailmengetahui" required>
                    </div>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="penerimaaduan">PENERIMA ADUAN</label>
                    <input type="text" name="PENERIMA_ADUAN" class="form-control" placeholder="Masukkan Nama Penerima Aduan" id="penerimaaduan" required>
                </div>
                <br>
            </div>
            <br>
            <div class="form-group">
                <label for="deskripsiaduan">DESKRIPSI ADUAN</label>
                <textarea name="DESKRIPSI_ADUAN" id="DESKRIPSI_ADUAN" class="form-control" rows="3"></textarea>
                <br>
            </div>

            <div class="form-group">
                <label for="keterangan">KETERANGAN</label>
                <textarea name="KETERANGAN" id="KETERANGAN" class="form-control" rows="3"></textarea>
                <br>
            </div>

            <div>
                <button type="button" id="button-save" class="btn btn-success" name="submit">Submit</button>
                <button type="reset" id="button-reset" class="btn btn-danger" name="reset">Reset</button>
            </div>
        </form>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">
            function makeid(length) {
                var result = '';
                var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                var charactersLength = characters.length;
                for (var i = 0; i < length; i++) {
                    result += characters.charAt(Math.floor(Math.random() * charactersLength));
                }
                return result;
            }

            var letter = makeid(2)
            var number = Math.floor(1000 + Math.random() * 9000)

            var result = letter + number
            console.log(result)

            $("#formaduan #ID_ADUAN").val(result)
            $("#formaduan #ID_ADUAN").on("click", function() {
                $("#formaduan #ID_ADUAN").prop('readonly', true);
            });

            $('#formaduan').on('click', '#button-save', function(e) {
                e.preventDefault();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    , method: 'POST'
                    , url: 'http://127.0.0.1:8000/Halaman/formaduan'
                    , data: $('#formaduan').serialize(),

                    success: function(response) {
                        alert('data berhasil disimpan');
                    }
                    , error: function(xhr) {
                        alert('data gagal disimpan');
                    }
                });
            });

        </script>
        <br><br>
        <small>FormAduan.FTR</small>
</body>
</html>
