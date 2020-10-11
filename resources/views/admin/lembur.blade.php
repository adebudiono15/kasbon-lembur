@extends('layouts.master')

@section('title', 'Lembur')

@section('content')
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">@yield('title')</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row mt--2 justify-content-center">
                <div class="col-md-6">
                    <div class="card full-height">
                        <div class="card-body">
                            <form action="{{ route('save-lembur') }}" method="post">
                            @csrf
                            <input type="text" id="kode_karyawan"  value="{{ Auth::user()->nip }}" hidden>
                            <div class="card-title">Pengajuan Lembur</div>
                            <div class="card-category">Pastikan Hubungi Pihak Terkait Setelah Melakukan Pengajuan.</div>
                            <div class="form-group mt-3">
                                <label for="lembur">Tanggal</label>
                                <input type="date" class="form-control" value="{{ old('tanggal') }}"
                                name="tanggal" placeholder="-" style="height: 28px;">
                            </div>

                            <div class="form-group mt-3">
                                <label for="lembur">Jumlah Pengajuan Lembur (Jam)</label>
                                <input type="number" name="waktu_lembur" class="form-control" placeholder="Masukan Jumlah Jam Lembur">
                                <input type="text" name="nama" id="txt_nama" hidden>
                                <input type="text" name="kode_karyawan" id="txt_id" hidden>
                                <input type="text" name="lembur_sementara" id="txt_lembur" hidden>
                                <button type="submit" class="btn btn-sm btn-shadow btn-primary mt-3 float-right">Kirim</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
         var kode_karyawan = document.getElementById("kode_karyawan").value;
        // alert( kode_karyawan );
        var kode_karyawan = kode_karyawan;
        var url = "{{ url('master_lembur/ajax') }}"+'/'+kode_karyawan;
        var _this= $(this);
        $.ajax({
                type:'get',
                dataType: 'json',
                url:url,
                success : function(data){
                    console.log(data);
                    _this.val('');
                    
                    var kode_karyawan = data.data.kode_karyawan;
                     $('#txt_id').val(kode_karyawan);
                   var divisi = data.data.divisi;
                    $('#txt_divisi').val(divisi);
                   var nama = data.data.nama;
                    $('#txt_nama').val(nama);
                  
                   
                   var jabatan = data.data.jabatan;
                    $('#txt_jabatan').val(jabatan);
                    var lembur = data.data.lembur;
                    $('#txt_lembur').val(lembur);
                }
            })    
    </script>
@endpush