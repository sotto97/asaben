@extends('layouts.app')
@section('content')

<section class="pt-12">
    <p>ASABENの特徴</p>
    <p>やる気と自信、個性を引き出す独自の仕組み</p>
</section>

<section id="detail" class="w-full h-auto items-center py-12 bg-gray-100 text-orange-400 text-center">
    <p class="text-3xl">サービスの特徴</p>
    <div class="w-4/5 mx-auto flex items-stretch py-4">
        <div class="flex-1 text-black">
            <img src="{{ asset('svg/multitasking.svg') }}" width="55%" class="mx-auto h-56">
            <p class="underline py-2">平日毎朝1時間の集中授業</p>
            <p class="w-3/4 mx-auto">塾生は平日毎朝6:00から7:00の1時間で、自ら作成した学習計画に沿って学習を進めます。毎朝短い時間での学習を続けることで、より効率的な学習習慣を身につけ、無理なく成績を向上させることができます。放課後忙くて塾に通うことができない部活生も、朝だからこそ学習を続けることができます。</p>
        </div>
        <div class="flex-1 text-black">
            <img src="{{ asset('svg/team.svg') }}" width="55%" class="mx-auto h-56">
            <p class="underline py-2">徹底的な自学自習のサポート</p>
            <p class="w-3/4 mx-auto">生徒一人ひとり、得意なこと、苦手なこと、将来の夢や目標は異なります。ASABENでは、それぞれに最適な学習計画を講師が生徒と一緒に作成し、学習計画の進捗を管理することで、一人ひとりに合った学習を促します。単に「教える」のではなく、「自ら学習する力を身に付けるサポート」が、飛躍的な成長への秘訣です。</p>
        </div>
        <div class="flex-1 text-black">
            <img src="{{ asset('svg/onlinelearning.svg') }}" width="55%" class="mx-auto h-56">
            <p class="underline py-2">オンライン学習でも安心</p>
            <p class="w-3/4 mx-auto">ASABENでは、学習中にわからないことや質問したいことがあった時、いつでも1対1で質問できる環境を整えています。また、週次面談を通し、生徒一人ひとりの進捗に合わせて、講師が丁寧に接することで、生徒がやる気を失わず、朝の学習を習慣化させ、楽しく続けられる環境を提供しています。</p>
        </div>
    </div>
</section>

@endsection