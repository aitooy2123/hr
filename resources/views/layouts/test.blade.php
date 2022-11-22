@extends('layouts.theme.adminlite')

@php($header = 'ทดสอบ')
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
              {{-- <a href="" class="btn btn-secondary">ย้อนกลับ</a> --}}
              <a href="" class="btn btn-outline-success">เพิ่มข้อมูล</a>
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
          <h3 class="card-title text-pink text-bold">{{ $header }}</h3>
        </div>
        <div class="card-body">

          <table class="table table-striped table-bordered ">
            <thead>
              <tr>
                <th>asdf</th>
                <th>asdf</th>
                <th>asdfsdfdf</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $arr = ['111', '222', '333', '444', '5555'];
              ?>

              @foreach ($arr as $key => $val)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $val}}</td>
                  <td></td>
                </tr>
              @endforeach

            </tbody>
          </table>


        </div><!-- /.card-body -->
      </div><!-- /.card -->
    </section><!-- /.content -->

  </div>
@endsection

@section('js_script')
@endsection

@section('js_custom')
@endsection
