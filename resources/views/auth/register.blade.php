<form method="POST" action="{{ route('register') }}">
    @csrf

    <label>Name</label>
    <input type="text" name="name" value="{{ old('name') }}" required>

    <label>Email</label>
    <input type="email" name="email" value="{{ old('email') }}" required>

    <label>Company</label>
    <select name="company" required>
        <option value="">Select Company</option>
        <option value="Sucden" {{ old('company') == 'Sucden' ? 'selected' : '' }}>Sucden</option>
        <option value="Amerop" {{ old('company') == 'Amerop' ? 'selected' : '' }}>Amerop</option>
    </select>

    <label>Password</label>
    <input type="password" name="password" required>

    <label>Confirm Password</label>
    <input type="password" name="password_confirmation" required>

    <button type="submit">Register</button>
</form>

