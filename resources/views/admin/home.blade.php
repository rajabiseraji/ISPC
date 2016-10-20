@extends('layouts.app')

@section('content')
    <div id="non-skrollr">
        <div class="container-fluid">
            <div class="mast">
                <h1>AUT ISPC</h1>
                <h4>Amirkabir University of Technology</h4>
                Adminstration Panel <br> <br>
                <div class="divider"></div>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col s2 m2 l2">
                <a href="{{ route('app::admin.live') }}">
                    <div class="card cyan white-text waves-effect">
                        <div class="card-content text-center">
                            <span class="card-title">Live Blog</span>
                        </div>
                    </div>
                </a>
            </div>
            @if(Auth::user()->access_level == \App\User::$SUPER_ADMIN)
                <div class="col s2 m2 l2">
                    <a href="{{ route('app::admin.registrations.show') }}">
                        <div class="card cyan white-text waves-effect">
                            <div class="card-content text-center">
                                <span class="card-title">Registrations</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection