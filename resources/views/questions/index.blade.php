@extends('layouts.app')

@section('title')
<div class="w-4/5 mx-auto text-center">

</div>
@endsection

@section('content')



<div>
    <form method="POST" action="{{ route('responses.store') }}" enctype="multipart/form-data" class="space-y-5">
    @csrf
    
    <body onload="startTimer()">
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
                <img class="pb-5" src="https://i.postimg.cc/fbNkHx50/Q2.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 3
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/NMW0HmyM/Q3.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 4
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/wj0TkStn/Q4.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 5
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/fyNNsKtx/Q5.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 6
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/y6yq903b/Q6.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 7
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/MGQNGB8t/Q7.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 8
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/0jcH4dp5/Q8.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 9
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/cJwkWNQb/Q9.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 10
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/Y9xX4fDN/Q10.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 11
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/0j2V7MhT/Q11.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 12
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/9fdbSY23/Q12.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 13
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/wvFVxx30/Q13.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 14
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/G37QZpWp/Q14.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 15
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/G35FX5D8/Q15.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 16
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/7hG2vqzC/Q16.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 17
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/pXjFqXx4/Q17.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 18
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/v8kqSzxB/Q18.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 19
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/xdftbphs/Q19.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 20
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/y8BTwr1V/Q20.png" width="500" height="500" alt="">
                <input type="checkbox" id="upwardsTrend" name="response[]" value="UT">
                <label class = "text-gray-700 font-bold" for="upwardsTrend"> Upwards Trend</label><br>
                <input type="checkbox" id="noTrend" name="response[]" value="NT">
                <label class = "text-gray-700 font-bold" for="noTrend"> No Trend</label><br>
                <input type="checkbox" id="downwardsTrend" name="response[]" value="DT">
                <label class = "text-gray-700 font-bold" for="downwardsTrend"> Downwards Trend</label><br><br>
            </div>

            <div class="w-full rounded">
                <h2 class="text-gray-700 font-bold text-6xl pb-5 py-11">
                    Stock 21
                </h2>
                <img class="pb-5" src="https://i.postimg.cc/rF2GrYtS/Q21.png" width="500" height="500" alt="">
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
    let seconds = 0;
    let minutes = 0;
    let hours = 0;

    let displaySeconds = 0;
    let displayMinutes = 0;
    let displayHours = 0;

    let interval = null;

    //Define var to hold timer status
    let status = "stopped";

    //Determines when to increment
    function timer() {

        seconds++;

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

    function startTimer() {
        //Start the timer (by calling the setInterval() function)
        interval = window.setInterval(timer, 1000);
        status = "started";

    }
</script>