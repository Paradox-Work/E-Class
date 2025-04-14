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

	@guest
		<p>Sveiks, viesi!</p>
		<a href="/login">ierkastīties</a>
	@endguest
</x-layout>
balls