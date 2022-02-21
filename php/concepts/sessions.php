<?php

//SESSIONS
session_start()
echo session_id();

echo session_commit("hello");
echo session_id();

session_destroy();
