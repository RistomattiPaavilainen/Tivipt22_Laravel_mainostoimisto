<x-layout>
    <h2>Todo listaus</h2>
    <a href="{{ route('UusiTodo') }}">Lisää uusi</a>

    
    

    <table class="table table-hover table-bordered">
        
        @foreach($todos as $todo)
        <tr>
            <td><a href="{{ route('MuokkaaTodo',['todo' => $todo->id]) }}">muokkaa</a> poista</td>
            <td>{{ $todo->nimi }}</td>
            <td>{{ $todo->selite }}</td>
            <td>{{ $todo->status }}</td>
        </tr>
        @endforeach
        
        
    </table>
</x-layout>