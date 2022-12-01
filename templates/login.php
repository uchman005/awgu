<section class="section-lg bg-white">
    <div class="container">
        <h6>Login form</h6>
    </div>
    <section class="section section-md bg-gray-800 context-dark">
        <div class="container">
            <div class="box-1">
                <h4>Sign In</h4>
                <form class="rd-form rd-form-small">
                    <div class="form-wrap">
                        <input class="form-input" id="login-email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="login-email">E-mail</label>
                    </div>
                    <div class="form-wrap">
                        <input class="form-input" id="login-password" type="password" name="password" data-constraints="@Required">
                        <label class="form-label" for="login-password">Password</label>
                    </div>
                    <div class="form-wrap">
                        <button class="button button-primary button-winona" type="submit">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>