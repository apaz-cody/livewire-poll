<div>
  @forelse ($polls as $poll)
    <div class="mb-4">
      <h3 class="mb-4 text-xl">
        {{ $poll->title }}
      </h3>
      @foreach ($poll->options as $option)
        <div class="mb-2">
          <button class="btn border-green-700" wire:click="vote({{ $option->id }})">Vote</button>
          <button class="btn border-red-700" wire:click="unvote({{ $option->id }})">UnVote</button>
          
          {{ $option->name }} ({{ $option->votes->count() }})
        </div>
      @endforeach
    </div>
  @empty
    <div class="text-gray-500">
      No polls available
    </div>
  @endforelse
</div>
