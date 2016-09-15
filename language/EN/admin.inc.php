<?php
/***************************************************************************
 *   copyright				: (C) 2008 - 2016 WeBid
 *   site					: http://www.webidsupport.com/
 ***************************************************************************/

/***************************************************************************
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version. Although none of the code may be
 *   sold. If you have been sold this script, get a refund.
 ***************************************************************************/

if (!defined('InWeBid')) exit();

// aboutus.php
$MSG['about_us_page'] = "About Us Page";
$MSG['active_about_us'] = "Activate About us page?";
$MSG['active_about_us_explain'] = "Activate this option if you want an <u>About  us</u> link to appear in the footer of your pages.";
$MSG['about_us_content'] = "About us page content";
$MSG['about_us_content_explain'] = "Note: each new line character will be converted to <b>&lt;br&gt;</b> HTML tag.";
$MSG['about_us_updated'] = "About us Updated";

// accounts.php
// nothing

// activatenewsletter.php
$MSG['newsletter_settings_updated'] = "Newsletter Settings Updated";
$MSG['activate_newsletter'] = 'Enable newsletter';
$MSG['activate_newsletter_explain'] = "If you activate this option, users will be given the option to subscribe to your newsletter.<br>The \"Newsletter management\" will let you send e-mail messages to the subscribed users";

// addnew.php
// nothing

// adminusers.php
$MSG['1100'] = 'You cannot delete the account you are currently logged in from';
$MSG['1101'] = 'Admin accounts deleted';

// analytics.php
$MSG['google_analytics'] = "Google Analytics";
$MSG['google_analytics_updated'] = "Google Analytics Settings updated";
$MSG['google_analytics_tracking_code'] = "Google Analytics Tracking Code";
$MSG['google_analytics_tracking_code_hint'] = "Copy and paste your Google Analytics tracking code here. You must include the opening and closing &lt;script&gt;&lt;/script&gt; tags.";

// auctions.php
$MSG['auction_settings'] = "Auction Settings";
$MSG['auction_settings_updated'] = "Auction Settings Updated";
$MSG['error_numeric_values'] = "Please enter valid numeric values.";
$MSG['error_max_pic_size_zero'] = "<i>Max picture size</i> cannot be zero.";
$MSG['error_max_num_pics_numeric'] = "<i>Max. number of pictures</i> must be numeric.";
$MSG['error_max_pic_size_numeric'] = "<i>Max picture size</i> must be numeric.";
$MSG['enable_proxy_bidding'] = "Enable Proxy Bidding";
$MSG['enable_proxy_bidding_explain'] = "Proxy bidding works where the winning bidder pays the price of the second-highest bid plus a defined increment, instead of their maximum bid. <a href=\"https://en.wikipedia.org/wiki/Proxy_bid\" target=\"_blank\">Wikipedia explaination</a>";
$MSG['enable_custom_start_date'] = "Enable Custom Start Date?";
$MSG['enable_custom_start_date_explain'] = "Users can set a custom start date for auctions";
$MSG['enable_custom_end_date'] = "Enable Custom End Date?";
$MSG['enable_custom_end_date_explain'] = "Users can set a custom <b>end</b> date for auctions";
$MSG['enable_custom_increments'] = "Enable Custom Increments";
$MSG['enable_custom_increments_explain'] = "Users can set custom bid increments for their auctions (this is the minimum difference between two bids)";
$MSG['hours_until_countdown'] = "Hours until auction ends count-down";
$MSG['hours_until_countdown_explain'] = "Hours remaining on an auction until the time remaining becomes an automatic countdown timer";
$MSG['additional_auction_options'] = "Additional auction options";
$MSG['enable_featured_items'] = "Enable Featured Items";
$MSG['enable_featured_items_explain'] = "Allows sellers to make their auctions featured on the homepage and category pages";
$MSG['enable_hightlighted_items'] = "Enable Highlighted Items";
$MSG['enable_hightlighted_items_explain'] = "Allows sellers to make their auctions highlighted (displayed listing in a different colour in search results etc)";
$MSG['enable_bold_items'] = "Enable Bold Items";
$MSG['enable_bold_items_explain'] = "Allows sellers to make their auctions bold (displayed listing in bold in search results etc)";
$MSG['enable_subtitles'] = 'Enable subtitles';
$MSG['enable_subtitles_explain'] = 'Allows sellers to add a subtitle to their auction which will appear on all auction lists';
$MSG['enable_second_cat'] = 'Enable Secondary Category';
$MSG['enable_second_cat_explain'] = 'Allows sellers to add their auction to multiple categories';
$MSG['enable_auto_relist'] = 'Enable Auto-Relist';
$MSG['enable_auto_relist_explain'] = 'Allow users to automatically relist auctions if they end without a winner';
$MSG['max_relists'] = 'Max Relists';
$MSG['max_relists_explain'] = 'Set the maximum times an auction can be automatically relisted';
$MSG['auction_extension_settings'] = "Auction Extension Settings";
$MSG['enable_auto_extension'] = "Enable Auctions Auto extension?";
$MSG['enable_auto_extension_explain'] = "Auctions Auto extension gives you the ability to automatically extend the auctions end time by <b>X</b> seconds,
				if someone bids in the last <b>Y</b> seconds of the auctions duration.";
$MSG['auto_extend_auction_by'] = "Extend auction by %s seconds if someone bid during the last %s seconds";
$MSG['enable_picture_gallery'] = "Enable Picture Gallery?";
$MSG['enable_picture_gallery_explain'] = "Allows sellers to be able to upload multiple pictures to their auction.";
$MSG['gallery_images_allowance'] = "Max. Number of pictures"; // Also index.php
$MSG['gallery_image_max_kb'] = "Max. pictures size"; // Also index.php
$MSG['gallery_image_max_kb_explain'] = "Enter the maximum allowed size (in Kbytes) of the pictures sellers can upload for each auction.";
$MSG['thumbnail_size'] = "Thumbnail Size"; // Also displaysettings.php
$MSG['thumbnail_size_explain'] = "This is the size of the thumbnail that will appear on the auctions listing page";
$MSG['pixels'] = " pixels "; // Also displaysettings.php
$MSG['gallery_image_max_size'] = "Gallery photo max size";
$MSG['gallery_image_max_size_explain'] = "Set the maximum width or height a photo can be if it is over this size it will be resized";

// banners.php
$MSG['activate_banner_support'] = "Activate banners support?";
$MSG['activate_banner_support_explain'] = "WeBid banners system retrieves banners on a random basis from the database, after applying the filters you set when you inserted the banner.";
$MSG['banner_settings_updated'] = "Banners settings updated";

// logo_upload.php
$MSG['your_logo'] = "Your logo";
$MSG['current_logo'] = "Current logo";
$MSG['upload_new_logo'] = "Upload a new logo";
$MSG['logo_upload_success'] = 'Logo uploaded successfully';

// usergroups.php
$MSG['cannot_delete_default_user_groups'] = 'Default User Groups (Sellers & Buyers) cannot be removed';
$MSG['user_group_deleted'] = 'User Group Deleted';
$MSG['user_group_name_empty_update'] = 'Group name cannot be empty. User Group was not updated';
$MSG['user_group_name_empty_new'] = 'Group name cannot be empty. The new User Group was not created';
