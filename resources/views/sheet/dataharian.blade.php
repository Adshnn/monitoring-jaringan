
<div class="container mt-5">
    <h2 class="mb-4">Daftar Tiket Harian</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>No Tiket</th>
                    <th>AP Name</th>
                    <th>Nama Pelapor</th>
                    <th>No HP</th>
                    <th>Status</th>
                    <th>Witel</th>
                    <th>No Inet</th>
                    <th>Site Name</th>
                    <th>Reported At</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
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
</div>

