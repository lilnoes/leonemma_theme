<?php
get_header(); ?>

<div class="flex flex-row justify-center">
    <div class="w-full mx-1">
        <div class="h-96 relative">
            <div class="absolute z-[1] text-white font-bold bg-green-800 rounded-lg">Category</div>
            <div class="absolute bottom-0 z-[1]"><span class="text-white font-bold bg-green-800 rounded-lg">May 10, 2021</span><span class="text-white ml-3">No comments</span></div>
            <img class="w-full h-full" src="<?php echo get_template_directory_uri() . '/assets/images/microsoft.jpeg' ?>" />
        </div>
        <div class="mr-3 font-bold text-3xl">Title ya post post microsoft title</div>
        <div>text text text text text text text text text text text text text text text text text text text text text text text text text text text v text text text...</div>
        <button class="p-2 rounded-lg text-white bg-green-800">Read more...</button>
    </div>
    <div class="bg-green-500 w-full">div 2</div>
    <div class="w-1/2 bg-red-800">div 3</div>

</div>
<div class="mt-10 relative">
    <h2 class="text-2xl text-white font-bold bg-green-800 bg-clip-border w-max p-2">Latest Posts</h2>
    <hr class="border-green-800 border-2 w-[70%] relative" />
</div>


<?php get_footer();

?>