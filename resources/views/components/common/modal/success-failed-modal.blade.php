@session('success')
    <div class="p-4 bg-green-300 border-2 border-black">
        {{ $value }}
    </div>
@endsession

@session('failed')
    <div class="p-4 bg-red-300 border-2 border-black">
        {{ $value }}
    </div>
@endsession
