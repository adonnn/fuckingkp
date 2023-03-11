<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">
<meta name="csrf-token" content="{{csrf_token()}}">

<title>Halaman Form Perangkat</title>
<body>

    <div class="container">
        <h2 class="alert alert-info text-center mt-3">FORM MASTER STATUS PERANGKAT</h2>

        <form id='MSP'>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ID_STATUS_PERANGKAT">ID STATUS PERANGKAT</label>
                    <input type="text" name="ID_STATUS_PERANGKAT" class="form-control" placeholder="Masukkan Id Status Perangkat Anda" id="ID_STATUS_PERANGKAT">
                </div>
                <br>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="DESKRIPSI_STATUS">DESKRIPSI STATUS</label>
                    <input type="text" name="DESKRIPSI_STATUS" class="form-control" placeholder="Masukkan Deskripsi Status" id="DESKRIPSI_STATUS">
                </div><br>
            </div>

            <div>
                <button type="button" id="button-save" class="btn btn-success">Submit</button>
                <button type="reset" id="button-delete" class="btn btn-danger" name="reset">Reset</button>
            </div>
        </form>

        <br>
        <div class="ⓒ copyright">
            <font style="color:#7e7474">2022 &copy;Layanan TI. FR</font>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">
            $('#MSP').on('click', '#button-save', function(e) {
                e.preventDefault();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    , method: 'POST'
                    , url: 'http://127.0.0.1:8000/Halaman/formmsp'
                    , data: $('#MSP').serialize(),

                    success: function(response) {
                        alert('data berhasil disimpan');
                        window.location.href = "/msp"
                    }
                    , error: function(xhr) {
                        alert('data gagal disimpan');
                    }
                });
            });

        </script>

</body>
</html>
