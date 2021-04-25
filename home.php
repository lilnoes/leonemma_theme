<?php
get_header(); ?>

<div class="flex flex-row justify-center">
    <div class="w-full mx-1">
        <div class="h-96 relative">
            <div class="absolute z-[1] text-white font-bold bg-green-800 rounded-lg">Category</div>
            <div class="absolute bottom-0 z-[1]"><span class="text-white font-bold bg-green-800 rounded-lg">May 10, 2021</span><span class="text-white ml-3 bg-gray-500 rounded-lg">No comments</span></div>
            <img class="w-full h-full" src="<?php echo get_template_directory_uri() . '/assets/images/microsoft.jpeg' ?>" />
            <div class="absolute bg-green-800 text-white top-0 right-0 z-[2] rounded-full p-1">
                <p><span class="text-3xl">3</span><span class="text-xs">min</span></p>
            </div>
        </div>
        <div class="mr-3 font-bold text-3xl">Title ya post post microsoft title</div>
        <div>text text text text text text text text text text text text text text text text text text text text text text text text text text text v text text text...</div>
        <button class="p-2 rounded-lg text-white bg-green-800 active:bg-white active:text-green-800 focus:outline-none">Read more...</button>
    </div>

    <div class="w-full mx-1">
        <div class="h-96 relative">
            <div class="absolute z-[1] text-white font-bold bg-green-800 rounded-lg">Category</div>
            <div class="absolute bottom-0 z-[1]"><span class="text-white font-bold bg-green-800 rounded-lg">May 10, 2021</span><span class="text-white ml-3 bg-gray-500 rounded-lg">No comments</span></div>
            <img class="w-full h-full" src="<?php echo get_template_directory_uri() . '/assets/images/google.jpeg' ?>" />
        </div>
        <div class="mr-3 font-bold text-3xl">Title ya post post microsoft title</div>
        <div>text text text text text text text text text text text text text text text text text text text text text text text text text text text v text text text...</div>
        <button class="p-2 rounded-lg text-white bg-green-800 active:bg-white active:text-green-800 focus:outline-none">Read more...</button>
    </div>

    <div class="w-1/2">
        <div class="flex flex-row font-bold text-green-800 cursor-pointer">
            <p class="active-sidebar-menu w-1/2 p-2" id="topratedmenu">Top Rated</p>
            <p class="w-1/2 p-2" id="recentmenu">Recent</p>
        </div>

        <div class="flex flex-row my-3 bg-white rounded-lg py-1 shadow-lg">
            <div class="h-20 w-20 bg-red-500">
            </div>
            <div class="ml-2">
                <p class="font-bold text-lg">Title ya post </p>
                <p>summary</p>
                <button class="p-0.5 rounded-lg text-white bg-green-800 active:bg-white active:text-green-800 focus:outline-none">Read more...</button>
            </div>
        </div>

        <div class="flex flex-row my-3 bg-white rounded-lg py-1 shadow-lg">
            <div class="h-20 w-20 bg-red-500">
            </div>
            <div class="ml-2">
                <p class="font-bold text-lg">Title ya post </p>
                <p>summary</p>
                <button class="p-0.5 rounded-lg text-white bg-green-800 active:bg-white active:text-green-800 focus:outline-none">Read more...</button>
            </div>
        </div>

        <div>
            <p class="text-gray-700 font-bold">Subscribe to our newsletter</p>
            <p><span class="text-sm font-bold">Email: </span><input class="ml-1 w-[80%] border-b border-green-800 focus:outline-none" type="email" /></p>
            <button class="mt-2 rounded-lg float-right bg-green-800 text-white p-1">Subscribe</button>
        </div>

    </div>

</div>
<div class="mt-10 relative mb-5">
    <h2 class="text-2xl text-white font-bold bg-green-800 bg-clip-border w-max p-2">Latest Posts</h2>
    <hr class="border-green-800 border-2 w-[70%] relative" />
</div>

<div class="flex flex-row relative">
    <div class="w-1/3 h-60 relative">
        <img class="w-full h-full z-[1] relative" src="<?php echo get_template_directory_uri() . '/assets/images/google.jpeg' ?>" />
        <div class="absolute bg-green-800 text-white top-0 right-0 z-[2] rounded-full p-1">
            <p><span class="text-3xl">3</span><span class="text-xs">min</span></p>
        </div>
    </div>

    <div class="w-[48%] ml-3">
        <p class="font-bold text-2xl">Title yost 1 Title ya Latest Post 1 Title ya Latest Post 1 Title ya Latest Post 1 Title ya Latest Post 1</p>
        <p class="text-white text-sm font-bold"><span class="bg-gray-600 rounded-md px-1">May 11, 2021</span><span class="ml-10 bg-gray-600 rounded-md px-1">No comments</span></p>
        <p class="relative mt-1">summary ya post summary ya post summary ya post summary ya post summary ya post summary ya post summary ya post summary ya post summary ya post summary ya post summary ya post summary ya post summary ya post summary ya post </p>
        <button class="p-2 mt-3 rounded-lg text-white bg-green-800 active:bg-white active:text-green-800 focus:outline-none">Read more...</button>
    </div>

    <hr class="absolute w-[81%] bottom-0 shadow-lg border-2" />
</div>


<?php get_footer();

?>