<div class="statistics-details d-flex align-items-center justify-content-between">
    <div>
      <p class="text-primary d-flex statistics-title" style="font-weight: bold;">Tiket pengawal</p>
      <h3 class="text-primary rate-percentage fs-1">{{ $dataasuransi->total() }}</h3>
      <p class="text-primary d-flex"><i class="mdi mdi-menu-right"></i><span>ALL</span></p>
    </div>
    <div>
      <p class="text-danger d-flex statistics-title" style="font-weight: bold;">AP GAUL</p>
      <h3 class="text-danger rate-percentage fs-1">{{ $datagaul->total() }}</h3>
      <p class="text-danger d-flex"><i class="mdi mdi-menu-right"></i><span>NOK</span></p>
    </div>
    <div>
      <p class="text-warning d-flex statistics-title" style="font-weight: bold;">AP Down</p>
      <h3 class="text-warning rate-percentage fs-1">{{ $data->total() }}</h3>
      <p class="text-warning d-flex"><i class="mdi mdi-menu-right"></i><span>NOK</span></p>
    </div>
    <div>
      <p class="text-success d-flex statistics-title" style="font-weight: bold;">AP Up</p>
      <h3 class="text-success rate-percentage fs-1">{{ $dataup->total() }}</h3>
      <p class="text-success d-flex"><i class="mdi mdi-menu-right"></i><span>OK</span></p>
    </div>
</div>