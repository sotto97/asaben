@extends('layouts.app')
@section('content')

<section id="course" class="w-full h-auto items-center py-24 bg-gray-100 text-center">
    <h2 class="text-3xl mb-8 text-orange-400">入塾の流れ</h2>
    <div class="w-4/5 text-left mx-auto">
        <p class="flex">
            <span class="bg-orange-400 rounded-full h-16 w-16 flex items-center justify-center text-white">1</span>
            <span class="h-16 w-auto flex pl-4 items-center justify-center text-xl">お問い合わせ</span>
        </p>
    </div>
    <div class="w-4/5 mx-auto flex items-stretch pl-8">
        <div class="w-full border-l-2 px-2 py-6 text-left">
            <div class="pl-10">
                <p class="text-gray-700">まずは「お問合わせ」からお気軽にお問い合わせください。 オンライン個別相談の日程を調整します。</p>
            </div>
        </div>
    </div>
    <div class="w-4/5 text-left mx-auto">
        <p class="flex">
            <span class="bg-orange-400 rounded-full h-16 w-16 flex items-center justify-center text-white">2</span>
            <span class="h-16 w-auto flex pl-4 items-center justify-center text-xl">オンライン個別面談</span>
        </p>
    </div>
    <div class="w-4/5 mx-auto flex items-stretch pl-8">
        <div class="w-full border-l-2 px-2 py-6 text-left">
            <div class="pl-10">
                <p class="text-gray-700">面談にて塾の詳細をご説明させて頂くと共に、学生の"将来の夢"から現状抱えている課題や悩み、ご要望などをお伺いします。学生さまと保護者さま、同伴の形式で実施します。</p>
            </div>
        </div>
    </div>
    <div class="w-4/5 text-left mx-auto">
        <p class="flex">
            <span class="bg-orange-400 rounded-full h-16 w-16 flex items-center justify-center text-white">3</span>
            <span class="h-16 w-auto flex pl-4 items-center justify-center text-xl">オンライン無料体験</span>
        </p>
    </div>
    <div class="w-4/5 mx-auto flex items-stretch pl-8">
        <div class="w-full border-l-2 px-2 py-6 text-left">
            <div class="pl-10">
                <p class="text-gray-700">ASABENを無料で体験して頂きます。コンテンツにご納得頂いた上でのご入塾としております。</p>
            </div>
        </div>
    </div>
    <div class="w-4/5 text-left mx-auto">
        <p class="flex">
            <span class="bg-orange-400 rounded-full h-16 w-16 flex items-center justify-center text-white">4</span>
            <span class="h-16 w-auto flex pl-4 items-center justify-center text-xl">ご入塾の手続き</span>
        </p>
    </div>
    <div class="w-4/5 mx-auto flex items-stretch pl-8">
        <div class="w-full px-2 py-6 text-left">
            <div class="pl-10">
                <p class="text-gray-700">無料体験終了後、正式にご入塾となります。 オンライン決済の自動引き落としとしており、入塾手続きは非常にスムーズにできます。</p>
            </div>
        </div>
    </div>
</section>

@endsection