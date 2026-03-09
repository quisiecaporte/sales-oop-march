<?php

    session_start();
    session_unset();
    session_destroy();

    header("location: ../views");
    exit;

// This is from github repo

// This is from local folder
