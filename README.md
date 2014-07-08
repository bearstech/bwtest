bwtest
======
Python script and basic server configurations to evaluate bandwith, based on
https://github.com/fopina/pyspeedtest

Server side
-----------
In /var/www/test/
* dd if=/dev/urandom of=5M  bs=5M  count=1
* dd if=/dev/urandom of=10M bs=10M count=1
* echo > 0M
* copy upload.php


Client side
-----------
Launch with :
```
./bwtest.py --host test.XXX.bearstech.com [-v] [-r N] [-m N] [-d N]
```
* -v: verbose
* -r N: N runs
* -m N: mode N, 1: download, 2: upload, 4: ping, 1+2+4=7: all modes (default)
* -d N: httpconnection debug level (default 0)
