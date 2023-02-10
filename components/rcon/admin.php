<?
require_once('Rcon.php');

$host = 'localhost';
$port = 25575;
$password = '741741';
$timeout = 3;
$command = $_POST['whitelistName'];
$result = "whitelist add " . $command . "";

use Thedudeguy\Rcon;

$rcon = new Rcon($host, $port, $password, $timeout);

if ($rcon->connect()) {
   $rcon->sendCommand($result);
}

header('location: /');
