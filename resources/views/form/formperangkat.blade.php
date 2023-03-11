<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">
<meta name="csrf-token" content="{{csrf_token()}}">

<title>Halaman Form Perangkat</title>
<body>

    <div class="container">
        <h2 class="alert alert-info text-center mt-3">FORM PERANGKAT</h2>

        <form id='PERANGKAT'>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="NO_INVENTARIS">NO INVENTARIS</label>
                        <input type="text" name="NO_INVENTARIS" class="form-control" placeholder="Masukkan No Inventaris Anda" id="NO_INVENTARIS">
                    </div>
                    <br>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="SERIAL_NO">SERIAL NO</label>
                        <input type="text" name="SERIAL_NO" class="form-control" placeholder="Masukkan Serial No" id="SERIAL_NO">
                    </div><br>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="SPESIFIKASI">SPESIFIKASI</label>
                            <input type="text" name="SPESIFIKASI" class="form-control" placeholder="Masukkan Spesifikasi" id="SPESIFIKASI">
                        </div>
                        <br>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MERK">MERK</label>
                            <input type="text" name="MERK" class="form-control" placeholder="Masukkan Merk" id="MERK">
                        </div>
                        <br>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="TANGGAL_PENERIMAAN">TANGGAL PENERIMAAN</label>
                            <input type="date" name="TANGGAL_PENERIMAAN" class="form-control" placeholder="Masukkan Tanggal Penerimaan" id="TANGGAL_PENERIMAAN">
                        </div>
                        <br>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="SERI">SERI</label>
                            <input type="text" name="SERI" class="form-control" placeholder="Masukkan Seri" id="SERI">
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PENGADAAN_VIA">PENGADAAN VIA</label>
                            <select type="text" name="PENGADAAN_VIA" class="form-control" id="PENGADAAN_VIA">
                                <option>--Pilih--</option>
                                <option>WhatsApp</option>
                                <option>Email</option>
                                <option>Tuleap</option>
                            </select>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ID_STATUS_PERANGKAT">ID STATUS PERANGKAT</label>
                            <input type="text" name="ID_STATUS_PERANGKAT" class="form-control" placeholder="Masukkan Id Status Perangkat" id="ID_STATUS_PERANGKAT">
                        </div>
                        <br>
                    </div>
                </div>

                <div class="form-group">
                    <label for="KETERANGAN">KETERANGAN</label>
                    <textarea name="KETERANGAN" class="form-control" placeholder="Masukkan Keterangan" id="KETERANGAN"></textarea>
                    <br>
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
            $('#PERANGKAT').on('click', '#button-save', function(e) {
                e.preventDefault();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    , method: 'POST'
                    , url: 'http://127.0.0.1:8000/Halaman/formperangkat'
                    , data: $('#PERANGKAT').serialize(),

                    success: function(response) {
                        alert('data berhasil disimpan');
                        window.location.href = "/pk"
                    }
                    , error: function(xhr) {
                        alert('data gagal disimpan');
                    }
                });
            });

        </script>

</body>
</html>
