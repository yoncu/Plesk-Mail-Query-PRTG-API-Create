<?php
echo '<?xml version="1.0" encoding="utf-8"?><int xmlns="http://tempuri.org/">'.trim(shell_exec('/usr/local/psa/admin/bin/mailqueuemng -s | grep \'^Messages total:\s\+[0-9]\+$\'|grep -o "[0-9]\+$"')).'</int>';
