@extends('template/web')

@section('index')

<div class="registrasi">
    <div class="regis__content py-5">
        <div class="regis__forms">
            <form action="{{ route("validateNIM") }}" method="post" autocomplete="off" class="regis__registre">
                @csrf
                <img
                    src="img/himsi-unsri.png"
                    alt=""
                    width="180px;"
                    style="margin: auto; display: block"
                /><br />

                <h1 class="regis__title fw-bold mb-2">
                    OPEN RECRUITMENT <br />
                    BPH HIMSI UNSRI 2023
                </h1>
                <hr />

                <br />
                <div class="alert alert-primary text-center" role="alert">
                    Masukkan NIM untuk disesuaikan dengan S&K 
                </div>

                <div class="regis__box">
                    <i class="bx bxs-id-card regis__icon"></i>
                    <input
                        type="text"
                        name="nim"
                        placeholder="NIM"
                        class="regis__input"
                        id=""
                        minlength="14"
                        maxlength="14"
                        required
                    />
                </div>
                @error('nim')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror

                <center>
                    <div class="form-footer">
                        <button
                            type="submit"
                            class="button regis__button btn-primary block pushed expand"
                            name="daftar"
                        >
                            Lanjut &raquo
                        </button>
                    </div>
                </center>
                <a href="/">Kembali ke halaman utama</a>
            </form>
        </div>
    </div>
</div>

@endsection