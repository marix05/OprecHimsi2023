@extends('template/web')

@section('index')

<style>
  @media (min-width: 996px) {
      .regis__registre {
          width: 700px;
      }
  }
</style>

<div class="registrasi">
    <div class="regis__content py-5">
        <div class="regis__forms">
            <div class="regis__registre">
                <img
                    src="{{ url('img/himsi-unsri.png') }}"
                    alt=""
                    width="180px;"
                    style="margin: auto; display: block"
                />
                
                <br />

                <h1 class="regis__title fw-bold fs-2 mb-2">
                    Frequently Asked Question
                </h1>
                <center style="font-size: 1rem; font-weight: 500">
                    Open Recruitement HIMSI UNSRI 2023
                </center>
                
                <br />
                <hr />
                <br />

                <div class="please-read">
                    <div
                        class="alert alert-primary text-center text-primary fw-bold"
                        role="alert"
                    >
                        YUK DIBACA!!!
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button
                                class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseOne"
                                aria-expanded="true"
                                aria-controls="collapseOne"
                            >
                                Saat mendaftar bolehkah hanya memilih 1 dinas
                                saja?
                            </button>
                        </h2>
                        <div
                            id="collapseOne"
                            class="accordion-collapse collapse show"
                            aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >Saat mendaftar bolehkah hanya memilih 1
                                    dinas saja?</strong
                                >
                                Saat mendaftar nanti diwajibkan untuk memilih 2
                                dinas yaa.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                            >
                                Untuk Divisi PTI apakah harus jago ngoding?
                            </button>
                        </h2>
                        <div
                            id="collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >Untuk Divisi PTI apakah harus jago
                                    ngoding?</strong
                                >
                                Tentu tidak, tetapi minimal memiliki pengetahuan serta kemampuan dasar dalam membuat website sederhana dengan penggunaan HTML, CSS, dan JavaScript. Yang pastinya jika tergabung di divisi PTI akan selalu dibimbing untuk terus belajar dan berkembang.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree"
                            >
                                Untuk pas foto apakah harus formal atau non
                                formal?
                            </button>
                        </h2>
                        <div
                            id="collapseThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >Untuk pas foto apakah harus formal atau non
                                    formal?</strong
                                >
                                Harus formal, boleh pakai foto SMA, boleh juga
                                pakai foto almet.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFour"
                                aria-expanded="false"
                                aria-controls="collapseFour"
                            >
                                Apakah harus mempunyai pengalaman organisasi?
                            </button>
                        </h2>
                        <div
                            id="collapseFour"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >Apakah harus mempunyai pengalaman
                                    organisasi?</strong
                                >
                                Tidak harus, karena di himsi kita dapat
                                mengembangkan potensi diri kita, yang penting
                                kita mau untuk belajar.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFive"
                                aria-expanded="false"
                                aria-controls="collapseFive"
                            >
                                Apakah boleh daftar himsi kalau sudah ada
                                organisasi BO di fasilkom/unsri?
                            </button>
                        </h2>
                        <div
                            id="collapseFive"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >Apakah boleh daftar himsi kalau sudah ada
                                    organisasi BO di fasilkom/unsri?</strong
                                >
                                Jelas boleh dong✨, yang penting bisa membagi
                                waktu antara himsi dan organisasi yang lain.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseSix"
                                aria-expanded="false"
                                aria-controls="collapseSix"
                            >
                                Apakah boleh mencoba daftar lebih dari satu organisasi eksekutif internal fasikom?
                            </button>
                        </h2>
                        <div
                            id="collapseSix"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >Apakah boleh mencoba daftar lebih dari satu organisasi eksekutif internal fasikom?</strong
                                >
                                Mahasiswa diperbolehkan mengikuti open recruitment lebih dari satu organisasi eksekutif
                                internal fasilkom unsri dengan syarat hanya diterima di salah satu organisasi.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven"
                                aria-expanded="false"
                                aria-controls="collapseSeven"
                            >
                                Apa saja persyaratan untuk mendaftar himsi?
                            </button>
                        </h2>
                        <div
                            id="collapseSeven"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >Apa saja persyaratan untuk mendaftar
                                    himsi?</strong
                                >
                                <br />
                                <ol>
                                    <li>
                                        Mahasiswa Aktif SI UNSRI angkatan 2021
                                        dan 2022
                                    </li>
                                    <li>
                                        Mengisi Formulir Pendaftaran pada web
                                    </li>
                                    <li>
                                        Mengumpulkan foto ukuran 3x4(bebas) dan
                                        KHS semester ganjil tahun ajaran 2022/2023
                                    </li>
                                    <li>Membuat tugas yang diberikan dinas</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseEight"
                                aria-expanded="false"
                                aria-controls="collapseEight"
                            >
                                Apakah kartu KHS harus sudah ditandatangani?
                            </button>
                        </h2>
                        <div
                            id="collapseEight"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >Apakah kartu KHS harus sudah
                                    ditandatangani?</strong
                                >
                                Tidak masalah jika belum ditandatangani. Karena
                                KHS berbeda dengan KRS yang harus di tanda
                                tangani setiap kenaikan semester.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseNine"
                                aria-expanded="false"
                                aria-controls="collapseNine"
                            >
                                Apakah wajib untuk mengerjakan tugas dinas yang
                                telah dipilih?
                            </button>
                        </h2>
                        <div
                            id="collapseNine"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >Apakah wajib untuk mengerjakan tugas dinas
                                    yang telah dipilih?</strong
                                >
                                Wajib ya,maka dari itu harus dikerjakanlah tugas
                                yang telah diberikan oleh dinasnya.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTen"
                                aria-expanded="false"
                                aria-controls="collapseTen"
                            >
                                Apakah untuk masuk dinas medinfo khususnya
                                divisi multimedia harus memiliki kamera ?
                            </button>
                        </h2>
                        <div
                            id="collapseTen"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >Apakah untuk masuk dinas medinfo khususnya
                                    divisi multimedia harus memiliki kamera
                                    ?</strong
                                >
                                Tentunya tidak harus memiliki kamera, tetapi jika memang memiliki kamera dan ingin digunakan untuk dokumentasi kegiatan HIMSI sangat diperbolehkan.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseEleven"
                                aria-expanded="false"
                                aria-controls="collapseEleven"
                            >
                                Apakah harus memiliki latar belakang sekretaris
                                untuk bisa mendaftar di dinas kestari ?
                            </button>
                        </h2>
                        <div
                            id="collapseEleven"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >Apakah harus memiliki latar belakang
                                    sekretaris untuk bisa mendaftar di dinas
                                    kestari ?</strong
                                >
                                Tidak harus memiliki latar belakang seorang
                                sekretaris buat daftar di dinas kestari, yang
                                penting memiliki kemauan dan keinginan untuk
                                belajar dan berkembang dibidang kesekretariatan.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwelve"
                                aria-expanded="false"
                                aria-controls="collapseTwelve"
                            >
                                Apa yang harus dilakukan jika berhalangan hadir pada tes wawancara oprec nanti?
                            </button>
                        </h2>
                        <div
                            id="collapseTwelve"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >Apa yang harus dilakukan jika berhalangan hadir pada tes wawancara oprec nanti?</strong
                                >
                                Jika berhalangan hadir pada tes wawancara harap segera melapor ke pihak panitia dan tentu nantinya akan dibantu untuk melakukan wawancara susulan.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseThrteen"
                                aria-expanded="false"
                                aria-controls="collapseThrteen"
                            >
                                Apakah harus memiliki bisnis/usaha untuk bisa
                                mendaftar di dinas bistra ?
                            </button>
                        </h2>
                        <div
                            id="collapseThrteen"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <strong
                                    >Apakah harus memiliki bisnis/usaha untuk
                                    bisa mendaftar di dinas bistra ?</strong
                                >
                                Tentu tidak. Yang terpenting memiliki keinginan untuk belajar serta mengembangkan kemampuan dalam hal bisnis dan kemitraan.
                            </div>
                        </div>
                    </div>
                </div>

                <a
                      href="https://drive.google.com/drive/folders/11hhrGnxN3iQZPc8OZQNd87YP-y5toqfU"
                      class="regis__button text-white mb-3 mt-3"
                      style="text-decoration: none"
                      target="_blank"
                  >
                      CARI TAHU TENTANG HIMSI YUK!!</a
                  >

                {{-- <button
                    type="button"
                    class="regis__button text-white mb-3 mt-3"
                    data-bs-toggle="modal"
                    data-bs-target="#tugas"
                >
                    LIHAT TUGAS DINAS/DIVISI
                </button> --}}

                <button
                      type="button"
                      class="regis__button text-white mb-3 mt-3"
                      data-bs-toggle="modal"
                      data-bs-target="#admin"
                  >
                      INGIN BERTANYA? HUBUNGI ADMIN
                </button>

                {{-- <!-- Modal -->
                <div
                    class="modal fade"
                    id="tugas"
                    tabindex="-1"
                    aria-labelledby="tugas"
                    aria-hidden="true"
                >
                    <div class="modal-dialog">
                        <div class="modal-content container-md">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tugas">
                                    List Tugas Dinas/Divisi
                                </h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                      
                            <div
                                class="modal-body"
                                style="
                                    text-align: left;
                                    font-size: 0.938rem !important;
                                "
                            >
                                <h3 class="fs-5 fw-bolder">
                                    <i class="bx bx-paper-plane"></i> SEMUA
                                    PESERTA
                                </h3>
                                <p>
                                    Mem-follow IG HIMSI UNSRI yaitu
                                    <a
                                        href="https://www.instagram.com/himsiunsri"
                                        target="_blank"
                                        >@himsiunsri</a
                                    >.
                                </p>
                      
                                <hr />
                      
                                <h3 class="fs-5 fw-bolder">
                                    <i class="bx bx-paper-plane"></i> DINAS
                                    BISTRA
                                </h3>
                                <p>
                                    Mem-follow IG BISTRA HIMSI UNSRI yaitu
                                    <a
                                        href="https://www.instagram.com/himsi.store"
                                        target="_blank"
                                        >@himsi.store</a
                                    >.
                                </p>
                      
                                <hr />
                      
                                <h3 class="fs-5 fw-bolder">
                                    <i class="bx bx-paper-plane"></i> DINAS
                                    MEDINFO (DIVISI MULMED)
                                </h3>
                                <p>
                                    Membuat Design Poster ukuran A4. Opsional : mengirimkan 1 video biasa / video
                                    animasi terbaik yang pernah dibuat.
                                </p>
                                <ul>
                                    <li>
                                        Design poster dibuat dengan memilih salah satu tema berikut :
                                        <ul>
                                            <li>Teknologi di era society 5.0</li>
                                            <li>Nusantara</li>
                                        </ul>
                                    </li>
                                    <li>
                                        Design Poster juga wajib dibuat menggunakan salah satu konsep desain
                                        berikut :
                                        <ul>
                                            <li>Glassmorphism/Abstract Gradients</li>
                                            <li>Retro/Vintage</li>
                                            <li>Futuristic</li>
                                        </ul>
                                    </li>
                                    <li>*File di simpan dengan format nama <br> (ex: Nama_Video & Nama_Poster).</li>
                                </ul>

                                <hr />
                      
                                <h3 class="fs-5 fw-bolder">
                                    <i class="bx bx-paper-plane"></i> DINAS
                                    KESTARI
                                </h3>
                                <p>Membuat sebuah proposal dengan tema kegiatan webinar atau lomba.</p>
                                <ul>
                                    <li>
                                        Proposal dapat dibuat menggunakan data yang tersedia atau data kalian
                                        sendiri.
                                    </li>
                                    <li>Menggunakan template design yang tersedia akan lebih bagus (Opsional).</li>
                                    <li>
                                        Data dan template yang tersedia, serta tata cara pembuatan proposal dapat dilihat 
                                        <a href="https://drive.google.com/drive/folders/1s84g8UJsLiTb6hvXPYGwvYsmaRLov382?usp=share_link" target="_blank"> disini</a>
                                    </li>
                                    <li>Proposal dibuat dalam bentuk/format PDF (.pdf).</li>
                                </ul>

                                <hr />
                      
                                <h3 class="fs-5 fw-bolder">
                                    <i class="bx bx-paper-plane"></i> DINAS PMB
                                    (DIVISI OLAHRAGA DAN SENI)
                                </h3>
                                <p>
                                    Mem-follow IG PMB HIMSI UNSRI yaitu
                                    <a
                                        href="https://www.instagram.com/himsi.pmb"
                                        target="_blank"
                                        >@himsi.pmb</a
                                    >.
                                </p>

                                <p><b>Khusus PMB Seni :</b></p>
                                <ul>
                                    <li>
                                        Membuat video penampilan bakat seni (Seperti: menyanyi, menari, melukis, dll)
                                        dengan durasi minimal 1 menit.
                                    </li>
                                </ul>

                                <hr />
                      
                                <h3 class="fs-5 fw-bolder">
                                    <i class="bx bx-paper-plane"></i> DINAS
                                    RISTEK (DIVISI AKADEMIK)
                                </h3>
                                <ul>
                                    <p>
                                        Mencari kontak dosen jurusan Sistem Informasi sebanyak-banyaknya dan dikumpulkan pada
                                        saat melakukan wawancara dalam bentuk hardcopy.
                                    </p>
                                </ul>
                      
                                <hr />
                      
                                <h3 class="fs-5 fw-bolder">
                                    <i class="bx bx-paper-plane"></i> DINAS
                                    RISTEK (DIVISI PTI)
                                </h3>
                                <p>
                                    Membuat website sesuai dengan kreatifitas anda dengan beberapa ketentuan
                                    sebagai berikut :
                                </p>
                                <ul>
                                    <li>Tanpa menggunakan CSS framework.</li>
                                    <li>
                                        Penggunaan library javaScript untuk menunjang tampilan website
                                        diperbolehkan.
                                    </li>
                                    <li>
                                        Website dilengkapi dengan fitur CRUD sederhana (Opsional).
                                    </li>
                                    <li>
                                        Struktur folder file yang tertata dengan rapi akan menjadi nilai tambah.
                                    </li>
                                    <li>
                                        Bentuk/format file yang akan di-upload adalah file kompres (.zip/.rar).
                                    </li>
                                </ul>

                            </div>
                      
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal --> --}}

                <!-- Modal -->
                  <div
                      class="modal fade"
                      id="admin"
                      tabindex="-1"
                      aria-labelledby="admin"
                      aria-hidden="true"
                  >
                      <div class="modal-dialog">
                          <div class="modal-content container-md">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="admin">
                                      Admin
                                  </h5>
                                  <button
                                      type="button"
                                      class="btn-close"
                                      data-bs-dismiss="modal"
                                      aria-label="Close"
                                  ></button>
                              </div>
  
                              <div
                                  class="modal-body"
                                  style="
                                      text-align: left;
                                      font-size: 0.938rem !important;
                                  "
                              >
                                  <center>
                                      <p>
                                          Klik atau scan barcode di bawah ini untuk menghubungi Rido via Line
                                      </p>
                                      <a
                                          href="https://line.me/ti/p/kj-XbWr6yh"
                                          target="_blank"
                                      >
                                          <img
                                              border="0"
                                              src="{{ url('img/admin_barcode.jpg') }}"
                                              width="170"
                                              height="170"
                                      /></a>
                                      
                                      <hr>

                                      <a href="https://wa.me/6281377981897" target="_blank">
                                        <p>
                                            Hubungi Kintan via WhatsApp
                                        </p>
                                      </a>
                                    </center>
                              </div>
  
                              <div class="modal-footer">
                                  <button
                                      type="button"
                                      class="btn btn-secondary"
                                      data-bs-dismiss="modal"
                                  >
                                      Close
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Modal -->

                  <center>
                      <div class="form-footer" style="margin-top: 4rem">
                          <p style="color: black">
                              Created by
                              <a href="#"> Dinas RISTEK - Divisi PTI</a>
                          </p>
                      </div>
                  </center>
            </div>
        </div>
    </div>
</div>


@endsection