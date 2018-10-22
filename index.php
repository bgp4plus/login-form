<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ログインフォーム</title>
</head>

<body>
  <h1>ログインフォーム</h1>
  <form action="userpage.php" method="post">
    <table>
      <tr>
        <td> ユーザID
        </td>
        <td><input type="text" name="userid"></td>
      <tr>
        <td> パスワード</td>
        <td><input type="password" name="userpass"></td>
      </tr>
      <tr>
        <td align=right colspan=2><input type="submit" value="ログイン"></td>
      </tr>
    </table>
  </form>
</body>

</html>