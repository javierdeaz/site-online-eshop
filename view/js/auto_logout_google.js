$(function() {
    function timeChecker() {
        setInterval(function() {
            var storedTimeStamp = sessionStorage.getItem("lastTimeStamp");
            timeCompare(storedTimeStamp);
        }, 3000);
    }

    function timeCompare(timeString) {
        var maxMinutes = 0.5;
        var currentTime = new Date();
        var pastTime = new Date(timeString);
        var timeDiff = currentTime - pastTime;
        var minPast = Math.floor((timeDiff / 30000));
        if (minPast > maxMinutes) {
            sessionStorage.removeItem("lastTimeStamp");
            window.location = "../controller/ACTIONS/act_logout_google.php";
            return false;
        } else {
            console.log(currentTime + " - " + pastTime + " - " + minPast + " minutos pasados");
        }
    }
    if (typeof(Storage) !== "undefined") {
        $(document).mousemove(function() {
            var timeStamp = new Date();
            sessionStorage.setItem("lastTimeStamp", timeStamp);
        });
        timeChecker();
    }
});