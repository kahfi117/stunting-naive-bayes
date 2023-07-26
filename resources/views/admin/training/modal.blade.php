<div id="newExportModal" class="modal animated fadeInUp custo-fadeInUp" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form action="{{ route('training.import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Export data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12 mb-4">
                            <label for="fullName">Pilih file</label>
                            <input type="file" class="form-control" id="fullName" name="file" required accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
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
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="newDataModal" class="modal animated fadeInUp custo-fadeInUp" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form action="{{ route('training.store') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Training</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                            <label for="age">Umur (bulan)</label>
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
                            <label for="berat_badan">Berat Badan (Kg)</label>
                            <input type="number" step="0.1" class="form-control" id="berat_badan" placeholder="" name="berat_badan" value="" required>
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
                            <label for="tingi_badan">Tinggi Badan (Cm)</label>
                            <input type="number" step="0.1" class="form-control" id="tingi_badan" placeholder="" name="tinggi_badan" value="" required>
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
                            <label for="lla">Linkar Lengan Atas (cm)</label>
                            <input type="number" step="0.1" class="form-control" id="lla" placeholder="" name="lingkar_atas" value="" required>
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
                            <label for="status">Nama Kategori</label>
                            <select class="custom-select mb-4" name="status" id="status" required>
                                <option selected>Open this select menu</option>
                                <option value="absence">Tidak Beresiko</option>
                                <option value="presence">Beresiko</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer md-button">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


@foreach ($training as $item)

@isset($item->id)
{{-- Modal Edit --}}
<div class="modal fade" id="modalEdit_{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
            <form action="{{route('training.update', $item->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12 mb-4">
                            <label for="fullName">Nama</label>
                            <input type="text" class="form-control" id="fullName" placeholder="" name="nama" value="{{ $item->nama }}" required>
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
                            <label for="age">Umur (Bulan)</label>
                            <input type="number" class="form-control" id="age" placeholder="" name="umur" value="{{ $item->umur }}" required>
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
                            <label for="berat_badan">Berat Badan (Kg)</label>
                            <input type="number" step="0.1" class="form-control" id="berat_badan" placeholder="" name="berat_badan" value="{{ $item->berat_badan }}" required>
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
                            <label for="tingi_badan">Tinggi Badan (Cm)</label>
                            <input type="number" step="0.1" class="form-control" id="tingi_badan" placeholder="" name="tinggi_badan" value="{{ $item->tinggi_badan }}" required>
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
                            <label for="lla">Lingkar Lengan Atas (Cm)</label>
                            <input type="number" step="0.1" class="form-control" id="lla" placeholder="" name="lingkar_atas" value="{{ $item->lingkar_atas }}" required>
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
                            <label for="status">Status</label>
                            <select class="custom-select mb-4" name="status" id="status" required>
                                @if ($item->status == 'absence')
                                    <option value="absence" selected>Tidak Beresiko</option>
                                    <option value="presence">Beresiko</option>
                                @else
                                    <option value="absence">Tidak Beresiko</option>
                                    <option value="presence" selected>Beresiko</option>
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal Delete --}}

<div class="modal fade" id="modalDelete_{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        </div>
        <form action="{{ route('training.destroy',$item->id) }}" method="post" enctype="multipart/form-data">
            {{-- @method('DELETE') --}}
            @csrf
          <input type="hidden" name="id" id="id" value="{{ $item->id }}">
          <div class="modal-body">
            Anda yakin ingin menghapus  <b>{{ $item->nama }}</b>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-info" data-dismiss="modal">
              <i class="bx bx-x d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Tutup</span>
            </button>
            <button type="submit" class="btn btn-outline-danger ml-1" id="btn-save">
              <i class="bx bx-check d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Yakin</span>
            </button>
          </div>
        </form>
      </div>
    </div>
</div>

@endisset

@endforeach

<div class="modal fade" id="truncateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        </div>
        <form action="{{ route('training.truncate') }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="modal-body">
            Anda yakin ingin menghapus Semua Data</b>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-info" data-dismiss="modal">
              <i class="bx bx-x d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Tutup</span>
            </button>
            <button type="submit" class="btn btn-outline-danger ml-1" id="btn-save">
              <i class="bx bx-check d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Yakin</span>
            </button>
          </div>
        </form>
      </div>
    </div>
</div>