@extends('template/admin')

@section('index')

<!-- main -->
<div class="content-wrapper container">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Recruit</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav
                    aria-label="breadcrumb"
                    class="breadcrumb-header float-start float-lg-end"
                >
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('adminDashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Recruit
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <br />
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table
                    class="table table-striped"
                    id="tableSemua"
                    style="width: 100%"
                >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>LINE</th>
                            <th>IG</th>
                            <th>Pil 1</th>
                            <th>Pil 2</th>
                            <th>Lulus</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($divisi['Semua'] as $row => $col)
                          <tr>
                              <td>{{ $row+1 }}</td>
                              <td>{{ $col['nama'] }}</td>
                              <td>
                                  <a href="https://line.me/ti/p/{{ $col['idline'] }}" target="_blank">{{ $col['idline'] }}</a>
                              </td>
                              <td>
                                <a href="https://instagram.com/{{ $col['instagram'] }}" target="_blank">{{ $col['instagram'] }}</a>
                              </td>
                              <td>{{ $col['pil1'] }}</td>
                              <td>{{ $col['pil2'] }}</td>
                              <td>{{ $col['lulus'] === NULL ? '-' : $col['lulus'] }}</td>
                              <td>
                                  <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal{{ $col['id'] }}" style="font-size: .9rem;">Recruit</a>
                                  <a href="{{ route('profil', $col['id']) }}"><button class="btn btn-primary btn-floating" style="font-size: .9rem;">Lihat</button></a>
                              </td>
                            </tr>

                            <div
                            class="modal fade text-left"
                            id="myModal{{ $col['id'] }}"
                            role="dialog"
                            aria-labelledby="myModalLabel1"
                            aria-hidden="true"
                            >
                              <div
                                  class="modal-dialog modal-dialog-scrollable"
                                  role="document"
                              >
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5
                                              class="modal-title"
                                              id="myModalLabel1"
                                          >
                                              Recruit
                                          </h5>
                                          <button
                                              type="button"
                                              class="close rounded-pill"
                                              data-bs-dismiss="modal"
                                              aria-label="Close"
                                          >
                                              <i data-feather="x"></i>
                                          </button>
                                      </div>
                                      <form
                                          action="{{ route('recruit') }}"
                                          method="POST"
                                      >
                                          @csrf
                                          <div class="modal-body">
                                              <input
                                                  type="hidden"
                                                  name="id"
                                                  value="{{ $col['id'] }}"
                                              />

                                              <div class="form-group">
                                                  <select
                                                      id="lulus"
                                                      name="lulus"
                                                      class="form-select regis__input form-control py-3"
                                                      required
                                                  >
                                                      <option selected hidden disabled>Pilih Dinas/Divisi Lulus...</option>
                                                      <option value="Bistra">Dinas BISTRA (Bisnis dan Kemitraan)</option>
                                                      <option value="Medinfo_Humas">Dinas MEDINFO (Media dan Informasi) - Divisi HUMAS (Hubungan Masyarakat)</option>
                                                      <option value="Medinfo_Mulmed">Dinas MEDINFO (Media dan Informasi) - Divisi MULMED (Multimedia)</option>
                                                      <option value="Kastrad">Dinas KASTRAD (Kajian Strategi dan Advokasi)</option>
                                                      <option value="Kestari">Dinas KESTARI (Kesekretariatan)</option>
                                                      <option value="PMB_Seni">Dinas PMB (Pengembangan Minat Bakat) - Divisi Seni</option>
                                                      <option value="PMB_Olahraga">Dinas PMB (Pengembangan Minat Bakat) - Divisi Olahraga</option>
                                                      <option value="PSDM">Dinas PSDM (Pengembangan Sumber Daya Mahasiswa)</option>
                                                      <option value="Ristek_Akademik">Dinas RISTEK (Riset dan Teknologi) - Divisi Akademik</option>
                                                      <option value="Ristek_PTI">Dinas RISTEK (Riset dan Teknologi) - Divisi PTI (Pengembangan Teknologi Informasi)</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="modal-footer">
                                              <button
                                                  type="button"
                                                  class="btn"
                                                  data-bs-dismiss="modal"
                                              >
                                                  <span class="d-sm-block"
                                                      >Cancel</span
                                                  >
                                              </button>
                                              <button
                                                  type="submit"
                                                  class="btn btn-primary ml-1"
                                                  name="submit"
                                              >
                                                  Update &raquo;
                                              </button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>


@endsection
