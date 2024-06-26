<div>
  @forelse($polls as $poll)
      <div class="mb-4 text-xl">
          <h3>{{$poll->title}}</h3>
          @foreach($poll->options as $option)
              <div class="mb-2">
                  <button wire:click="vote({{$option->id}})" class="btn">Vote</button> {{$option->name}} ({{$option->votes->count()}})
              </div>
          @endforeach
      </div>
  @empty
      <div class="text-slate-600">
          No polls
      </div>
  @endforelse
</div>
