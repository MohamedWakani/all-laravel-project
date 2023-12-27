@extends('layoute')

@section('content')
    <br>
    <form action="{{ url('/show') }}" class="my-form" method="GET" id="formationForm">
        @csrf
        <label for="formation_id" class="my-label">Select Formation</label>
        <select name="formation_id" id="formation_id" onchange="submit()" class="my-select">
            <option value="-1">Select Formation</option>
            @foreach ($formation as $instu)
                <option value="{{ $instu->id }}"
                    @if(in_array($instu->id, $profCheckeds->pluck('formation_id')->toArray()) || in_array($instu->id, $excelUser->pluck('formation_id')->toArray()))
                        selected
                    @endif
                >
                    {{ $instu->name }}
                </option>
            @endforeach

        </select>
        <a href="/importdata"><button  class='btn-import'>Import Data Excel</button></a>
        
    

        
    </form>
    <br>
    <table class="my-table">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @if (request('formation_id') == -1)
                <tr>
                    <td>Please select a formation</td>
                </tr>
            @else
                @foreach ($profCheckeds as $item)
                    <tr>
                        <td>
                            @php
                                $names = json_decode($item->name)
                            @endphp
                            @foreach ($names as $name)
                                <ul>
                                    <li><input type="checkbox" name="selected_names[]" value="{{$name}}">{{$name}}</li><hr>
                                </ul>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
    
                @foreach ($excelUser as $user)
                    <tr>
                        <td>
                            <ul>
                                <li>
                                    <input type="checkbox" name="selected_names[]" value="{{$user->name}}">{{$user->name}}
                                </li>
                            </ul>
                        </td>    
                    </tr>
                @endforeach
    
                @if (count($profCheckeds) == 0 && count($excelUser) == 0)
                    <tr>
                        <td colspan="3">No one in this Formation !!</td>
                    </tr>
                @endif
            @endif
        </tbody>
    </table>
    
    <button type="button" id="generatePDF" class="btn-ag btn-agent">Generate PDF</button>

    
    <script>
        document.getElementById("generatePDF").addEventListener("click", function () {
            const checkedNames = Array.from(document.querySelectorAll("input[type=checkbox]:checked"));
    
            if (checkedNames.length === 0) {
                alert("Please select at least one name.");
                return;
            }
    
            const selectedNames = checkedNames.map((checkbox) => checkbox.value).join(',');
    
            fetch("{{ route('generate-pdf') }}", {
                method: "POST",
                body: JSON.stringify({ selected_names: selectedNames }),
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
            })
                .then(response => response.blob())
                .then(blob => {
                    const url = window.URL.createObjectURL(blob);
                    const a = document.createElement("a");
                    a.href = url;
                    a.download = "selected_names.pdf";
                    a.click();
                    window.URL.revokeObjectURL(url);
                });
        });
    </script>
    
@endsection