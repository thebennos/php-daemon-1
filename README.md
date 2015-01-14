# php-daemon
A PHP daemon using the 'upstart' service.

Taken from the article: ["How to create a PHP linux daemon (service)"](http://blog.bobbyallen.me/2014/06/02/how-to-create-a-php-linux-daemon-service/)

* [php-daemon.conf](php-daemon.conf) - Place in the directory `/etc/init`.  On line 9 in use the **full path** to the PHP file.
* [php-daemon.php](php-daemon.conf) - Place in any directory you want.

Use the commands below to start, stop and view the status of the new linux daemon:
```
sudo status php-daemon
sudo start php-daemon
sudo stop php-daemon
```
