<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>20210529</title>
</head>

<body>
  <div class="todolist">
    <p>Todo List </p>
    <form action="/todo/create" method="POST">
    <input type="text" name='text'>
      <input type="submit" value="追加">

      <table>
      @for
        <tr>
          <td>作成日</td>
          <th>{{$item['text']}}</th>
          <td>タスク名</td>
          <td>更新</td>
          <td>削除</td>
        </tr>
      </table>

  </div>
  </form>

</body>

</html>