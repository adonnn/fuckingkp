<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">
<meta name="csrf-token" content="{{csrf_token()}}">

<title>Halaman Form Perangkat</title>
<body>

    <div class="container">
        <h2 class="alert alert-info text-center mt-3">FORM MASTER TINDAKAN</h2>

        <form id='MT'>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ID_TINDAKAN">ID TINDAKAN</label>
                    <input type="text" name="ID_TINDAKAN" class="form-control" placeholder="Masukkan Id Tindakan Anda" id="ID_TINDAKAN">
                </div>
                <br>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="DESKRIPSI_TINDAKAN">DESKRIPSI TINDAKAN</label>
                    <input type="text" name="DESKRIPSI_TINDAKAN" class="form-control" placeholder="Masukkan Deskripsi" id="DESKRIPSI_TINDAKAN">
                </div><br>
            </div>

            <div>
                <button type="button" id="button-save" class="btn btn-success">Submit</button>
                <button type="reset" id="button-delete" class="btn btn-danger" name="reset">Reset</button>
            </div>
        </form>

        <br>
        <div class="ⓒ copyright">
            <font style="color:#7e7474">2022 &copy;Layanan TI. MS</font>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">
            $('#MT').on('click', '#button-save', function(e) {
                e.preventDefault();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    , method: 'POST'
                    , url: 'http://127.0.0.1:8000/Halaman/formmt'
                    , data: $('#MT').serialize(),

                    success: function(response) {
                        alert('data berhasil disimpan');
                        window.location.href = "/mt"
                    }
                    , error: function(xhr) {
                        alert('data gagal disimpan');
                    }
                });
            });

        </script>

</body>
</html>
