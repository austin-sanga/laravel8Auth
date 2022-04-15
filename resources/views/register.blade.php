<h1>Register Page</h1>
<form action="/registration" method="post">
    @csrf
    <input type="hidden" name="id">
    <input type="text" name="name" placeholder="name">
    <br><br>
    <input type="text" name="email" placeholder="Email" required>
    <br><br>
    <input type="password" name="password" placeholder="Password" required>
    <br><br>
    <button type="submit">Submit</button>
</form>

