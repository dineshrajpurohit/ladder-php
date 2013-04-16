<div class="span6 center">
    <h3>Player Login Page</h3>
    {if ($error_message != "")}<div class="alert alert-error">{$error_message}</div>{/if}

    <form class="form-vertical" enctype="application/x-www-form-urlencoded" method="post" action="authenticate"><fieldset>
            <div class="control-group"><label for="email" class="control-label required">Email:</label>
                <div class="controls">
                    <input type="text" name="Auth[email]" id="email" value="" placeholder="demo@demo.com"></div></div>
            <div class="control-group"><label for="password" class="control-label required">Password:</label>
                <div class="controls">
                    <input type="password" name="Auth[password]" id="password" value="" placeholder="Password"></div></div>
            <div class="form-actions">

                <input type="submit" name="submit" id="submit" value="Login" class="btn btn-primary">
                <a class='btn' href='/ladder/index'>Cancel</a><br/><br/><a href=''>forgot your password?</a>&nbsp;&nbsp<a href='/ladder/register'>new user?</a></div></fieldset>
    </form>
</div>
