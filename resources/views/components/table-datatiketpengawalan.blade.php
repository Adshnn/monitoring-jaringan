<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card card-rounded">
      <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-start">
          <div>
            <h4 class="card-title card-title-dash">DATA TIKET PENGAWALAN GAUL REG 1</h4>
            <!-- <p class="card-subtitle card-subtitle-dash">You have 50+ new </p> -->
          </div>
        </div>

        <div class="table-responsive mt-1">
          <table class="table select-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>AP NAME</th>
                <th>NAPEL</th>
                <th>KONTAK</th>
                <th>STATUS</th>
                <th>WITEL</th>
                <th>NOINET</th>
                <th>SITENAME</th>
                <th>REPORTED AT</th>
                <th>KATEGORI TIKET</th>
              </tr>
            </thead>
            <tbody>
              @foreach($dataasuransi as $row)
              <tr>
                <td>{{ $row->{'Untitled Spreadsheet'} }}</td>
                <td>{{ $row->apname }}</td>
                <td>{{ $row->napel }}</td>
                <td>{{ $row->hp }}</td>
                <td>{{ $row->status }}</td>
                <td>{{ $row->Witel }}</td>
                <td>{{ $row->noinet }}</td>
                <td>{{ $row->sitename }}</td>
                <td>{{ $row->reported_at }}</td>
                <td>{{ $row->{'kategori_tiket (reaktif/proaktif)'} }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      <div class="d-f lex flex-column align-items-center mt-3">
          {{-- PAGINATION LINKS (Angka-angka) --}}
          <div>
              {{ $dataasuransi->links('pagination::bootstrap-4') }}
          </div>

          {{-- PAGINATION INFO --}}
          <div class="mt-2 text-muted small">
              Showing {{ $dataasuransi->firstItem() }} to {{ $dataasuransi->lastItem() }} of {{ $dataasuransi->total() }} results
          </div>
      </div>
      </div>
    </div>
  </div>
</div>
