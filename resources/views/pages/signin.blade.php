@extends('layouts.default')
<div class="card-title ml-3 mt-3"><h1>Sign in</h1><p class="lead ml-1">Please sign in.</p></div>
<div class="card-body">
    <form class="form-signin">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <br>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block mb-2" type="submit">Sign in</button>
        <br>
        <br>
    </form>
</div>

