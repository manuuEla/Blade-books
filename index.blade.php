@include("book.parts.header")
<button class="btn btn-warning" data-toggle="modal" data-target="#add-book">New Book</button>
<table class="table table-stripped">
    <thead>
    <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>AUTHOR_ID</th>
        <th>CATEGORY_ID</th>
        <th>DESCRIPTION</th>
        <th>ISBN</th>
        <th>PUBLISHER</th>
        <th>RELEASED</th>
        <th>URL_SEO</th>
        <th>IMG</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{\App\Author::find($book->author_id)->name}}</td>
            <td>{{\App\Category::find($book->category_id)->name}}</td>
            <td>{{$book->description}}</td>
            <td>{{$book->isbn}}</td>
            <td>{{$book->publisher}}</td>
            <td>{{$book->released}}</td>
            <td>{{$book->url_seo}}</td>
            <td><img src="{{URL::asset("posts-images/".$book->img)}}"></td>
            <td><button class="btn btn-warning" data-target="#edit-book-{{$book->id}}" data-toggle="modal" ><i class="fa fa-edit"></i></button></td>
            <td><a href="/dashboard/book/delete/{{$book->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
        </tr>
    @endforeach
    </tbody>
</table>

@foreach($books as $book)
    @include("book.parts.modals.edit.book")
@endforeach
@include("book.parts.modals.add.book")


@include("book.parts.footer")

