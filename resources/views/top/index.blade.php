@include('layouts.app')

@include('layouts.header')

<div class="w-full h-screen flex items-center bg-gray-100">
    <div class="text-right w-1/2 pr-12 pb-12">
        <h2 class="italic font-semibold text-6xl text-orange-400">ASABEN</h2>
        <p class="italic font-semibold text-xl mt-2">朝の学習習慣で人生を豊かに</p>
        <p class="italic font-semibold text-xl">Change your morning, Change your life.</p>
        <div class="flex pt-4">
            <a href="/" class="flex-1 text-orange-400 hover:text-black transition duration-300 mr-4 py-2">ASABENとは？</a>
            <button class="bg-orange-400 hover:bg-orange-500 transition duration-300 px-6 text-white rounded-full ml-2">さっそく始める</button>
        </div>
    </div>
    <div class="w-1/2 pl-12 pb-12">
        <img src="{{ asset('svg/KidsStudying.svg') }}" width="60%">
    </div>
</div>

<div class="w-full h-auto py-12 bg-orange-400 text-center text-white">
    <h2 class="text-3xl">ASABENとは？</h2>
    <p class="mt-2">「塾・予備校＝放課後に通うもの」という概念を壊し、</p>
    <p>毎朝の学習習慣を身に付けることによって、1日の時間を有効活用できる</p>
    <p>「一生モノ」の学習習慣を身につけます</p>
</div>

<section id="news" class="h-auto py-12 bg-gray-100 text-center">
    <p class="text-3xl text-orange-400">ニュース</p>
    <div class="w-2/5 mx-auto my-4">
        <a href="">
            <img src="{{ asset('img/abema.png') }}">
        </a>
    </div>
    <p class="my-4">この度、朝のオンライン塾「ASABEN」について、代表の福島が取材を受け、教育メディア「テラコヤプラス」に記事が掲載されました。<br>
        ASABENが実現したいことや強み・特徴について答えておりますので、ぜひご一読ください！</p>
    <button class="bg-orange-400 hover:bg-orange-500 transition duration-300 text-white py-2 px-6 rounded-full">テラコヤプラスTOPページ</button>
</section>

<section id="movie" class="h-auto py-12 bg-orange-400 text-white text-center">
    <p class="text-3xl">動画</p>
    <div class="w-full flex items-center py-12">
        <div class="text-right w-1/2 pr-12 pb-12">
            <h2 class="font-semibold text-2xl">動画で観るASABEN</h2>
            <p class="pt-2">※動画の再生する際は大量のパケットを使用する為wifi環境を推奨しております</p>
        </div>
        <div class="w-1/2 pl-12 pb-12">
            <img src="{{ asset('img/movie.jpg') }}" width="60%">
        </div>
    </div>
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

<section id="movie" class="h-auto py-20 bg-orange-400 text-white text-center">
    <div class="w-full">
        <img src="{{ asset('img/schedule.png') }}" width="55%" class="mx-auto">
    </div>
</section>

<section id="morning" class="w-full h-auto py-20 bg-gray-100 text-orange-400 text-center">
    <p class="text-3xl">なぜ、朝の学習習慣を付けることが良いの？</p>
    <div class="w-4/5 mx-auto flex items-stretch py-24">
        <div class="flex-1 text-black">
            <p class="underline py-6">"習慣化させることが、最も効率的に成績を上げる手段"</p>
            <p class="w-3/4 mx-auto">何事においても成果を伸ばす要因として、正しい方向に向かって「継続する」ことが大きな要素であると考えています。朝の学習習慣を身に付けることで、テスト前に徹夜するなどの無理なスケジューリングをすることなく、成績を効率よく上げることができます。</p>
        </div>
        <div class="flex-1 text-black">
            <p class="underline py-6">"「一生モノ」の習慣として、大人になってからも活きる"</p>
            <p class="w-3/4 mx-auto">1日の時間を有効活用することは、人生を豊かにする上で重要な要素であり、そのカギとなるのは「朝の過ごし方」だと考えています。朝から学習する習慣を身に付けることで、将来的にも朝の時間を有効に使い、より人生を豊かにすることができます。</p>
        </div>
        <div class="flex-1 text-black">
            <p class="underline py-6">"部活動などを熱心にしている学生の文武両道をサポート"</p>
            <p class="w-3/4 mx-auto">塾や予備校は、放課後に通うことが一般的であり、部活などに熱心に打ち込む学生が充実した学習環境を持つことは難しいです。朝の短い時間に集中して学習できる環境を提供することで、そのような学生の文武両道を実現します。</p>
        </div>
    </div>
</section>

<section id="contact" class="h-auto w-full py-20 bg-orange-400 text-white text-center">
    <p class="text-3xl">お問い合わせフォーム</p>
    <form class="w-1/2 mx-auto py-20">
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-white font-bold md:text-right mb-1 md:mb-0 pr-4">
                    お名前
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:border-black" type="text" placeholder="朝勉 太郎">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                    メールアドレス
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:border-black" type="email" placeholder="example@email.com">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                    お問い合わせ内容
                </label>
            </div>
            <div class="md:w-2/3">
                <textarea class="border-2 border-gray-200 rounded w-full h-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:border-black" type="text"></textarea>
            </div>
        </div>
        <button type="submit" class=" w-3/4 bg-gray-800 hover:bg-gray-700 transition duration-300 text-white py-2 px-6 rounded-full">内容を確認して送信する</button>
    </form>
</section>

<footer class="bg-orange-400 text-center text-white py-2">
    <p>©ASABEN2021</p>
</footer>