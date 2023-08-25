<?php
/*
Template Name: London Location
*/


?>



                <form id="movie-form" method="post" enctype="multipart/form-data">
                    <label for="movie-title">Title:</label>
                    <input type="text" id="movie-title" name="movie_title">

                    <label for="movie-description">Description:</label>
                    <textarea id="movie-description" name="movie_description"></textarea>

                    <label for="movie-category">Category:</label>
                    <input type="text" id="movie-category" name="movie_category">

                    <label for="movie-tag">Tags:</label>
                    <input type="text" id="movie-tag" name="movie_tag">

                    <label for="movie-featured-image">Featured Image:</label>
                    <input type="file" id="movie-featured-image" name="movie_featured_image"/>s
                    <input type="submit" value="Submit" name="submit">
                </form>
       
<?php

// function save_movie_post() {
//     if (isset($_POST['submit'])) {
//         // Form submission logic here
//         $title = sanitize_text_field($_POST['movie_title']);
//         $description = sanitize_text_field($_POST['movie_description']);
//         $category = sanitize_text_field($_POST['movie_category']);
//         $tags = sanitize_text_field($_POST['movie_tag']);

//         // Create a new movie post
//         $post_args = array(
//             'post_title' => $title,
//             'post_content' => $description,
//             'post_status' => 'publish',
//             'post_type' => 'movie', // Replace with your custom post type slug
//             // Add more post type-specific arguments here
//         );
    
//         $post_id = wp_insert_post($post_args);

//         if (!is_wp_error($post_id)) {
//             // Assign category and tags
//             wp_set_object_terms($post_id, array($category), 'category'); // Replace with your custom taxonomy slug
//             wp_set_post_tags($post_id, $tags);

//             // Handle featured image upload
//             if (!empty($_FILES['movie_featured_image']['name'])) {
//                 require_once(ABSPATH . 'wp-admin/includes/image.php');
//                 require_once(ABSPATH . 'wp-admin/includes/file.php');
//                 require_once(ABSPATH . 'wp-admin/includes/media.php');

//                 $attachment_id = media_handle_upload('movie_featured_image', $post_id);

//                 if (!is_wp_error($attachment_id)) {
//                     set_post_thumbnail($post_id, $attachment_id);
//                 }
//             }

//             echo "Movie post created successfully!";
//         } else {
//             echo "Error creating movie post.";
//         }
//     }
// }

// add_action('init', 'save_movie_post');

?>
