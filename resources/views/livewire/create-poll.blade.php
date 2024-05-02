<div>
   <form>
       <label>Poll title</label>
       <input wire:model.live="title" type="text"/>
       Current title: {{$title}}

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
   </form>
</div>
