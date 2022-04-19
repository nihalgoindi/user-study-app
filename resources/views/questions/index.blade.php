@extends('layouts.app')

@section('title')
<div class="w-4/5 mx-auto text-center">

</div>
@endsection

@section('content')



<div>
    <form method="POST" action="{{ route('responses.store') }}" enctype="multipart/form-data" class="space-y-5">
    @csrf
    
    <body onload="startWatch()">
    <div class="pb-10 py-15 border-b border-gray-200">
        <div class="center text-6xl font-bold" id="display">
            <h1 class="text-6xl font-bold">
                00:00:00
            </h1>
        </div>
    </div>
    </body>

    

    <div class="container grid grid-cols-3 px-1 py-5 mx-auto">
        
            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 1
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/pdwCcc4J/Q1.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 2
                </h2>
                <img class="pb-5" src="https://drive.google.com/file/d/1h60G1MTTOOcV88EAy6lgPZ4sTXuqdyUH/view?usp=sharing" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>
        
        <input type="hidden" id="storeTime" value="" name="time">
    </div>


    

    <div class="bg-grey-lighter pt-15 items-end">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 uppercase text-gray-100 text-lg 
            font-extrabold py-3 px-5 rounded-3xl">
            Submit Response
        </button>
    </div>
    </form>
</div>



@endsection

<script>
    //Define vars to hold time values
    let seconds = 0;
    let minutes = 0;
    let hours = 0;

    //Define vars to hold "display" value
    let displaySeconds = 0;
    let displayMinutes = 0;
    let displayHours = 0;

    //Define var to hold setInterval() function
    let interval = null;

    //Define var to hold stopwatch status
    let status = "stopped";

    //Stopwatch function (logic to determine when to increment next value, etc.)
    function stopWatch() {

        seconds++;

        //Logic to determine when to increment next value
        if (seconds / 60 === 1) {
            seconds = 0;
            minutes++;

            if (minutes / 60 === 1) {
                minutes = 0;
                hours++;
            }

        }

        //If seconds/minutes/hours are only one digit, add a leading 0 to the value
        if (seconds < 10) {
            displaySeconds = "0" + seconds.toString();
        }
        else {
            displaySeconds = seconds;
        }

        if (minutes < 10) {
            displayMinutes = "0" + minutes.toString();
        }
        else {
            displayMinutes = minutes;
        }

        if (hours < 10) {
            displayHours = "0" + hours.toString();
        }
        else {
            displayHours = hours;
        }

        //Display updated time values to user
        document.getElementById("display").innerHTML = displayHours + ":" + displayMinutes + ":" + displaySeconds;
        document.getElementById("storeTime").value = displayHours + ":" + displayMinutes + ":" + displaySeconds;
    }



    function startWatch() {
        //Start the stopwatch (by calling the setInterval() function)
        interval = window.setInterval(stopWatch, 1000);
        status = "started";

    }

    /*
    //Function to reset the stopwatch
    function reset() {

        window.clearInterval(interval);
        seconds = 0;
        minutes = 0;
        hours = 0;
        document.getElementById("display").innerHTML = "00:00:00";
        document.getElementById("startStop").innerHTML = "Start";

    }
   */ 
</script>