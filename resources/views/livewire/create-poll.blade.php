<div>
   <form wire:submit.prevent="createPoll">

       <div class="mb-2">
           <label>Poll title</label>
           <input wire:model.live="title" type="text"/>
       </div>

       <div class="mb-2">
          <button class="btn" wire:click.prevent="addOption">Add option</button>
       </div>

       <div class="">
           @foreach($options as $index=>$option)
              <div class="mb-2">
                  <label>Option {{$index+1}}</label>
              </div>
               <div class="mb-2 flex gap-2">
                   <input type="text" wire:model="options.{{$index}}">
                   <button class="btn" wire:click.prevent="removeOption({{$index}})">Remove</button>
               </div>
           @endforeach
       </div>

       <div>
           <button class="btn" type="submit">Create Poll</button>
       </div>
   </form>
</div>
