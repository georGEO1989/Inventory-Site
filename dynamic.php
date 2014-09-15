<?php
require_once('includes/config.php');
require('layout/header.php');

if (isset($_GET['id'])) {
    $id = mysql_real_escape_string($_GET['id']);
    $title = '$id';
    $q = "SELECT
            *
        FROM
            `scanners`
        WHERE
            `id` = '$id'
        LIMIT 1;";
    $q = mysql_query($q);
    if (mysql_num_rows($q) > 0) {
        $result = mysql_fetch_assoc($q);
        echo "<div class=\"article\">".
                "<div class=\"title\">".$result['title']."</div>".
                "<div class=\"body\">".$result['body']."</div>".
                "<div class=\"cat\"><a href=\"".$result['cat'].".php"."\">"."Category: ".$result['cat']."</a></div>".
                "<div class=\"author\">"."Author: ".$result['author']."</div>".
                "<div class=\"dateTime\">"."Date: ".$result['date']."</div>".
            "</div>";
    }
    else {
        /* Article not found */
    }
}
?>