var request = require('request');
var FlatApi = require('flat-api');
const fs = require('fs');

FlatApi.ApiClient.instance.authentications.OAuth2.accessToken = '24af1cb172466776968f03045b74907a35680e80b4265cd827b6a44a82b68a36b13c90e50c6e3206c4d4bec058ef370e26e54d1efb9d103bdd03487026bf7d2f';

// var scoreToImport = 'http://52.14.221.56/mxl_files/test2.xml';
var argument = process.argv[2];
var scoreToImport = argument.toString();

// Download a MusicXML "Hello World"
request(scoreToImport, function (error, response, body) {
  // Create the document and print the meta returned by the API
  new FlatApi.ScoreApi().createScore({
    privacy: 'public',
    data: body
  }, function (error, data, response) {
    if (error) {
      console.error(error);
    }
    else {
      console.log('Successfully create the document:', data);
      var temp = JSON.stringify(data);
      var text = [];
      var test = JSON.parse(data);
      var i;
      for (i = 7; i < 31; i++) {
          text += temp[i];
          }
      console.log(text);
      // add a line to a lyric file, using appendFile
      fs.writeFile('/opt/bitnami/apache2/htdocs/song_list.txt', text, (err) => {
          if (err){
            console.log(err);
          }
          console.log('The file was updated!');
      });
    }
  });
});
