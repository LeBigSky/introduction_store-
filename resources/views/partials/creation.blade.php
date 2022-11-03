{{-- @foreach ($eleves as $eleve)
    <h1>{{ $eleve['name'] }}</h1>
@endforeach --}}
<h1> AJOUTER DES MEMBRES</h1>
<div class="container d-flex justify-content-center gap-2">
    
    <form class="d-flex gap-2" action="{{ route('store.eleve') }}" method="POST">
    @csrf
    
    <div>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="metier">Metier</label>
        <input type="text" name="metier" id="metier">
    </div>
    <div>
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
    </div>
    <button type="submit">Envoyer</button> 
    
    
    </form>
</div>
