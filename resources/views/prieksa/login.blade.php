
<x-layout>
    <x-slot:title>
        {{ "Ierkastīties" }}
    </x-slot:title>
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
