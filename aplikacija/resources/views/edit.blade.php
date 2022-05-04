<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Book</title>
</head>

<body>
    <style>
        body {
            background-image: url('https://www.roffeypark.ac.uk/wp-content/uploads/2018/06/the-7-best-books-to-improve-influencing-skills-2-scaled.jpg');
        }
    </style>
    <div class='container'>
        <div class='row mt-2'>
            <div class='col-2'>
                <a href="/">
                    <button class='btn btn-secondary'>Vrati se nazad</button>
                </a>
            </div>
        </div>
        <div class='row mt-2'>
            <div class='col-12'>
                <h1 class='text-center text-white bg-dark'>{{$book->title}}</h1>
            </div>
        </div>
        <div class='row mt-2 d-flex justify-content-center'>
            <div class='col-8'>
                <form class='bg-light pt-2 pb-2 pl-2 pr-2' action="/book/{{$book->id}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label>Naslov</label>
                    <input type="text" name='title' required class='form-control' value='{{$book->title}}'>
                    <label>Broj strana</label>
                    <input type="number" name='pages' required class='form-control' value='{{$book->pages}}'>
                    <label>Pisac</label>
                    <select name='writer_id' required class='form-control'>
                        @foreach($writers as $writer)
                        <option value="{{$writer->id}}" {{($book->writer->id==$writer->id)?'selected':''}}>
                            {{$writer->first_name.' '.$writer->last_name}}
                        </option>
                        @endforeach
                    </select>
                    <label>Zanr</label>
                    <select name='genre_id' required class='form-control'>
                        @foreach($genres as $genre)
                        <option value="{{$genre->id}}" {{($book->genre->id==$genre->id)?'selected':''}}>
                        {{$genre->value}}
                        </option>
                        @endforeach
                    </select>
                    <label>Opis</label>
                    <textarea name="description" cols="20" rows="8" class="form-control">{{$book->description}}
                    </textarea>
                    <button type="submit" class="btn btn-secondary form-control mt-2">Azuriraj</button>
                    <button type="submit" name='delete' class="btn btn-danger form-control mt-2">Obrisi</button>
                </form>
            </div>
            <div class='col-4'>
                <img src="{{$book->img}} " width="320" height="540">
            </div>
        </div>
    </div>
</body>

</html>