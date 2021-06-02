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
      margin: 50px auto;
      padding: 30px;
      width: 60%;
      background-color: #fff;
      color: #bbb;
      border-radius: 10px;
    }

    h1 {
      font-size: 32px;
      color: black;
    }

    .list__card {
      padding: 30px;
    }

    .list {
      text-align: left;
      width: 80%;
      padding: 10px;
    }

    .submit {
      color: #dc70fa;
      border: 2px solid #dc70fa;
      background-color: #fff;
      font-weight: bold;
      margin-left: 30px;
      padding: 5px;
      cursor: pointer;
    }

    th {
      font-size: 16px;
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
      cursor: pointer;
      padding: 10px;
    }

    .button__update {
      border: 2px solid #fa9770;
      color: #fa9770;
      background-color: #fff;
      font-weight: bold;
      font-size: 12px;
      border-radius: 10px;
      cursor: pointer;
      padding: 5px;
      transition: 0.4s;

    }

    .button__delete {
      border: 2px solid #71fadc;
      color: #71fadc;
      background-color: #fff;
      font-weight: bold;
      font-size: 12px;
      border-radius: 10px;
      cursor: pointer;
      padding: 5px;
      transition: 0.4s;
    }
  </style>
</head>

<body>
  @section('todo.blade.php')


  <div class="todolist">
    <div class="list__card">
      <h1>Todo List</h1>

      @if (count($errors) > 0)
      <ul>
        @foreach ($errors->all() as $error)
        <li>
          {{$error}}
        </li>
        @endforeach
      </ul>
      @endif

      <form action="/todo/create" method="POST">
        @csrf
        <input class='list' type="text" name="list">
        <input class='submit' type="submit" value="追加">
        <table>
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          <tr>
            @foreach($items as $item)
            <td>
              <input type="hidden" name="timestamps" value="{}}">
            </td>
            <td>
              <input type="text" class="update" name="content" value="{{$item->content}}">
            </td>
            <td>
              <button class="button__update">更新</button>
            </td>
            <td>
              <button class="button__delete">削除</button>
            </td>
          </tr>
          @endforeach
        </table>
    </div>

  </div>
  </form>

</body>

</html>