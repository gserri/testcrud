@extends('layout')

@section('content')
<div class="card-uper">
    <div class="card-header">
        Add Book
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif

        <form method="POST" action="{{ route('books.store') }}">
            <div class="form-group">
                @csrf
                <label for="name"><strong>Book Name:</strong></label>
                <input type="text" class="form-control" name="book_name"/>
            </div>
            <div class="form-group">
                <label for="quantity"><strong>Book ISBN Number:</strong></label>
                <input type="text" class="form-control" name="isbn_no"/>
            </div>
            <div class="form-group">
                <label for="price"><strong>Book Price:</strong></label>
                <input type="text" class="form-control" name="book_price"/>
            </div>
            <button type="submit" class="btn btn-primary">Create Book</button>
        </form>
    </div>
</div>
    
@endsection