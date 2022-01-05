<header class="relative w-full">
    <div class="fixed flex items-center inset-x-0 top-0 bg-orange-400">
        <div class="w-2/5 h-auto pl-16 py-2">
            <p class="italic font-semibold text-xl">ASABEN</p>
        </div>
        <div class="w-3/5 pr-16 py-2">
            <ul class="flex text-center items-center text-sm">
                {{-- <a href="{{ route('top.peculiarity') }}">
                    <li class="flex-1 hover:text-white transition duration-300 cursor-pointer">特徴</li>
                </a> --}}
                <li class="flex-1 hover:text-white transition duration-300 cursor-pointer">
                    <a href="{{ route('top.peculiarity') }}">特徴</a>
                </li>
                <li class="flex-1 hover:text-white transition duration-300 cursor-pointer">カリキュラム</li>
                <li class="flex-1 hover:text-white transition duration-300 cursor-pointer">
                    <a href="{{ route('top.course') }}">コース</a>
                </li>
                <li class="flex-1 hover:text-white transition duration-300 cursor-pointer">ご挨拶</li>
                <li class="flex-1 hover:text-white transition duration-300 cursor-pointer">入塾の流れ</li>
                <li class="flex-1 hover:text-white transition duration-300 cursor-pointer">その他</li>
                <li class="flex-1">
                    <button class="px-2 py-2 bg-orange-400 hover:bg-orange-600 transition duration-300 text-white cursor-pointer rounded-full">お問い合わせ</button>
                </li>
                <!-- <li class="flex-1 p-2 hover:bg-orange-400 hover:text-gray-600 cursor-pointer">taisei.fukushima@asaben2021.com
            </li>
            <li class="flex-1 p-2 hover:bg-orange-400 hover:text-gray-600 cursor-pointer">080-2389-3091</li> -->
            </ul>
        </div>
    </div>
</header>