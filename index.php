<?php
    //donate SRAVstudios
    //BTC - bc1q5kmqqynratseyh7v0n8q58rn7p5xejuemmc4px

    //USDT(ETH) - 0x8558288490E11E7F900471E7D52F0b0A0B6b8572

    //USDT(SOLANA) - 4MjmiAwiQT1cqb5fSpvdsKCabZAKxopcMsTqem9gWBqB

//    USDT(POLYGON) - 0x8558288490E11E7F900471E7D52F0b0A0B6b8572

    ETH - 0x8558288490E11E7F900471E7D52F0b0A0B6b8572
    $board = "b"; // replace this with the board name you want to scrape
    $url = "https://boards.4chan.org/".$board."/"; // URL of the board
    $page = file_get_contents($url); // get the page source of the board
    preg_match_all('~https?://[^\s<>"]+|www\.[^\s<>"]+~i', $page, $matches); // match all URLs in the page source
    $links = array_unique($matches[0]); // remove duplicates
    foreach ($links as $link) {
        if (strpos($link, "i.4cdn.org/".$board."/") !== false) { // check if the link is an image in the board
            $filename = basename($link); // get the filename of the image
            file_put_contents($filename, fopen($link, 'r')); // save the image to the server
        }
    }
?>

