<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <title>Laravel</title>
    </head>
    <body>
        @if( ! $errors->isEmpty())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $message)
                <li>{{$message}}</li>
                @endforeach
            </ul>
        </div>
        @endisset
        <form action="{{route('form')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="task_name">タスク名</label>
                <input type="text" class="form-control" name="task_name" value="{{old('task_name')}}" />
            </div>
            <div class="form-group">
                <label for="remarks">備考</label>
                <input type="text" class="form-control" name="remarks" value="{{old('remarks')}}" />
            </div>
            <dic class="col-mb-3">
                <input type="submit" class="btn btn-default btn-block" value="登録" />
            </dic>
        </form>
        <script src="{{mix('js/app.js')}}" ></script>
    </body>
</html>