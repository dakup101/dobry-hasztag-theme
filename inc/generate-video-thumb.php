<?php
use FFMpeg\FFMpeg;
use FFMpeg\Coordinate\TimeCode;

function generateVideoThumbnail($video_path) {
    // Generate a unique filename for the thumbnail
    $thumbnail_filename = uniqid() . '.jpg';
    
    // Get the path to the uploads directory
    $upload_dir = wp_upload_dir();
    $thumbnail_directory = $upload_dir['basedir'] . '/ig_thumbnails/';
    $thumbnail_path = $thumbnail_directory . $thumbnail_filename;

    // Create the ig_thumbnails directory if it doesn't exist
    if (!file_exists($thumbnail_directory)) {
        mkdir($thumbnail_directory, 0755, true);
    }
    
    // Download the video file to a temporary location
    $temp_video_path = tempnam(sys_get_temp_dir(), 'video');
    copy($video_url, $temp_video_path);
    
    // Open the downloaded video file with FFmpeg
    $ffmpeg = FFMpeg::create();
    $video = $ffmpeg->open($temp_video_path);
    
    // Generate the thumbnail from the video
    $frame = $video->frame(TimeCode::fromSeconds(1)); // Adjust the time to capture the frame you desire
    $frame->save($thumbnail_path);
    
    // Remove the temporary video file
    unlink($temp_video_path);
    
    // Return the file URL
    $thumbnail_url = $upload_dir['baseurl'] . '/ig_thumbnails/' . $thumbnail_filename;
    return $thumbnail_url;
}