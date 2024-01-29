<x-layout>
    {{ $todo }}
    <h2>Muokkaa todo</h2>
<!-- Tee todo lisäämistä varten lomake -->



<form method="post" action="{{ route('UpdateTodo', ['todo' => $todo->id]) }}">
    @csrf
    <div class="row">
        <div class="col-sm-2">
            <label class="form-label">Todo nimi</label>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="todo-nimi" value="{{ $todo->nimi }}" 
            @error('todo-nimi')
                <span class="bg-danger">Täytä kenttä</span>
                @enderror

        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
            <label class="form-label">Todo selite</label>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="todo-selite" value="{{ $todo->selite }}" 
            @error('todo-selite')
            <span class="bg-danger">Täytä kenttä</span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
            <label class="form-label">Todo Status</label>
        </div>
        
        <div class="col-sm-4">
        <div>
            <input type="radio" class="form-check-input" name="todo-status" value="idea" {{ ($todo->status == 'Idea') ? 'checked':'' }}>Idea<br>
        </div>

        <div>

            <input type="radio" class="form-check-input" name="todo-status" value="aloitettu" {{ ($todo->status == 'Aloitettu') ? 'checked':'' }}>Aloitettu<br>
        </div>

        <div>

            <input type="radio" class="form-check-input" name="todo-status" value="kesken" {{ ($todo->status == 'Kesken' ? 'checked'):'' }}>Kesken<br>
        </div>

        <div>

            <input type="radio" class="form-check-input" name="todo-status" value="valmis" {{ ($todo->status == 'Valmis' ? 'checked'):'' }}>Valmis<br>
        </div>

            
            <div>

            @error('todo-status')
            <span class="bg-danger">Täytä kenttä</span>
            </div>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-4">
        <input type="submit" value="Lisää todo">
        <input type="reset" value="Tyhjennä lomake">
        </div>
    </div>

</form>

</x-layout>