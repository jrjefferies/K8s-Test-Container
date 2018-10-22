<?php
error_reporting(0);
session_start();
#$servername = getenv(strtoupper(getenv("DATABASE_SERVICE_NAME"))."_SERVICE_HOST");
#$username = getenv("DATABASE_USER");
#$password = getenv("DATABASE_PASSWORD");

// Create connection
#$conn = new mysqli($servername, $username, $password);

// Check connection
#if ($conn->connect_error) {
#    header("HTTP/1.1 503 Service Unavailable");
#    die("Connection failed: " . $conn->connect_error);
#}
#echo "OK";
#session_register("count");

$contHostname = getenv('HOSTNAME');

echo "<p>The containers hostname is <b>$contHostname</b>.</p>";
echo "<p></p>";

if (!isset($_SESSION))
{
        $_SESSION["count"] = 0;
        echo "<p>Counter initialized</p>\n";
}
else { $_SESSION["count"]++; }

echo "<p>Your browsers refresh count is <b>$_SESSION[count]</b></p>".
        "<p>please reload this page to increment</p>";

$ip = (getenv(HTTP_X_FORWARDED_FOR))
? getenv(HTTP_X_FORWARDED_FOR)
: getenv(REMOTE_ADDR);

echo "<p>This webserver sees your IP client address as <b>$ip</b>.</p>";


echo "<p></p>";

if ($host = getenv('HEALTHCHECK1'))
{
  $command = "./web_health.py $host";
  exec($command, $out, $status);
  echo "<p> The server status for $host is $out[0]</p>";
  echo $status;
  unset($out);
}

if ($host = getenv('HEALTHCHECK2'))
{
  $command = "./web_health.py $host";
  exec($command, $out, $status);
  echo "<p> The server status for $host is $out[0]</p>";
  echo $status;
  unset($out);
}

if ($host = getenv('HEALTHCHECK3'))
{
  $command = "./web_health.py $host";
  exec($command, $out, $status);
  echo "<p> The server status for $host is $out[0]</p>";
  echo $status;
  unset($out);
}


?>

