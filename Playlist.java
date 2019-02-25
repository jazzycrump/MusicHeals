import javax.print.DocFlavor.URL;

public class Playlist {
	
char request = require("request");
String user_id = "yh8ma7dvhwnax8ma850ilc8bv";
String token = "Kadera123";
String playlists_url = "https://api.spotify.com/v1/"+user_id+"/playlists";

Playlist (URL : playlist_url, headers:{"Authorization":token}) {
	if(res) {
		String playlists = JSON.parse(res.body);
	}
		String playlist_url = playlists.items[0].href
				request {url: playlist_url, headers:{"Authorization": token}}
	if(res){
		var playlist = JSON.parse(res.body);
		console.log("playlist: "+playlist.name);
		playlist.tracks.forEach(function(track) {
			console.log(track.track.name);
private char require(String string) {
	// TODO Auto-generated method stub
	return 0;
	}
}