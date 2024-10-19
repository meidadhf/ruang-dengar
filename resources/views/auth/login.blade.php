<!DOCTYPE html>
<html>
<head>
    <title>Login Siswa</title>
</head>
<body>
    <h1>Login Siswa</h1>
    
    <!-- Menampilkan pesan error jika ada -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form login siswa -->
    <form method="POST" action="{{ route('login.siswa') }}">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
        
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
