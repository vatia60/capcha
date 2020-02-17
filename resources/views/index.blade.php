@extends('layouts.master')
@section('content')
<div class="container">
      <h2>Captcha Code in Laravel</h2><br/>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
      <form method="post" action="{{route('mainpage')}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
             <div class="captcha">
               <span>{!! captcha_img('flat') !!}</span>
               <button type="button" class="btn btn-success"><i class="fas fa-sync-alt" id="refresh"></i></button>
               </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
             <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha"></div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
@endsection


