<!DOCTYPE html>
<html>

<head>
    <title>Send SMS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="logincontainer">
        <div class="login">
            <div class="title">
                <h5>Text <i class="fa-regular fa-message"></i></h5>
            </div>
            <div class="inputs">
                <label for="phone_number" class="textlabel"><i class="fa-solid fa-phone"></i> Contact&nbsp;</label>
                <input type="text" id="phone_number" name="phone_number" placeholder="Enter phone number..."
                    class="input">
            </div>
            <div class="inputs">
                <label for="message" class="textlabel">
                    <p><i class="fa-solid fa-pen-nib"></i> Message&nbsp;</p>
                </label>
                <textarea id="message" name="message" placeholder="Enter message..."></textarea>
            </div>
            <!-- <div class="inputs">
                <label class="textlabel">UserName:</label>
                <br>
                <input type="text" placeholder=":" class="input">
                <br>
                <label class="textlabel">Password:</label>
                <br>
                <input type="password" placeholder=":" class="input">
            </div> -->
            <div class="">
                <a>
                    <button class="btn">
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>


</body>

</html>