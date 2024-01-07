<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body>
        <form>
            <div id="first">
                <div class="card p-5 m-5"><h1>first</h1></div>
                <button onclick="next(event,2)">Next</button>
            </div>
            <div id="second">
                <div class="card p-5 m-5"><h1>Second</h1></div>
                <button onclick="back(event,1)">Back</button>
                <button onclick="next(event,3)">Next</button>
            </div>
            <div id="third">
                <div class="card p-5 m-5"><h1>Third</h1></div>
                <button onclick="back(event,2)">Back</button>
                <button>Submit</button>
            </div>
        </form>
        <script>
            const first = document.getElementById("first");
            const second = document.getElementById("second");
            const third = document.getElementById("third");

            first.style.display = "block";
            second.style.display = "none";
            third.style.display = "none";

            function next(e, current) {
                e = e || window.event;
                e.preventDefault();
                switch (current) {
                    case 2:
                        first.style.display = "none";
                        second.style.display = "block";
                        third.style.display = "none";
                        break;
                    case 3:
                        first.style.display = "none";
                        second.style.display = "none";
                        third.style.display = "block";
                        break;
                    default:
                        break;
                }
            }
            function back(e,current) {
                e = e || window.event;
                e.preventDefault();
                switch (current) {
                    case 1:
                        first.style.display = "block";
                        second.style.display = "none";
                        third.style.display = "none";
                        break;
                    case 2:
                        first.style.display = "none";
                        second.style.display = "block";
                        third.style.display = "none";
                        break;
                    default:
                        break;
                }
            }
        </script>
    </body>
</html>
