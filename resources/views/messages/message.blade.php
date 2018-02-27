<img class="img-thumbnail" src="{{ $message->image }}" alt="">
<p class="card-text">
	<div class="text-muted">Enviado por: <a href="/{{ $message->user->username }}">{{ $message->user->name }}</a> <small>| {{ $message->created_at }}</small></div>
	<p>{{ $message->content }}</p>
    <p><a class="btn btn-outline-primary btn-sm" href="/messages/{{ $message->id }}">Leer más</a></p>
</p>