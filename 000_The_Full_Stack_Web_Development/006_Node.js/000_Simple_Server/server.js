var http = require('http');
var fs = require('fs');
var port = require('./get_port');
var host = '0.0.0.0';


fs.readFile('./static/index.html', function(err, html){
	if(err){
		console.log(err);
		return;
	}

	var server = http.createServer(function(req, res){
		res.statusCode = 200;
		res.setHeader('Content-Type', 'text/html');
		res.write(html);
		res.end();
	});

	server.listen(port, host, function(){
		console.log('Server running on port '+port);
	});
});
