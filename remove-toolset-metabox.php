//Remove Toolset Front-end Metabox
function remove_types_info_box() {
    return false;
}
add_filter( 'types_information_table', 'remove_types_info_box' );