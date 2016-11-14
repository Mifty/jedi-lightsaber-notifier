<!-- app/views/jedis/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Lightsaber Notifier App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Home</a>
    </div>

</nav>

<h1>Jedis Database</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-{{ Session::get('status') }}">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Jedi Level</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($jedis as $key => $jedi)
        <tr>
            <td>{{ $jedi->id }}</td>
            <td>{{ $jedi->name }}</td>
            <td>{{ $jedi->email }}</td>
            <td>{{ $jedi->level }}</td>

            <!-- actions to take -->
            <td>
				<!-- edit this nerd (uses the edit method found at GET /jedis/{id}/edit -->
                <a class="btn btn-small btn-success" href="{{ URL::to('status/' . $jedi->id ) }}">Get Lightsaber Status</a>
				
                <!-- edit this nerd (uses the edit method found at GET /jedis/{id}/edit -->
                <a class="btn btn-small btn-primary" href="{{ URL::to('toggle/' . $jedi->id ) }}">Toggle Lightsaber</a>
				
				<!-- show the jedi (uses the show method found at GET /jedis/{id} -->
                <a class="btn btn-small btn-danger" href="{{ URL::to('notify/' . $jedi->id) }}">Notify this Jedi</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>