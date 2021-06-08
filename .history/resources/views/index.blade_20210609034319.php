<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
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
      width: 100%;
      margin: 0 auto;
    }

    p {
      color: black;
      font-size: 12px;
    }

    .list {
      width: 60%;
      text-align: left;
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
      transition: 0.4s;
    }

    .submit:hover {
      background-color: #dc70fa;
      color: #fff;
    }

    th {
      font-size: 16px;
      color: black;
    }

    table {
      display: flex;
      justify-content: space-around;
      padding: 10px;
    }

    td {
      padding-top: 10px;
      padding-left: 20px;
    }

    form {
      padding: 10px;
      text-align: center;
    }

    input {
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 14px;
    }

    .button__update {
      border: 2px solid #fa9770;
      color: #fa9770;
      background-color: #fff;
      font-weight: bold;
      font-size: 12px;
      cursor: pointer;
      border-radius: 5px;
      padding: 5px 10px;
      transition: 0.4s;
    }

    .button__update:hover {
      background-color: #fa9770;
      color: #fff;
    }

    .button__delete {
      border: 2px solid #71fadc;
      color: #71fadc;
      background-color: #fff;
      font-weight: bold;
      font-size: 12px;
      border-radius: 10px;
      cursor: pointer;
      border-radius: 5px;
      padding: 5px 10px;
      transition: 0.4s;
    }

    .button__delete:hover {
      background-color: #71fadc;
      color: #fff;
    }
  </style>
</head>

<body>


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

      <form action="/todo/create" method="post" class="newlist">
        @csrf
        <input class='list' type="text" name="content" value="">
        <input class='submit' type="submit" value="追加">
      </form>
      <table>
        <tr>
          <th>作成日</th>
          <th>タスク名</th>
          <th>更新</th>
          <th>削除</th>
        </tr>
        <tr>
          @foreach($items as $item)
          
            <form action="/todo/update" method="POST">
              @csrf
              <td>

                <input type="hidden" name="id" value="{{$item->id}}">
                <p>{{$item->updated_at}}</p>
  
                <input type="text" name="content" value="{{$item->content}}">
                <button class="button__update">更新</button>
              </td>
            </form>
          

            <form action="/todo/delete" method="post">
            <td>
              @csrf
              <input type="hidden" name="id" value="{{$item->id}}">
              <button class="button__delete">削除</button>
            </form>
          </td>

        </tr>
        @endforeach
      </table>
      </form>
    </div>

  </div>

</body>

</html>