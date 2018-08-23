<?php

use App\Blog;
use App\Tag;
use App\Card;

// Blog

if (! function_exists('getStatus')) {
    function getStatus($status) {
        if($status) return 'Active';
        else return 'Inactive';
    }
}

if (! function_exists('getBlogsByCategory')) {
    function getBlogsByCategory($id) {
        $blogs = Blog::where('category_id', $id)->get();

        return $blogs;
    }
}

if (! function_exists('deleteBlogTags')) {
    function deleteBlogTags($id) {
        DB::table('blog_tag')->where('blog_id', $id)
            ->delete();
    }
}

if (! function_exists('deleteBlogKeywords')) {
    function deleteBlogKeywords($id) {
        DB::table('blog_keyword')->where('blog_id', $id)
            ->delete();
    }
}

// Cards

if (! function_exists('getCardsByCategory')) {
    function getCardsByCategory($id) {
        $cards = Card::where('category_id', $id)->get();

        return $cards;
    }
}