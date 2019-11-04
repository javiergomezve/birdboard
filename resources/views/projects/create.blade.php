<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BirdBoard</title>
</head>
<body>

<div class="container">
    <form method="post" action="/projects">
        <h1>Create a Project</h1>
        {{ csrf_field() }}
        <div>
            <label for="title">Title</label>
            <div>
                <input type="text" id="title" name="title" value="">
            </div>
        </div>
        <div>
            <label for="description">Description</label>
            <div>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
</div>
</body>
</html>
