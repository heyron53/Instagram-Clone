<template>
    <div id="login" class="container d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="login-form">
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="Phone number, username, or email">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary w-100">Log in</button>
                                </div>
                            </form>
                        </div>
                        <span> OR </span>
                        <div class="login-links">
                            <a href="#">Sign up for Facebook</a>
                            <a href="#">Forgot password?</a>
                        </div>
                        <span>You can also <strong><a href="">report content you believe is unlawful</a></strong> in your country without logging in</span>
                    </div>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-center align-items-center pt-3">
                <div class="card">
                    <div class="card-body text-center">
                        <span>
                            Don't have an account?
                            <a href="#">Sign up</a>
                        </span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</template>

<script setup>

</script>