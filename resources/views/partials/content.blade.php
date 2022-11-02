<form action="{{ route('store.eleve') }}" method="POST">
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