@php
        $toastId = 'toast-' . uniqid();
@endphp

<div aria-live="polite" class="fixed inset-0 z-50 flex items-start px-4 py-6 pointer-events-none sm:p-6">
    <div class="w-full flex flex-col items-end space-y-4">
        @if($message = Session::get('success'))
            <div id="{{ $toastId }}-success" class="max-w-sm w-full bg-white border border-green-100 shadow-lg rounded-lg pointer-events-auto overflow-hidden">
                <div class="p-4 flex">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div class="ml-3 w-0 flex-1">
                        <p class="text-sm font-semibold text-gray-900">Success</p>
                        <p class="mt-1 text-sm text-gray-700">{{ $message }}</p>
                    </div>
                    <div class="ml-4 flex-shrink-0 flex">
                        <button type="button" class="inline-flex text-gray-400 hover:text-gray-600" aria-label="Close" onclick="document.getElementById('{{ $toastId }}-success')?.remove()">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </div>
                </div>
            </div>
            <script>setTimeout(function(){document.getElementById('{{ $toastId }}-success')?.remove();},5000);</script>
        @endif

        @if($message = Session::get('successupdate'))
            <div id="{{ $toastId }}-update" class="max-w-sm w-full bg-white border border-blue-100 shadow-lg rounded-lg pointer-events-auto overflow-hidden">
                <div class="p-4 flex">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div class="ml-3 w-0 flex-1">
                        <p class="text-sm font-semibold text-gray-900">Updated</p>
                        <p class="mt-1 text-sm text-gray-700">{{ $message }}</p>
                    </div>
                    <div class="ml-4 flex-shrink-0 flex">
                        <button type="button" class="inline-flex text-gray-400 hover:text-gray-600" aria-label="Close" onclick="document.getElementById('{{ $toastId }}-update')?.remove()">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </div>
                </div>
            </div>
            <script>
                setTimeout(function(){document.getElementById('{{ $toastId }}-update')?.remove();},5000);
                // redirect to products after 6 seconds
                setTimeout(function(){ window.location.href = '{{ url('/products') }}'; }, 3000);
            </script>
        @endif

        @if($message = Session::get('successdelete'))
            <div id="{{ $toastId }}-delete" class="max-w-sm w-full bg-white border border-red-100 shadow-lg rounded-lg pointer-events-auto overflow-hidden">
                <div class="p-4 flex">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </div>
                    <div class="ml-3 w-0 flex-1">
                        <p class="text-sm font-semibold text-gray-900">Deleted</p>
                        <p class="mt-1 text-sm text-gray-700">{{ $message }}</p>
                    </div>
                    <div class="ml-4 flex-shrink-0 flex">
                        <button type="button" class="inline-flex text-gray-400 hover:text-gray-600" aria-label="Close" onclick="document.getElementById('{{ $toastId }}-delete')?.remove()">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </div>
                </div>
            </div>
            <script>setTimeout(function(){document.getElementById('{{ $toastId }}-delete')?.remove();},5000);</script>
        @endif
    </div>
</div>