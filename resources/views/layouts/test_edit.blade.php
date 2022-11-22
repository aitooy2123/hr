@extends('layouts.theme.adminlite')

@php($header = 'แก้ไข')
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
              <a href="{{ route('test') }}" class="btn btn-secondary">ย้อนกลับ</a>
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

          @if (session()->has('Success'))
            <div class="alert alert-success" role="alert">
              <strong>{{ session()->get('Success') }}</strong>
            </div>
          @elseif(session()->has('Error'))
            <div class="alert alert-danger" role="alert">
              <strong>{{ session()->get('Error') }}</strong>
            </div>
          @endif

          <form action="{{ route('test.update') }}" method="POST">
            @csrf

            <div class="form-group row">
              <label for="" class="col-md-2 col-form-label">ชื่อ</label>
              <div class="col-md-10">
                <input type="text" class="form-control col-3" name="fname" value="{{ $Edit->fname }}" placeholder="ระบุชื่อ">
              </div>
            </div>

            <div class="form-group row">
              <label for="" class="col-md-2 col-form-label">นามสกุล</label>
              <div class="col-md-10">
                <input type="text" class="form-control col-3" name="lname" value="{{ $Edit->lname }}" placeholder="ระบุชื่อ">
              </div>
            </div>



        </div><!-- /.card-body -->

        <div class="card-footer">
          <input type="hidden" name="id" value="{{ $Edit->id }}">
          <button type="submit" class="btn btn-success">save</button>
        </div>
        </form>


      </div><!-- /.card -->
    </section><!-- /.content -->

  </div>
@endsection

@section('js_script')
@endsection

@section('js_custom')
@endsection
