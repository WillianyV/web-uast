<?php

    session_start();
    unset($_SESSION["user_logado"]);
    header("location:/login");