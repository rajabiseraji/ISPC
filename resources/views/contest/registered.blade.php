@extends('layouts.app')

@section('content')
    <div class="non-skrollr">
        <div class="row">
            <br>
            <h4>Registered Teams</h4>
            <p>
                Here is the list of registered teams.
                <br>
                <b>If you have not registered yet, you can <a style="color: #00b0ff;" href="{{ route('app::contest.register') }}">Register Here</a>.</b>
            </p>
            @if(count($data) == 0)
                <div class="card waves-effect col s12 m12 l12">
                    <div class="card-content">
                        <ccenter><span class="card-title activator grey-text text-darken-4">No Registrations Yet!</span></ccenter>
                        <p class="center">
                            Be the first one to <a style="color: #00b0ff;" href="{{ route('app::contest.register') }}">register</a>!
                        </p>
                    </div>
                </div>
            @else
                @foreach($data as $record)
                    <div class="col s12 m6 l6">
                        <div class="card {{ $record->status['style'] }}">
                            <div class="card-content">
                                <span class="card-title">{{ $record->status['status'] }}</span>
                                <p>
                                    Team Name: <b>{{$record->team_name}}</b> <br>
                                    Highschool: <b>{{$record->institute_name}}</b><br>
                                    Team Location: <b>{{$record->site}}</b><br>
                                </p>
                                {{--<p>--}}
                                {{--Contestant #1: <b>{{$record->members['first']['first_name'] . ' ' . $record->members['first']['last_name']}}</b><br>--}}
                                {{--Contestant #2: <b>{{$record->members['second']['first_name'] . ' ' . $record->members['second']['last_name']}}</b><br>--}}
                                {{--Contestant #3: <b>{{$record->members['third']['first_name'] . ' ' . $record->members['third']['last_name']}}</b><br>--}}
                                {{--</p>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection

@push('scripts')
<script>

</script>
@endpush