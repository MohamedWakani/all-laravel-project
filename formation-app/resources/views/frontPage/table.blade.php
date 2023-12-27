@extends("welcome")
@section('content')
<center>
    <h1 class="h3 alert center w-50 alert-primary text-center text-dark mt-5 ">{{__('private.nos')}}</h1>
<br>


    <form class="search" role="search" action="{{ url('/') }}" method="GET">
    <input type="text" name="search" class="input-ar from-control border border-primary rounded" placeholder="{{__('private.searchforf')}}">
    <button class="search-btn-ar btn btn-outline-primary" type="submit">{{__('private.search')}}</button>
</form>
</center> 

<br><br><br>
    <div>
        <div class="frm-btn d-flex">
            <a href="/" type="button" class="btn btn-primary m-2">{{__('private.touslesforamation')}}</a><br>
            <a href="/createBeneficiaire" type="button" class="btn btn-dark text-ligth  ml-10 m-2">{{__('private.inscrire')}}</a><br>
        </div>
        <table class="table table-primary text-center">
            <thead>
                <tr>
                    <th>{{__('private.formation')}}</th>
                    <th>{{__('private.fonctionaire')}}</th>
                </tr>
            </thead>
            <tbody>
                @if($formation->isEmpty())
                    <tr>
                        <td colspan="2">{{__('private.nothing')}}"{{ $search }}"</td>
                    </tr>
                @else
                    @foreach ($formation as $item)
                        <tr>
                            <td>{{ $item->formation_name }}</td>
                            <td>{{ $item->fonctionnaire->name }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            
        </table>
    </div>
@endsection