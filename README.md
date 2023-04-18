# 4chan-scraper-php

This is a simple PHP script that scrapes images from a specified board on 4chan and saves them to the server. The script uses `file_get_contents()` function to fetch the page source of the board, and `preg_match_all()` function to extract all URLs from the page source. It then iterates through the extracted links and checks if they are images from the specified board. If so, it downloads the image to the server using `file_put_contents()` function.

## Usage

1. Replace the `$board` variable with the board name you want to scrape. For example, if you want to scrape the "/b/" board, you can set `$board = "b";`.
2. Run the script on your PHP server.

Note: Please be respectful of the terms of service of 4chan and ensure that you are complying with all applicable laws and regulations when using this script.

## License

This script is open source and available under the [MIT License](LICENSE).

# DONATE SRAVstudios

**BTC** - bc1q5kmqqynratseyh7v0n8q58rn7p5xejuemmc4px

**USDT(ETH)**  - 0x8558288490E11E7F900471E7D52F0b0A0B6b8572

**USDT(SOLANA)**  - 4MjmiAwiQT1cqb5fSpvdsKCabZAKxopcMsTqem9gWBqB

**USDT(POLYGON)**  - 0x8558288490E11E7F900471E7D52F0b0A0B6b8572

**ETH**  - 0x8558288490E11E7F900471E7D52F0b0A0B6b8572
