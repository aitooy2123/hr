@extends('layouts.theme.adminlite')

@php($header = 'หน้าแรก')
@section('title', $header)

@section('css_script')
@endsection

@section('css_custom')
@endsection

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-10">
            <h1>{{ $header }}</h1>
          </div>
          <div class="col-2">

            <div class="d-flex justify-content-end">
                <a href="" class="btn btn-secondary">ย้อนกลับ</a>
                {{-- <a href="" class="btn btn-success">เพิ่มข้อมูล</a> --}}
            </div>

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{ $header }}</h3>
        </div>
        <div class="card-body">


        </div><!-- /.card-body -->
      </div><!-- /.card -->
    </section><!-- /.content -->
    
  </div>
@endsection

@section('js_script')
@endsection

@section('js_custom')
@endsection
