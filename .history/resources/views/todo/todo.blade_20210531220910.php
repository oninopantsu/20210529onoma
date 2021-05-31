<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    body {
      background-color: #2d197c;
      width: 100%;
    }

    .todolist {
      margin: 0 auto;
      height: 300px;
      width: 60%;
      background-color: #fff;
      color: #bbb;
      border-radius: 10px;
    }

    h1 {
      font-size: 32px;
      color: black;
    }
    .list {
      text-align: left;
      width: ;
    }

    .submit {
      color: #dc70fa;
      border: 2px solid #dc70fa;
      background-color: #fff;
      font-weight: bold;
    }

    th {
      font-size: 18px;
      color: black;
    }

    input {
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 14px;
    }

    .button__add {
      border: 1px solid #dc70fa;
      color: #dc70fa;
      background-color: #fff;
      font-weight: bold;
      font-size: 12px;
      border-radius: 10px;
    }

    .button__update {
      border: 1px solid #fa9770;
      color: #fa9770;
      background-color: #fff;
      font-weight: bold;
      font-size: 12px;
      border-radius: 10px;
    }

    .button__delete {
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
  @section('todo.blade.php')

  <div class="todolist">
    <h1>Todo List</h1>
    <form action="/todo/create" method="POST">
      <input class='list' type="text" name="list">
      <input class='submit' type="submit" value="追加">
      <table>
        <tr>
          <th>作成日</th>
          <th>タスク名</th>
          <th>更新</th>
          <th>削除</th>
        </tr>
        @foreach($items as $item)
        <tr>
          <td>
            <form action="update" method="post"></form>
            <input type="text" class="update" name="content">
          </td>
          <td>
            <button class="button__update">更新</button>
          </td>
          <td>
            <button class="button__delete">削除</button>
          </td>
        </tr>
      </table>

  </div>
  @endforeach
  </form>

</body>

</html>