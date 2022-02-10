<div id="login">
    <form action="form.php" method="post" id="latedisplay">
        <div class="formContent" style="display:flex;">
            <div id="form">
                <p id="val">
                    UserName : <br>
                    <input type="text" name="" autofocus><br>
                    Password : <br>
                    <input type="password" name=""><br>
                    <input type="submit" value="submit">
                </p>
            </div>
            <div><button type="button" id="hide" style="padding: 5px;"> X<button> </div>
        </div>
    </form>
</div>
<style>
    #login {
        display: none;
        position: fixed;
        justify-content: center;
        margin-left: 25%;
        margin-top: 2%;

        background: rgba(1, 8, 73, 0.623);
        padding: 10%;
        border-radius: 20px;
    }

    .formContent,
    input {
        font-size: 24px;

    }


    .formContent {
        color: white;
        font-size: 24px;

    }
</style>

<script>
    document.getElementById('login-btn').addEventListener('click', show);
    document.getElementById('hide').addEventListener('click', hide);

    function show() {
        document.getElementById('login').style.display = "flex";

    }

    function hide() {
        document.getElementById('login').style.display = "none";
    }
</script>