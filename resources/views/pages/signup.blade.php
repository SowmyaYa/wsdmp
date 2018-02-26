@extends('layouts.default')
<div class="container">

    <form class="form-signin">
        <h2 class="form-signin-heading mt-3">Please sign up</h2>
        <label for="Name">Name</label>
        <input name="name" type="name" class="form-control" id="name" placeholder="Name" autocomplete="off" autofocus>
        <br>
        <label for="inputEmail">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
        <br>
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <br>
        <label for="inputPassword">Confirm Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
    </form>

</div>