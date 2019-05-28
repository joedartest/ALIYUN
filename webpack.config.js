const path = require('path');
const vueLoaderPlugin = require('vue-loader/lib/plugin');

module.exports = {
	// development | production
	mode : 'development'
	,devtool : 'inline-source-map'
	,entry : {
		header : './CUSTOM/js/header.js'
	}
	,output : {
		filename : '[name].js'
		,path : path.resolve(__dirname,'htdocs/ROOTAUTISM/CUSTOM/js')
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
			,{
				test : /\.s(a|c)ss$/,
				use : ['style-loader','css-loader','sass-loader']
			}
			,{
				test : /\.less$/,
				use : ['style-loader','css-loader','less-loader']
			}
			,{
				test : /\.css$/,
				use : ['style-loader','css-loader']
			}
		]
	}
};
