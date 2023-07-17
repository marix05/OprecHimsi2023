@extends('template/web')

@section('index')

<div id="infoRegist">
  <div class="registrasi">
      <div class="regis__content py-5">
          <div class="regis__forms">
              <div class="regis__registre">
                  <img
                      src="{{ url('img/himsi-unsri.png') }}"
                      alt=""
                      width="180px;"
                      style="margin: auto; display: block"
                  /><br />

                  <h1 class="regis__title fw-bold fs-2 mb-2">TERIMA KASIH</h1>
                  <center style="font-size: 1rem; font-weight: 500">
                      Berkas kamu telah diterima. Harap hubungi admin jika terjadi
                      kesalahan.
                  </center>

                  <hr />
                  <br />

                  <div class="please-read">
                      <div
                          class="alert alert-danger text-center text-danger fw-bold"
                          role="alert"
                      >
                          HARAP UNTUK DIBACA!!!
                      </div>
                      <ol>
                          <li>
                              Peserta diwajibkan untuk bergabung di grup LINE.
                          </li>
                          <li>
                              Peserta diwajibkan untuk membuat tugas sesuai
                              dinas/divisi pilihannya (jika ada).
                          </li>
                          <li>
                              Peserta diwajibkan untuk memasang twibbon dan
                              mempostingnya ke akun Instagram-nya masing-masing.
                          </li>
                          <li>
                              Peserta yang berdomisili di Kota Palembang
                              <b>diwajibkan</b> mengikuti tes wawancara secara
                              offline, jika berhalangan silakan hubungi admin atau
                              contact person.
                          </li>
                      </ol>
                      <p
                          style="
                              color: red;
                              font-size: 12px;
                              letter-spacing: 2px;
                              margin-top: -5px;
                              margin-left: 15px;
                          "
                      >
                          ** Lakukan login apabila ingin mengakses laman ini kembali
                      </p>
                  </div>

                  <!-- Button trigger modal -->
                  <button
                      type="button"
                      class="regis__button text-white mb-3"
                      data-bs-toggle="modal"
                      data-bs-target="#grupLine"
                  >
                      JOIN GRUP LINE
                  </button>

                  <!-- Button trigger modal -->
                  <button
                      type="button"
                      class="regis__button text-white mb-3 mt-3"
                      data-bs-toggle="modal"
                      data-bs-target="#tugas"
                  >
                      LIHAT TUGAS DINAS/DIVISI
                  </button>

                  <a
                      href="https://drive.google.com/drive/folders/1PKLOYl5ViF9z5FlISbfzqyZQ8ofX0rsf"
                      class="regis__button text-white mb-3 mt-3"
                      style="text-decoration: none"
                      target="_blank"
                  >
                      DOWNLOAD TWIBBON</a
                  >

                  <button
                      type="button"
                      class="regis__button text-white mb-3 mt-3"
                      data-bs-toggle="modal"
                      data-bs-target="#admin"
                  >
                      HUBUNGI ADMIN
                  </button>

                  <!-- Modal -->
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
                                      Membuat Design Poster ukuran A4, serta mengirimkan portofolio design yang pernah dibuat. Opsional : mengirimkan 1 video biasa / video
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
                                      <li>*File di simpan dengan format nama <br> (ex: Nama_Video, Nama_Poster, Nama_Portofolio).</li>
                                  </ul>
                                  <p>
                                      <b
                                          >File di-upload ke folder GDrive yang
                                          telah disediakan (link di bawah ini) dengan membuat folder baru
                                          dengan format (Nama_Kelas).</b
                                      >
                                  </p>
                                  <i class="bx bx-link"></i>
                                  <a
                                      href="https://drive.google.com/folderview?id=159yLK2S_lIs8f9X0TiSIcASXxlW4tZYS"
                                      target="_blank"
                                      >Link Pengumpulan Tugas</a
                                  >

                                  <br />
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
                                  <p>
                                      <b
                                          >File di-upload ke folder GDrive yang
                                          telah disediakan (link di bawah ini) dengan membuat folder baru
                                          dengan format (Nama_Kelas).</b
                                      >
                                  </p>
                                  <i class="bx bx-link"></i>
                                  <a
                                      href="https://drive.google.com/drive/folders/1dH9ajE1VEl_bdEyQAuCOb2IEpK51KZON?usp=share_link"
                                      target="_blank"
                                      >Link Pengumpulan Tugas</a
                                  >

                                  <br />
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
                                          Membuat video penampilan bakat seni (Seperti menyanyi, menari, melukis, dll)
                                          dengan durasi minimal 1 menit.
                                      </li>
                                  </ul>
                                  <p>
                                      <b
                                          >File di-upload ke folder GDrive yang
                                          telah disediakan (link di bawah ini) dengan membuat folder baru
                                          dengan format (Nama_Kelas).</b
                                      >
                                  </p>
                                  <i class="bx bx-link"></i>
                                  <a
                                      href="https://drive.google.com/folderview?id=18ax_dDUYczkmZ0IdHv5OoH4gkLsixARD"
                                      target="_blank"
                                      >Link Pengumpulan Tugas</a
                                  >

                                  <br />
                                  <hr />

                                  <h3 class="fs-5 fw-bolder">
                                      <i class="bx bx-paper-plane"></i> DINAS
                                      RISTEK (DIVISI AKADEMIK)
                                  </h3>
                                  <p>
                                      Tugas akan dikumpulkan pada
                                      saat melakukan wawancara dalam bentuk hardcopy yang berisikan data sebagai berikut :
                                  </p>
                                  <ul>
                                      <li>Minimal 10 kontak dosen jurusan Sistem Informasi.</li>
                                      <li>Minimal 5 akun Instagram yang berisikan tentang informasi beasiswa dan lomba.</li>
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
                                  <p>
                                      <b
                                          >File di-upload ke folder GDrive yang
                                          telah disediakan (link di bawah ini) dengan membuat folder baru
                                          dengan format (Nama_Kelas).</b
                                      >
                                  </p>
                                  <i class="bx bx-link"></i>
                                  <a
                                      href="https://drive.google.com/drive/folders/1-3gz_e2wVn4M55KlFIrxsR-5NVRdbzB4"
                                      target="_blank"
                                      >Link Pengumpulan Tugas</a
                                  >
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

                  <!-- Modal -->
                  <div
                      class="modal fade"
                      id="grupLine"
                      tabindex="-1"
                      aria-labelledby="grupLine"
                      aria-hidden="true"
                  >
                      <div class="modal-dialog">
                          <div class="modal-content container-md">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="grupLine">
                                      Join Grup LINE
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
                                          Klik atau scan barcode di bawah ini buat
                                          join ke grup ya...
                                      </p>
                                      <a
                                          href="https://line.me/ti/g/1Ez5nHbF2M"
                                          target="_blank"
                                      >
                                          <img
                                              border="0"
                                              src="{{ url('img/barcode.jpg') }}"
                                              width="170"
                                              height="170"
                                      /></a>
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
                          <!--<button type="submit" class="button btn-primary block pushed expand"> LANJUTKAN </button> -->
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
</div>

