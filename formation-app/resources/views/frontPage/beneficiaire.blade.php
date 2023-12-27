@extends('welcome')
@section('content')
    <center>
        <h1 class="h3 alert center w-50 alert-primary text-center text-secondary mt-5 ">
            {{ __('private.listDesBeneficiaire') }}</h1>
        <br>
        <form action="{{ url('beneficiaire') }}" class="form-control w-50" method="GET" id="formationForm">
            @csrf
            <label for="formation_id" class="">{{__('private.formation')}}</label>
            <select name="formation_id" id="formation_id" onchange="submit()" class="form-select w-50">
                <option value="">{{__('private.selectFroamtion')}}</option>

                @foreach ($formations as $formation)

                    <option value="{{ $formation->id }}"
                        @foreach ($benefi as $item)
                            @if ($formation->id == $item->formation_id)
                             selected 
                            @endif 
                        @endforeach>
                        {{ $formation->formation_name }}
                    </option>

                @endforeach
            </select>
        </form>
    </center>

    <h5 class="h5-ar m-2 text-dark">{{ __('private.totaleBeneficiaire') }} :<span class="text-warning">{{ $beneficiaryCount }}</span></h5>
    <table class="table table-primary text-center">
        <thead>
            <tr>
                <th>{{ __('private.ppr') }}</th>
                <th>{{ __('private.nom') }}</th>
                <th>{{ __('private.email') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($benefi as $item)
                <tr>
                    <td>{{ $item->ppr }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->emqil }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
