@extends('template.standard')

@section('title', 'Inicial')

@section('content')

<script src="{{ asset('toremove/freelancer.css') }}"></script>
      <header>
        <div class="container mukheroHack1" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-5" style="float:none; margin: 0 auto;">
                    <img class="img-responsive" src="images/fme.jpg" alt="">
                    <div class="intro-text">
                        <h1 class="name">ProfissionaisGest</h1>
                        <hr class="star-light">
                        <span class="skills">Um produto SwissContact - FME. Desenvolvido por MukheroICT.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('scripts')
<script src="{{ asset('toremove/freelancer.min.js') }}"></script>
@endsection
