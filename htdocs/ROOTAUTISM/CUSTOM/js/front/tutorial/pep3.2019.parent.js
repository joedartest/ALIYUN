var PEP3PARENT1 = new Vue({
	el : '._TUTORIAL_.WORD.p1'
});



//========================================
//----------------------------------------
// 				PEP3PARENT2
//----------------------------------------
//========================================
// ref="conTypeLanguage"
Vue.component('con-type-language',{
	data : function(){return {val : '', level : ''}}
	,template : '<div class="con">'
					+'<div class="text"><span>语言障碍</span></div>'
					+'<div class="radioCheckbox inline">'
						+'<label><input type="radio" name="type_language" value="1" v-model="val"><span>是</span></label>'
						+'<label><input type="radio" name="type_language" value="2" v-model="val"><span>否</span></label>'
						+'<label><input type="radio" name="type_language" value="0" v-model="val"><span>不知道</span></label>'
					+'</div>'
					+'<div class="text" v-show="val == 1"><span>对于孩子发展的影响程度</span></div>'
					+'<div class="radioCheckbox inline" v-show="val == 1">'
						+'<label><input type="radio" name="type_language_level" value="1" v-model="level"><span>轻微</span></label>'
						+'<label><input type="radio" name="type_language_level" value="2" v-model="level"><span>中度</span></label>'
						+'<label><input type="radio" name="type_language_level" value="3" v-model="level"><span>重度</span></label>'
					+'</div>'
				+'</div>'
});
// ref="conTypeAutism"
Vue.component('con-type-autism',{
	data : function(){return {val : '', level : ''}}
	,template : '<div class="con">'
					+'<div class="text"><span>自闭症</span></div>'
					+'<div class="radioCheckbox inline">'
						+'<label><input type="radio" name="type_autism" value="1" v-model="val"><span>是</span></label>'
						+'<label><input type="radio" name="type_autism" value="2" v-model="val"><span>否</span></label>'
						+'<label><input type="radio" name="type_autism" value="0" v-model="val"><span>不知道</span></label>'
					+'</div>'
					+'<div class="text" v-show="val == 1"><span>对于孩子发展的影响程度</span></div>'
					+'<div class="radioCheckbox inline" v-show="val == 1">'
						+'<label><input type="radio" name="type_autism_level" value="1" v-model="level"><span>轻微</span></label>'
						+'<label><input type="radio" name="type_autism_level" value="2" v-model="level"><span>中度</span></label>'
						+'<label><input type="radio" name="type_autism_level" value="3" v-model="level"><span>重度</span></label>'
					+'</div>'
				+'</div>'
});
// ref="conTypeMood"
Vue.component('con-type-mood',{
	data : function(){return {val : '', level : ''}}
	,template : '<div class="con">'
					+'<div class="text"><span>情绪困扰</span></div>'
					+'<div class="radioCheckbox inline">'
						+'<label><input type="radio" name="type_mood" value="1" v-model="val"><span>是</span></label>'
						+'<label><input type="radio" name="type_mood" value="2" v-model="val"><span>否</span></label>'
						+'<label><input type="radio" name="type_mood" value="0" v-model="val"><span>不知道</span></label>'
					+'</div>'
					+'<div class="text" v-show="val == 1"><span>对于孩子发展的影响程度</span></div>'
					+'<div class="radioCheckbox inline" v-show="val == 1">'
						+'<label><input type="radio" name="type_mood_level" value="1" v-model="level"><span>轻微</span></label>'
						+'<label><input type="radio" name="type_mood_level" value="2" v-model="level"><span>中度</span></label>'
						+'<label><input type="radio" name="type_mood_level" value="3" v-model="level"><span>重度</span></label>'
					+'</div>'
				+'</div>'
});
// ref="conTypeStudy"
Vue.component('con-type-study',{
	data : function(){return {val : '', level : ''}}
	,template : '<div class="con">'
					+'<div class="text"><span>学习障碍</span></div>'
					+'<div class="radioCheckbox inline">'
						+'<label><input type="radio" name="type_study" value="1" v-model="val"><span>是</span></label>'
						+'<label><input type="radio" name="type_study" value="2" v-model="val"><span>否</span></label>'
						+'<label><input type="radio" name="type_study" value="0" v-model="val"><span>不知道</span></label>'
					+'</div>'
					+'<div class="text" v-show="val == 1"><span>对于孩子发展的影响程度</span></div>'
					+'<div class="radioCheckbox inline" v-show="val == 1">'
						+'<label><input type="radio" name="type_study_level" value="1" v-model="level"><span>轻微</span></label>'
						+'<label><input type="radio" name="type_study_level" value="2" v-model="level"><span>中度</span></label>'
						+'<label><input type="radio" name="type_study_level" value="3" v-model="level"><span>重度</span></label>'
					+'</div>'
				+'</div>'
});
// ref="conTypeIntellect"
Vue.component('con-type-intellect',{
	data : function(){return {val : '', level : ''}}
	,template : '<div class="con">'
					+'<div class="text"><span>智力迟缓</span></div>'
					+'<div class="radioCheckbox inline">'
						+'<label><input type="radio" name="type_intellect" value="1" v-model="val"><span>是</span></label>'
						+'<label><input type="radio" name="type_intellect" value="2" v-model="val"><span>否</span></label>'
						+'<label><input type="radio" name="type_intellect" value="0" v-model="val"><span>不知道</span></label>'
					+'</div>'
					+'<div class="text" v-show="val == 1"><span>对于孩子发展的影响程度</span></div>'
					+'<div class="radioCheckbox inline" v-show="val == 1">'
						+'<label><input type="radio" name="type_intellect_level" value="1" v-model="level"><span>轻微</span></label>'
						+'<label><input type="radio" name="type_intellect_level" value="2" v-model="level"><span>中度</span></label>'
						+'<label><input type="radio" name="type_intellect_level" value="3" v-model="level"><span>重度</span></label>'
					+'</div>'
				+'</div>'
});
// ref="conTypeAdhd"
Vue.component('con-type-adhd',{
	data : function(){return {val : '', level : ''}}
	,template : '<div class="con">'
					+'<div class="text"><span>专注力不足/过度活跃症</span></div>'
					+'<div class="radioCheckbox inline">'
						+'<label><input type="radio" name="type_adhd" value="1" v-model="val"><span>是</span></label>'
						+'<label><input type="radio" name="type_adhd" value="2" v-model="val"><span>否</span></label>'
						+'<label><input type="radio" name="type_adhd" value="0" v-model="val"><span>不知道</span></label>'
					+'</div>'
					+'<div class="text" v-show="val == 1"><span>对于孩子发展的影响程度</span></div>'
					+'<div class="radioCheckbox inline" v-show="val == 1">'
						+'<label><input type="radio" name="type_adhd_level" value="1" v-model="level"><span>轻微</span></label>'
						+'<label><input type="radio" name="type_adhd_level" value="2" v-model="level"><span>中度</span></label>'
						+'<label><input type="radio" name="type_adhd_level" value="3" v-model="level"><span>重度</span></label>'
					+'</div>'
				+'</div>'
});
// ref="conTypeAristolochia"
Vue.component('con-type-aristolochia',{
	data : function(){return {val : '', level : ''}}
	,template : '<div class="con">'
					+'<div class="text"><span>亚氏保加症</span></div>'
					+'<div class="radioCheckbox inline">'
						+'<label><input type="radio" name="type_aristolochia" value="1" v-model="val"><span>是</span></label>'
						+'<label><input type="radio" name="type_aristolochia" value="2" v-model="val"><span>否</span></label>'
						+'<label><input type="radio" name="type_aristolochia" value="0" v-model="val"><span>不知道</span></label>'
					+'</div>'
					+'<div class="text" v-show="val == 1"><span>对于孩子发展的影响程度</span></div>'
					+'<div class="radioCheckbox inline" v-show="val == 1">'
						+'<label><input type="radio" name="type_aristolochia_level" value="1" v-model="level"><span>轻微</span></label>'
						+'<label><input type="radio" name="type_aristolochia_level" value="2" v-model="level"><span>中度</span></label>'
						+'<label><input type="radio" name="type_aristolochia_level" value="3" v-model="level"><span>重度</span></label>'
					+'</div>'
				+'</div>'
});
// ref="conTypeSchizophrenia"
Vue.component('con-type-schizophrenia',{
	data : function(){return {val : '', level : ''}}
	,template : '<div class="con">'
					+'<div class="text"><span>精神分裂症</span></div>'
					+'<div class="radioCheckbox inline">'
						+'<label><input type="radio" name="type_schizophrenia" value="1" v-model="val"><span>是</span></label>'
						+'<label><input type="radio" name="type_schizophrenia" value="2" v-model="val"><span>否</span></label>'
						+'<label><input type="radio" name="type_schizophrenia" value="0" v-model="val"><span>不知道</span></label>'
					+'</div>'
					+'<div class="text" v-show="val == 1"><span>对于孩子发展的影响程度</span></div>'
					+'<div class="radioCheckbox inline" v-show="val == 1">'
						+'<label><input type="radio" name="type_schizophrenia_level" value="1" v-model="level"><span>轻微</span></label>'
						+'<label><input type="radio" name="type_schizophrenia_level" value="2" v-model="level"><span>中度</span></label>'
						+'<label><input type="radio" name="type_schizophrenia_level" value="3" v-model="level"><span>重度</span></label>'
					+'</div>'
				+'</div>'
});
// ref="conTypeDevelop"
Vue.component('con-type-develop',{
	data : function(){return {val : '', level : ''}}
	,template : '<div class="con">'
					+'<div class="text"><span>广泛发展障碍</span></div>'
					+'<div class="radioCheckbox inline">'
						+'<label><input type="radio" name="type_develop" value="1" v-model="val"><span>是</span></label>'
						+'<label><input type="radio" name="type_develop" value="2" v-model="val"><span>否</span></label>'
						+'<label><input type="radio" name="type_develop" value="0" v-model="val"><span>不知道</span></label>'
					+'</div>'
					+'<div class="text" v-show="val == 1"><span>对于孩子发展的影响程度</span></div>'
					+'<div class="radioCheckbox inline" v-show="val == 1">'
						+'<label><input type="radio" name="type_develop_level" value="1" v-model="level"><span>轻微</span></label>'
						+'<label><input type="radio" name="type_develop_level" value="2" v-model="level"><span>中度</span></label>'
						+'<label><input type="radio" name="type_develop_level" value="3" v-model="level"><span>重度</span></label>'
					+'</div>'
				+'</div>'
});
// ref="conTypeLays"
Vue.component('con-type-lays',{
	data : function(){return {val : '', level : ''}}
	,template : '<div class="con">'
					+'<div class="text"><span>蕾特氏症</span></div>'
					+'<div class="radioCheckbox inline">'
						+'<label><input type="radio" name="type_lays" value="1" v-model="val"><span>是</span></label>'
						+'<label><input type="radio" name="type_lays" value="2" v-model="val"><span>否</span></label>'
						+'<label><input type="radio" name="type_lays" value="0" v-model="val"><span>不知道</span></label>'
					+'</div>'
					+'<div class="text" v-show="val == 1"><span>对于孩子发展的影响程度</span></div>'
					+'<div class="radioCheckbox inline" v-show="val == 1">'
						+'<label><input type="radio" name="type_lays_level" value="1" v-model="level"><span>轻微</span></label>'
						+'<label><input type="radio" name="type_lays_level" value="2" v-model="level"><span>中度</span></label>'
						+'<label><input type="radio" name="type_lays_level" value="3" v-model="level"><span>重度</span></label>'
					+'</div>'
				+'</div>'
});
var PEP3PARENT2 = new Vue({
	el : '._TUTORIAL_.WORD.p2'
});




