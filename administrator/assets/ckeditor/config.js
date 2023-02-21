/**

 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.

 * For licensing, see LICENSE.md or http://ckeditor.com/license

 */



CKEDITOR.editorConfig = function( config ) {

	// Define changes to default configuration here. For example:

	 config.language = 'en';

	// config.uiColor = '#AADC6E';



config.allowedContent = true;



config.extraPlugins = "doksoft_advanced_blocks,doksoft_alert,doksoft_backup,doksoft_breadcrumbs,doksoft_button," +

"doksoft_custom_templates,doksoft_easy_file,doksoft_easy_image,doksoft_easy_preview,doksoft_file," +

"doksoft_font_awesome,doksoft_gallery,doksoft_image,doksoft_image_embed,doksoft_include,doksoft_maps," +

"doksoft_preview,doksoft_rehost_file,doksoft_rehost_image,doksoft_special_symbols,doksoft_syn,doksoft_table," +

"doksoft_translater,doksoft_youtube";



config.extraPlugins = 'doksoft_custom_templates,doksoft_easy_file,doksoft_easy_image,doksoft_easy_preview,doksoft_file,doksoft_gallery,doksoft_image,doksoft_image_embed,doksoft_include,doksoft_maps,';



config.filebrowserUploadUrl = "filemanager/upload/";



config.toolbar = [
    ['Styles','Format','Font','FontSize'],
    '/',
    ['Bold','Italic','Underline','StrikeThrough','-','Undo','Redo','-','Cut','Copy','Paste','Find','Replace','-','Outdent','Indent','-','Print'],
    '/',
    ['NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
    ['Image','Table','-','Link','Flash','Smiley','TextColor','BGColor','Source']
 ] ;
 

};





