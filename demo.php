<?php

include "Status.php";

use io\clonalejandro\StatusApi;

/**
 * Created by alejandrorioscalera
 * 11/05/2018
 *
 * -- SOCIAL NETWORKS --
 *
 * GitHub: https://github.com/clonalejandro or @clonalejandro
 * Website: https://clonalejandro.me/
 * Twitter: https://twitter.com/clonalejandro11/ or @clonalejandro11
 * Keybase: https://keybase.io/clonalejandro/
 *
 * -- LICENSE --
 *
 * All rights reserved for clonalejandro ©clonastatus 2017 / 2018
 */

$req = new StatusApi('clonalejandro.me');

if ($req->isOnline()) echo "Online";
else echo "Offline";
