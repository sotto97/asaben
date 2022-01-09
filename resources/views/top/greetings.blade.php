@extends('layouts.app')
@section('content')

<section id="course" class="w-full h-auto items-center py-24 bg-gray-100 text-center">
    <h2 class="text-3xl mb-8 text-orange-400">ご挨拶</h2>
    <div class="w-4/5 mx-auto flex items-stretch">
        <div class="w-1/3 px-2 py-6">
            <img src="{{ asset('img/teacher1.jpeg') }}" class="mx-auto rounded-xl w-full shadow-xl">
        </div>
        <div class="w-2/3 px-2 py-6 text-left">
            <h3 class="text-2xl">福島 大晴 ( Taisei Fukushima )</h3>
            <div class="pb-2">
                <h3 class="text-2xl text-orange-400">ASABEN塾長</h3>
                <p class="text-orange-400">東京理科大学卒業(東京理科大学成績優秀者) / 外資IT企業入社</p>
            </div>
            <div class="text-gray-700">
                <p>私は、学生時代にオーストラリアのジムで、朝６時からスイミングを習う子どもたちを見て衝撃を受けました。なぜなら、日本では"習い事＝放課後"が一般的だったからです。子どもたちに「放課後は何をするの？」と質問すると「17時には帰宅し、家族との時間を過ごす」と満面の笑みで答えたのを今でも色濃く覚えています。</p>
                <p>この経験から、日本でも朝の時間を有効活用するサービスを提供することで、"放課後＝好きな事をする時間"に変えて頂き、多くの事に没頭し、チャレンジし、学校ではできない経験・学びをたくさんして頂きたいです。​</p>
                <p>ASABENを通してみなさんの個性を見つけ、伸ばし、人生をよりワクワクしたモノにしていきましょう。</p>
            </div>
        </div>
    </div>
    <p class="border-b-2 w-4/5 mx-auto"></p>
    <div class="w-4/5 mx-auto flex items-strech">
        <div class="w-1/3 px-2 py-6">
            <img src="{{ asset('img/teacher2.jpeg') }}" class="mx-auto rounded-xl w-full shadow-xl">
        </div>
        <div class="w-2/3 px-2 py-6 text-left">
            <h3 class="text-2xl">田中 れいや ( Reiya Tanaka )</h3>
            <div class="pb-2">
                <h3 class="text-2xl text-orange-400">ASABEN副塾長</h3>
                <p class="text-orange-400">中・高教諭一種（英語） / 国際ボランティアプロジェクト参画<br>キリマンジャロ登頂東京学芸大学教育学部卒業TheUniversityofLeicester（イギリス）<br>日本アイ・ビー・エム(株)入社</p>
            </div>
            <div class="text-gray-700">
                <p>私自身、6歳からサッカーを続けてきた中で、どのように勉強との両道をするか悩んできました。高校ではサッカー部で朝練もある中、どれだけ決まった時間で集中して勉強できるかにこだわりました。</p>
                <p>その時にできた感覚は、現在の仕事とプライベートの両立においても非常に役立っており、そのおかげで現在仕事をしながら、サッカークラブの設立や、プレイングマネージャーをしています。</p>
                <p>そのような感覚、習慣を中高生の時から身に付け、社会で活躍できる人材を育成したいと思います。</p>
            </div>
        </div>
</section>

<section id="course" class="w-full h-auto items-center py-12 bg-orange-400 text-white text-center">
    <h2 class="text-3xl mb-6">ASABENの講師陣（一部抜粋）</h2>
    <div class="">
        <p>論理的に理解できるまで徹底サポート</p>
    </div>
    <div class="w-4/5 mx-auto flex items-stretch py-12">
        <div class="w-1/2 flex px-4 mx-2 bg-white rounded-xl shadow-xl">
            <div class="w-1/3 py-6">
                <img src="{{ asset('img/teacher3.jpeg') }}" class="mx-auto rounded-xl w-full shadow-xl">
            </div>
            <div class="w-2/3 px-2 py-6 text-left">
                <h3 class="text-xl text-black">東 條太朗</h3>
                <div class="pb-2">
                    <p class="text-orange-400">東京大学 院生 / 五大商社就職予定</p>
                </div>
                <div class="text-gray-700">
                    <p>部活動も勉強も全力でやりたい。そんな皆さんの思いを実現するサポートをさせてください！！中学、高校、大学とサッカー、勉強に本気で取り組んできた私だからこそできるサポートを提供します。宜しくお願いします！</p>
                </div>
            </div>
        </div>
        <div class="w-1/2 flex px-4 mx-2 bg-white rounded-xl shadow-xl">
            <div class="w-1/3 py-6">
                <img src="{{ asset('img/teacher4.jpeg') }}" class="mx-auto rounded-xl w-full shadow-xl">
            </div>
            <div class="w-2/3 px-2 py-6 text-left">
                <h3 class="text-xl text-black">三富 優介</h3>
                <div class="pb-2">
                    <p class="text-orange-400">東京理科大学 院生</p>
                </div>
                <div class="text-gray-700">
                    <p>宿題やテスト勉強を眠い目を擦りながらしたり、文武両道ができないと悩んでいる学生さんは多いと思っております。私自身もどのようにタイムマネージメントをすれば、より効率良く学習時間を確保できるかを考えていた時期もありました。</p>
                    <p>現在大学院生ということもあり、研究していたら1日が終わるということが多々ある中で、朝の1時間を使って英語の学習に取り組むことを習慣化しています。朝の習慣化の大切さを多くの学生さんに感じてもらえるよう全力でサポートしていきたいと思います。</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection