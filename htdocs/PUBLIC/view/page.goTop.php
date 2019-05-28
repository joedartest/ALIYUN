
<div class="_FS_ _GOTOP_">
<style type="text/css">
.GOTOP {position:fixed; bottom:.5em; right:.5em; z-index:3;}
.GOTOP > .gotop {display:block; width:2em; height:2em; text-align:center; line-height:2em; background:rgba(180,180,180,.3);}
.GOTOP > .gotop {cursor:pointer;}
.GOTOP > .gotop:before {font-family:awesome; content:"\f062";}
</style>
	<div class="GOTOP">
		<span class="gotop" id="gotop"></span>
	</div>
<script type="text/javascript">
;(function(){
document.getElementById('gotop').onclick = function(){
	var top = document.body.scrollTop || document.documentElement.scrollTop;
	if(top > 0){document.body.scrollTop = document.documentElement.scrollTop = 0}
}
}());
</script>
</div>
