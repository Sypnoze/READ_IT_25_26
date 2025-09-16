<?php
session_start();



require_once 'constantes.php';   // si constantes.php est dans le même dossier que init.php
require_once 'bouncer.php';      // idem pour bouncer.php
require_once '../app/config/params.php'; // params est toujours dans app/config
require_once 'connection.php';   // connection.php est dans core
require_once 'helpers.php';      // helpers.php est dans core