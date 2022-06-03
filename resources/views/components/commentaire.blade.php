


<form action="{{ route('CommentaireStore') }}" method="post">
@csrf


<div>
    <label for="membres_id"> </label>
    <input type="text" name="membre_id" id="membre_id" value="{{ Auth::user()->id }}" hidden>
</div>

<div>
    <label for="posts_id"></label>
    <input type="text" name="posts_id" id="posts_id" value="{{ $post->id }}" hidden>
</div>

<div>
    <label for="commentaire">Commentaire</label>
    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
</div>

<div>
    <label for="compteur">Compteur</label>
    <input type="number" name="compteur" id="compteur" value="0">
</div>

<div>
    <label for="censure">Censure</label>
    <input type="checkbox" name="censure" id="censure" value="0">
</div>

<div>
    <label for="date_création">Date</label> 
    <input type="datetime" name="date_création" id="date_création" value="{{ date('Y-m-d H:i:s') }}">
</div>


</form>