@extends('backend.includes.css')

<div class="min-h-100 p-0 p-sm-6 d-flex align-items-stretch">
    <div class="card w-25x flex-grow-1 flex-sm-grow-0 m-sm-auto">
        <div class="card-body p-sm-5 m-sm-3 flex-grow-0">
            <h1 class="mb-0 fs-3">Sign In</h1>
            <div class="fs-exact-14 text-muted mt-2 pt-1 mb-5 pb-2">Log in to your account to continue.</div>
            <div class="mb-4">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control form-control-lg" />
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-control form-control-lg" />
            </div>
            <div class="mb-4 row py-2 flex-wrap">
                <div class="col-auto me-auto">
                    <label class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" />
                        <span class="form-check-label">Remember me</span>
                    </label>
                </div>
                <div class="col-auto d-flex align-items-center"><a href="auth-forgot-password.html">Forgot password?</a></div>
            </div>
            <div><button type="submit" class="btn btn-primary btn-lg w-100">Sign In</button></div>
        </div>
        <div class="sa-divider sa-divider--has-text"><div class="sa-divider__text">Or continue with</div></div>
        <div class="card-body p-sm-5 m-sm-3 flex-grow-0">
            <div class="d-flex flex-wrap me-n3 mt-n3">
                <button type="button" class="btn btn-secondary flex-grow-1 me-3 mt-3">Google</button>
                <button type="button" class="btn btn-secondary flex-grow-1 me-3 mt-3">Facebook</button>
                <button type="button" class="btn btn-secondary flex-grow-1 me-3 mt-3">Twitter</button>
            </div>
            <div class="form-group mb-0 mt-4 pt-2 text-center text-muted">
                Don&#x27;t have an account?
                <a href="auth-sign-up.html">Sign up</a>
            </div>
        </div>
    </div>
</div>
