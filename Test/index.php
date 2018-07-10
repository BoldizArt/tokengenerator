<?php
require '../vendor/autoload.php';

use Boldizart\Tokengenerator;

$token = new Tokengenerator();

print "<center><h1>Token generator test</h1></center><hr />";

// Create an 5, an 8 and an 16 characther lenght token
print "<h3>5 character length token:</h3>";
print $token->token(5);
print "<h3>8 character length token:</h3>";
print $token->token(8);
print "<h3>16 character length token:</h3>";
print $token->token(16);
print "<br /><hr />";

// Create a token with randon length which contains only lowercase characthers
print "<h3>Only lowercase:</h3>";
print $token->token(0, true, false, false);
print "<br /><hr /><br />";

// Create a token with randon length which contains only uppercase characthers
print "<h3>Only uppercase:</h3>";
print $token->token(0, false, true, false);
print "<br /><hr /><br />";

// Create a token with randon length which contains only numbers
print "<h3>Only numbers:</h3>";
print $token->token(0, false, false, true);
print "<br /><hr /><br />";

// Create a token with randon length which contains only special characthers
print "<h3>Only special characthers:</h3>";
print $token->token(0, false, false, false, true);
print "<br /><hr /><br />";

// Create a random token with randon length
print "<h3>Random token:</h3>";
print $token->token(0, true, true, true, true);
print "<br /><hr /><br />";
