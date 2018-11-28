//Apply review to all forms 
add_filter( 'gform_review_page', 'your_function_name' );


//Limit to specific form
add_filter( 'gform_review_page_6', 'your_function_name' );


//Populate all fields
add_filter( 'gform_review_page', 'add_review_page', 10, 3 );
function add_review_page( $review_page, $form, $entry ) {
 
    // Enable the review page
    $review_page['is_enabled'] = true;
 
    // Populate the review page
    $review_page['content'] = GFCommon::replace_variables( '{all_fields}', $form, $entry );
 
    return $review_page;

//Change text button "Review Form"
// NOTE: Update the '221' to the ID of your form.
add_filter( 'gform_review_page_222', 'change_review_page_button', 10, 3 );
function change_review_page_button( $review_page, $form, $entry ) {
 
    $review_page['nextButton']['text'] = 'Review & Submit';
 
    return $review_page;
}


//Source code
gf_apply_filters( 'gform_review_page', $form['id'], $review_page, $form, $partial_entry );
