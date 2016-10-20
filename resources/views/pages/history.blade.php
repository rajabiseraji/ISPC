@extends('layouts.app')

@section('content')
    <div id="non-skrollr">
        <div id="mainContent" class="container-fluid">

            <h4>History</h4>


            <h5>Introduction</h5>
            <p>
                Association for Computing  Machinery (ACM) has begun to work since 1947. The Association started to
                hold  International Collegiate Programming Contest (ICPC) at 1977. This Competition  gradually became
                more important and universities all over the world began to  participate at it. See growth of the
                competition below.
            </p>
            <center>
                <img class="responsive-img materialboxed"
                     src="{{ asset('img/history/chart.jpg') }}"
                     data-caption="Growth of Competetion">
            </center>
            <br>


            <h5>ICPC in Iran</h5>
            <p>
                West Asian Regional  Contest has been held since 1999. This regional contest is held every year in
                Tehran hosted by Sharif University of Technology.<br>
                Amirkabir University of  Technology has accomplished to advance for the world final in 7 years out
                of  the whole 9 years.
            </p>

            <br>


            <h5>Student Contensts in Iran</h5>
            <p>
                There has been many contests in Iran offering a programming competition for highschool students.
                Some of these contests are Salamcup, Bayan contest and also Hellicup. Most of these competitions are
                held by a highschool and there has always been lack of a more serious contest.
            </p>

            <br>


            <h5>Amirkabir AUT ISPC</h5>
            <p>
                Two years ago, Student Scientific Chapter of Computer engineering and IT faculty of Amirkabir university
                decided to hold a contest for students. In this contest, all talented and interested teams form all across
                the country gathered and competed for a day. Teams from top highschools such as Salam, Helli, Farzanegan and
                etc participated in that contest.
            </p>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            debugger;
            $('#page-wrap').css('height', 'auto');
        });
    </script>
@endpush