//========================================
//----------------------------------------
// 				PEP3PARENT3
//----------------------------------------
//========================================
// ref="radio31"
Vue.component('radio-3-1',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="3_1" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="3_1" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="3_1" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio32"
Vue.component('radio-3-2',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="3_2" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="3_2" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="3_2" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio33"
Vue.component('radio-3-3',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="3_3" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="3_3" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="3_3" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio34"
Vue.component('radio-3-4',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="3_4" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="3_4" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="3_4" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio35"
Vue.component('radio-3-5',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="3_5" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="3_5" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="3_5" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio36"
Vue.component('radio-3-6',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="3_6" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="3_6" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="3_6" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio37"
Vue.component('radio-3-7',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="3_7" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="3_7" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="3_7" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio38"
Vue.component('radio-3-8',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="3_8" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="3_8" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="3_8" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio39"
Vue.component('radio-3-9',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="3_9" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="3_9" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="3_9" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio310"
Vue.component('radio-3-10',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="3_10" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="3_10" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="3_10" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});

var PEP3PARENT3 = new Vue({
	el : '._TUTORIAL_.WORD.p3'
});







//========================================
//----------------------------------------
// 				PEP3PARENT4
//----------------------------------------
//========================================
// ref="radio41"
Vue.component('radio-4-1',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="4_1" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="4_1" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="4_1" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio42"
Vue.component('radio-4-2',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="4_2" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="4_2" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="4_2" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio43"
Vue.component('radio-4-3',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="4_3" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="4_3" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="4_3" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio44"
Vue.component('radio-4-4',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="4_4" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="4_4" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="4_4" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio45"
Vue.component('radio-4-5',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="4_5" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="4_5" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="4_5" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio46"
Vue.component('radio-4-6',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="4_6" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="4_6" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="4_6" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio47"
Vue.component('radio-4-7',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="4_7" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="4_7" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="4_7" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio48"
Vue.component('radio-4-8',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="4_8" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="4_8" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="4_8" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio49"
Vue.component('radio-4-9',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="4_9" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="4_9" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="4_9" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio410"
Vue.component('radio-4-10',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="4_10" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="4_10" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="4_10" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio411"
Vue.component('radio-4-11',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="4_11" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="4_11" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="4_11" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio412"
Vue.component('radio-4-12',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="4_12" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="4_12" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="4_12" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio413"
Vue.component('radio-4-13',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="4_13" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="4_13" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="4_13" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});

var PEP3PARENT4 = new Vue({
	el : '._TUTORIAL_.WORD.p4'
});







//========================================
//----------------------------------------
// 				PEP3PARENT5
//----------------------------------------
//========================================
// ref="radio51"
Vue.component('radio-5-1',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="5_1" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="5_1" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="5_1" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio52"
Vue.component('radio-5-2',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="5_2" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="5_2" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="5_2" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio53"
Vue.component('radio-5-3',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="5_3" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="5_3" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="5_3" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio54"
Vue.component('radio-5-4',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="5_4" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="5_4" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="5_4" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio55"
Vue.component('radio-5-5',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="5_5" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="5_5" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="5_5" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio56"
Vue.component('radio-5-6',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="5_6" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="5_6" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="5_6" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio57"
Vue.component('radio-5-7',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="5_7" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="5_7" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="5_7" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio58"
Vue.component('radio-5-8',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="5_8" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="5_8" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="5_8" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio59"
Vue.component('radio-5-9',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="5_9" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="5_9" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="5_9" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio510"
Vue.component('radio-5-10',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="5_10" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="5_10" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="5_10" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio511"
Vue.component('radio-5-11',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="5_11" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="5_11" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="5_11" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio512"
Vue.component('radio-5-12',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="5_12" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="5_12" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="5_12" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio513"
Vue.component('radio-5-13',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="5_13" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="5_13" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="5_13" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio514"
Vue.component('radio-5-14',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="5_14" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="5_14" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="5_14" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});
// ref="radio515"
Vue.component('radio-5-15',{
	data : function(){return {val : ''}}
	,template : '<div class="radioCheckbox block">'
					+'<label><input type="radio" name="5_15" value="0" v-model="val"><span>没有出现</span></label>'
					+'<label><input type="radio" name="5_15" value="1" v-model="val"><span>有出现，程度(轻微、中度)</span></label>'
					+'<label><input type="radio" name="5_15" value="2" v-model="val"><span>有出现，程度(重度)</span></label>'
				+'</div>'
});

var PEP3PARENT5 = new Vue({
	el : '._TUTORIAL_.WORD.p5'
});

