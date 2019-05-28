// webpack.config.js

const path = requrie('path');

module.exports = {
	entry : {
		app : './src/app.js'
		,print : './src/print.js'
	}
	,output : {
		filename : '[name].js'
		path : path.resolve(__dirname,'')
	}
};