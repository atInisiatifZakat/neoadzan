<?php
/*
BISMILLAAHIRRAHMAANIRRAHIIM - In the Name of Allah, Most Gracious, Most Merciful
================================================================================
FILENAME     : neoadzan_js.php
PURPOSE      : generate js script 
AUTHOR       : CAHYA DSN
CREATED DATE : 2018-01-25
UPDATED DATE : 2021-03-07
DEMO SITE    : http://neoadzan.cahyadsn.com
SOURCE CODE  : https://github.com/cahyadsn/neoadzan
================================================================================
This program is free software; you can redistribute it and/or modify it under the
terms of the MIT License.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

See the MIT License for more details

copyright (c) 2018-2021 by cahya dsn; cahyadsn@gmail.com
================================================================================*/
session_start();
header("Content-type: text/javascript");
$c=isset($_SESSION['c'])?$_SESSION['c']:(isset($_GET['c'])?$_GET['c']:'indigo');
if(isset($_SESSION['author']) && $_SESSION['author']=='cahyadsn'){
	$v=$_GET['v'];
	session_destroy();
} else {
	die('illegal call');
}
?>
var pesan=function(msg){
	$("#msg_box").html(msg);
	$("#msg_box").addClass("w3-red");
	$("#msg_box").show();
	$("#msg_box").delay(2000).fadeOut();			
}
$(document).ready(function(){
   //--
   $('a.color').on('click',function() {
       var a = $(this).attr('data-value');
       document.getElementById('adzan_css').href = 'css/w3-theme-' + a + '.css';
       $.post('change.color.php', {
          'color': a
       })
    });
    //--
	$('.slcProv').on('change',function(){
		$('div#preload').show();
		var url="js/neoadzan_ajax.php?sid="+Math.random();
		$.post(
			url,
			{id:$(this).val(),y:$('#y').val(),m:$('#m').val()},
			function(d){
				if(!d.status){
					alert(d.status);
				}else{
					$('#kota').html(d.opt);
					$('#sch').html(d.data.sch);
					$('.sprov').html('Provinsi '+d.data.nama);
					$('.skab').html('');
					$('.slat').html(d.data.lat);
					$('.slng').html(d.data.lng);
					$('.stz').html(d.data.tz)
				}
				$('div#preload').hide();
			}
		);
	});
	$('.slcKab').on('change',function(){
		$('div#preload').show();
		var url="js/neoadzan_ajax.php?sid="+Math.random();
		$.post(
			url,
			{id:$(this).val(),y:$('#y').val(),m:$('#m').val()},
			function(d){
				if(!d.status){
					alert(d.status);
				}else{
					//console.log(d);
					$('#sch').html(d.data.sch);
					$('.skab').html(d.data.nama+' , ');
					$('.slat').html(d.data.lat);
					$('.slng').html(d.data.lng);
					$('.stz').html(d.data.tz);
				}
				$('div#preload').hide();
			}
		);
	});
	var m,y;
	var changeMonth = function(){
		$('div#preload').show();
		var url="js/neoadzan_ajax.php?sid="+Math.random();
		var idx=$('#kota').val();
		if(idx=='') idx=$('#prop').val();
		$.post(
			url,
			{id:idx,y:$('#y').val(),m:$('#m').val()},
			function(d){
				if(!d.status){
					alert(d.status);
				}else{
					//console.log(d);
					$('#sch').html(d.data.sch);
					$('#periode').html(d.data.periode);
                    $('#rentang').html(d.data.rentang);
				}
				$('div#preload').hide();
			}
		);
	};
	$('#prevMonth').on('click',function(e){
		e.preventDefault();
		m=parseInt($('#m').val());
		y=parseInt($('#y').val());
		if(m>1){m-=1;} else {m=12;y-=1;}
		$('#m').val(m);
		$('#y').val(y);
		changeMonth();
	});
	$('#prevYear').on('click',function(e){
		e.preventDefault();
		y=parseInt($('#y').val());
		$('#y').val(--y);
		changeMonth();
	});
	$('#nextMonth').on('click',function(e){
		e.preventDefault();
		m=parseInt($('#m').val());
		y=parseInt($('#y').val());
		if(m<12){m+=1;} else {m=1;y+=1;}
		$('#y').val(y);
		$('#m').val(m);
		changeMonth();
	});
	$('#nextYear').on('click',function(e){
		e.preventDefault();
		y=parseInt($('#y').val());
		$('#y').val(++y);
		changeMonth();
	});
	function deg2dms(t) {
		var a = 0 > t ? "-" : "";
		t = Math.abs(t);
		var i = Math.floor(t),
		n = 60 * (t - i),
		r = Math.floor(n),
		e = 60 * (n - r);
		return a + i + "\u00b0" + r + "'" + e.toFixed(2) + '"'
	}
});
