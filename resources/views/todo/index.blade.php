@extends('layout')

@section('content')
    <div class="container">
        <livewire:todo-component />
    </div>

@push('livewire')

    <script>
      Livewire.on('todoDeleted', todoId => {
        alert('A post was added with the id of: ' + todoId);
      })
    </script>
@endpush

@endsection()
