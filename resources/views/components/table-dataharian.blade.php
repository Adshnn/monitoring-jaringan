                      <div class="row">
                        <!-- <div class="col-lg-8 d-flex flex-column"> membgi page jadi dua biar gak kebesaran -->
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                      <h4 class="card-title card-title-dash">AP Down Harian</h4>
                                      <p class="card-subtitle card-subtitle-dash">You have 50+ new </p>
                                    </div>
                                  </div>
                                  <div class="table-responsive  mt-1">
                                    <table class="table select-table">
                                      <thead>
                                        <tr>
                                          <th>NO</th>
                                          <th>PERIODE</th>
                                          <th>LOC ID</th>
                                          <th>AP NAME</th>
                                          <th>MAC ADDRESS</th>
                                          <th>LOCATION</th>
                                          <th>JENIS</th>
                                          <th>WITEL</th>
                                          <th>REGIONAL</th>
                                          <th>LAMA DOWN</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($data as $row)
                                        <tr>
                                          <td>{{ $row->NOMOR }}</td>
                                          <td>{{ $row->PERIODE }}</td>
                                          <td>{{ $row->LOC_ID }}</td>
                                          <td>{{ $row->AP_NAME }}</td>
                                          <td>{{ $row->MAC_ADDRESS }}</td>
                                          <td>{{ $row->LOCATION }}</td>
                                          <td>{{ $row->JENIS }}</td>
                                          <td>{{ $row->WITEL }}</td>
                                          <td>{{ $row->REGIONAL }}</td>
                                          <td>{{ $row->{'lama down'} }}</td>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>