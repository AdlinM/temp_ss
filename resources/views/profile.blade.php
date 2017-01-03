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
        <div class="page-title">Contact</div>
    </div>
    <div class="col s12 m4 l3">
        <div class="card">
            <div class="card-content center-align">
                <img src="assets/images/profile-image-1.png" class="responsive-img circle" width="128px" alt="">
                <p class="m-t-lg flow-text">Organisasi XYZ</p>
                <div class="chip m-t-sm blue-grey white-text">UI Designer</div>
                <div class="chip m-t-sm blue-grey white-text">Developer</div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <span class="card-title">Circles</span>
                <div class="chip m-t-sm">Envato Market</div>
                <div class="chip m-t-sm">Steelcoders</div>
                <div class="chip m-t-sm">Family</div>
                <div class="chip m-t-sm">Work</div>
                <div class="chip m-t-sm">Friends</div>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l5">
        <div class="card">
            <div class="card-content ">
                <div id="contact-map-canvas"></div>
            </div>
            <div class="card-content ">
                <span class="card-title">Contact Info</span>
                <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus.</p>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4">
        <div class="card">
            <div class="card-content ">
                <span class="card-title">Address</span>
                <address>
                    <strong>Twitter, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
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
