@extends('adminlte.master')

@section('css')
    <link rel="stylesheet" href="{{asset('css/create_report.css')}}">
@endsection

@section('content')

      <h1 style="text-align: center;padding-top:0.5em">Report Form</h1>
      <!--Data yang dimasukan kedalam form webiste akan dimasukan ke file yag di link ke action-->
      <form action="/report" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="txt_field">
          <input type="text" required name="nama">
          <span></span>
          <label>Nama</label>
        </div>
        <div class="txt_field">
          <input type="text" required name="rekening">
          <span></span>
          <label>Nomor Rekening</label>
        </div>
        <div class="txt_field">
          <input type="text" required name="platform">
          <span></span>
          <label>Platform</label>
        </div>
        <div class="container"></div>
        <div class="Bukti">
            <h3>Bukti</h3>
            <div class="drag">
              <div class="drag-area">
                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                <div class="header">Upload File</div>
                <span>Here</span>
                <input class="bukti-file" type="file" required name="bukti">
              </div>
            </div>
          </div>

        <input type="submit" value="Submit">
      </form>

@endsection

{{-- <form action="/report" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama">
            @error('nama')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Nomor Rekening</label>
            <input type="number" class="form-control" name="rekening">
            @error('rekening')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Platform</label>
            <input type="text" class="form-control" name="platform">
            @error('platform')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Bukti</label>
            <input type="file" class="form-control" name="bukti">
            @error('bukti')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> --}}
