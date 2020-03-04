<?php
//strip function removes all the tags from the words.....
    echo ("<b>This is without using strip</b>")."<br>";
    echo 'this is with using strip '.strip_tags("Hello <b>world!</b>");
?>