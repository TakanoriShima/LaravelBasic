<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h1>Hello test</h1>
        <h2><?php print $employee->name; ?></h2>
        <h2>{{$employee->name}}</h2>
        <h2>{{$employee->email}}</h2>
        <h2>{{$employee->password}}</h2>
    </body>
</html>