@extends('layouts.app')

@section('title', 'Dashboard Monitoring')

@section('content')
<!-- partial -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-sm-12">
      <div class="home-tab">
        @include('components.statistik-panel', [
              'tiket' => 253,
              'down' => $data->total(),
              'up' => 82
            ])
        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-selected="true">Overview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tiket-pengawalan" role="tab" aria-selected="false">Tiket pengawalan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#ap-down" role="tab" aria-selected="false">AP Down</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#ap-up" role="tab" aria-selected="false">AP Up</a>
            </li>
          </ul>
          <div class="btn-wrapper">
            <a href="#" class="btn btn-outline-dark"><i class="icon-printer"></i> Print</a>
            <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
          </div>
        </div>

        <div class="tab-content tab-content-basic">
          <!-- overview tab -->
          <div class="tab-pane fade show active" id="overview" role="tabpanel">
            @include('components.table-datagaul')
            
          </div> <!-- end of overview tab -->

          <!-- tiket-pengawalan tab -->
          <div class="tab-pane fade" id="tiket-pengawalan" role="tabpanel">
            <!-- Table Section -->
            @include('components.table-datatiketpengawalan')

          </div> <!-- end of tiket-pengawalan tab -->

          <!-- ap-up tab -->
          <div class="tab-pane fade" id="ap-up" role="tabpanel">
            <!-- Table Section -->
            @include('components.table-dataup')

          </div> <!-- end of ap-up tab -->

          <!-- ap-down tab -->
          <div class="tab-pane fade" id="ap-down" role="tabpanel">
            <!-- Table Section -->
            @include('components.table-dataharian', ['data' => $data])

          </div> <!-- end of ap-down tab -->

        </div> <!-- end of tab-content -->
      </div> <!-- end of home-tab -->
    </div>
  </div>
</div>
<!-- partial -->
@endsection
 