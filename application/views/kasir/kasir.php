<div class="col-md-6 mb-3">
    <div class="card">
        <div class="card-body py-4">
            <form method="POST">
                <div class="form-group row mb-0">
                    <label class="col-sm-4 col-form-label col-form-label-sm"><b>Tgl. Transaksi</b></label>
                    <div class="col-sm-8 mb-2">
                        <input type="text" class="form-control form-control-sm" name="tgl_input" value="" readonly>
                    </div>
                    <label class="col-sm-4 col-form-label col-form-label-sm"><b>Kode Barang</b></label>
                    <div class="col-sm-8 mb-2">
                        <div class="input-group">
                            <input type="text" name="kode_barang" class="form-control form-control-sm border-right-0" list="datalist1" onchange="changeValue(this.value)" aria-describedby="basic-addon2" required>
                            <datalist id="datalist1">

                            </datalist>
                            <div class="input-group-append">
                                <span class="input-group-text bg-white border-left-0" id="basic-addon2" style="border-radius:0px 15px 15px 0px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
                                        <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z" />
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                    <label class="col-sm-4 col-form-label col-form-label-sm"><b>Nama Barang</b></label>
                    <div class="col-sm-8 mb-2">
                        <input type="text" class="form-control form-control-sm" name="nama_barang" id="nama_barang" readonly>
                    </div>
                    <label class="col-sm-4 col-form-label col-form-label-sm"><b>Harga</b></label>
                    <div class="col-sm-8 mb-2">
                        <input type="number" class="form-control form-control-sm" id="harga_barang" onchange="total()" value="" name="harga_barang" readonly>
                    </div>
                    <label class="col-sm-4 col-form-label col-form-label-sm"><b>Quantity</b></label>
                    <div class="col-sm-8 mb-2">
                        <input type="number" class="form-control form-control-sm" id="quantity" onchange="total()" name="quantity" placeholder="0" required>
                    </div>
                    <label class="col-sm-4 col-form-label col-form-label-sm"><b>Sub-Total</b></label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" id="subtotal" name="subtotal" onchange="total()" name="sub_total" readonly>
                            <div class="input-group-append">
                                <button class="btn btn-purple btn-sm" name="save" value="simpan" type="submit">
                                    <i class="fa fa-plus mr-2"></i>Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            ?>
            <form method="POST">
                <div class="form-group row mb-0">
                    <input type="hidden" class="form-control" name="no_transaksi" value="" readonly>
                    <input type="hidden" class="form-control" value=" $tot_bayar; ?>" id="hargatotal" readonly>
                    <label class="col-sm-4 col-form-label col-form-label-sm"><b>Bayar</b></label>
                    <div class="col-sm-8 mb-2">
                        <input type="number" class="form-control form-control-sm" name="bayar" id="bayarnya" onchange="totalnya()">
                    </div>
                    <label class="col-sm-4 col-form-label col-form-label-sm"><b>Kembali</b></label>
                    <div class="col-sm-8 mb-2">
                        <input type="number" class="form-control form-control-sm" name="kembalian" id="total1" readonly>
                    </div>
                </div>
                <div class="text-right">
                    <button class="btn btn-purple btn-sm" name="save1" value="simpan" type="submit">
                        <i class="fa fa-shopping-cart mr-2"></i>Bayar</button>
                </div>
            </form>

        </div>
    </div>
</div>
</div>