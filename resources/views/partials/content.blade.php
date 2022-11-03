<div class="container">
    <h1 class="border bg-primary py-2">HOME</h1>
    @foreach ($eleves as $eleve)
    <div class="card">
        <h1>{{ $eleve['name'] }}</h1>
        <h1>{{ $eleve['metier'] }}</h1>
        <h1>{{ $eleve['age'] }}</h1>
    </div>
    @endforeach
</div>
