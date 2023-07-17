@extends('template/admin')

@section('index')

<!-- main -->
<div class="content-wrapper container">
    <div class="page-heading">
        <h3>Welcome, {{ Auth::user()->divisi }}</h3>

        <section class="section mt-4">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist"> 
                        @if (Auth::user()->divisi === 'Inti' || Auth::user()->divisi === 'Admin')
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link {{ Auth::user()->divisi === 'Inti' || Auth::user()->divisi === 'Admin' ? 'active' : '' }}"
                                id="semua-tab"
                                data-bs-toggle="tab"
                                href="#semua"
                                role="tab"
                                aria-controls="semua"
                                aria-selected="true"
                                >SEMUA</a
                            >
                        </li>
                        @endif
                        @if (Auth::user()->divisi === 'Inti' || Auth::user()->divisi === 'Admin' || Auth::user()->divisi === 'Bistra')
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link {{ Auth::user()->divisi === 'Bistra' ? 'active' : '' }}"
                                id="bistra-tab"
                                data-bs-toggle="tab"
                                href="#bistra"
                                role="tab"
                                aria-controls="bistra"
                                aria-selected="false"
                                >BISTRA</a
                            >
                        </li>
                        @endif
                        @if (Auth::user()->divisi === 'Inti' || Auth::user()->divisi === 'Admin' || Auth::user()->divisi === 'Medinfo')
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link {{ Auth::user()->divisi === 'Medinfo' ? 'active' : '' }}"
                                id="humas-tab"
                                data-bs-toggle="tab"
                                href="#humas"
                                role="tab"
                                aria-controls="humas"
                                aria-selected="false"
                                >HUMAS</a
                            >
                        </li>
                        @endif
                        @if (Auth::user()->divisi === 'Inti' || Auth::user()->divisi === 'Admin' || Auth::user()->divisi === 'Medinfo')
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link"
                                id="mulmed-tab"
                                data-bs-toggle="tab"
                                href="#mulmed"
                                role="tab"
                                aria-controls="mulmed"
                                aria-selected="false"
                                >MULMED</a
                            >
                        </li>
                        @endif
                        @if (Auth::user()->divisi === 'Inti' || Auth::user()->divisi === 'Admin' || Auth::user()->divisi === 'Kastrad')
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link {{ Auth::user()->divisi === 'Kastrad' ? 'active' : '' }}"
                                id="kastrad-tab"
                                data-bs-toggle="tab"
                                href="#kastrad"
                                role="tab"
                                aria-controls="kastrad"
                                aria-selected="false"
                                >KASTRAD</a
                            >
                        </li>
                        @endif
                        @if (Auth::user()->divisi === 'Inti' || Auth::user()->divisi === 'Admin' || Auth::user()->divisi === 'Kestari')
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link {{ Auth::user()->divisi === 'Kestari' ? 'active' : '' }}"
                                id="kestari-tab"
                                data-bs-toggle="tab"
                                href="#kestari"
                                role="tab"
                                aria-controls="kestari"
                                aria-selected="false"
                                >KESTARI</a
                            >
                        </li>
                        @endif
                        @if (Auth::user()->divisi === 'Inti' || Auth::user()->divisi === 'Admin' || Auth::user()->divisi === 'PMB')
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link {{ Auth::user()->divisi === 'PMB' ? 'active' : '' }}"
                                id="seni-tab"
                                data-bs-toggle="tab"
                                href="#seni"
                                role="tab"
                                aria-controls="seni"
                                aria-selected="false"
                                >SENI</a
                            >
                        </li>
                        @endif
                        @if (Auth::user()->divisi === 'Inti' || Auth::user()->divisi === 'Admin' || Auth::user()->divisi === 'PMB')
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link"
                                id="olahraga-tab"
                                data-bs-toggle="tab"
                                href="#olahraga"
                                role="tab"
                                aria-controls="olahraga"
                                aria-selected="false"
                                >OLAHRAGA</a
                            >
                        </li>
                        @endif
                        @if (Auth::user()->divisi === 'Inti' || Auth::user()->divisi === 'Admin' || Auth::user()->divisi === 'PSDM')
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link {{ Auth::user()->divisi === 'PSDM' ? 'active' : '' }}"
                                id="psdm-tab"
                                data-bs-toggle="tab"
                                href="#psdm"
                                role="tab"
                                aria-controls="psdm"
                                aria-selected="false"
                                >PSDM</a
                            >
                        </li>
                        @endif
                        @if (Auth::user()->divisi === 'Inti' || Auth::user()->divisi === 'Admin'|| Auth::user()->divisi === 'Ristek')
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link {{ Auth::user()->divisi === 'Ristek' ? 'active' : '' }}"
                                id="akademik-tab"
                                data-bs-toggle="tab"
                                href="#akademik"
                                role="tab"
                                aria-controls="akademik"
                                aria-selected="false"
                                >AKADEMIK</a
                            >
                        </li>
                        @endif
                        @if (Auth::user()->divisi === 'Inti' || Auth::user()->divisi === 'Admin' || Auth::user()->divisi === 'Ristek')
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link"
                                id="pti-tab"
                                data-bs-toggle="tab"
                                href="#pti"
                                role="tab"
                                aria-controls="pti"
                                aria-selected="false"
                                >PTI</a
                            >
                        </li>
                        @endif
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'Inti' || Auth::user()->divisi === 'Admin' ? 'show active' : '' }}"
                            id="semua"
                            role="tabpanel"
                            aria-labelledby="semua-tab"
                        >
                            <h1 class="mt-4 d-flex">
                                <span class="border border-primary rounded-circle bg-primary text-white px-3 d-flex justify-content-center align-item-center" style="width:fit-content">
                                  {{ $divisi['Semua']->count()  }}
                                </span>
                                &nbsp;pendaftar
                            </h1>
                        </div>
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'Bistra' ? 'show active' : '' }}"
                            id="bistra"
                            role="tabpanel"
                            aria-labelledby="bistra-tab"
                        >
                            <h1 class="mt-4 d-flex">
                                <span class="border border-primary rounded-circle bg-primary text-white px-3 d-flex justify-content-center align-item-center" style="width:fit-content">
                                  {{ $divisi['Bistra']->count()  }}
                                </span>
                                &nbsp;pendaftar
                            </h1>
                        </div>
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'Medinfo' ? 'show active' : '' }}"
                            id="humas"
                            role="tabpanel"
                            aria-labelledby="humas-tab"
                        >
                            <h1 class="mt-4 d-flex">
                                <span class="border border-primary rounded-circle bg-primary text-white px-3 d-flex justify-content-center align-item-center" style="width:fit-content">
                                  {{ $divisi['Humas']->count()  }}
                                </span>
                                &nbsp;pendaftar
                            </h1>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="mulmed"
                            role="tabpanel"
                            aria-labelledby="mulmed-tab"
                        >
                            <h1 class="mt-4 d-flex">
                                <span class="border border-primary rounded-circle bg-primary text-white px-3 d-flex justify-content-center align-item-center" style="width:fit-content">
                                  {{ $divisi['Mulmed']->count()  }}
                                </span>
                                &nbsp;pendaftar
                            </h1>
                        </div>
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'Kastrad' ? 'show active' : '' }}"
                            id="kastrad"
                            role="tabpanel"
                            aria-labelledby="kastrad-tab"
                        >
                            <h1 class="mt-4 d-flex">
                                <span class="border border-primary rounded-circle bg-primary text-white px-3 d-flex justify-content-center align-item-center" style="width:fit-content">
                                  {{ $divisi['Kastrad']->count()  }}
                                </span>
                                &nbsp;pendaftar
                            </h1>
                        </div>
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'Kestari' ? 'show active' : '' }}"
                            id="kestari"
                            role="tabpanel"
                            aria-labelledby="kestari-tab"
                        >
                            <h1 class="mt-4 d-flex">
                                <span class="border border-primary rounded-circle bg-primary text-white px-3 d-flex justify-content-center align-item-center" style="width:fit-content">
                                  {{ $divisi['Kestari']->count()  }}
                                </span>
                                &nbsp;pendaftar
                            </h1>
                        </div>
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'PMB' ? 'show active' : '' }}"
                            id="seni"
                            role="tabpanel"
                            aria-labelledby="seni-tab"
                        >
                            <h1 class="mt-4 d-flex">
                                <span class="border border-primary rounded-circle bg-primary text-white px-3 d-flex justify-content-center align-item-center" style="width:fit-content">
                                  {{ $divisi['Seni']->count()  }}
                                </span>
                                &nbsp;pendaftar
                            </h1>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="olahraga"
                            role="tabpanel"
                            aria-labelledby="olahraga-tab"
                        >
                            <h1 class="mt-4 d-flex">
                                <span class="border border-primary rounded-circle bg-primary text-white px-3 d-flex justify-content-center align-item-center" style="width:fit-content">
                                  {{ $divisi['Olahraga']->count()  }}
                                </span>
                                &nbsp;pendaftar
                            </h1>
                        </div>
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'PSDM' ? 'show active' : '' }}"
                            id="psdm"
                            role="tabpanel"
                            aria-labelledby="psdm-tab"
                        >
                            <h1 class="mt-4 d-flex">
                                <span class="border border-primary rounded-circle bg-primary text-white px-3 d-flex justify-content-center align-item-center" style="width:fit-content">
                                  {{ $divisi['PSDM']->count()  }}
                                </span>
                                &nbsp;pendaftar
                            </h1>
                        </div>
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'Ristek' ? 'show active' : '' }}"
                            id="akademik"
                            role="tabpanel"
                            aria-labelledby="akademik-tab"
                        >
                            <h1 class="mt-4 d-flex">
                                <span class="border border-primary rounded-circle bg-primary text-white px-3 d-flex justify-content-center align-item-center" style="width:fit-content">
                                  {{ $divisi['Akademik']->count()  }}
                                </span>
                                &nbsp;pendaftar
                            </h1>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="pti"
                            role="tabpanel"
                            aria-labelledby="pti-tab"
                        >
                            <h1 class="mt-4 d-flex">
                                <span class="border border-primary rounded-circle bg-primary text-white px-3 d-flex justify-content-center align-item-center" style="width:fit-content">
                                  {{ $divisi['PTI']->count()  }}
                                </span>
                                &nbsp;pendaftar
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="secondTabContent">
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'Inti' || Auth::user()->divisi === 'Admin' ? 'show active' : '' }}"
                            id="semua"
                            role="tabpanel"
                            aria-labelledby="semua-tab"
                        >
                            <table
                                class="table table-striped"
                                id="tableSemua"
                                style="width: 100%"
                            >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Domisili</th>
                                        <th>LINE</th>
                                        <th>IG</th>
                                        <th>Pil 1</th>
                                        <th>Pil 2</th>
                                        <th>Profil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($divisi['Semua'] as $row => $col)
                                      <tr>
                                          <td>{{ $row+1 }}</td>
                                          <td>{{ $col['nama'] }}</td>
                                          <td>{{ $col['domisili'] }}</td>
                                          <td>
                                              <a href="https://line.me/ti/p/{{ $col['idline'] }}" target="_blank">{{ $col['idline'] }}</a>
                                          </td>
                                          <td>
                                            <a href="https://instagram.com/{{ $col['instagram'] }}" target="_blank">{{ $col['instagram'] }}</a>  
                                          </td>
                                          <td>{{ $col['pil1'] }}</td>
                                          <td>{{ $col['pil2'] }}</td>
                                          <td>
                                              <a href="{{ route('profil', $col['id']) }}">
                                                <button
                                                  class="btn btn-primary btn-floating"
                                                  style="font-size: 0.9rem"
                                                >
                                                  Lihat
                                                </button>
                                              </a>
                                          </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'Bistra' ? 'show active' : '' }}"
                            id="bistra"
                            role="tabpanel"
                            aria-labelledby="bistra-tab"
                        >
                            <table
                                class="table table-striped"
                                id="tableBistra"
                                style="width: 100%"
                            >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Domisili</th>
                                        <th>LINE</th>
                                        <th>IG</th>
                                        <th>Pil 1</th>
                                        <th>Pil 2</th>
                                        <th>Profil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($divisi['Bistra'] as $row => $col)
                                      <tr>
                                          <td>{{ $row+1 }}</td>
                                          <td>{{ $col['nama'] }}</td>
                                          <td>{{ $col['domisili'] }}</td>
                                          <td>
                                              <a href="https://line.me/ti/p/{{ $col['idline'] }}" target="_blank">{{ $col['idline'] }}</a>
                                          </td>
                                          <td>
                                            <a href="https://instagram.com/{{ $col['instagram'] }}" target="_blank">{{ $col['instagram'] }}</a>  
                                          </td>
                                          <td>{{ $col['pil1'] }}</td>
                                          <td>{{ $col['pil2'] }}</td>
                                          <td>
                                              <a href="{{ route('profil', $col['id']) }}">
                                                <button
                                                  class="btn btn-primary btn-floating"
                                                  style="font-size: 0.9rem"
                                                >
                                                  Lihat
                                                </button>
                                              </a>
                                          </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'Medinfo' ? 'show active' : '' }}"
                            id="humas"
                            role="tabpanel"
                            aria-labelledby="humas-tab"
                        >
                            <table
                                class="table table-striped"
                                id="tableHumas"
                                style="width: 100%"
                            >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Domisili</th>
                                        <th>LINE</th>
                                        <th>IG</th>
                                        <th>Pil 1</th>
                                        <th>Pil 2</th>
                                        <th>Profil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($divisi['Humas'] as $row => $col)
                                      <tr>
                                          <td>{{ $row+1 }}</td>
                                          <td>{{ $col['nama'] }}</td>
                                          <td>{{ $col['domisili'] }}</td>
                                          <td>
                                              <a href="https://line.me/ti/p/{{ $col['idline'] }}" target="_blank">{{ $col['idline'] }}</a>
                                          </td>
                                          <td>
                                            <a href="https://instagram.com/{{ $col['instagram'] }}" target="_blank">{{ $col['instagram'] }}</a>  
                                          </td>
                                          <td>{{ $col['pil1'] }}</td>
                                          <td>{{ $col['pil2'] }}</td>
                                          <td>
                                              <a href="{{ route('profil', $col['id']) }}">
                                                <button
                                                  class="btn btn-primary btn-floating"
                                                  style="font-size: 0.9rem"
                                                >
                                                  Lihat
                                                </button>
                                              </a>
                                          </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="mulmed"
                            role="tabpanel"
                            aria-labelledby="mulmed-tab"
                        >
                            <table
                                class="table table-striped"
                                id="tableMulmed"
                                style="width: 100%"
                            >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Domisili</th>
                                        <th>LINE</th>
                                        <th>IG</th>
                                        <th>Pil 1</th>
                                        <th>Pil 2</th>
                                        <th>Profil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($divisi['Mulmed'] as $row => $col)
                                      <tr>
                                          <td>{{ $row+1 }}</td>
                                          <td>{{ $col['nama'] }}</td>
                                          <td>{{ $col['domisili'] }}</td>
                                          <td>
                                              <a href="https://line.me/ti/p/{{ $col['idline'] }}" target="_blank">{{ $col['idline'] }}</a>
                                          </td>
                                          <td>
                                            <a href="https://instagram.com/{{ $col['instagram'] }}" target="_blank">{{ $col['instagram'] }}</a>  
                                          </td>
                                          <td>{{ $col['pil1'] }}</td>
                                          <td>{{ $col['pil2'] }}</td>
                                          <td>
                                              <a href="{{ route('profil', $col['id']) }}">
                                                <button
                                                  class="btn btn-primary btn-floating"
                                                  style="font-size: 0.9rem"
                                                >
                                                  Lihat
                                                </button>
                                              </a>
                                          </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'Kastrad' ? 'show active' : '' }}"
                            id="kastrad"
                            role="tabpanel"
                            aria-labelledby="kastrad-tab"
                        >
                            <table
                                class="table table-striped"
                                id="tableKastrad"
                                style="width: 100%"
                            >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Domisili</th>
                                        <th>LINE</th>
                                        <th>IG</th>
                                        <th>Pil 1</th>
                                        <th>Pil 2</th>
                                        <th>Profil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($divisi['Kastrad'] as $row => $col)
                                      <tr>
                                          <td>{{ $row+1 }}</td>
                                          <td>{{ $col['nama'] }}</td>
                                          <td>{{ $col['domisili'] }}</td>
                                          <td>
                                              <a href="https://line.me/ti/p/{{ $col['idline'] }}" target="_blank">{{ $col['idline'] }}</a>
                                          </td>
                                          <td>
                                            <a href="https://instagram.com/{{ $col['instagram'] }}" target="_blank">{{ $col['instagram'] }}</a>  
                                          </td>
                                          <td>{{ $col['pil1'] }}</td>
                                          <td>{{ $col['pil2'] }}</td>
                                          <td>
                                              <a href="{{ route('profil', $col['id']) }}">
                                                <button
                                                  class="btn btn-primary btn-floating"
                                                  style="font-size: 0.9rem"
                                                >
                                                  Lihat
                                                </button>
                                              </a>
                                          </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'Kestari' ? 'show active' : '' }}"
                            id="kestari"
                            role="tabpanel"
                            aria-labelledby="kestari-tab"
                        >
                            <table
                                class="table table-striped"
                                id="tableKestari"
                                style="width: 100%"
                            >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Domisili</th>
                                        <th>LINE</th>
                                        <th>IG</th>
                                        <th>Pil 1</th>
                                        <th>Pil 2</th>
                                        <th>Profil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($divisi['Kestari'] as $row => $col)
                                      <tr>
                                          <td>{{ $row+1 }}</td>
                                          <td>{{ $col['nama'] }}</td>
                                          <td>{{ $col['domisili'] }}</td>
                                          <td>
                                              <a href="https://line.me/ti/p/{{ $col['idline'] }}" target="_blank">{{ $col['idline'] }}</a>
                                          </td>
                                          <td>
                                            <a href="https://instagram.com/{{ $col['instagram'] }}" target="_blank">{{ $col['instagram'] }}</a>  
                                          </td>
                                          <td>{{ $col['pil1'] }}</td>
                                          <td>{{ $col['pil2'] }}</td>
                                          <td>
                                              <a href="{{ route('profil', $col['id']) }}">
                                                <button
                                                  class="btn btn-primary btn-floating"
                                                  style="font-size: 0.9rem"
                                                >
                                                  Lihat
                                                </button>
                                              </a>
                                          </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'PMB' ? 'show active' : '' }}"
                            id="seni"
                            role="tabpanel"
                            aria-labelledby="seni-tab"
                        >
                            <table
                                class="table table-striped"
                                id="tableSeni"
                                style="width: 100%"
                            >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Domisili</th>
                                        <th>LINE</th>
                                        <th>IG</th>
                                        <th>Pil 1</th>
                                        <th>Pil 2</th>
                                        <th>Profil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($divisi['Seni'] as $row => $col)
                                      <tr>
                                          <td>{{ $row+1 }}</td>
                                          <td>{{ $col['nama'] }}</td>
                                          <td>{{ $col['domisili'] }}</td>
                                          <td>
                                              <a href="https://line.me/ti/p/{{ $col['idline'] }}" target="_blank">{{ $col['idline'] }}</a>
                                          </td>
                                          <td>
                                            <a href="https://instagram.com/{{ $col['instagram'] }}" target="_blank">{{ $col['instagram'] }}</a>  
                                          </td>
                                          <td>{{ $col['pil1'] }}</td>
                                          <td>{{ $col['pil2'] }}</td>
                                          <td>
                                              <a href="{{ route('profil', $col['id']) }}">
                                                <button
                                                  class="btn btn-primary btn-floating"
                                                  style="font-size: 0.9rem"
                                                >
                                                  Lihat
                                                </button>
                                              </a>
                                          </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="olahraga"
                            role="tabpanel"
                            aria-labelledby="olahraga-tab"
                        >
                            <table
                                class="table table-striped"
                                id="tableOlahraga"
                                style="width: 100%"
                            >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Domisili</th>
                                        <th>LINE</th>
                                        <th>IG</th>
                                        <th>Pil 1</th>
                                        <th>Pil 2</th>
                                        <th>Profil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($divisi['Olahraga'] as $row => $col)
                                      <tr>
                                          <td>{{ $row+1 }}</td>
                                          <td>{{ $col['nama'] }}</td>
                                          <td>{{ $col['domisili'] }}</td>
                                          <td>
                                              <a href="https://line.me/ti/p/{{ $col['idline'] }}" target="_blank">{{ $col['idline'] }}</a>
                                          </td>
                                          <td>
                                            <a href="https://instagram.com/{{ $col['instagram'] }}" target="_blank">{{ $col['instagram'] }}</a>  
                                          </td>
                                          <td>{{ $col['pil1'] }}</td>
                                          <td>{{ $col['pil2'] }}</td>
                                          <td>
                                              <a href="{{ route('profil', $col['id']) }}">
                                                <button
                                                  class="btn btn-primary btn-floating"
                                                  style="font-size: 0.9rem"
                                                >
                                                  Lihat
                                                </button>
                                              </a>
                                          </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'PSDM' ? 'show active' : '' }}"
                            id="psdm"
                            role="tabpanel"
                            aria-labelledby="psdm-tab"
                        >
                            <table
                                class="table table-striped"
                                id="tablePSDM"
                                style="width: 100%"
                            >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Domisili</th>
                                        <th>LINE</th>
                                        <th>IG</th>
                                        <th>Pil 1</th>
                                        <th>Pil 2</th>
                                        <th>Profil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($divisi['PSDM'] as $row => $col)
                                      <tr>
                                          <td>{{ $row+1 }}</td>
                                          <td>{{ $col['nama'] }}</td>
                                          <td>{{ $col['domisili'] }}</td>
                                          <td>
                                              <a href="https://line.me/ti/p/{{ $col['idline'] }}" target="_blank">{{ $col['idline'] }}</a>
                                          </td>
                                          <td>
                                            <a href="https://instagram.com/{{ $col['instagram'] }}" target="_blank">{{ $col['instagram'] }}</a>  
                                          </td>
                                          <td>{{ $col['pil1'] }}</td>
                                          <td>{{ $col['pil2'] }}</td>
                                          <td>
                                              <a href="{{ route('profil', $col['id']) }}">
                                                <button
                                                  class="btn btn-primary btn-floating"
                                                  style="font-size: 0.9rem"
                                                >
                                                  Lihat
                                                </button>
                                              </a>
                                          </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="tab-pane fade {{ Auth::user()->divisi === 'Ristek' ? 'show active' : '' }}"
                            id="akademik"
                            role="tabpanel"
                            aria-labelledby="akademik-tab"
                        >
                            <table
                                class="table table-striped"
                                id="tableAkademik"
                                style="width: 100%"
                            >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Domisili</th>
                                        <th>LINE</th>
                                        <th>IG</th>
                                        <th>Pil 1</th>
                                        <th>Pil 2</th>
                                        <th>Profil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($divisi['Akademik'] as $row => $col)
                                      <tr>
                                          <td>{{ $row+1 }}</td>
                                          <td>{{ $col['nama'] }}</td>
                                          <td>{{ $col['domisili'] }}</td>
                                          <td>
                                              <a href="https://line.me/ti/p/{{ $col['idline'] }}" target="_blank">{{ $col['idline'] }}</a>
                                          </td>
                                          <td>
                                            <a href="https://instagram.com/{{ $col['instagram'] }}" target="_blank">{{ $col['instagram'] }}</a>  
                                          </td>
                                          <td>{{ $col['pil1'] }}</td>
                                          <td>{{ $col['pil2'] }}</td>
                                          <td>
                                              <a href="{{ route('profil', $col['id']) }}"">
                                                <button
                                                  class="btn btn-primary btn-floating"
                                                  style="font-size: 0.9rem"
                                                >
                                                  Lihat
                                                </button>
                                              </a>
                                          </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="pti"
                            role="tabpanel"
                            aria-labelledby="pti-tab"
                        >
                            <table
                                class="table table-striped"
                                id="tablePTI"
                                style="width: 100%"
                            >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Domisili</th>
                                        <th>LINE</th>
                                        <th>IG</th>
                                        <th>Pil 1</th>
                                        <th>Pil 2</th>
                                        <th>Profil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($divisi['PTI'] as $row => $col)
                                      <tr>
                                          <td>{{ $row+1 }}</td>
                                          <td>{{ $col['nama'] }}</td>
                                          <td>{{ $col['domisili'] }}</td>
                                          <td>
                                              <a href="https://line.me/ti/p/{{ $col['idline'] }}" target="_blank">{{ $col['idline'] }}</a>
                                          </td>
                                          <td>
                                            <a href="https://instagram.com/{{ $col['instagram'] }}" target="_blank">{{ $col['instagram'] }}</a>  
                                          </td>
                                          <td>{{ $col['pil1'] }}</td>
                                          <td>{{ $col['pil2'] }}</td>
                                          <td>
                                              <a href="{{ route('profil', $col['id']) }}">
                                                <button
                                                  class="btn btn-primary btn-floating"
                                                  style="font-size: 0.9rem"
                                                >
                                                  Lihat
                                                </button>
                                              </a>
                                          </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection