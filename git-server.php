<?php
function execPrint($command) {
    $result = array();
    exec($command, $result);
    print("<pre>");
    foreach ($result as $line) {
        print($line . "\n");
    }
    print("</pre>");
}

execPrint("git pull --rebase https://LeoBorash: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@github.com/LeoBorash/airbact.git");
execPrint("git status");


// всего лишь это и все :)
// add webhook from github
// get new token in developer settting  и все :}
?>
