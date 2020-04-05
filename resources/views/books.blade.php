@foreach($books as $book)
<h1>{{$book->name}}</h1>
{{$book->desc}}

@endforeach
