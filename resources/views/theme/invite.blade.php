<!DOCTYPE html>
<html lang="en">
<head>
    @include('theme.partials.head')
</head>

<body>
{{--<div id="preloader"></div>--}}
<div id="wrapper">
@include('theme.partials.header')
    <section id="subheader" data-speed="2" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Invite</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @if (session()->has('message'))
                        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                    @endif
                    <form action="#" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <input type="text" class="form-control phone" placeholder="Phone" name="phone" value="{{old('phone')}}">
                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <textarea name="description" class="form-control" placeholder="Description" cols="30" rows="10">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>

                        <button class="btn btn-success pull-right">Request</button>
                    </form>
                </div>
            </div>

        </div>

        <div style="margin-bottom: 100px"></div>
    </div>



@include('theme.partials.footer')
</div>


<script src="{{ asset('/theme/js/jquery.min.js') }}"></script>
<script src="{{ asset('/theme/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/theme/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('/theme/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('/theme/js/easing.js') }}"></script>
<script src="{{ asset('/theme/js/jquery.ui.totop.js') }}"></script>
<script src="{{ asset('/theme/js/selectnav.js') }}"></script>
<script src="{{ asset('/theme/js/ender.js') }}"></script>
<script src="{{ asset('/theme/js/responsiveslides.min.js') }}"></script>
<script src="{{ asset('/theme/js/owl.carousel.js') }}"></script>
<script src="{{ asset('/theme/js/jquery.fitvids.js') }}"></script>
<script src="{{ asset('/theme/js/jquery.plugin.js') }}"></script>
<script src="{{ asset('/theme/js/jquery.countdown.js') }}"></script>
<script src="{{ asset('/theme/js/countdown-custom.js') }}"></script>
<script src="{{ asset('/theme/js/wow.min.js') }}"></script>
<script src="{{ asset('/theme/js/custom.js') }}"></script>

<script src="{{ asset('/theme/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
<script src="{{ asset('/theme/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('/js/jquery.maskedinput.min.js') }}"></script>
<script>
    jQuery(function($){
        $(".phone").mask("(999) 999-9999");
    });
</script>
</body>
</html>
