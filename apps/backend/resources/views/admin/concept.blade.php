@extends('admin.layout')

@section('sidebar')
    @parent
@endsection

@section('main')
    @parent
    <div class="concepts">
        <div class="concepts-header">
            <div class="pagination">
                {!! $concepts->render() !!}
            </div>
        </div>


        @foreach ($concepts as $index => $concept)
            <div class="concept">
                <p class="concept-header">
                    #{{ $index + 1 }}
                </p>
                <div class="concept-description">
                    {{ $concept->description }}
                </div>
                <div class="concept-actions">
                    <button type="button" class="btn btn-warning btn-sm">
                        <i class="fas fa-pencil-alt mr-right-5"></i>
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash-alt mr-right-5"></i>
                        Delete
                    </button>
                </div>
            </div>
        @endforeach
    </div>
@endsection
