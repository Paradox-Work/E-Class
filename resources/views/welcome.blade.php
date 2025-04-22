<x-layout>
    <x-slot:title>
        {{ "Sākumlapa" }}
    </x-slot:title>
	<a href="register">Reģistrēties</a>
	@auth
		<p>Sveiks, {{ Auth::user()->first_name}}</p>
		<form action="/logout" method="POST">
				@csrf
				<button type="submit">Izrakstīties</button>
		</form>
	@endauth
	ballsphp
	@guest
		<p>Sveiks, viesi!</p>
		<a href="/login">ierkastīties</a>
	@endguest
	<h1>Ierakstīties lietotāj..profilā</h1>
        <form action="/login" method="POST">
            @csrf
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
                <ul>
                    <li>           
                        <label>e-pasts
                            <input type="email" name="email" value="{{ old('email') }}" required/>
                        </label>
                    </li>
                    <li>           
                        <label>parole
                            <input type="password" name="password" required/>
                        </label>
                    </li>
                    <li>
                        <button type="submit">Saglabāt</button>
                    </li>
                </ul>
        </form>
</x-layout>
