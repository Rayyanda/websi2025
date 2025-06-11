<div>
    <h4>Komentar</h4>

    <form wire:submit.prevent="submit" class="mb-4">
        @if ($parent_id)
            <p>Membalas komentar ID: {{ $parent_id }} <a href="#" wire:click.prevent="cancelReply">Batal</a></p>
        @endif

        <input type="text" wire:model="author_name" placeholder="Nama" class="form-control mb-2">
        <input type="email" wire:model="author_email" placeholder="Email" class="form-control mb-2">
        <textarea wire:model="content" placeholder="Tulis komentar..." class="form-control mb-2"></textarea>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

    @foreach ($comments as $comment)
        <div class="mb-3 border-bottom pb-2">
            <strong>{{ $comment->author_name }}</strong> <br>
            <p>{{ $comment->content }}</p>
            <a href="#" wire:click.prevent="setReply({{ $comment->id }})">Balas</a>

            @foreach ($comment->replies as $reply)
                <div class="ms-4 mt-2 ps-2 border-start">
                    <strong>{{ $reply->author_name }}</strong>
                    <p>{{ $reply->content }}</p>
                </div>
            @endforeach
        </div>
    @endforeach

</div>