<div id="pengumuman">
  @if (Auth::user()->lulus)

  <div class="registrasi">
      <div class="regis__content py-5">
          <div class="regis__forms">
              <form class="regis__registre">
                  <img
                      src="{{ url('img/himsi-unsri.png') }}"
                      alt=""
                      width="180px;"
                      style="margin: auto; display: block"
                  /><br /><br />
                  <h1 class="regis__title fw-bold">
                      PENGUMUMAN OPREC BPH HIMSI UNSRI 2023
                  </h1>
                  <hr />
                  <br />

                  <div
                      class="alert alert-success py-5"
                      style="text-align: justify"
                  >
                      <strong>Selamat!</strong> kamu telah diterima menjadi bagian
                      dari BPH HIMSI FASILKOM UNSRI 2023. <br /><br />
                      Kamu adalah yang terbaik diantara yang terbaik. <br /><br />
                      Terus berikan dan buktikan bahwa memang kamu layak dan
                      pantas untuk menjadi bagian dari BPH HIMSI FASILKOM UNSRI
                      2023. <br /><br />
                      Mari bersama membahu kita wujudkan visi misi kita.
                      <br /><br />
                      <strong>#BerintegrasiPenuhDedikasi</strong>
                  </div>

                  <br />
                  <div class="tagline"><span> Data Diri </span></div>
                  <br />

                  <div class="regis__box">
                      <i class="bx bxs-id-card regis__icon"></i>
                      <input
                          type="text"
                          placeholder="NIM"
                          name="nim"
                          class="regis__input"
                          value="{{ Auth::user()->nim }}"
                          style="text-transform: capitalize; font-weight:bold !important"
                          readonly
                      />
                  </div>
                  <br />

                  <div class="regis__box">
                      <i class="bx bxs-user regis__icon"></i>
                      <input
                          type="text"
                          placeholder="Nama"
                          name="nama"
                          class="regis__input"
                          value="{{ Auth::user()->nama }}"
                          style="text-transform: capitalize; font-weight:bold !important"
                          readonly
                      />
                  </div>

                  <br />
                  <div class="tagline"><span> Dinas/Divisi </span></div>
                  <br />

                  @if (Auth::user()->lulus === "Kastrad")
                    <div class="regis__box">
                        <i class="bx bxs-group regis__icon"></i>
                        <p
                            name="lulus"
                            class="regis__input"
                            style="text-transform: capitalize; font-weight:bold !important; margin:0"
                            readonly
                        >
                            Dinas KASTRAD (Kajian Strategi dan Advokasi)
                        </p>
                    </div>
                    <br />
                  @elseif (Auth::user()->lulus === "PSDM")
                    <div class="regis__box">
                        <i class="bx bxs-group regis__icon"></i>
                        <p
                            name="lulus"
                            class="regis__input"
                            style="text-transform: capitalize; font-weight:bold !important; margin:0"
                            readonly
                        >
                            Dinas PSDM (Pengembangan Sumber Daya Mahasiswa)
                        </p>
                    </div>
                    <br />
                  @elseif (Auth::user()->lulus === "Ristek_PTI")
                    <div class="regis__box">
                        <i class="bx bxs-group regis__icon"></i>
                        <p
                            name="lulus"
                            class="regis__input"
                            style="text-transform: capitalize; font-weight:bold !important; margin:0"
                            readonly
                        >
                            Dinas RISTEK (Riset dan Teknologi) - Divisi PTI
                            (Pengembangan Teknologi Informasi)
                        </p>
                    </div>
                    <br />
                  @elseif (Auth::user()->lulus === "Ristek_Akademik")
                    <div class="regis__box">
                        <i class="bx bxs-group regis__icon"></i>
                        <p
                            name="lulus"
                            class="regis__input"
                            style="text-transform: capitalize; font-weight:bold !important; margin:0"
                            readonly
                        >
                            Dinas RISTEK (Riset dan Teknologi) - Divisi Akademik
                        </p>
                    </div>
                    <br />
                  @elseif (Auth::user()->lulus === "Bistra")
                    <div class="regis__box">
                        <i class="bx bxs-group regis__icon"></i>
                        <p
                            name="lulus"
                            class="regis__input"
                            style="text-transform: capitalize; font-weight:bold !important; margin:0"
                            readonly
                        >
                            Dinas BISTRA (Bisnis dan Kemitraan)
                        </p>
                    </div>
                    <br />
                  @elseif (Auth::user()->lulus === "Kestari")
                    <div class="regis__box">
                        <i class="bx bxs-group regis__icon"></i>
                        <p
                            name="lulus"
                            class="regis__input"
                            style="text-transform: capitalize; font-weight:bold !important; margin:0"
                            readonly
                        >
                            Dinas KESTARI (Kesekretariatan)
                        </p>
                    </div>
                    <br />
                  @elseif (Auth::user()->lulus === "PMB_Seni")
                    <div class="regis__box">
                        <i class="bx bxs-group regis__icon"></i>
                        <p
                            name="lulus"
                            class="regis__input"
                            style="text-transform: capitalize; font-weight:bold !important; margin:0"
                            readonly
                        >
                            Dinas PMB (Pengembangan Minat Bakat) - Divisi Seni
                        </p>
                    </div>
                    <br />
                  @elseif (Auth::user()->lulus === "PMB_Olahraga")
                    <div class="regis__box">
                        <i class="bx bxs-group regis__icon"></i>
                        <p
                            name="lulus"
                            class="regis__input"
                            style="text-transform: capitalize; font-weight:bold !important; margin:0"
                            readonly
                        >
                            Dinas PMB (Pengembangan Minat Bakat) - Divisi Olahraga
                        </p>
                    </div>
                    <br />
                  @elseif (Auth::user()->lulus === "Medinfo_Humas")
                    <div class="regis__box">
                        <i class="bx bxs-group regis__icon"></i>
                        <p
                            name="lulus"
                            class="regis__input"
                            style="text-transform: capitalize; font-weight:bold !important; margin:0"
                            readonly
                        >
                            Dinas MEDINFO (Media dan Informasi) - Divisi HUMAS
                            (Hubungan Masyarakat)
                        </p>
                    </div>
                    <br />
                  @elseif (Auth::user()->lulus === "Medinfo_Mulmed")
                    <div class="regis__box">
                        <i class="bx bxs-group regis__icon"></i>
                        <p
                            name="lulus"
                            class="regis__input"
                            style="text-transform: capitalize; font-weight:bold !important; margin:0"
                            readonly
                        >
                            Dinas MEDINFO (Media dan Informasi) - Divisi MULMED
                            (Multimedia)
                        </p>
                    </div>
                    <br />
                  @endif

                  <!-- GRUP DINAS/DIVISI -->
                  <div class="alert alert-primary text-center">
                      Silakan join ke grup dinas masing-masing yaa!
                  </div>

                  <br />
                  <div class="tagline"><span> Join Grup Line </span></div>
                  <br />

                  <center>
                      @if (Auth::user()->lulus === "Kastrad")
                        <p>
                            <font color="#8C8C8C">Grup Dinas KASTRAD</font>
                        </p>
                        <a href="https://line.me/ti/g/O4MgoDUcN0">
                            <img
                                border="0"
                                src="{{ url('img/barcode/kastrad.jpg') }}"
                                width="170"
                                height="170"
                            />
                        </a>
                        <br />
                      @elseif (Auth::user()->lulus === "PSDM")
                        <p>
                            <font color="#8C8C8C">Grup Dinas PSDM</font>
                        </p>
                        <a href="https://line.me/ti/g/LFqDND38G4">
                            <img
                                border="0"
                                src="{{ url('img/barcode/psdm.jpg') }}"
                                width="170"
                                height="170"
                            />
                        </a>
                        <br />
                      @elseif (Auth::user()->lulus === "Ristek_PTI" || Auth::user()->lulus === "Ristek_Akademik")
                        <p>
                            <font color="#8C8C8C">Grup Dinas RISTEK</font>
                        </p>
                        <a href="http://line.me/ti/g/QIni1JY--V">
                            <img
                                border="0"
                                src="{{ url('img/barcode/ristek.jpg') }}"
                                width="170"
                                height="170"
                            />
                        </a>
                        <br />
                      @elseif (Auth::user()->lulus === "Bistra")
                        <p>
                            <font color="#8C8C8C">Grup Dinas BISTRA</font>
                        </p>
                        <a href="https://line.me/ti/g/hDc7efmjKC">
                            <img
                                border="0"
                                src="{{ url('img/barcode/bistra.jpg') }}"
                                width="170"
                                height="170"
                            />
                        </a>
                        <br />
                      @elseif (Auth::user()->lulus === "Kestari")
                        <p>
                            <font color="#8C8C8C">Grup Dinas KESTARI</font>
                        </p>
                        <a href="https://line.me/ti/g/oazIr9AYsh">
                            <img
                                border="0"
                                src="{{ url('img/barcode/kestari.jpg') }}"
                                width="170"
                                height="170"
                            />
                        </a>
                        <br />
                      @elseif (Auth::user()->lulus === "PMB_Seni" || Auth::user()->lulus === "PMB_Olahraga")
                        <p>
                            <font color="#8C8C8C">Grup Dinas PMB</font>
                        </p>
                        <a href="https://line.me/R/ti/g/c19p5-R40S">
                            <img
                                border="0"
                                src="{{ url('img/barcode/pmb.jpg') }}"
                                width="170"
                                height="170"
                            />
                        </a>
                        <br />
                      @elseif (Auth::user()->lulus === "Medinfo_Humas" || Auth::user()->lulus === "Medinfo_Mulmed")
                        <p>
                            <font color="#8C8C8C">Grup Dinas MEDINFO</font>
                        </p>
                        <a href="https://line.me/ti/g/Z4itoqDCDh">
                            <img
                                border="0"
                                src="{{ url('img/barcode/medinfo.jpg') }}"
                                width="170"
                                height="170"
                            />
                        </a>
                        <br />
                      @endif

                      <p>
                          <font color="#8C8C8C"
                              >Scan atau Klik QR Code di atas yaa!</font
                          >
                      </p>
                  </center>

                  <center>
                      <div class="form-footer" style="margin-top: 4rem">
                          <p style="color: black">
                              Created by
                              <a href="#"> Dinas RISTEK - Divisi PTI</a>
                          </p>
                      </div>
                  </center>
              </form>
          </div>
      </div>
  </div>

  @else

  <div class="registrasi">
      <div class="regis__content py-5">
          <div class="regis__forms">
              <form class="regis__registre">
                  <img
                      src="{{ url('img/himsi-unsri.png') }}"
                      alt=""
                      width="180px;"
                      style="margin: auto; display: block"
                  /><br /><br />

                  <h1 class="regis__title fw-bold">
                      PENGUMUMAN OPREC BPH HIMSI UNSRI 2023
                  </h1>
                  <hr />

                  <br />
                  <div
                      class="alert alert-danger py-5 px-3"
                      style="margin-bottom: 2rem; text-align: justify"
                  >
                      <p style="margin:0">
                          Hi, {{ Auth::user()->nama }} <br /><br />
                          Terima kasih telah mengikuti kegiatan OPREC BPH HIMSI
                          UNSRI 2023. <br /><br />
                          Mohon Maaf kamu belum diterima untuk menjadi bagian dari
                          BPH HIMSI FASILKOM UNSRI 2023.
                      </p>
                  </div>

                  <div class="form-body">
                      <div class="frm-row">
                          <div class="spacer-t5 spacer-b30">
                              <div class="tagline">
                                  <span> SEMANGAT!!! </span>
                              </div>
                          </div>

                          <div
                              class="alert alert-primary text-left py-5"
                              style="margin-top: 2rem; text-align: justify"
                          >
                              <p style="margin:0">
                                  <font
                                      >Teruslah berkarya di manapun kamu berada.
                                      <br /><br />
                                      Seorang pemenang sejati tak akan runtuh
                                      hanya karena satu-dua rintangan menghadang.
                                      <br /><br />
                                      Terus asah kemampuan diri, maksimalkan
                                      potensi dan semangat untuk terus berproses
                                      dan ingatlah bahwa kamu masih bagian dari
                                      <strong>Keluarga HIMSI FASILKOM UNSRI</strong>
                                      .<br /><br /><br />
                                      <b>#BerintegrasiPenuhDedikasi</b>
                                  </font>
                              </p>
                          </div>
                      </div>

                      <center>
                          <div class="form-footer" style="margin-top: 4rem">
                              <p style="color: black">
                                  Created by
                                  <a href="#"> Dinas RISTEK - Divisi PTI</a>
                              </p>
                          </div>
                      </center>
                  </div>
              </form>
          </div>
      </div>
  </div>

  @endif
</div>

@endsection
