<?php

class PostTableSeeder extends Seeder
{
    public function run()
    {
        $post = new Post();
        $post->user_id = '2';
        $post->title = 'Why Codeup';
        $post->body = 'I chose Codeup mainly based on the location of their campus, I was enrolled in a Master\'s program and Trinity University (down the road from Codeup).
        I was looking for a way to expand my data analytics skillset and for ways to solve issues common in Health Care when it comes to big data. After meeting with the people
        over at Codeup, I decided that building web applications was a great way to approach these issues.';
        $post->image_url = 'http://www.xconomy.com/wordpress/wp-content/images/2016/05/CodeupLogo.png';
        $post->tags = 'Codeup';
        $post->save();

        $post = new Post();
        $post->user_id = '2';
        $post->title = 'Learning Laravel';
        $post->body = 'Laravel has made PHP syntax easier to read and easier to structure. I have heard
        that it is the one true framework, and learning to utilize the power inherent to Laravel\'s setup has turned me into a believer.
        From blade syntax to the ease of working with an MVC, Laravel keeps supring me in the best way possible.';
        $post->image_url = 'http://laraveldaily.com/wp-content/uploads/2015/06/laravel-logo-big.png';
        $post->tags = 'laravel';
        $post->save();

        $post = new Post();
        $post->user_id = '2';
        $post->title = 'Learning PHP';
        $post->body = 'Learning how to access database information has been challenging, yet satisfying!';
        $post->image_url = 'https://bowerphp.org/php.png';
        $post->tags = 'PHP';
        $post->save();

        $post = new Post();
        $post->user_id = '2';
        $post->title = 'Learning JQuery';
        $post->body = 'Ajax and realtime updates through JSON have been a neat new way to interact with webpages.';
        $post->image_url = 'http://taswar.zeytinsoft.com/wp-content/uploads/2014/05/jquery-logo.png';
        $post->tags = 'jQuery';
        $post->save();

        $post = new Post();
        $post->user_id = '2';
        $post->title = 'Learning JavaScript';
        $post->body = 'We now have the power to make objects zip, appear, blink, and animate, among many more.';
        $post->image_url = 'https://www.codementor.io/assets/page_img/learn-javascript.png';
        $post->tags = 'JS';
        $post->save();

        $post = new Post();
        $post->user_id = '2';
        $post->title = 'Learning HTML and CSS';
        $post->body = 'Learning bootstrap, materialize, and a variety of best practices when it comes to HTML and CSS';
        $post->image_url = 'https://microlancer.lancerassets.com/v2/services/8b/190b80674b11e4b0077b0e8176ec20/large_html.jpg';
        $post->tags = 'HTML, CSS';
        $post->save();


    }
}
