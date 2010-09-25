﻿<?php

/**
 * INSTALLER INTERFACE INTERNATIONALIZATION
 *
 * en_US
 */

$lang = array
(
    'db_information_link' => 'للمزيد من المعلومات, تحقق من <a href="http://wiki.ushahidi.com/doku.php?id=a_brief_word_on_databases" target="_blank">this article</a> on the wiki that talks about databases in more detail',
    'index' => array
    (   'advanced' => 'تنصيب متقدم',
        'advanced_installation_description' => 'قم بإكمال الإعدادات الأساسية من خلال 5 خطوات.  This includes server, map, site name and contact details',
        'basic_installation' => 'التنصيب والإعدادات الأساسية',
        'basic_installation_description' => 'Simple and fast. All you need is your website\'s root directory and your database information. Choose this option if you want to get up and running quickly, and you can always configure everything else later',
        'proceed' => 'Proceed',
        'welcome' => 'مرحباً بك فى عمليات انشاء خادم أوشاهيدى؟، اختر نوع الإعداد الذى تراه مناسباً فى الأسفل'
    ),
    'summary' => array
    (
        'text_1' => 'يجب ان خادم الشبكة الخاص بك قدراً على كتابة الملفات الآتية',
        'text_2' => '<p>هذه هى التعليمات الخاصة بتغير تصريحات الملفات:</p>
        <ul>
            <li><a href="http://www.washington.edu/computing/unix/permissions.html" target="_blank">Unix/Linux</a></li>
            <li><a href="http://support.microsoft.com/kb/308419" target="_blank">Windows</a></li>
        </ul>',
        'text_3' => 'قبل ان تبدأ, ستحتاج من ان تتأكد من خادم الويب الخاص يمكنه كتابة الملفات الآتية. هذا يتضمن تغيير تصريحات الملفات',
        'text_4' => 'من أجل عملية التنصيب, تأكد من وجود المعلومات التالية'
    ),
    'base_path' => 'مسار القاعدة',
    'database' => 'قاعدة البيانات',
    'database_host' => 'مضيف قاعدة البيانات',
    'database_host_description' => 'ان كنت تشغل أوشاهيدى من على الحاسب الخاص بك, ستكون عاملاً على المضيف المحلى. ان كنت تشغل أوشاهيدى من على خادم ويب, ستحصل معلومات عن المضيف من موفر الخدمة لديك',
    'database_name' => 'اسم قاعدة البيانات',
    'database_name_description' => 'اسم قاعدة البيانات التى تريد تشغيل أوشاهيدى من خلالها',
    'default_language' => 'اللغة الأساسية (محلية)',
    'default_language_description' => 'Each deployment of Ushahidi comes with a set of built in language translations. You can also <a href="http://wiki.ushahidi.com/doku.php?id=localisation_l10n_internationlisation_i18n&s[]=language#enabling_new_languages" target="_blank">add your own</a>',
    'disable' => 'إيقاف',
    'enable' => 'تشغيل',
    'error_summary' => 'التالى قائمة بالمشكلات التى واجهناها',
    'files_location_text' => 'مكان وضع الملفات الخاصة بأوشاهيدى على الخادم الخاص بك. <strong>We have automatically detected this value, please make sure that it is correct.</strong> If the field is empty, do not worry, it means ushahidi is installed at the top level directory',
    'finished' => 'إنتهى',
    'general' => 'عام',
    'go_back' => 'العودة',
    'google_key' => '<span>Google</span> API Key',
    'google_key_description' => 'يمكن لأى أحد الحصول على api مفتاح. <a id="api-link" href="http://code.google.com/apis/maps/signup.html" target="_blank">Get yours now</a>',
    'installation_successful' => 'نجح التنصيب',
    'mail_server' => 'خدم البريد',
    'mail_server_host' => 'مضيف خادم البريد',
    'mail_server_host_description' => 'Examples: mail.yourwebsite.com, imap.gmail.com, pop.gmail.com',
    'mail_server_password' => 'كلمة المرور لخادم البريد',
    'mail_server_password_description' => 'كلمة المرور المعتادة التى تستخدمها للدخول إلى بريدك الإليكترونى',
    'mail_server_port' => 'منفذ خادم البريد',
    'mail_server_port_description' => 'Common Ports: 25, 110, 995 (Gmail POP3 SSL), 993 (Gmail IMAP SSL)',
    'mail_server_type' => 'نوع خادم البريد',
    'mail_server_type_description' => 'Internet Message Access Protocol (IMAP) or Post Office Protocol (POP). <a href="http://saturn.med.nyu.edu/it/help/email/imap/index.html" target="_blank">What is the difference?</a>',
    'mail_server_username' => 'اسم المستخدم لخادم البريد',
    'mail_server_username_description' => 'If you are using Gmail, Hotmail, or Yahoo Mail, enter a full email address as a username',
    'map' => 'Map',
    'map_provider' => 'موفر الخرائط',
    'map_provider_description' => 'أوشاهيدى تعمل بفاعلية مع كل من موفرى الخرائط التاليين: Google, Bing, Yahoo or Open Street Map.  اختر الموفر الأكثر تفصيلاً فى منطقتك',
    'other_steps' => 'Other steps...',
    'password' => 'Password',
    'password_description' => 'كلمة المرور الخاصة بقاعدة البيانات الخاصة بك,
    'previous' => 'Previous',
    'restart_apache' => 'Please restart your Apache Server',
    'select_mail_server_ssl' => 'Enable or disable SSL',
    'select_mail_server_ssl_description' => 'Some mail servers give you the option of using <abbr title="Secure Sockets Layer">SSL</abbr> when making a connection. Using SSL is recommended as it gives you an added level of security',
    'setup_sms' => 'Setup your SMS server',
    'site_email' => 'Site Email Address',
    'site_email_alerts' => 'Site Alert Email Address',
    'site_email_alerts_description' => 'When your site visitors sign up for email alerts, they will recieve emails from this address. This email address does not have to be the same as the Site Email Address',
    'site_email_description' => 'Site wide email communication will be funneled through this address',
    'site_name' => 'Site Name',
    'site_name_description' => 'The name of your site',
    'site_tagline' => 'Site Tagline',
    'site_tagline_description' => 'Your tagline',
    'summary_text_1' => '',
    'summary_text_2' => '',
    'summary_text_3' => '',
    'table_prefix' => 'Table Prefix',
    'table_prefix_description' => 'Normally you would not change the table prefix. However, If you want to run multiple Ushahidi installations from a single database you can do that by changing the prefix here',
    'title' => 'Title',
    'to_login' => 'To login, go to',
    'upload_data' => 'Upload report data',
    'use_credentials' => 'and use the following credentials',
    'username' => 'Username',
    'username_description' => 'Your database username',
    'view_site' => 'View your website'
);