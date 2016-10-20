@extends('layouts.app')

@section('parallax')
    <div class="parallax-container">
        <div class="parallax">
            <img src="{{ asset('img/ACM-logo.png') }}">
        </div>
    </div>
@endsection

@section('content')
    <div id="non-skrollr">
        <div class="container-fluid section">
            <div class="mast">
                <img class="responsive-img" style="width: 60%;" src="{{ asset('img/ACM-logo.png') }}">
                <h1>ACM ISPC</h1>
                <h4>Amirkabir University of Technology</h4>
                2nd <b>Amirkabir</b> National Student Programming Contest held at <b>Computer Engineering and IT Department</b> of Amirkabir University of Technology
                <br> <br>
                <h6>Registration links will be available during  <b>November ?th - November ?th</b></h6>
                <br>
                <a href="{{ route('app::contest.pre-register') }}">
                    <button class="darken-2 waves-effect waves-light btn-large cyan" type="button" name="action">Contest Registration
                        <i class="material-icons right">supervisor_account</i>
                    </button>
                </a>
                <br>
                <br>
                <br>
            </div>
        </div>

        <div class="row" id="details">
            <div class="col s12 m5">
                <div class="card cyan darken-2 white-text waves-effect">
                    <div class="card-content">
                        <span class="card-title">Timings</span>
                        <p>Registration Dates</p>
                        <p style="font-size: 33px;">November ? - ?, 2016</p>
                        <hr>
                        <p>Orientation Day </p>
                        <p style="font-size: 33px;">November 16, 2016</p>
                        <hr>
                        <p>On-Site Contest</p>
                        <p style="font-size: 33px;">November 18, 2016</p>
                        <hr>
                        <p>Online Contest (Delayed)</p>
                        <p style="font-size: 33px;">November 18, 2016</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m7">
                <div class="card cyan darken-2 white-text waves-effect">
                    <div class="card-content">
                        <span class="card-title">Important Notes</span>
                        <ol>
                            <li>
                                The contest will be held both online and on-site. However the online contest will be held
                                at least two hours after the on-site contest. There is no limit in the online contest but
                                for registring in the on-site contest, teams must be present at one of the specified sites.
                            </li>
                            <li>
                                Participant teams in on-site contest must have exactly three members in order to be able
                                to participate in a programming contest, but the online contest has no limits.
                            </li>
                            <li>
                                All team members in on-site contest, are required to be present on November 16, at the Orientation Day.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col s12 m7 center">
                <a href="{{ route('app::contest.registered') }}">
                    <button class="darken-2 waves-effect waves-light btn-large cyan" type="button" name="action">View Registered Teams
                        <i class="material-icons right">toc</i>
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('parallex')
    <div class="parallax-container">
        <div class="parallax"><img src="img/acms_final.jpg"></div>
    </div>
    <div class="section">
        <div class="row container center cyan-text text-darken-2">
            <h4>Organizers: </h4><br>
            <div class="col s4 m4 l4">
                <!-- <a href="https://www.kth.se" target="_blank">
                    <img class="responsive-img" style="width: 150px;" src="{{ asset('img/kth.png') }}">
                </a> -->
            </div>
            <div class="col s4 m4 l4">
                <a href="http://aut.ac.ir" target="_blank">
                    <img class="responsive-img" style="width: 150px;" src="{{ asset('img/aut.png') }}">
                </a>
            </div>
            <!-- <div class="col s4 m4 l4">
                <a href="http://tcs.uj.edu.pl/" target="_blank">
                    <img class="responsive-img" style="width: 150px;" src="{{ asset('img/tcs.png') }}">
                </a>
            </div> -->
            <br>
            <br>
            <br>
            <br>
            {{--<h4>Sponsors: </h4><br>--}}
            {{--<div class="col s4 m4 l4">--}}
                {{--<a href="https://www.kth.se" target="_blank">--}}
                    {{--<img class="responsive-img" style="width: 150px;" src="{{ asset('img/kth.png') }}">--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col s4 m4 l4">--}}
                {{--<a href="http://aut.ac.ir" target="_blank">--}}
                    {{--<img class="responsive-img" style="width: 150px;" src="{{ asset('img/aut.png') }}">--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col s4 m4 l4">--}}
                {{--<a href="http://tcs.uj.edu.pl/" target="_blank">--}}
                    {{--<img class="responsive-img" style="width: 150px;" src="{{ asset('img/tcs.png') }}">--}}
                {{--</a>--}}
            {{--</div>--}}
        </div>
        {{--<div class="row container center cyan-text text-darken-2">--}}
            {{--<h4>Contest Sponsors: </h4><br>--}}
        {{--</div>--}}
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="img/ACM-logo.jpg"></div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('ul.tabs').tabs();
        $('.parallax').parallax();
    });
</script>
@endpush
