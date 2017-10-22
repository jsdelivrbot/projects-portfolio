
const port_env = process.env.PORT;
const port = Number(port_env);

if(!port || port < 1000 || port > 65535)
	throw new Error("Invalid Port: " + port_env);

module.exports = port;
