<?php

var_dump($_POST, json_encode($_POST));
file_put_contents("./test.txt", json_encode($_POST));
