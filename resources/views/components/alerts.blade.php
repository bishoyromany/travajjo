<?php 
    $success = $success ?? [];
    if(session()->has('success')){
        $success = session()->get('success');
    }

    if(session()->has('status')){
        $success[] = session()->get('status');
    }

    if(empty($errors->all()) && session()->has('errors')){
        $errors = session()->get('errors');
    }
    $errorsArray = is_array($errors) ? $errors : $errors->all() ?? [];


    if(session('resent')){
        $success[] =  __('A fresh verification link has been sent to your email address.');
    }
?>

@foreach($errorsArray as $error)
    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        {{ $error }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
  </div>
@endforeach

@foreach($success as $success)
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ $success }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
  </div>
@endforeach
