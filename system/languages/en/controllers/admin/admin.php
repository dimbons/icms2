<?php

    define('LANG_ADMIN_CONTROLLER',     'Control Panel');

    define('LANG_CP_DASHBOARD_STATS',           'Site Stats');
    define('LANG_CP_DASHBOARD_SYSINFO',         'System Info');
    define('LANG_CP_DASHBOARD_RESOURCES',       'Useful Resources');

    define('LANG_CP_DASHBOARD_SI_PHP',          'PHP version');
    define('LANG_CP_DASHBOARD_SI_ML',           'Memory limit');
    define('LANG_CP_DASHBOARD_SI_IP',           'Server IP');
    define('LANG_CP_DASHBOARD_SI_ROOT',         'Root folder');
    define('LANG_CP_DASHBOARD_SI_SESSION',      'Session folder');
    define('LANG_CP_DASHBOARD_SI_MAX',          'Max. file upload size');
    define('LANG_CP_DASHBOARD_SI_ION',          'IonCube Loader installed');
    define('LANG_CP_DASHBOARD_SI_ZEND',         'Zend Optimizer installed');
    define('LANG_CP_DASHBOARD_SI_ZENDG',        'Zend Guard Loader installed');

    define('LANG_CP_DASHBOARD_LEAD_SPONSOR',    'General sponsor');

    define('LANG_CP_DASHBOARD_LINKS_SITE',      'Official Site');
    define('LANG_CP_DASHBOARD_LINKS_DOCS',      'Documentation');
    define('LANG_CP_DASHBOARD_LINKS_ADDONS',    'Extensions');
    define('LANG_CP_DASHBOARD_LINKS_FORUMS',    'Community Forum');

    define('LANG_CP_DASHBOARD_LINKS_DONATE',    'Donate');
    define('LANG_CP_DASHBOARD_LINKS_SPONSORS',  'Become a Sponsor');

    define('LANG_CP_DASHBOARD_PREMIUM',         'Premium components');
    define('LANG_CP_DASHBOARD_BILLING',         'Billing');
    define('LANG_CP_DASHBOARD_BILLING_HINT',    'Monetize your site');
    define('LANG_CP_DASHBOARD_INVIDEO_HINT',    'Professional video catalog');
    define('LANG_CP_DASHBOARD_INMAPS_HINT',     'Object catalog on the map');

    define('LANG_CP_SECTION_INDEX',             'Index');
    define('LANG_CP_SECTION_CTYPES',            'Content Types');
    define('LANG_CP_SECTION_CONTENT',           'Content');
    define('LANG_CP_SECTION_USERS',             'Users');
    define('LANG_CP_SECTION_GROUPS',            'Groups');
    define('LANG_CP_SECTION_MENU',              'Menu');
    define('LANG_CP_SECTION_WIDGETS',           'Widgets');
    define('LANG_CP_SECTION_CONTROLLERS',       'Components');
    define('LANG_CP_SECTION_SETTINGS',          'Settings');
    define('LANG_CP_SECTION_UPDATE',            'Updates');

    define('LANG_CP_ACTIONS',                   'Actions');
    define('LANG_CP_SELECTED_EDIT',             'Edit');
    define('LANG_CP_SELECTED_DELETE',           'Delete');

    define('LANG_CP_CTYPES_ADD',                'Add Content Type');
    define('LANG_CP_CTYPES_EDIT',               'Edit Content Type');
    define('LANG_CP_CTYPE_CREATED',             'Content type &laquo;%s&raquo; created');
    define('LANG_CP_CTYPE_DELETE_CONFIRM',      'Delete content type "{title}"?');

    define('LANG_CP_CTYPE_SETTINGS',            'Settings');
    define('LANG_CP_CTYPE_LABELS',              'Labels');
    define('LANG_CP_CTYPE_FIELDS',              'Fields');
    define('LANG_CP_CTYPE_PROPS',               'Properties');
    define('LANG_CP_CTYPE_PERMISSIONS',         'Permissions');
    define('LANG_CP_CTYPE_DATASETS',            'Datasets');
    define('LANG_CP_CTYPE_DATASET',             'Dataset');

    define('LANG_CP_SYSTEM_NAME_HINT',          'Used in URLs and database table names<br>Cannot be changed later!');

    define('LANG_CP_CONTENT_ITEM_ADD',          'Add Entry');
    define('LANG_CP_CONTENT_CATS_ADD',          'Add Category');
    define('LANG_CP_CONTENT_CATS_EDIT',         'Edit Category');
    define('LANG_CP_CONTENT_CATS_ORDER',        'Reorder');
    define('LANG_CP_CONTENT_CATS_ORDER_DRAG',   'Drag categories to reorder');
    define('LANG_CP_CONTENT_CATS_NONE',         'This content has no categories');
    define('LANG_CP_CONTENT_ITEM_DELETE_CONFIRM',  'Delete "{title}"?');
    define('LANG_CP_CONTENT_CATS_TITLES',       'Category title or categories tree');
    define('LANG_CP_CONTENT_CATS_TITLES_HINT',  'Enter one item per line to create multiple categories<br>Add a hyphen before the title to make a nested category<br><a href="http://docs.instantcms.ru/en/manual/content/cats" target="_blank">Detailed Manual</a>');
    define('LANG_CP_CONTENT_CATS_BIND',         'Bind parent category properties');

    define('LANG_CP_BASIC',                     'Basic settings');
    define('LANG_CP_PUBLICATION',               'Publication');
    define('LANG_CP_PREMOD_ADD',                'Pre-moderate new entries');
    define('LANG_CP_PREMOD_EDIT',               'Pre-moderate edited entries');
    define('LANG_CP_IS_PUB_CONTROL',            'Custom publication date');
	define('LANG_CP_IS_PUB_CONTROL_HINT',		'Users with the corresponding permission configured on the "Permissions" tab can specify the custom date and publication period for each entry');
    define('LANG_CP_IS_PUB_CONTROL_PROCESS',    'Expired entry action');
    define('LANG_CP_IS_PUB_CONTROL_PROCESS_HIDE','Hide');
    define('LANG_CP_IS_PUB_CONTROL_PROCESS_DEL','Delete');
    define('LANG_CP_CATEGORIES',                'Categories');
    define('LANG_CP_CATEGORIES_ON',             'Enable categories');
    define('LANG_CP_CATEGORIES_RECURSIVE',      'Show entries from child categories in parent category');
	define('LANG_CP_CATEGORIES_EMPTY_ROOT',		'Do not show entries in the root category');
	define('LANG_CP_CATEGORIES_MULTI',			'Allow multiple categories for a single entry');
    define('LANG_CP_CATEGORIES_CHANGE',         'Allow to change the category of an already existing entry');
    define('LANG_CP_CATEGORIES_OPEN_ROOT',      'Allow to add entries to the root category');
    define('LANG_CP_CATEGORIES_ONLY_LAST',      'Allow to add entries only to the last level of nested categories');
    define('LANG_CP_CATEGORIES_SHOW',           'Show categories list above entries list');
    define('LANG_CP_CTYPE_CATEGORIES_OFF',      'Categories for this content type were disabled in the <a href="%s">Settings</a>. Categories will not be shown on the site');
    define('LANG_CP_FOLDERS',                   'Private folders');
    define('LANG_CP_FOLDERS_ON',                'Private folders enabled');
    define('LANG_CP_FOLDERS_HINT',              'Users will be able to organize the content in the private folders shown in their profiles');
    define('LANG_CP_CT_GROUPS',                 'Groups');
    define('LANG_CP_CT_GROUPS_ALLOW',           'Create in groups');
    define('LANG_CP_CT_GROUPS_ALLOW_ONLY',      'Create in groups only');
    define('LANG_CP_COMMENTS',                  'Comments');
    define('LANG_CP_COMMENTS_ON',               'Enable comments');
    define('LANG_CP_RATING',                    'Rating');
    define('LANG_CP_RATING_ON',                 'Enable rating');
    define('LANG_CP_TAGS_ON',                   'Enable tags');
    define('LANG_CP_TAGS_IN_LIST',              'Show tags in list view');
    define('LANG_CP_TAGS_IN_ITEM',              'Show tags in entry view');
    define('LANG_CP_PHOTOS',                    'Images');
    define('LANG_CP_PHOTOS_ON',                 'Main image');
    define('LANG_CP_PHOTOS_MULTI',              'Additional images');
    define('LANG_CP_SEOMETA_DEFAULT',           'SEO: Default');
    define('LANG_CP_SEOMETA',                   'SEO: Entries');
    define('LANG_CP_SEOMETA_MANUAL_TITLE',      'Custom entry title');
    define('LANG_CP_SEOMETA_AUTO_KEYS',         'Autogenerate keywords');
    define('LANG_CP_SEOMETA_AUTO_DESC',         'Autogenerate META-descriptions');
    define('LANG_CP_AUTO_URL',                  'Autogenerate URL');
    define('LANG_CP_FIXED_URL',                 'Keep URL after editing');
    define('LANG_CP_URL_PATTERN',               'URL pattern');
    define('LANG_CP_SEOMETA_CATS',              'SEO: Categories');
    define('LANG_CP_SEOMETA_CATS_TITLE',        'Allow custom titles for category pages');
    define('LANG_CP_SEOMETA_CATS_KEYS',         'Allow custom keywords for categories');
    define('LANG_CP_SEOMETA_CATS_DESC',         'Allow custom META descriptions for categories');
    define('LANG_CP_CATS_AUTO_URL',             'Generate URL from category title');
    define('LANG_CP_LISTVIEW_OPTIONS',          'List view options');
    define('LANG_CP_PROFILELIST_ON',            'List view in user profiles enabled');
    define('LANG_CP_LISTVIEW_ON',               'List view enabled');
    define('LANG_CP_LISTVIEW_FILTER',           'Show filter');
    define('LANG_CP_LISTVIEW_FILTER_EXPAND',    'Expand filter panel');
    define('LANG_CP_LISTVIEW_STYLE',            'List style');
    define('LANG_CP_LISTVIEW_STYLE_BASIC',      'Basic list');
    define('LANG_CP_LISTVIEW_STYLE_FEATURED',   'Featured list');
    define('LANG_CP_LISTVIEW_STYLE_TILES',      'Tiles');
    define('LANG_CP_LISTVIEW_STYLE_TABLE',      'Table');
    define('LANG_CP_LISTVIEW_STYLE_HINT',       'Templates from the <b>/templates/%s/content</b> folder');
    define('LANG_CP_ITEMVIEW_OPTIONS',          'Entry view options');
    define('LANG_CP_ITEMVIEW_ON',               'Entry view enabled');
	define('LANG_CP_ITEMVIEW_HITS_ON',			'Count views (hits)');
    define('LANG_CP_ITEMVIEW_APPEND_HTML',      'Append HTML');
    define('LANG_CP_ITEMVIEW_APPEND_HTML_HINT', 'Appended HTML code will be shown under each entry');
    define('LANG_CP_PRIVACY_TYPE',              'How to show private entries in list');
    define('LANG_CP_PRIVACY_TYPE_HIDE',         'Hide');
    define('LANG_CP_PRIVACY_TYPE_SHOW_TITLE',   'Show only title');
    define('LANG_CP_PRIVACY_TYPE_SHOW_ALL',     'Show full');

    define('LANG_CP_NUMERALS_LABELS',           'Plurals');
    define('LANG_CP_NUMERALS_1_LABEL',          'One (...)');
    define('LANG_CP_NUMERALS_2_LABEL',          'Two (...)');
    define('LANG_CP_NUMERALS_10_LABEL',         'Many (...)');
    define('LANG_CP_ACTIONS_LABELS',            'Actions');
    define('LANG_CP_ACTION_ADD_LABEL',          'Add (...)');
    define('LANG_CP_LIST_LABELS',               'Headings');
    define('LANG_CP_LIST_LABEL',                'List heading');
    define('LANG_CP_PROFILE_LABEL',             'List heading in profile');
    define('LANG_CP_LIST_LABELS_HINT',          'If not specified, the content type title will be used');

    define('LANG_CP_TAB',                       'Tab');
    define('LANG_CP_TAB_TITLE',                 'Tab title');
    define('LANG_CP_TAB_IS_ACTIVE',             'Tab is enabled');
    define('LANG_CP_TAB_SHOW_ONLY_OWNER',       'Show tab to the profile owner only');

    define('LANG_CP_FIELD',                     'Field');
    define('LANG_CP_FIELD_FORMAT',              'Field validation');
    define('LANG_CP_FIELD_TYPE',                'Field type');
    define('LANG_CP_FIELD_TYPE_OPTS',           'Field options');
    define('LANG_CP_FIELD_VALUES',              'Default value (or a list of entries)');
    define('LANG_CP_FIELD_PROFILE_VALUE',       'Get value from the user profile field');
    define('LANG_CP_FIELD_PROFILE_VALUE_HINT',  'The field can get a default value from the current user profile<br/>Only text boxes and lists');
    define('LANG_CP_FIELD_TITLE',               'Field title');
    define('LANG_CP_FIELD_FIELDSET',            'Field group');
    define('LANG_CP_FIELD_FIELDSET_SELECT',     'Select group');
    define('LANG_CP_FIELD_FIELDSET_ADD',        'Create new group');
    define('LANG_CP_FIELD_HINT',                'Field hint');
    define('LANG_CP_FIELD_ADD',                 'Add Field');
    define('LANG_CP_FIELD_CREATED',             'Field &laquo;%s&raquo; has been created');
    define('LANG_CP_FIELD_DELETE_CONFIRM',      'Delete field "{title}"?');
    define('LANG_CP_FIELD_VISIBILITY',          'Field visibility');
    define('LANG_CP_FIELD_LABELS',              'Label position');
    define('LANG_CP_FIELD_LABELS_IN_LIST',      'In list view');
    define('LANG_CP_FIELD_LABELS_IN_ITEM',      'In entry view');
    define('LANG_CP_FIELD_LABEL_NONE',          'Hide');
    define('LANG_CP_FIELD_LABEL_LEFT',          'Left');
    define('LANG_CP_FIELD_LABEL_TOP',           'Top');
    define('LANG_CP_FIELD_IN_LIST',             'Show in list view');
    define('LANG_CP_FIELD_IN_ITEM',             'Show in entry view');
    define('LANG_CP_FIELD_IN_PROFILE',          'Show in profile');
    define('LANG_CP_FIELD_IN_LIST_SHORT',       'In list');
    define('LANG_CP_FIELD_IN_ITEM_SHORT',       'In entry');
    define('LANG_CP_FIELD_IN_FILTER',           'Show in filter');
    define('LANG_CP_FIELD_PRIVACY',             'Privacy');
    define('LANG_CP_FIELD_PRIVATE',             'Show the field only to the entry author');
    define('LANG_CP_FIELD_GROUPS_READ',         'Read access');
    define('LANG_CP_FIELD_GROUPS_EDIT',         'Write access');

    define('LANG_CP_PROPS_NO_CATS',             'Content type &laquo;%s&raquo; has no categories.');
    define('LANG_CP_PROPS_NO_CATS_ADD',         '<a href="%s">Create Categories</a> to add properties.');
    define('LANG_CP_PROPS_ADD',                 'Create Property');
    define('LANG_CP_PROPS_DELETE_CONFIRM',      'Delete the "{title}" property?\n The property will be removed from all categories');
    define('LANG_CP_PROPS_BIND',                'Bind property');
    define('LANG_CP_PROPS_BIND_RECURSIVE',      'including nested categories');
    define('LANG_CP_PROPS_UNBIND',              'Unbind property');
    define('LANG_CP_PROP_TITLE',                'Property title');
    define('LANG_CP_PROP_IS_ACTIVE',            'Show property on the site');
    define('LANG_CP_PROP_VALUES',               'List items');
    define('LANG_CP_PROP_VALUES_HINT',          'One item per line');
    define('LANG_CP_PROP_CATS',                 'Bind property to categories');
    define('LANG_CP_PROP_UNITS',                'Units');

    define('LANG_CP_DATASET',                   'Dataset');
    define('LANG_CP_DATASET_ADD',               'Add Dataset');
    define('LANG_CP_DATASET_TITLE',             'Dataset title');
    define('LANG_CP_DATASET_CREATED',           'Dataset &laquo;%s&raquo; has been created');
    define('LANG_CP_DATASET_DELETE_CONFIRM',    'Delete dataset "{title}"?');
    define('LANG_CP_DATASET_IS_VISIBLE',        'Show dataset on the site');

    define('LANG_CP_MENU',                      'Menu');
    define('LANG_CP_MENU_ADD',                  'Add Menu');
    define('LANG_CP_MENU_EDIT',                 'Menu Settings');
    define('LANG_CP_MENU_CREATED',              'Menu &laquo;%s&raquo; has been created');
    define('LANG_CP_MENU_DELETE',               'Delete Menu');
    define('LANG_CP_MENU_DELETE_CONFIRM',       'Delete current menu?');
    define('LANG_CP_MENU_ITEM',                 'Menu Item');
    define('LANG_CP_MENU_ITEM_PARENT',          'Parent item');
    define('LANG_CP_MENU_ITEM_CREATED',         'Menu item &laquo;%s&raquo; has been created');
    define('LANG_CP_MENU_ITEM_TITLE',           'Menu item title');
    define('LANG_CP_MENU_ITEM_URL',             'URL');
    define('LANG_CP_MENU_ITEM_ADD',             'Add Menu Item');
    define('LANG_CP_MENU_ITEM_DELETE_CONFIRM',  'Delete item "{title}"?');
    define('LANG_CP_MENU_ITEM_ACTION',          'Menu item action');
    define('LANG_CP_MENU_ITEM_ACTION_URL',      'Open URL');
    define('LANG_CP_MENU_ITEM_ACTION_URL_HINT', 'Internal links should come without a leading slash<br/>External links should start with http://<br/>You can enter <a href="http://docs.instantcms.ru/en/manual/menu/special" target="_blank">Special Links</a>');
    define('LANG_CP_MENU_ITEM_ACTION_TARGET',   'Open link in');
    define('LANG_CP_MENU_ITEM_TARGET_SELF',     'Current window');
    define('LANG_CP_MENU_ITEM_TARGET_BLANK',    'New window');
    define('LANG_CP_MENU_ITEM_TARGET_PARENT',   'Parent window');
    define('LANG_CP_MENU_ITEM_TARGET_TOP',      'On top of all frames');
    define('LANG_CP_MENU_IS_FIXED',             'This menu cannot be deleted');

    define('LANG_CP_WIDGETS_PAGE',              'Page');
    define('LANG_CP_WIDGETS_ADD',               'Add Widget');
    define('LANG_CP_WIDGETS_ADD_PAGE',          'Add Page');
    define('LANG_CP_WIDGETS_EDIT_PAGE',         'Edit');
    define('LANG_CP_WIDGETS_DELETE_PAGE',       'Delete');
    define('LANG_CP_WIDGETS_UNBIND_ALL_WIDGETS', 'Unbind All Widgets');
    define('LANG_CP_WIDGETS_UNBIND_ALL_WIDGETS_CONFIRM', 'Unbind all widgets from their positions?\nThe widgets will be moved to the Unused Widgets section');
    define('LANG_CP_WIDGETS_MISC',              'Miscellaneous');
    define('LANG_CP_WIDGET_DELETE_CONFIRM',     'Delete widget?');
    define('LANG_CP_WIDGET_PAGE_CREATED',       'Page &laquo;%s&raquo; has been created');
    define('LANG_CP_WIDGET_PAGE_URLS',          'URL binding');
    define('LANG_CP_WIDGET_PAGE_URL_MASK',      'Positive masks');
    define('LANG_CP_WIDGET_PAGE_URL_MASK_NOT',  'Negative masks');
    define('LANG_CP_WIDGETS_UNUSED',            'Unused Widgets');
    define('LANG_CP_WIDGETS_UNUSED_HINT',       'Here you can place the widgets that have to be temporarily hidden or moved to another page without losing their settings');
    define('LANG_CP_WIDGETS_TEMPLATE',          'Widgets for template');

    define('LANG_CP_USER_ADD',                  'Add user');
    define('LANG_CP_USER_CREATED',              'User &laquo;%s&raquo; is created');
    define('LANG_CP_USER_DELETE_CONFIRM',       'Delete a user {nickname}?\nAll his content and all his uploaded files will be also deleted');
    define('LANG_CP_USER_DELETED',              'User %s has been deleted');
    define('LANG_CP_USER_GROUP_ADD',            'Add group');
    define('LANG_CP_USER_GROUP_EDIT',           'Edit group');
    define('LANG_CP_USER_GROUP_PERMS',          'Group Permissions');
    define('LANG_CP_USER_GROUP_DELETE',         'Delete Group');
    define('LANG_CP_USER_GROUP_DELETE_CONFIRM', 'Delete selected group?\nUsers will no be deleted');
    define('LANG_CP_USER_GROUP_CREATED',        'Group &laquo;%s&raquo; has been created');
    define('LANG_CP_USER_GROUP_IS_PUBLIC',      'Allow to join this group after sign up');
    define('LANG_CP_USER_GROUP_IS_FILTER',      'Show in user filter');
    define('LANG_CP_USER_LOCKING',              'Blocking');
    define('LANG_CP_USER_LOCKED',               'Blocked');
    define('LANG_CP_USER_IS_LOCKED',            'Block user');
    define('LANG_CP_USER_LOCK_UNTIL',           'Block until');
    define('LANG_CP_USER_LOCK_REASON',          'Blocking reason');
    define('LANG_CP_USER_NOT_FOUND',            'User %s not found');
    define('LANG_CP_USER_FIND_BYIP',            'Find all by this IP');
    define('LANG_CP_USER_RIPE_SEARCH',          'Find in RIPE database');

    define('LANG_CP_CONTROLLERS_ADD',           'Install Component');
    define('LANG_CP_ERR_BACKEND_NOT_FOUND',     'The &laquo;%s&raquo; component has no settings');

    define('LANG_CP_SETTINGS_SITE',             'Site');
    define('LANG_CP_SETTINGS_GUI',              'Interface');
    define('LANG_CP_SETTINGS_FRONTPAGE',        'Homepage');
    define('LANG_CP_SETTINGS_DATE',             'Dates');
    define('LANG_CP_SETTINGS_MAIL',             'Mail');
    define('LANG_CP_SETTINGS_CACHE',            'Cache');
    define('LANG_CP_SETTINGS_DEBUG',            'Debugging');
    define('LANG_CP_SETTINGS_MISC',             'Misc');
    define('LANG_CP_SETTINGS_SECURITY',         'Security');

    define('LANG_CP_SETTINGS_ALLOW_IPS',        'IP addresses allowed to access the control panel');
    define('LANG_CP_SETTINGS_ALLOW_IPS_HINT',   'One address per line. Allowed to all if not specified.');
    define('LANG_CP_SETTINGS_DETECT_IP_KEY',    'How to detect a visitor\'s IP');
    define('LANG_CP_SETTINGS_DETECT_IP_KEY_HINT', 'The $_SERVER array key that contains a real user IP address. Do not change this value if you are not sure. The default value fits most needs. For example, enter HTTP_CF_CONNECTING_IP (without quotes) for CloudFlare.');
    define('LANG_CP_SETTINGS_SITE_ENABLED',     'Site is online');
    define('LANG_CP_SETTINGS_SITE_REASON',      'Reason why site is offline');
    define('LANG_CP_SETTINGS_CHECK_UPDATES',    'Automatically check for InstantCMS updates when admin logs in');
    define('LANG_CP_SETTINGS_SITENAME',         'Site name');
    define('LANG_CP_SETTINGS_HOMETITLE',        'Homepage title');
    define('LANG_CP_SETTINGS_METAKEYS',         'Site keywords');
    define('LANG_CP_SETTINGS_METADESC',         'Site description');
	define('LANG_CP_SETTINGS_META_NO_DEFAULT',  'Apply the above-specified words and description to the homepage only');
	define('LANG_CP_SETTINGS_IS_SITENAME_IN_TITLE',  'Add site name to the page title tag');
    define('LANG_CP_SETTINGS_LANGUAGE',         'Language');
    define('LANG_CP_SETTINGS_TEMPLATE',         'Default theme');
    define('LANG_CP_SETTINGS_TEMPLATE_ADMIN',   'Control panel theme');
    define('LANG_CP_SETTINGS_TEMPLATE_MOBILE',  'Mobile theme');
    define('LANG_CP_SETTINGS_TEMPLATE_TABLET',  'Tablet theme');
    define('LANG_CP_SETTINGS_TEMPLATE_OPTIONS', 'Theme Settings');
    define('LANG_CP_SETTINGS_EDITOR',           'Default HTML editor');
    define('LANG_CP_SETTINGS_SHOW_BREADCRUMBS', 'Show breadcrumbs?');
    define('LANG_CP_SETTINGS_HTML_MINIFY',      'Minify HTML');
    define('LANG_CP_SETTINGS_MERGE_CSS',        'Merge CSS files');
    define('LANG_CP_SETTINGS_MERGE_JS',         'Merge JS files');
    define('LANG_CP_SETTINGS_CACHE_CLEAN_MERGED',  '&mdash; <a href="%s">Clear cache</a>');
    define('LANG_CP_SETTINGS_MERGED_CLEANED',   'Folder <b>%s</b> is succesfully cleared');
    define('LANG_CP_SETTINGS_MERGED_CLEAN_FAIL','Unable to clear the folder <b>%s</b>. Check permissions or clean it manually');
    define('LANG_CP_SETTINGS_CACHE_CLEAN_SUCCESS', 'The cache is successfully cleared');
    define('LANG_CP_SETTINGS_CACHE_CLEAN_FAIL', 'Error clearing cache');
    define('LANG_CP_SETTINGS_CTYPE_DEF',        'Default content type');
    define('LANG_CP_SETTINGS_CTYPE_DEF_HINT',	'Page URLs of this content type will not contain the content type\'s system name');
    define('LANG_CP_SETTINGS_FP_SHOW',          'Show on the homepage');
    define('LANG_CP_SETTINGS_FP_SHOW_NONE',     'Only widgets');
    define('LANG_CP_SETTINGS_FP_SHOW_PROFILE',  'User profile or authorization form');
    define('LANG_CP_SETTINGS_FP_SHOW_CONTENT',  'Content: %s');
    define('LANG_CP_SETTINGS_TIMEZONE',         'Time zone');
    define('LANG_CP_SETTINGS_DATE_FORMAT',      'PHP date format');
    define('LANG_CP_SETTINGS_DATE_FORMAT_JS',   'JavaScript date format');
    define('LANG_CP_SETTINGS_MAIL_TRANSPORT',   'Mail transport');
    define('LANG_CP_SETTINGS_MAIL_FROM',        'Sender address');
    define('LANG_CP_SETTINGS_MAIL_FROM_NAME',   'Sender name');
    define('LANG_CP_SETTINGS_MAIL_SMTP',        'SMTP settings');
    define('LANG_CP_SETTINGS_MAIL_SMTP_HOST',   'SMTP server');
    define('LANG_CP_SETTINGS_MAIL_SMTP_PORT',   'SMTP port');
    define('LANG_CP_SETTINGS_MAIL_SMTP_AUTH',   'SMTP authorization required');
    define('LANG_CP_SETTINGS_MAIL_SMTP_USER',   'SMTP user');
    define('LANG_CP_SETTINGS_MAIL_SMTP_PASS',   'SMTP password');
    define('LANG_CP_SETTINGS_MAIL_SMTP_ENC',    'SMTP encryption');
    define('LANG_CP_SETTINGS_MAIL_SMTP_ENC_NO', 'Without encryption');
    define('LANG_CP_SETTINGS_MAIL_SMTP_ENC_SSL','SSL');
    define('LANG_CP_SETTINGS_MAIL_SMTP_ENC_TLS','TLS');
    define('LANG_CP_SETTINGS_CACHE_ENABLED',    'Enable caching');
    define('LANG_CP_SETTINGS_CACHE_METHOD',     'Caching engine');
    define('LANG_CP_SETTINGS_CACHE_METHOD_NO',  'not available');
    define('LANG_CP_SETTINGS_CACHE_TTL',        'Cache TTL, sec');
    define('LANG_CP_SETTINGS_CACHE_HOST',       'Memcached server');
    define('LANG_CP_SETTINGS_CACHE_PORT',       'Memcached port');
    define('LANG_CP_SETTINGS_CACHE_MIN_HTML',   'Minify HTML');

    define('LANG_CP_MEMCACHE_NOT_AVAILABLE',    'Memcached module not found');
    define('LANG_CP_MEMCACHE_CONNECT_ERROR',    'Cannot connect to Memcached - check server and port');

    define('LANG_CP_SETTINGS_NOT_WRITABLE',     'Configuration file is not writable!');
    define('LANG_CP_SETTINGS_TPL_NOT_WRITABLE', 'Template configuration file is not writable!');
    define('LANG_CP_SAVE_SUCCESS',              'Settings saved successfully');
    define('LANG_CP_PERMISSIONS_SUCCESS',       'The access rules saved successfully');

    define('LANG_CP_SETTINGS_DEBUG_MODE',       'Debug mode enabled');
    define('LANG_CP_SETTINGS_EMULATE_LAG',      'Emulate network lag');

    define('LANG_CP_SETTINGS_CACHE_CLEAN',      'Clear cache');

    define('LANG_CP_INSTALL_PACKAGE',           'Install Extension Package');
    define('LANG_CP_INSTALL_PACKAGE_DONE',      'Installation completed');
    define('LANG_CP_INSTALL_PACKAGE_DONE_INFO', 'Extension package has been successfully installed');
    define('LANG_CP_INSTALL_PACKAGE_NOT_CLEARED', 'The <b>%s</b> folder has not been cleared due to lack of permissions, clear it manually');
    define('LANG_CP_INSTALL_PACKAGE_INFO',      'Package Info');
    define('LANG_CP_INSTALL_PACKAGE_FILE',      'Package file');
    define('LANG_CP_INSTALL_PACKAGE_FILE_HINT', 'File with the <b>.icp</b> or <b>.zip</b> extension');
    define('LANG_CP_INSTALL_ERR_HINT',          'Result');
    define('LANG_CP_INSTALL_ERR_FIX',           'Solution');
    define('LANG_CP_INSTALL_ERR_WA',            'Workaround');
    define('LANG_CP_INSTALL_NOT_WRITABLE',      'Folder <b>%s</b> is not writable');
    define('LANG_CP_INSTALL_NOT_WRITABLE_HINT', 'Automatic upload is impossible');
    define('LANG_CP_INSTALL_NOT_WRITABLE_FIX',  'Make this folder writable and reload this page');
    define('LANG_CP_INSTALL_NOT_WRITABLE_WA',   'Change the file extension to <b>.zip</b>, unpack and upload its contents to the <b>%s</b> folder');
    define('LANG_CP_INSTALL_NOT_ZIP',           'Server does not support automatic ZIP-archive extraction');
    define('LANG_CP_INSTALL_NOT_ZIP_HINT',      'Automatic extraction is impossible');
    define('LANG_CP_INSTALL_NOT_ZIP_FIX',       'Request your hoster to install the <b>ZipArchive</b> class for PHP on your server');
    define('LANG_CP_INSTALL_NOT_ZIP_WA',        'Change file extension to <b>.zip</b>, unpack and upload its contents to the <b>%s</b> folder');
    define('LANG_CP_INSTALL_ZIP_ERROR',         'Package extraction error');
    define('LANG_CP_INSTALL_FTP_NOTICE',        'To install the package you must provide the details of an FTP-user that has permissions to create folders and files.');
    define('LANG_CP_INSTALL_FTP_PRIVACY',       'The details are not stored or transferred anywhere');

    define('LANG_CP_PACKAGE_AUTHOR',            'Package author');
    define('LANG_CP_PACKAGE_DESCRIPTION',       'Package description');
    define('LANG_CP_PACKAGE_CONTENTS',          'Package contents');
    define('LANG_CP_PACKAGE_DEPENDS',           'Package dependencies');
    define('LANG_CP_PACKAGE_DEPENDS_CORE',      'Required core version');

    define('LANG_CP_PACKAGE_DEPENDS_PACKAGE',   'Required installed package version');
    define('LANG_CP_PACKAGE_TYPE_COMPONENT_INSTALL', 'Component installation package');
    define('LANG_CP_PACKAGE_TYPE_COMPONENT_UPDATE', 'Component service pack');
    define('LANG_CP_PACKAGE_TYPE_WIDGET_INSTALL', 'Widget installation package');
    define('LANG_CP_PACKAGE_TYPE_WIDGET_UPDATE', 'Widget service pack');
    define('LANG_CP_PACKAGE_TYPE_SYSTEM_UPDATE', 'InstantCMS service pack');
    define('LANG_CP_PACKAGE_DUBLE_INSTALL', 'Package version %s is already installed. If you want to update it, select the corresponding service pack. If you want to re-install the package, remove the installed version first.');
    define('LANG_CP_PACKAGE_UPDATE_ERROR', '%s "%s" has version <b>%s</b>. You have version <b>%s</b> installed. Select the package with a larger version number to update.');
    define('LANG_CP_PACKAGE_UPDATE_IS_UPDATED', 'The same version of the package is already installed. No update required');
    define('LANG_CP_PACKAGE_TYPE', 'Package type');
    define('LANG_CP_PACKAGE_NONAME', 'Unknown author');
    define('LANG_CP_PACKAGE_UPDATE_NOINSTALL', 'Unable to install the update package because the extension that is being updated is not installed');

    define('LANG_CP_COMPONENT_IS_DELETED',      'Component "%s" has been successfully removed');
    define('LANG_CP_DELETE_COMPONENT_CONFIRM',  'Delete component "{title}"?');

    define('LANG_CP_FTP_ACCOUNT',               'FTP account');
    define('LANG_CP_FTP_HOST',                  'Server');
    define('LANG_CP_FTP_USER',                  'Username');
    define('LANG_CP_FTP_PASS',                  'Password');
    define('LANG_CP_FTP_PATH',                  'Site root path');
	define('LANG_CP_FTP_PATH_HINT',             '<a href="http://docs.instantcms.ru/en/manual/addons/ftppath" target="_blank">How to specify correct path?</a>');
    define('LANG_CP_FTP_IS_PASV',               'Passive transfer mode');
    define('LANG_CP_FTP_AUTH_FAILED',           'Connection failed. Verify the specified details');
    define('LANG_CP_FTP_UPLOAD_FAILED',         'File copy error. Make sure the path and permissions are correct');
    define('LANG_CP_FTP_MKDIR_FAILED',          'Failed to create the folder. Make sure the path and permissions are correct');
	define('LANG_CP_FTP_NO_ROOT',				'Error: the %s folder not found on the server');
	define('LANG_CP_FTP_BAD_ROOT',				'Bad root path: InstantCMS 2 not found in <strong>%s</strong>');

    define('LANG_CP_FTP_SAVE_TO_SESSION',   'Remember FTP details for the current session');
    define('LANG_CP_FTP_SAVE_TO_SESSION_HINT', 'Not safe if the extension is not from a trusted author');
    define('LANG_CP_FTP_SKIP',				'Skip this step');
    define('LANG_CP_FTP_SKIP_HINT',			'Skip this step if automatic FTP upload is impossible and you follow the manual installation method described in the <a href="http://docs.instantcms.ru/en/manual/addons">Manual</a>');

    define('ERR_VALIDATE_UNIQUE_FIELD',         'Field already exists');
    define('LANG_CP_BACK_TO_SITE',              'Back to Site');
    define('LANG_CP_3RDPARTY_CREDITS',          'Third-party credits');

    define('LANG_MODERATOR_ADD',             'Add moderator');
    define('LANG_MODERATOR_ADD_HINT',        'Enter the email of a user whom you want to assign as a moderator');
    define('LANG_MODERATOR_APPROVED_COUNT',  'Approved');
    define('LANG_MODERATOR_DELETED_COUNT',   'Deleted');
    define('LANG_MODERATOR_IDLE_COUNT',      'Idle');
    define('LANG_MODERATOR_ASSIGNED_DATE',   'Assigned');
    define('LANG_MODERATOR_ALREADY',         'User %s is already a moderator');

    define('LANG_CP_SCHEDULER',                     'Scheduler');
    define('LANG_CP_SCHEDULER_TASK',                'Task');
    define('LANG_CP_SCHEDULER_TASK_ADD',            'Add Task');
    define('LANG_CP_SCHEDULER_TASK_EDIT',           'Edit Task');
    define('LANG_CP_SCHEDULER_TASK_CONTROLLER',     'Component');
    define('LANG_CP_SCHEDULER_TASK_HOOK',           'Hook');
    define('LANG_CP_SCHEDULER_TASK_PERIOD',         'Interval, minutes');
    define('LANG_CP_SCHEDULER_TASK_LAST_RUN',       'Last run');
    define('LANG_CP_SCHEDULER_TASK_DELETE_CONFIRM', 'Delete task?');
    define('LANG_CP_SCHEDULER_TASK_CREATED',        'The task has been created');
    define('LANG_CP_SCHEDULER_TASK_IS_ACTIVE',      'Task is active');
    define('LANG_CP_SCHEDULER_TASK_RUN',            'Run now');
    define('LANG_CP_SCHEDULER_TASK_RAN',            'Task &laquo;%s&raquo; was executed %s');
    define('LANG_CP_SCHEDULER_TASK_RUN_FAIL',       'Failed to execute task &laquo;%s&raquo;');

    define('LANG_CP_UPDATE_CHECK',                  'Check for updates');
    define('LANG_CP_UPDATE_DATE',                   'Release date');
    define('LANG_CP_UPDATE_DOWNLOAD',               'Download package');
    define('LANG_CP_UPDATE_DOWNLOAD_FAIL',          'Unable to download the update package');
    define('LANG_CP_UPDATE_INSTALL',                'Install Update');
    define('LANG_CP_UPDATE_AVAILABLE',              '%s is available for update');
    define('LANG_CP_UPDATE_NOT_AVAILABLE',          'No updates. You are using the latest version');
    define('LANG_CP_UPDATE_CHECK_FAIL',             'Unable to check for updates');
    define('LANG_CP_UPDATE_MANUAL_1',               'Automatic download failed because CURL is not available on the server.');
    define('LANG_CP_UPDATE_MANUAL_2',               'Download the update archive manually and <a href="'.href_to('admin', 'install').'">Install</a> it');

    define('LANG_HELP_URL_CONTENT',                 'http://docs.instantcms.ru/en/manual/content');
    define('LANG_HELP_URL_CONTENT_CATS',            'http://docs.instantcms.ru/en/manual/content/cats');
    define('LANG_HELP_URL_CTYPES',                  'http://docs.instantcms.ru/en/manual/ctypes');
    define('LANG_HELP_URL_CTYPES_BASIC',            'http://docs.instantcms.ru/en/manual/ctypes/add');
    define('LANG_HELP_URL_CTYPES_LABELS',           'http://docs.instantcms.ru/en/manual/ctypes/labels');
    define('LANG_HELP_URL_CTYPES_FIELDS',           'http://docs.instantcms.ru/en/manual/ctypes/fields');
    define('LANG_HELP_URL_CTYPES_FIELD',            'http://docs.instantcms.ru/en/manual/ctypes/fields/add');
    define('LANG_HELP_URL_CTYPES_PROPS',            'http://docs.instantcms.ru/en/manual/ctypes/props');
    define('LANG_HELP_URL_CTYPES_PROP',             'http://docs.instantcms.ru/en/manual/ctypes/props/add');
    define('LANG_HELP_URL_CTYPES_DATASETS',         'http://docs.instantcms.ru/en/manual/ctypes/datasets');
    define('LANG_HELP_URL_CTYPES_DATASET',          'http://docs.instantcms.ru/en/manual/ctypes/datasets/add');
    define('LANG_HELP_URL_CTYPES_PERMS',            'http://docs.instantcms.ru/en/manual/ctypes/permissions');
    define('LANG_HELP_URL_CTYPES_MODERATORS',       'http://docs.instantcms.ru/en/manual/ctypes/moderators');
    define('LANG_HELP_URL_MENU',                    'http://docs.instantcms.ru/en/manual/menu');
    define('LANG_HELP_URL_WIDGETS',                 'http://docs.instantcms.ru/en/manual/widgets');
    define('LANG_HELP_URL_WIDGETS_CFG',             'http://docs.instantcms.ru/en/manual/widgets/config');
    define('LANG_HELP_URL_WIDGETS_PAGES',           'http://docs.instantcms.ru/en/manual/widgets/pages');
    define('LANG_HELP_URL_COMPONENTS',              'http://docs.instantcms.ru/en/manual/components');
    define('LANG_HELP_URL_INSTALL',                 'http://docs.instantcms.ru/en/manual/addons');
    define('LANG_HELP_URL_COM_AUTH',                'http://docs.instantcms.ru/en/manual/components/auth');
    define('LANG_HELP_URL_COM_ACTIVITY',            'http://docs.instantcms.ru/en/manual/components/activity');
    define('LANG_HELP_URL_COM_GROUPS',              'http://docs.instantcms.ru/en/manual/components/groups');
    define('LANG_HELP_URL_COM_RECAPTCHA',           'http://docs.instantcms.ru/en/manual/components/recaptcha');
    define('LANG_HELP_URL_COM_COMMENTS',            'http://docs.instantcms.ru/en/manual/components/comments');
	define('LANG_HELP_URL_COM_IMAGES',				'http://docs.instantcms.ru/en/manual/components/images');
    define('LANG_HELP_URL_COM_USERS',               'http://docs.instantcms.ru/en/manual/components/users');
    define('LANG_HELP_URL_COM_USERS_MIGRATON',      'http://docs.instantcms.ru/en/manual/components/users/migrations');
    define('LANG_HELP_URL_COM_MARKITUP',            'http://docs.instantcms.ru/en/manual/components/markitup');
    define('LANG_HELP_URL_COM_RATING',              'http://docs.instantcms.ru/en/manual/components/rating');
    define('LANG_HELP_URL_COM_SEARCH',              'http://docs.instantcms.ru/en/manual/components/search');
    define('LANG_HELP_URL_COM_TAGS',                'http://docs.instantcms.ru/en/manual/components/tags');
    define('LANG_HELP_URL_COM_RSS',                 'http://docs.instantcms.ru/en/manual/components/rss');
    define('LANG_HELP_URL_COM_SITEMAP',             'http://docs.instantcms.ru/en/manual/components/sitemap');
	define('LANG_HELP_URL_COM_PHOTOS',				'http://docs.instantcms.ru/en/manual/components/photos');
    define('LANG_HELP_URL_USERS',                   'http://docs.instantcms.ru/en/manual/users');
    define('LANG_HELP_URL_USERS_USER',              'http://docs.instantcms.ru/en/manual/users/user');
    define('LANG_HELP_URL_USERS_GROUP',             'http://docs.instantcms.ru/en/manual/users/group');
    define('LANG_HELP_URL_SETTINGS',                'http://docs.instantcms.ru/en/manual/settings');
    define('LANG_HELP_URL_SETTINGS_GLOBAL',         'http://docs.instantcms.ru/en/manual/settings/global');
    define('LANG_HELP_URL_SETTINGS_SCHEDULER',      'http://docs.instantcms.ru/en/manual/settings/scheduler');
    define('LANG_HELP_URL_SETTINGS_SCHEDULER_TASK', 'http://docs.instantcms.ru/en/manual/settings/scheduler/task');

    define('LANG_ZIP_ERROR_10', 'File already exists');
    define('LANG_ZIP_ERROR_21', 'Inconsistent ZIP-archive');
    define('LANG_ZIP_ERROR_18', 'Invalid argument');
    define('LANG_ZIP_ERROR_14', 'Malloc failure');
    define('LANG_ZIP_ERROR_9', 'No such file');
    define('LANG_ZIP_ERROR_19', 'Not a zip archive');
    define('LANG_ZIP_ERROR_11', 'Unable to open the file');
    define('LANG_ZIP_ERROR_5', 'Read error');
    define('LANG_ZIP_ERROR_4', 'Seek error');
