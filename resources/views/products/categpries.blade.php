<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route("category.show",1) }}"><button>show</button></form>
    <form action="{{ route("category.edit",1) }}"><button>edit</button></form>
    <form action="{{ route("category.destroy",1) }}"><button>destroy</button></form>
    <form action="{{ route("category.creat",1) }}"><button>creat</button></form>
    <form action="{{ route("category.index",1) }}"><button>index</button></form>

</body>
</html>
