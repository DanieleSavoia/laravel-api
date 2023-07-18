<section>
    <header>
        <h2>
            Profile Information
        </h2>

        <p>
            Update your account's profile information and email address.
        </p>
    </header>

Expand All
	@@ -18,15 +18,19 @@
        @method('patch')

        <div>
            <label for="name">Name</label>
            <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required />
            @error('name')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required />
            @error('email')
                {{ $message }}
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
Expand All
	@@ -48,16 +52,10 @@
        </div>

        <div class="flex items-center gap-4">
            <button>Save</button>

            @if (session('status') === 'profile-updated')
                <p>Saved</p>
            @endif
        </div>
    </form>