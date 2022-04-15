<h1>Login Page</h1>

@error('email')
{{ $message }}
@enderror
<form action="/login" method="POST">
    @csrf
    <input type="text" name="email" placeholder="Email" required>
    <br><br>
    <input type="password" name="password" placeholder="Password" required>
    <br><br>
    <button type="submit">Submit</button>
</form>