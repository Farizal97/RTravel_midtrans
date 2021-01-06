@extends('layouts.success')
@section('title','Checkout Sukses')

@section('content')

<main>
    <div class="section-success d-flex align-items-center">
      <div class="col text-center">
        <h1>Oops!</h1>
        <p>
          Your Transaction is Unfinished.
        </p>
        <a href="{{ url('/') }} class="btn btn-home-page mt-3 px-5">
          Home Page
        </a>
      </div>
    </div>
  </main>
@endsection

