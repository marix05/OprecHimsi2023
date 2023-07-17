@extends('template/admin')

@section('index')

<!-- main -->
<div class="content-wrapper container">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Profile</h3>
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
                            Profile
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <br />
    <section class="section">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <a
                                href="{{ url('khs/'.$user->khs) }}"
                                class="btn btn-primary"
                                target="_blank"
                                >Unduh KHS</a
                            >
                            <a
                                href="{{ url('bukti_ss/'.$user->bukti_ss) }}"
                                class="btn btn-primary"
                                target="_blank"
                                >Lihat Bukti Follow</a
                            >
                        </center>
                        <br />
                        <img
                            src="{{ url('foto/'.$user->foto) }}"
                            class="rounded-circle img-thumbnail"
                            alt="profile-image"
                        />
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a
                                    class="nav-link active"
                                    id="about-tab"
                                    data-bs-toggle="tab"
                                    href="#about"
                                    role="tab"
                                    aria-controls="about"
                                    aria-selected="true"
                                    >Tentang</a
                                >
                            </li>
                            <li class="nav-item" role="presentation">
                                <a
                                    class="nav-link"
                                    id="pil1-tab"
                                    data-bs-toggle="tab"
                                    href="#pil1"
                                    role="tab"
                                    aria-controls="pil1"
                                    aria-selected="false"
                                    >Pilihan 1</a
                                >
                            </li>
                            <li class="nav-item" role="presentation">
                                <a
                                    class="nav-link"
                                    id="pil2-tab"
                                    data-bs-toggle="tab"
                                    href="#pil2"
                                    role="tab"
                                    aria-controls="pil2"
                                    aria-selected="false"
                                    >Pilihan 2</a
                                >
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div
                                class="tab-pane fade show active"
                                id="about"
                                role="tabpanel"
                                aria-labelledby="about-tab"
                            >
                                <p class="mt-4">
                                    <b>Nama : </b>
                                    {{ $user->nama }}
                                    <br />
                                    <b>NIM : </b>
                                    {{ $user->nim }}
                                    <br />
                                    <b>Kelas : </b>
                                    {{ $user->kelas }}
                                    <br />
                                    <b>Tanggal Lahir: </b>
                                    {{ $user->tgl_lahir }}
                                    <br /><br />
                                    <b>Deskripsi: </b> <br />
                                    {{ $user->tentang }}
                                </p>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="pil1"
                                role="tabpanel"
                                aria-labelledby="pil1-tab"
                            >
                                <p class="mt-4">
                                    <b>Dinas/Divisi: </b>
                                    {{ $user->pil1 }}
                                    <br />
                                    <b>Alasan: </b> <br />
                                    {{ $user->alasan1 }}
                                </p>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="pil2"
                                role="tabpanel"
                                aria-labelledby="pil2-tab"
                            >
                                <p class="mt-4">
                                    <b>Dinas/Divisi: </b>
                                    {{ $user->pil2 }}
                                    <br />
                                    <b>Alasan: </b> <br />
                                    {{ $user->alasan2 }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection