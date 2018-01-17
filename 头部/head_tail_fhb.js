		var ending_span_fhb = document.getElementById('ending_top_ul_fhb').getElementsByTagName('span');
		var ending_li_fhb = document.getElementById('ending_top_ul_fhb').getElementsByTagName('li');
		for (var i = 0;i < ending_span_fhb.length;i++) {
			ending_span_fhb[i].style.background = "url(img/"+(i+1)+"fhb.png)";
		}
		
		for (var j = 0;j <ending_li_fhb.length-1;j++) {
			ending_li_fhb[j].style.marginRight = 175+"px";
		}
		
		var li_fhb = document.getElementById('middle_bottom_nr_ul_fhb').getElementsByTagName('li')
		for (var i = 1; i < li_fhb.length;i++) {
			li_fhb[i].style.marginLeft = 240+"px";
		}