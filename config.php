<?php

const SERVER = "localhost";
const WORLD = "bruspub";
const LOGIN = "root";
const PASS = "root";

$connect = mysqli_connect(SERVER, LOGIN, PASS, WORLD) or die("Ошибка соединения с базой данных!");