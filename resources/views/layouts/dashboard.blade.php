@extends('layouts.theme.adminlite')

@php($header = 'dashboard')
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

          <div id="chartContainer" style="height: 370px; width: 100%;"></div>
          <div id="chartContainer2" style="height: 370px; width: 100%;"></div>


        </div><!-- /.card-body -->
      </div><!-- /.card -->
    </section><!-- /.content -->

  </div>
@endsection

@section('js_script')
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
@endsection

@section('js_custom')
  <script>
    window.onload = function() {


      var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title: {
          text: "Usage Share of Desktop Browsers"
        },
        subtitles: [{
          text: "November 2017"
        }],
        data: [{
          type: "pie",
          yValueFormatString: "#,##0.00\"%\"",
          indexLabel: "{label} ({y})",
          dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
      });
      chart.render();



      var chart2 = new CanvasJS.Chart("chartContainer2", {
        animationEnabled: true,
        theme: "light2",
        title: {
          text: "Gold Reserves"
        },
        axisY: {
          title: "Gold Reserves (in tonnes)"
        },
        data: [{
          type: "column",
          yValueFormatString: "#,##0.## tonnes",
          dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
      });
      chart2.render();

    }
  </script>
@endsection
