<?php
//Session atack


session_start();

session_destroy();

session_start();
// Generating new session id by reload
session_regenerate_id();

echo session_id();