
<html>
<head>
    <meta name="description" content="This clock counts down the time until the 2020 presidential election on Tuesday, November 3, 2020">
    <meta name="keywords" content="2020 election, countdown clock">
    <title>2020 Presidential Election Countdown Clock</title>
    <link rel="stylesheet" type="text/css" href="css/countdown.css">
    <script type="text/javascript">
    var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")
    
    function countdown(yr,m,d) {
        theyear=yr;themonth=m;theday=d
        var today=new Date()
        var todayy=today.getYear()
        if (todayy < 1000)
            todayy+=1900
        var todaym=today.getMonth()
        var todayd=today.getDate()
        var todayh=today.getHours()
        var todaymin=today.getMinutes()
        var todaysec=today.getSeconds()
        var todaystring=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec
        futurestring=montharray[m-1]+" "+d+", "+yr
        dd=Date.parse(futurestring)-Date.parse(todaystring)
        dday=Math.floor(dd/(60*60*1000*24)*1)
        dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1)
        dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1)
        dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1)
        if (dday<=0&&dhour<=0&&dmin<=0&&dsec<=1) {
            document.getElementById('days').innerHTML = '0';
            document.getElementById('hours').innerHTML = '0';
            document.getElementById('min').innerHTML = '0';
            document.getElementById('sec').innerHTML = '0';
            return
        }
        document.getElementById('days').innerHTML = dday;
        document.getElementById('hours').innerHTML = dhour;
        document.getElementById('min').innerHTML = dmin;
        document.getElementById('sec').innerHTML = dsec;
        setTimeout("countdown(2020,11,3)",1000)
    }
    setTimeout("countdown(2020,11,3)",1000)
    </script>
</head>
<body>
     <div style="width: 280px;max-width: 280px;height: 200px;background-image: url('/2020-countdown-clock/imgs/bg.png');position: relative;border:1px solid #CCC">
		 <div class="top" style="background-color:white;border-bottom:2px solid #CCC">
			 <a href="https://www.270towin.com" target="_blank"><img style="margin:8px 5px 0px 10px" src="imgs/logo.ppng" border="0" width="75" height="71"></a>
        	 <img src="imgs/title-lg.png" style="margin:0 0 0px 10px">
		 </div>
	        <div class="body">
	            <table id="widget1" width="100%" cellspacing="2" cellpadding="0" style="margin-top: 40px;">
	              
	                    <td style="background-color: #fff; width:125px; height: 65px; position:relative;border:1px solid #CCC">
	                        <div class="title2">DAYS</div>
	                        <div id="days" class="ticker"></div>
	                    </td>
	               
	               
	                    <td style="background-color: #fff; width:50px; height: 50px; position:relative;border:1px solid #CCC">
	                        <div class="title2">HOURS</div>
	                        <div id="hours" class="ticker" ></div>
	                    </td>
	                    <td style="background-color: #fff; width:50px; height: 50px; position:relative;border:1px solid #CCC">
	                        <div class="title2">MIN</div>
	                        <div id="min" class="ticker" ></div>
	                    </td>
	                    <td style="background-color: #fff; width:50px; height: 50px; position:relative;border:1px solid #CCC">
	                        <div class="title2">SEC</div>
	                        <div id="sec" class="ticker" ></div>
	                    </td>
	               
	            </table>
	        </div>
	        <div style="position: absolute; bottom: 7px; text-align:center; width:100%;"><a href="https://www.270towin.com/2020-countdown-clock/" target="_blank" style="font-size: 0.65em;"></a></div>
	    </div>
</body>
