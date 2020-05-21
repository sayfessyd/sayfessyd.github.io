$("#sc-followerCount").text(numeral("31").format('0a'));
$("#sc-plays").text(numeral("125000").format('+0,0'));

$.get( "https://www.instagram.com/sayfessyd/?__a=1", function( data ) {
  $("#ig-followerCount").text(numeral(data["graphql"]["user"]["edge_followed_by"]["count"]).format('0a'));
  $("#ig-posts").text(numeral(data["graphql"]["user"]["edge_owner_to_timeline_media"]["count"]).format('+0,0'));
});

function execute() {
  return gapi.client.youtube.channels.list({
    "part": 'statistics',
    "forUsername" : 'sayfmusic'
  })
  .then(
        function(response) {
          $("#yt-subscriberCount").text(numeral(response["result"]["items"][0]["statistics"]["subscriberCount"]).format('0.0a'));
          $("#yt-views").text(numeral(response["result"]["items"][0]["statistics"]["viewCount"]).format('+0,0'));
        },
        function(err) {
          console.error("Execute error", err);
        }
  );
}

gapi.load("client:auth2", function() {
  gapi.auth2.init({client_id: "323856446769-7r03m0d337atir63plhjkfjc6me319e0.apps.googleusercontent.com"});
  gapi.client.setApiKey("AIzaSyBxodYe7AU7AhuBoaSc-PbXlc5f2E6LG_c");
  gapi.client.load("https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest")
      .then(function() { execute(); }, function(err) { console.error("Error loading GAPI client for API", err); });
});
