@extends('layouts.app')
@section('content')

<section id="course" class="w-full h-auto items-center py-24 bg-gray-100 text-center">
    <h2 class="text-3xl mb-8 text-orange-400">コース</h2>
    <div class="">
        <p>大きく２コースを用意しております</p>
        <p>・週3回(月~金)、受講し放題</p>
        <p>・週5回(月~金)、受講し放題</p>
    </div>
    <div class="w-4/5 mx-auto flex items-stretch py-12">
        <div class="flex-1 px-2 py-6 bg-white rounded-xl shadow-xl">
            <h3 class="pt-2 pb-8 text-2xl text-orange-400">お試し(週3回)</h3>
            <p>早起きが得意でない学生さん<br>まずは、週3回の"朝の学習"から<br>一緒に初めてみませんか？<br><br>継続することによる変化を<br>一緒に体感しましょう！！</p>
        </div>
        <div class="mx-2 flex-1 px-2 py-6 bg-white rounded-xl shadow-xl">
            <h3 class="pt-2 pb-8 text-2xl text-orange-400">スタンダード(週5回)</h3>
            <p>"朝の学習習慣"を身につけることで、<br>効率よく授業への理解を高め、<br>成績向上を目指すコース</p>
        </div>
        <div class="flex-1 px-2 py-6 bg-white rounded-xl shadow-xl">
            <h3 class="pt-2 pb-8 text-2xl text-orange-400">​アドバンス(週5回コース)</h3>
            <p>"朝の学習習慣"を活かし、<br>高校受験・大学受験合格を目指すコース<br>(365日24時間質問し放題)</p>
        </div>
    </div>
    <h2 class="text-3xl mb-8 text-orange-400">料金プラン</h2>
    <div class="mb-4">
        <img src="{{ asset('img/price1.png') }}" width="55%" class="mx-auto">
    </div>
    <div class="mb-4">
        <img src="{{ asset('img/price2.png') }}" width="55%" class="mx-auto">
    </div>
</section>

@endsection