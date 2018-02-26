@extends('layouts.default')
<div class="container mt-5">
    <h2>View Messages</h2>
    <br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Contact messages</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="{{route('viewmessages')}}">Message 1</a></td>
            <td><a href="{{route('viewmessages')}}">Delete</a></td>
        </tr>
        <tr>
            <td><a href="{{route('viewmessages')}}">Message 2</a></td>
            <td><a href="{{route('viewmessages')}}">Delete</a></td>
        </tr>
        <tr>
            <td><a href="{{route('viewmessages')}}">Message 3</a></td>
            <td><a href="{{route('viewmessages')}}">Delete</a></td>
        </tr>
        </tbody>
    </table>
</div>
