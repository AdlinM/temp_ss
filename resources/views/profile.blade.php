@extends('layouts.admin')

@section('styles')

@endsection

@section('scripts')
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzjeZ1lORVesmjaaFu0EbYeTw84t1_nek"></script>
  <script src="assets/js/pages/contact.js"></script>
@endsection

@section('content')
<div class="row">
    <div class="col s12">
      <div class="card">
          <div class="card-content">
              <h4>Profil Organisasi</h4>
          </div>
      </div>
    </div>
    <div class="col s12 m4 l3">
        <div class="card">
            <div class="card-content center-align">
                <img src="assets/images/profile-image-1.png" class="responsive-img circle" width="128px" alt="">
                <p class="m-t-lg flow-text">Organisasi XYZ</p>
                <div class="chip m-t-sm blue-grey white-text">Kampus</div>
                <div class="chip m-t-sm blue-grey white-text">Organisasi TI</div>
                <div class="chip m-t-sm blue-grey white-text">Bidang X</div>
                <div class="chip m-t-sm blue-grey white-text">Bidang Y</div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <span class="card-title">Chanel Organisasi</span>
                <div class="chip m-t-sm"></div>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l5">
        <div class="card">
            <div class="card-content ">
                <div id="contact-map-canvas"></div>
            </div>
            <div class="card-content ">
                <span class="card-title">Deskripsi</span>
                <p>Organisasi ini adalah organisasi yang bergerak di bidang keorganisasian. Sehingga dapat dikatakan organisasi ini merupakan organisasi yang berkecimpung dalam bidang keorganisasian organisasi.</p>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4">
        <div class="card">
            <div class="card-content ">
                <span class="card-title">Alamat</span>
                <address>
                    <strong>Organisasi XYZ.</strong><br>
                    Jl. Pembangunan km 12 no. 12<br>
                    Medan Magnet, Medan 20226<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
            <div class="card-content ">
                <span class="card-title">Let's keep in touch</span>
                <form class="m-t-md">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">Subject</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="message" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
