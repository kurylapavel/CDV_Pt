

<div>
    <h3>Dodaj komentarz</h3>
    <input type="text" name="coment">
    <button wire:click="addComment">Dodaj</button>
</div>


<div>

    <p>{{$Name}}</p>
    <p>{{$comments[0]['body']}}</p>

</div>
