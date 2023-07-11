<!-- Modal -->
<div class="modal fade" id="stuntingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="{{ route('cekStunting') }}" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Cek Status Stunting Anak</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <label for="fullName">Nama</label>
                        <input type="text" class="form-control" id="fullName" placeholder="" name="nama" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please fill the name
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <label for="age">Umur(Bulan)</label>
                        <input type="number" class="form-control" id="age" placeholder="" name="umur" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please fill the name
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <label for="berat_badan">Berat Badan(KG)</label>
                        <input type="number" step="0.1" class="form-control" id="berat_badan" placeholder="" name="bb" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please fill the name
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <label for="tingi_badan">Tinggi Badan(CM)</label>
                        <input type="number" step="0.1" class="form-control" id="tingi_badan" placeholder="" name="tb" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please fill the name
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <label for="lla">Linkar Lengan Atas(CM)</label>
                        <input type="number" step="0.1" class="form-control" id="lla" placeholder="" name="lla" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please fill the name
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer md-button">
                <button type="button" class="main-btn btn-green" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="main-btn btn-yellow">Save changes</button>
            </div>
        </form>
    </div>
    </div>
</div>