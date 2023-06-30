
@extends('Subpages.Basic')
@section('title')

    Login

@endsection
    


@section('content')
<br>
<br>
<br>
<br>
<br>
<br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update') }}
                        <p class="pull-right text-gray-dark" id="msg">

                          {{session('Msg')}}
                          @if(session('Msg'))
                            <script>
                              function autoRefresh()
                              {
                                $('#msg').hide();
                               /* location.reload();*/
                              }
                              setInterval('autoRefresh()',5000); 
                            </script>
                            @endif

                         </p>
                    </div>
                    

                    <div class="card-body">
                        <form  class="form-group"  action='Userupdate/{{Auth::user()->id}}' method="post">
                                @csrf
                                {{ method_field('PUT')}}
                                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Email:</label>
                                    <div class="col-md-6">
                                      <input class="form-control" type="email" name="email" readonly value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                  
                                  <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">NAME:</label>
                                    <div class="col-lg-6">
                                      <input class="form-control" type="text" name="name"  >
                                    </div>
                                  </div>
                                   
                                  <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
                                      <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                      <div class="col-lg-6">
                                          <input id="password" type="password" class="form-control" name="password">

                                          @if ($errors->has('password'))
                                              <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                      <div class="form-group row">
                                        <label  class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                                        <div class="col-lg-6">
                                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                        </div>
                                      </div>
                                

                                                       
                                
                                 <button type="submit" class="btn btn-primary float-right"> update </button>
                                 <a href="{{ URL::previous() }}" class="btn btn-default float-right ">BACK</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection
