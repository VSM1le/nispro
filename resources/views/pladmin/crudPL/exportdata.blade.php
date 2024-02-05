<form action="{{ route('history.export') }}" method="post">
    @csrf
    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit">Export Data</button>
</form>