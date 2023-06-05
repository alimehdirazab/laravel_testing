
<h1>User Login</h1>
<form action="users" method="get">
    @csrf
    <input type="text" name="username" placeholder="Enter Your Name">
    <br><br>
    <input type="password" name="password" placeholder="enter your password">
    <br><br>
    <button type="submit">Login</button>
</form>