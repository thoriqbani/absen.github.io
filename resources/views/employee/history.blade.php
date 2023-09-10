@extends('layouts.employee')

@section('container')
<div class="mx-auto pt-20">
    <table class="w-[300px] h-[75px] shadow-xl">
        <thead class="text-lg">
            <th class="">No</th>
            <th class="">Tanggal Masuk</th>
            <th class="">Jam Masuk</th>
        </thead>
        @foreach($posts as $post)
        <tbody class="text-center @if($loop->even) bg-slate-300 @endif">
            <td class="text-lg">
                {{ $loop->iteration }}
            </td>
            <td class="text-lg">
                {{ $post->tglMasuk }}
            </td>
            <td class="text-lg">
                {{ $post->jamMasuk }}
            </td>
        </tbody>
        @endforeach
    </table>
</div>
@endsection