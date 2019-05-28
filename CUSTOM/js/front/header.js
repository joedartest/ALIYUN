// import Vue from 'vue/dist/vue.min';
// import EUI from 'element-ui';
// Vue.use(EUI);

import Logo from './header.partLeft.logo.vue';
import Menu from './header.partLeft.menu.vue';

new Vue({
	el : '#_HEADER_'
	,components : {
		Logo,Menu
	}
	,template : '<div class="_FS_ _HEADER_">'
					+'<div class="HEADER">'
						+'<div class="_MW_">'
							+'<div class="header clearfix">'

								+'<div class="part left clearfix">'
									// logo
									+'<Logo></Logo>'
									// menu
									+'<Menu></Menu>'
								+'</div>'

								+'<div class="part right">'

								+'</div>'
								
							+'</div>'
						+'</div>'
					+'</div>'
				+'</div>'
});









