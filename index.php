<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator</title>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
        }

        a {
            text-decoration: none;
            color: black;
        }

        button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 20px;
            /* text-align: center; */
            /* text-decoration: none; */
            font-size: 16px;
        }

        .container {
            margin: 0 auto;
            /* text-align: center; */
            background-color: white;
            height: 80%;
            width: 70%;
        }
    </style>

</head>

<body style="background-color: #222;">
    <div class="container">
        <form action="control.php" method="POST" style="padding: 60px;">
            <h2>Secure Password Generator</h2>
            <hr>
            <div>
                <h4>Password Length</h4>
                <select name="size" id="size">
                    <option value="6">6</option>
                    <option value="9">9</option>
                    <option value="12">12</option>
                    <option value="15">15</option>
                </select>


                <label for="test">
                    <h4>Include Symbols:</h4>
                </label>
                <input type="checkbox" name="symbols" id="symbols" checked> ( e.g. @#$% )
                <!--  -->

                <h4>Include Numbers:</h4>
                <input type="checkbox" name="number" id=""> ( e.g. 123456 )
                <!--  -->

                <h4>Include Lowercase Characters:</h4>
                <input type="checkbox" name="low-char" id=""> ( e.g. abcdefgh )
                <!--  -->


                <h4>Include Uppercase Characters:</h4>
                <input type="checkbox" name="up-char" id="">
                <!--  -->
                ( e.g. ABCDEFGH )

                <h4>Exclude Similar Characters:</h4>
                <input type="checkbox" name="sim-char" id=""> ( e.g. i, l, 1, L, o, 0, O )
                <!--  -->

                <h4>Exclude Ambiguous Characters:</h4>
                <input type="checkbox" name="amb-char" id=""> ( { } [ ] ( ) / \ ' " ` ~ , ; : . > )

                <!--  -->

                <h4>Generate On Your Device:</h4>
                <input type="checkbox" name="" id=""> ( do NOT send across the Internet )

                <!--  -->

                <h4>Auto-Select:</h4>
                <input type="checkbox" name="" id=""> ( select the password automatically )

                <!--  -->

                <h4>Save My Preference:</h4>
                <input type="checkbox" name="" id=""> ( save all the settings above for later use )

                <!--  -->

                <h4>Load My Settings Anywhere:</h4>
                <a href=""> URL to load my settings on other computers quickly</a>

                <!--  -->

            </div>
            <div style="padding:20px">
                <button type="submit" name="submit">Generate Password</button>
                <button>GIF MAKER</button>
                <button>ADVANCED...</button>
            </div>

            <div>
                <input type="text" id="password" name="password" value="" style="height: 30px;width: 30%;" placeholder="Your new Password Will appear here">
                <button>copy</button>
            </div>
        </form>
    </div>


</body>

<script>
    // document.getElementById("password").value = "Johnny Bravo";
    // let size = document.getElementById("size").value;
    let checked = document.getElementById("symbols").checked;
    if (checked == true) {
        console.log("true")
    }

    array1 = ["1", "2", "3", "4"];

    password = ["a", "b", "c", "d"];

    result = array1.concat(password);


    console.log(result);

    // result.forEach(element => {
    //     console.log(result[Math.floor(Math.random() * result.length)]);
    // });

    // console.log("error")

    // password.forEach(element => {
    //     console.log(element[Math.floor(Math.random() * 5)]);
    // });

    // for (let i = 0; i < result.length; i++) {
    //     console.log(result[i]);
    // }
</script>
<script src="vanilla.js"></script>

</html>