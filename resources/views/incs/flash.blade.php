@if($message = Session::get('success'))
    <div id="flash-success" class="fixed top-6 right-6 z-50 max-w-sm w-full">
        <div class="bg-green-50 border border-green-200 text-green-800 rounded-lg shadow p-4 flex items-start gap-3">
            <svg class="w-6 h-6 text-green-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>

            <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold">Success</p>
                <p class="mt-1 text-sm text-green-700">{{ $message }}</p>
            </div>

            <div class="flex-shrink-0 self-start">
                <button type="button" aria-label="Dismiss" class="text-green-600 hover:text-green-800" onclick="document.getElementById('flash-success')?.remove()">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                </button>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function(){
            document.getElementById('flash-success')?.remove();
        }, 5000);
    </script>
@endif

{{-- @if($message=Session::get('successupdate'))

<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">X</button>
    <strong> {{$message}}</strong>
</div>


@endif

@if($message=Session::get('successdelete'))

<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">X</button>
    <strong> {{$message}}</strong>
</div>


@endif --}}