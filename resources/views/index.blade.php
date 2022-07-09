
  <form action="/" method="post">
  @csrf
  <label for="name">氏名</label><br>
  <input type="text" name="name" id="name"><br>
  <label for="mail">メールアドレス</label><br>
  <input type="text" name="mail" id="mail"><br>
  <input type="submit" value="送信する">
  </form>
