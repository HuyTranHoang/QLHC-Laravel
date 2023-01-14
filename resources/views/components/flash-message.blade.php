@if(session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(()=> show = false,3000)" x-show="show"
         x-transition x-transition.duration.500ms
         class="position-absolute top-50 end-0 translate-middle-y bg-success py-4 px-5 text-white">
        {{session('message')}}
    </div>
@endif
