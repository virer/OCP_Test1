<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Hello World <?php if( getenv('ENV') != "") { echo getenv('ENV'); }</title>
  </head>
  <body>
    <?php if ($_POST['who'] != '') {?>
      <h1>Hello <?php echo htmlspecialchars($_POST['who']); ?></h1>
      <a href="index.php">Greet someone else</a>
    <?php } else { ?>
      <form class="greetingForm" action="index.php" method="post">
        <label for="who">Say hello to</label>
        <input type="text" name="who">
        <input type="submit" name="greet" value="Say Hello">
      </form>
    <?php } ?>
  <br>
  <br>
  Original work: <a href="https://github.com/rmuch/docker-php-hello-world.git">https://github.com/rmuch/docker-php-hello-world.git</a>
  </body>
</html>
