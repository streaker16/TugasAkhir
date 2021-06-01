@extends('user.main')

@section('container')
<style>
    #contact-section {display: none;}
</style>

    @section('title', 'Kontak')
    <div class="container contact bg-white py-4 my-5" id="contact-section-page">
        <div class="row justify-content-center py-4">
            <div class="col-sm-8 bg-kkn">
                <h2 class="text-center py-3">Kontak Kami</h2>
                <dl class="row ">
                    <dt class="col-6 text-right">Email :</dt>
                    <dd class="col-6 pl-1 pt-2">kknreal@ugm.ac.id</dd>
                    <dt class="col-6 text-right">Facebook :</dt>
                    <dd class="col-6 pl-1 pt-2" ><a href="https://www.facebook.com/KKNREALUGM/">@KKNREALUGM</a></dd>
                </dl>
            </div>
        </div>
    </div>

@endsection
