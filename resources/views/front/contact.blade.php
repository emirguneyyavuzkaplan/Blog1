@extends('front.layouts.master')
@section('title','iletisim')
@section('image',asset('front/img/home-bg.jpg'))

@section('content')

    <div class="col-lg-6 col-md-10 mx-auto">
        <p>Bizimle iletişime Gecebilirsiniz </p>

            <form method="post" action="{{route('contact.post')}}">
                @csrf
                <div class="form-group controls" >
                    <input class="form-control" name="name"  required />
                    <label for="name">Ad Soyad</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                </div>
                <div class="form-floating">
                    <input class="form-control" name="email" required />
                    <label for="email">Email Adresi</label>

                </div>
                <div class="form-group controls">
                    <label >Konu</label>
                    <select class="form-control" name="topic" required>
                        <option>Bilgi</option>
                        <option>Destek</option>
                        <option>Genel</option>
                    </select>
                </div>
                <div class="form-group controls">
                    <textarea class="form-control" name="massage" placeholder="Mesajınızı giriniz..." required></textarea>
                    <label >Message</label>
                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                </div>


                <!-- Submit Button-->
                <button class="btn btn-primary text-uppercase disabled" id="submitButton" type="submit">Gönder</button>
            </form>
        </div>
    <div class="col-md-4  " >
        <div class="card card-default">
            <div class="card-body"> Panel Content</div>
            Adres  : BLA BLA BLA
        </div>

    </div>

@endsection


