<script language="JavaScript1.2" type="text/javascript">

function setcountdown(theyear,themonth,theday) {
  yr=theyear;mo=themonth;da=theday
}

// ------ SCRIPT CONFIGURATION ------ // 

// Comment: Configure the date that you are counting down to...in the format year, month, day:

setcountdown(2008,03,30)

// Comment: Change the two variables below to reflect the occasion, and message to display on that occasion, respectively

var occasion="Geese vs. Renegades!!!"
var message_on_occasion="Geese vs. Renegades Today!!!"

// Comment: Configure the following variables to set the width, height, background color, and text style of the countdown area

var countdownwidth='810px'
var countdownheight='20px'
var countdownbgcolor='transparent'
var opentags='<font face="Verdana" size="2" color="#013302">'
var closetags='</font>'

// --------------- Do NOT edit anything after this line. --------------- //

var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")
var crosscount=''

function start_countdown(){
if (document.layers)
document.countdownnsmain.visibility="show"
else if (document.all||document.getElementById)
crosscount=document.getElementById&&!document.all?document.getElementById("countdownie") : countdownie
countdown()
}

if (document.all||document.getElementById)
document.write('<span id="countdownie" style="width:'+countdownwidth+'; background-color:'+countdownbgcolor+'"></span>')

window.onload=start_countdown


function countdown(){
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
futurestring=montharray[mo-1]+" "+da+", "+yr
dd=Date.parse(futurestring)-Date.parse(todaystring)
dday=Math.floor(dd/(60*60*1000*24)*1)
dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1)
dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1)
dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1)
//if on day of occasion
if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=1&&todayd==da){
if (document.layers){
document.countdownnsmain.document.countdownnssub.document.write(opentags+message_on_occasion+closetags)
document.countdownnsmain.document.countdownnssub.document.close()
}
else if (document.all||document.getElementById)
crosscount.innerHTML=opentags+message_on_occasion+closetags
return
}
//if passed day of occasion
else if (dday<=-1){
if (document.layers){
document.countdownnsmain.document.countdownnssub.document.write(opentags+occasion+" already passed! "+closetags)
document.countdownnsmain.document.countdownnssub.document.close()
}
else if (document.all||document.getElementById)
crosscount.innerHTML=opentags+"Occasion already passed! "+closetags
return
}
//else, if not yet
else{
if (document.layers){
document.countdownnsmain.document.countdownnssub.document.write(opentags+dday+ " days, "+dhour+" hours, "+dmin+" minutes, and "+dsec+" seconds until "+occasion+closetags)
document.countdownnsmain.document.countdownnssub.document.close()
}
else if (document.all||document.getElementById)
crosscount.innerHTML=opentags+dday+ " days, "+dhour+" hours, "+dmin+" minutes, and "+dsec+" seconds until "+occasion+closetags
}
setTimeout("countdown()",1000)
}
</script>

<ilayer id="countdownnsmain" width=&{countdownwidth}; height=&{countdownheight}; bgColor=&{countdownbgcolor}; visibility=hide><layer id="countdownnssub" width=&{countdownwidth}; height=&{countdownheight}; left=0 top=0></layer></ilayer>
