<?php

require __DIR__ . "/vendor/autoload.php";

$client = new Google\Client;

$client->setClientId("74571568183-ve0iskoi3irb1gpt38the5q63vntdr3n.apps.googleusercontent.com");
$client->setClientSecret("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");
$client->setRedirectUri("http://localhost/redirect.php");

if ( ! isset($_GET["code"])) {

    exit("Login failed");

}

$token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);

$client->setAccessToken($token["access_token"]);

$oauth = new Google\Service\Oauth2($client);

$userinfo = $oauth->userinfo->get();

var_dump(
    $userinfo->email,
    $userinfo->familyName,
    $userinfo->givenName,
    $userinfo->name
);