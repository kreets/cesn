<?php

function getCurrentEvent(){
    return \App\Models\Event::with('eventDays.eventPrograms')->where('current', 1)->first();
}

function getPrograms($limit = null){
    $activeEvent = getCurrentEvent();
    $programs = \App\Models\EventProgram::whereHas('eventDay', function ($query) use ($activeEvent) {
        $query->where('event_id', $activeEvent->id);
    });
    if($limit){
        $programs->take($limit);
    }
    return $programs->get();
}

function getPage($slug){
    return \App\Models\Page::where('slug', $slug)->first();
}

function getBlogPosts($limit = null){
    $posts = \App\Models\Post::where('status', 'PUBLISHED');
    if($limit){
        $posts->take($limit);
    }
    return $posts->get();
}

function uploaded($path) {
    if (preg_match('/^https?:\/\//', $path)) {
        return $path;
    }

    return asset('storage/' . ltrim($path, '/'));
}

function galleryImages($limit = null){
    $images = \App\Models\GalleryImage::query();
    if($limit){
        $images->take($limit);
    }
    return $images->get();
}