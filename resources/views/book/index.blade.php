<h1>All Books</h1>

<a href="{{ route('books.create') }}">Add New Book</a>

@foreach ($books as $book)
    <div>
        <h3>{{ $book->title }} by {{ $book->author }}</h3>
        <a href="{{ route('books.show', $book) }}">View</a>
        <a href="{{ route('books.edit', $book) }}">Edit</a>
        <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
