<div class="modal" tabindex="-1" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sei sicuro di voler eliminare {{$article->name}}?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>L'azione sarà permanente!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{route('article.destroy' , $article)}}" method="POST">
            @csrf
            @method('Delete')
        <button class="btn btn-primary" type="submit">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>