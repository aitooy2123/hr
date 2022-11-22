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
              <a href="{{ route('test.create') }}" class="btn btn-success">เพิ่มข้อมูล</a>
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


          @if (session()->has('Success'))
            <div class="alert alert-success" role="alert">
              <strong>{{ session()->get('Success') }}</strong>
            </div>
          @endif



          <table class="table table-striped table-bordered ">
            <thead>
              <tr>
                <th>#</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Manage</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($Test as $key => $val)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $val->fname }}</td>
                  <td>{{ $val->lname }}</td>
                  <td>
                    <a href="{{ route('test.edit', ['id' => $val->id]) }}" class="btn btn-warning"><i class="far fa-edit"></i></a>
                    <a href="{{ route('test.delete', ['id' => $val->id]) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>
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
