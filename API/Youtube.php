<?php session_start();
/*https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=PLlZQf_lasi5IWSFVEuBtX3IZ-CR_oCMdn&key=AIzaSyCPZ7ufjnPxmZWK1iJfqhL6idRJvV7F6_c */
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$content = file_get_contents("https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=PLlZQf_lasi5IWSFVEuBtX3IZ-CR_oCMdn&key=AIzaSyCPZ7ufjnPxmZWK1iJfqhL6idRJvV7F6_c");
$sleep = file_get_contents("https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=PLlZQf_lasi5If_0ViTamEekt9vEXKBJfu&key=AIzaSyCPZ7ufjnPxmZWK1iJfqhL6idRJvV7F6_c");
$stress = file_get_contents("https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=https://www.youtube.com/playlist?list=PLlZQf_lasi5IVdt1csHrbhhEVC9zylZAf&key=AIzaSyCPZ7ufjnPxmZWK1iJfqhL6idRJvV7F6_c");

$result  = json_decode($content,true);
$results = json_decode ($sleep, true);


$item =  $result['items'][0]['snippet']['title'];
$items =  $results['items'][0]['snippet']['title'];

echo $item;

echo "\r\n";
