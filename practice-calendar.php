<!DOCTYPE html>
<html>
<head>

<? include "head.php" ?>

</head>
<body>
    <? include "nav.php" ?>

    <div class="row">
        <div class="p-c-left col-sm-6">
            <div class="p-c-text-left">
                <h1>Practice Tracking</h1>
                <p>Sometimes the practice of practise is more important than whatever the creation of the practice may be. </p>
                <p>The hours put into your craft are valuable... 
                    <br>So just do that thing. Everyday.</p>
                <p>Mark off every day of your practice.
                    <br><h1>&</h1>
                <p>Fill up the page with your expertise.</p>
                <!-- <button>And also.</button> -->
            </div>
        </div>
        <div class="p-c-right col-sm-6">
        </div>
    </div>  

    <div id="calendar" class="fc-calendar-container">
    <div class="fc-calendar fc-five-rows">
	  <div class="fc-head">
		 <div>Monday</div>
		 <div>Tuesday</div>
		 <div>Wednesday</div>
		 <div>Thursday</div>
		 <div>Friday</div>
		 <div>Saturday</div>
		 <div>Sunday</div>
	  </div>
	  <div class="fc-body">
		 <div class="fc-row">
			<div></div>
			<div></div>
			<div></div>
			<div><span class="fc-date">1</span><span class="fc-weekday">Thu</span></div>
			<div><span class="fc-date">2</span><span class="fc-weekday">Fri</span></div>
			<div><span class="fc-date">3</span><span class="fc-weekday">Sat</span></div>
			<div><span class="fc-date">4</span><span class="fc-weekday">Sun</span></div>
		 </div>
		 <div class="fc-row">
			<!-- ... -->
		 </div>
		 <div class="fc-row">
			<!-- ... -->
		 </div>
		 <div class="fc-row">
			<!-- ... -->
		 </div>
		 <!-- ... -->
	  </div>
    </div>
</div>

    <? include "footer.php" ?>
</body>
</html>