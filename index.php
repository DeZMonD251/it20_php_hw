<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <title>Document</title>
  <?php $number = (int)1230; ?>
</head>

<body>
  <div class="content">
    <span>Comment</span>
    <form method="post" name="index">
      <input type="text" name="review_login" placeholder="Login">
      <textarea name="review_text"></textarea>
      <input type="submit" name=ok value="Отправить">
    </form>
    <?php
    if (isset($_POST['ok'])) {
      $txtarea = $_REQUEST["review_text"];
      $text = $_REQUEST["review_login"];?>
      <span>number: <?php echo $number ?></span>
      <span>textarea: <?php echo $txtarea ?></span>
      <span>text: <?php echo  $text ?></span>
      <?php
    }
    ?>
  </div>
</body>

</body>

</html>