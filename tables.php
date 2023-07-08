<?php
  

$memy="CREATE TABLE memy(

        id INT (255) AUTO_INCREMENT  NOT NULL,
        article  TEXT,
        picture VARCHAR (200),
        timestamped TIMESTAMP,
        primary key (id)
        





)";

$conn->query($memy);


$filmy="CREATE TABLE filmy(

    id INT (255) AUTO_INCREMENT  NOT NULL,
    article  TEXT,
    filmy VARCHAR (200),
    timestamped TIMESTAMP,
    primary key (id)
    

)";

$conn->query($filmy);


$gify="CREATE TABLE gify(

    id INT (255) AUTO_INCREMENT  NOT NULL,
    article  TEXT,
    gify VARCHAR (200),
    timestamped TIMESTAMP,
    primary key (id)
    

)";

$conn->query($gify);



?>