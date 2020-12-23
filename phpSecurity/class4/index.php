<html>
    <form method="POST">
        <input type="text" name="search">   
        <input type="submit" value="Send">
    </form>
</html>

<?php
// XSS

if(!empty($_POST['search'])){

    //Block all html tags what you want, and you can pass after comma ',' what you want to accept, I accepted the <strong> tag
    echo strip_tags($_POST['search'], "<strong>");

    //Convert of your data to text
    echo htmlentities($_POST['search']);
}

