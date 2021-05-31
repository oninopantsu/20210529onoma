<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>20210522onoma</title>
  @extends('todo.todo')
  <style>
    body {
      background-color: #2d197c;
      width: 100%;
      position: relative;
    }

    table {
      margin: 0 auto;
      height: 300px;
      width: 60%;
      background-color: #fff;
      color: #bbb;
    }

    input {
      border-radius: 10px;
      border: 1px solid #ccc;
      font-size: 14px;
    }

    button__add {
      border: 1px solid #dc70fa;
      color: #dc70fa;
      background-color: #fff;
      font-weight: bold;
      font-size: 12px;
      border-radius: 10px;
    }

    button__update {
      border: 1px solid #fa9770;
      color: #fa9770;
      background-color: #fff;
      font-weight: bold;
      font-size: 12px;
      border-radius: 10px;
    }

    button__delete {
      border: 1px solid #71fadc;
      color: #71fadc;
      background-color: #fff;
      font-weight: bold;
      font-size: 12px;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  @section('title', 'index.blade.php')

  @section('content')
  <div class="todolist">
    <p>Todo List </p>
    <form action="/todo/create" method="POST">
      <input type="submit" value="追加">

      <table>
        <tr>
          <th>作成日</th>
          <th>タスク名</th>
          <th>更新</th>
          <th>削除</th>
        </tr>
        <tr>
        
        </tr>
      </table>
      @endsection

  </div>
  </form>
</body>

</html>