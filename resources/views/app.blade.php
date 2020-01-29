@extends('layouts.app')
@push('scripts')
    <script>
        var appSettings = {!! json_encode($holiday) !!};
    </script>
@endpush
@section('content')


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif

                        {{Auth::user()->name}}
                        {{Auth::user()->email}}

                    You are logged in!
                        <a class="" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>



    <p>{{$user}}</p>

    <p>{{$section}}</p>

    <p>@foreach($holiday as $test)
        {{$test -> date}} <br>
       @endforeach
    </p>
@endsection



