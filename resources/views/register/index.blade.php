@include('layout.header2')
<main>
    <div class="login">
        <div class="wrapper">
            <h5>Register<span>.</span></h5>
            <form method="POST" action="/action_page.php">
                <div class="form-group">
                    <label for="firstname">First name:</label>
                    <input type="text" id="firstname" name="firstname">
                </div>

                <div class="form-group">
                    <label for="lastname">Last name:</label>
                    <input type="text" id="lastname" name="lastname">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>

                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    @include('layout.animated-bg')
</main>
</body>
</html>