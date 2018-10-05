
@extends('layouts.app')
@section('content')


{!! Form::open(['url' => 'contact/submit']) !!}
<div class="container">
  <form>
    <h2>Contact Us</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
            {{Form::label('name', 'First Name')}}
            {{Form::text('name','', ['class' => 'form-control'])}}
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
            {{Form::label('Last name', 'Last Name')}}
            {{Form::text('Last name','', ['class' => 'form-control', 'id' => 'last'])}}
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
            {{Form::label('Company', 'Company')}}
            {{Form::text('Company','', ['class' => 'form-control', 'id' => 'company'])}}
        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">

        <div class="form-group">
            {{Form::label('phone', 'Phone Number')}}
            {{Form::text('Company','', ['class' => 'form-control', 'id' => 'phone'])}}
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email','', ['class' => 'form-control', 'id' => 'email'])}}
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="url">Your Website <small>Please include http://</small></label>
          <input type="url" class="form-control" id="url" placeholder="url">
        </div>

      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <label for="contact-preference">When is the best time of day to reach you?</label>
    <div class="radio">
      <label>
        <input type="radio" name="contact-preference" id="contact-preference" value="am" checked>Morning
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="contact-preference" id="contact-preference" value="pm" checked>Evening
      </label>
    </div>

    <label for="newsletter">Would you like to recieve our email newsletter?</label>
    <div class="checkbox">

      <label>
        <input type="checkbox" value="Sure!" id="newsletter"> Sure!
      </label>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

{!! Form::close() !!}
@endsection

