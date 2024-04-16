@extends('layouts.app')
@section('konten')
    <div class="container mx-auto">
        <div class="mx-auto w-80 p-2">
            @include('components.alert')
        </div>
        <div class="w-full px-4 pt-3">
            <div class="max-w-xl mx-auto text-center mb-5">
                <p class="text-2xl font-bold tracking-normal">Silahkan di <span class="text-green-400">ShortKeun</span> Linkna</p>
            </div>
        </div>
        <div class="container mx-auto w-96 md:w-full px-10">
            <form class="flex justify-center gap-1" action="{{ url('/short') }}" method="post">
                    @csrf
                    <input type="text" @required(true) placeholder="Masukan Url" name="url" class="input input-bordered md:w-4/5 sm:w-4/5 sm:p-2 rounded-full" />
                    <button type="submit" class="btn md:w-4/2 bg-green-400 rounded-full">ShortKeun..</button>
            </form>
        </div>
        <div class="p-2">
            <div class="mb-12 p-4 w-96 md:w-full">
                <div class="overflow-x-auto">
                    <table class="table table-zebra">
                        <!-- head -->
                        <thead>
                            <tr class="font-semibold text-lg">
                                <th>#</th>
                                <th>Url Original</th>
                                <th>Url Generate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            @foreach ($data as $item)
                                
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $item->url_ori }}</td>
                                <td>{{url('s/'.$item->generate )}}</td>
                                <td class="flex gap-2">
                                    <form action="{{ url('/'.$item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Yakin mau di hapus?')" class="btn btn-xs btn-error">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
