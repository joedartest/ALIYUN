const path = require('path');
const vueLoaderPlugin = require('vue-loader/lib/plugin');

module.exports = {
	// development | production
	mode : 'development'
	,devtool : 'inline-source-map'
	,entry : {
		header : './CUSTOM/js/front/header.js'
	}
	,output : {
		filename : '[name].js'
		,path : path.resolve(__dirname,'htdocs/ROOTAUTISM/CUSTOM/js/front')
	}
	,plugins : [
		new vueLoaderPlugin()
	]
	
	,module : {
		rules : [
			{
				test : /\.vue$/,
				use : {
					loader : 'vue-loader'
				}
			}
		]
	}
};