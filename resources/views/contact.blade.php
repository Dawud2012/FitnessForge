@extends('layouts.app')
@section('content')
    <div class="content-wrapper pb-4">
        <div class="container-fluid pt-5">
            <div class="row">
                <section id="offer">
                    <div class="main-wrapper ">
                    <div class="container">
                    <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h2>Contact Us</h2>
        <p>Have a question or need assistance? Fill out the form below and we'll get back to you as soon as possible.</p>
        <form>
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-md-6">
        <h2>Our Location</h2>
        <p>Visit us at:</p>
        <address>
          123 Fitness Street<br>
          Gymtown, XY 12345<br>
          United States
        </address>
        <div id="map" style="height: 300px;"></div>
      </div>
    </div>
  </div>
                </section>
            </div>
        </div>
    </div>
@endsection