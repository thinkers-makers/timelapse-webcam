# timelapse-webcam
A series of scripts to use a Raspberry Pi as a timelapse webcam

## Getting Started

These instructions will get the project up and running on a Raspberry Pi.

### Prerequisites
* Raspberry Pi running Raspbain OS
* Wifi or wired networking
* Webcam (USB)
* Update Index.php with your rasperry pi hostname
* Update rsync.ph with your raspberry pi hostname & local storage address


### Installing
* Make sure you've enabled ssh on the pi
* Make sure you've enabled bonjour on the pi (should be out of the box in Raspbian)
* Get apache webserver up and running.
* Save 'webcam.sh' to the home/Documents folder
* Copy index.php to var/www/html
* Ensure there is a director var/www/html/webcam and that the 'pi' user has write access


### Running
* Ensure whats in the crontab.txt file is in the crontab on the pi ('crontab -e' then paste it in.)
* Manually run a test with ./webcam.sh at any time (on the Pi)
* If early images at the start of the day are washed out, try using the 'warmup.sh' script and use the additional trigger in crontab.txt

Viewing
Navigate to:

http://[hostname.local]/index.php and you will see the most recent image and the file name.
Run 'rsync-pi.sh' to remove the files from the Pi and store them locally.
