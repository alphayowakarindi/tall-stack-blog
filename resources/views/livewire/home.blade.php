<div>
    <x-slot:hero>
        <header class="relative flex items-center justify-center h-screen bg-center bg-cover"
            style="background-image: url('images/hero.jpg')">
            <div class="relative z-10 text-center text-white">
                <h1 class="font-bold text-7xl">Alphayo Blog</h1>
                <h4 class="mt-4 text-2xl font-light">Home of verified news...</h4>
            </div>
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        </header>
    </x-slot>
    <h2 class="mt-20 mb-10 text-3xl font-light text-center">
        Latest Blog Posts
    </h2>
    <section class="grid gap-12 md:grid-cols-2">
        <div>
            <img src="images/pic1.jpg" alt="" class="object-cover w-full h-64" />
            <p class="mt-4 mb-2">
                2 hours ago
                <span class="float-right">Written By Alphayo Wakarindi</span>
            </p>
            <h4 class="text-xl font-bold">
                <a href="single-blog.html">Laravel Roadmap</a>
            </h4>
        </div>

        <div>
            <img src="images/pic2.jpg" alt="" class="object-cover w-full h-64" />
            <p class="mt-4 mb-2">
                23 hours ago
                <span class="float-right">Written By Alphayo Wakarindi</span>
            </p>
            <h4 class="text-xl font-bold">
                <a href="single-blog.html">Top 10 Music Stories Never Told</a>
            </h4>
        </div>

        <div>
            <img src="images/pic3.jpg" alt="" class="object-cover w-full h-64" />
            <p class="mt-4 mb-2">
                2 days ago
                <span class="float-right">Written By Alphayo Wakarindi</span>
            </p>
            <h4 class="text-xl font-bold">
                <a href="single-blog.html">WRC Safari Rally Back To Kenya After 19 Years</a>
            </h4>
        </div>

        <div>
            <img src="images/pic4.jpg" alt="" class="object-cover w-full h-64" />
            <p class="mt-4 mb-2">
                3 days ago
                <span class="float-right">Written By Alphayo Wakarindi</span>
            </p>
            <h4 class="text-xl font-bold">
                <a href="single-blog.html">Premier League 2021/2022 Fixtures</a>
            </h4>
        </div>
    </section>
</div>
