<?php
/** толышә зывон (толышә зывон)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Erdemaslancan
 * @author Ganbarzada
 * @author Tuzkozbir
 * @author Гусейн
 */

$namespaceNames = array(
	NS_MEDIA            => 'Medja',
	NS_SPECIAL          => 'Xususi',
	NS_TALK             => 'Nopegət',
	NS_USER             => 'Okoədə',
	NS_USER_TALK        => 'Okoədəj_nopegət',
	NS_PROJECT_TALK     => '$1_Nopegət',
	NS_FILE             => 'Fajl',
	NS_FILE_TALK        => 'Fajl_nopegət',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_nopegət',
	NS_TEMPLATE         => 'Numunə',
	NS_TEMPLATE_TALK    => 'Numunə_nopegət',
	NS_HELP             => 'Koməg',
	NS_HELP_TALK        => 'Koməg_nopegət',
	NS_CATEGORY         => 'Tispir',
	NS_CATEGORY_TALK    => 'Tispir_nopegət',
);

$namespaceAliases = array(
	'$1_Nopegətəti'    => NS_PROJECT_TALK,
	'Fajli_nopegət'    => NS_FILE_TALK,
	'Koməgi_nopegət'   => NS_HELP_TALK,
	'Tispiron_nopegət' => NS_CATEGORY_TALK,
);

$specialPageAliases = array(
	'Allpages'                  => array( 'Һәммәј_сәһифон' ),
	'Blankpage'                 => array( 'Тәјлијә_сәһифә' ),
	'ChangeEmail'               => array( 'Е-номә_дәгиш_кардеј' ),
	'ChangePassword'            => array( 'Пароли_дәгиш_кардеј' ),
	'Emailuser'                 => array( 'Бә_иштирокәкә_номә_вығандеј' ),
	'Longpages'                 => array( 'Дырозә_сәһифон' ),
	'Movepage'                  => array( 'Сәһифә_номи_дәгиш_кардеј' ),
	'MyLanguage'                => array( 'Чымы_зывон' ),
	'Mypage'                    => array( 'Чымы_сәһифә' ),
	'Mytalk'                    => array( 'Чымы_мызокирә' ),
	'Myuploads'                 => array( 'Чымы_бо_жә_быә_чијон' ),
	'Newimages'                 => array( 'Нујә_фајлон' ),
	'Newpages'                  => array( 'Нујә_сәһифон' ),
	'PasswordReset'             => array( 'Пароли_ләғв_кардеј' ),
	'Protectedpages'            => array( 'Мыдофијә_кардә_быә_сәһифон' ),
	'Protectedtitles'           => array( 'Мыдофијә_кардә_быә_номон' ),
	'Randompage'                => array( 'Рајрастә_сәһифә._Рајрастә' ),
	'Recentchanges'             => array( 'Ән_нујә_дәгишон' ),
	'Recentchangeslinked'       => array( 'Ангыл_кардә_быә_дәгишон' ),
	'Revisiondelete'            => array( 'Рәдд_кардә_быә_дәгишон' ),
	'Search'                    => array( 'Нәве' ),
	'Shortpages'                => array( 'Кыртә_сәһифон' ),
	'Tags'                      => array( 'Нышонон' ),
	'Undelete'                  => array( 'Бәрпо_кардеј' ),
	'Version'                   => array( 'Рәвојәт' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#ТОЖӘДӘН_ИСТИҒОМӘТ_ДОЈ', '#REDIRECT' ),
	'notoc'                     => array( '0', '__БЕМЫНДӘРИҸОТ__', '__NOTOC__' ),
	'forcetoc'                  => array( '0', '__МӘҸБУРИЈӘ_МЫНДӘРИҸОТ__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__МЫНДӘРИҸОТ__', '__TOC__' ),
	'currentmonth'              => array( '1', 'ЕСӘТНӘ_МАНГ', 'ЕСӘТНӘ_МАНГ_2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'ЕСӘТНӘ_МАНГ_1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'ЕСӘТНӘ_МАНГИ_НОМ', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'ЕСӘТНӘ_МАНГИ_НОМ_ҸИНС', 'CURRENTMONTHNAMEGEN' ),
	'currentday'                => array( '1', 'ЕСӘТНӘ_РУЖ', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'ЕСӘТНӘ_РУЖ_2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'ЕСӘТНӘ_РУЖИ_НОМ', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'ЕСӘТНӘ_СОР', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'ЕСӘТНӘ_ВАХТ', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'ЕСӘТНӘ_СААТ', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'БУМИНӘ_МАНГ', 'БУМИНӘ_МАНГ_2', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'БУМИНӘ_МАНГ_1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'БУМИНӘ_МАНГИ_НОМ', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'БУМИНӘ_МАНГИ_НОМ_ҸИНС', 'LOCALMONTHNAMEGEN' ),
	'localday'                  => array( '1', 'БУМИНӘ_РУЖ', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'БУМИНӘ_РУЖ_2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'БУМИНӘ_РУЖИ_НОМ', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'БУМИНӘ_СОР', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'БУМИНӘ_ВАХТ', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'БУМИНӘ_СААТ', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'СӘҺИФОН_ҒӘДӘР', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'МӘҒОЛОН_ҒӘДӘР', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'ФАЈЛОН_ҒӘДӘР', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'ИШТИРОКӘКОН_ҒӘДӘР', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'ТИЛИКӘ_ИШТИРОКӘКОН_ҒӘДӘР', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'ДӘГИШОН_ҒӘДӘР', 'NUMBEROFEDITS' ),
	'pagename'                  => array( '1', 'СӘҺИФӘ_НОМ', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'СӘҺИФӘ_НОМ_2', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'НОМОН_МӘКОН', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'НОМОН_МӘКОН_2', 'NAMESPACEE' ),
	'namespacenumber'           => array( '1', 'НОМОН_МӘКОН_ҒӘДӘР', 'NAMESPACENUMBER' ),
	'talkspace'                 => array( '1', 'МЫЗОКИРОН_МӘКОН', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'МЫЗОКИРОН_МӘКОН_2', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'МӘҒОЛОН_МӘКОН', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'МӘҒОЛОН_МӘКОН_2', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'СӘҺИФӘ_ПУРӘ_НОМ', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'СӘҺИФӘ_ПУРӘ_НОМ_2', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'ЖИНТОНӘДӘ_СӘҺИФӘ_НОМ', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'ЖИНТОНӘДӘ_СӘҺИФӘ_НОМ_2', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'СӘҺИФӘ_НОМИ_ӘСОС', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'СӘҺИФӘ_НОМИ_ӘСОС_2', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'МЫЗОКИРӘ_СӘҺИФӘ_НОМ', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'МЫЗОКИРӘ_СӘҺИФӘ_НОМ_2', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'МӘҒОЛӘ_СӘҺИФӘ_НОМ', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'МӘҒОЛӘ_СӘҺИФӘ_НОМ_2', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                       => array( '0', 'ХӘБӘ:', 'MSG:' ),
	'subst'                     => array( '0', 'ӘВӘЗ_КАРДЕ:', 'SUBST:' ),
	'msgnw'                     => array( '0', 'БЕВИКИ_ХӘБӘ:', 'MSGNW:' ),
	'img_thumbnail'             => array( '1', 'миниатјур', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'миниатјур=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'росто', 'right' ),
	'img_left'                  => array( '1', 'чәпо', 'left' ),
	'img_none'                  => array( '1', 'бе', 'none' ),
	'img_width'                 => array( '1', '$1пкс', '$1px' ),
	'img_center'                => array( '1', 'мәрәнго', 'center', 'centre' ),
	'img_page'                  => array( '1', 'сәһифә=$1', 'сәһифә_$1', 'page=$1', 'page $1' ),
	'sitename'                  => array( '1', 'САЈТИ_НОМ', 'SITENAME' ),
	'localurl'                  => array( '0', 'БУМИНӘ_УНВОН:', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'БУМИНӘ_УНВОН_2:', 'LOCALURLE:' ),
	'currentweek'               => array( '1', 'ЕСӘТНӘ_ҺАФТӘ', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'ЕСӘТНӘ_ҺАФТӘ_РУЖ', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'БУМИНӘ_ҺАФТӘ', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'БУМИНӘ_ҺАФТӘ_РУЖ', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'РӘВОЈӘТИ_ID', 'REVISIONID' ),
	'revisionday'               => array( '1', 'РӘВОЈӘТИ_РУЖ', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'РӘВОЈӘТИ_РУЖ_2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'РӘВОЈӘТИ_МАНГ', 'REVISIONMONTH' ),
	'revisionmonth1'            => array( '1', 'РӘВОЈӘТИ_МАНГ_2', 'REVISIONMONTH1' ),
	'revisionyear'              => array( '1', 'РӘВОЈӘТИ_СОР', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'РӘВОЈӘТИ_ВАХТИ_ҒЕЈД', 'REVISIONTIMESTAMP' ),
	'revisionuser'              => array( '1', 'ИШТИРОКӘКӘ_РӘВОЈӘТ', 'REVISIONUSER' ),
	'fullurl'                   => array( '0', 'ПУРӘ_УНВОН:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'ПУРӘ_УНВОН_2:', 'FULLURLE:' ),
	'currentversion'            => array( '1', 'ЕСӘТНӘ_РӘВОЈӘТ', 'CURRENTVERSION' ),
	'currenttimestamp'          => array( '1', 'ЕСӘТНӘ_ВАХТИ_ҒЕЈД', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'БУМИНӘ_ВАХТИ_ҒЕЈД', 'LOCALTIMESTAMP' ),
	'directionmark'             => array( '1', 'НОМӘ_ИСТИҒОМӘТ', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                  => array( '0', '#ЗЫВОН:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'МЫҒДОРИ_ЗЫВОН', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'СӘҺИФОН_БӘ_НОМОН_МӘКОНӘДӘ:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'pagesize'                  => array( '1', 'СӘҺИФӘ_ПАМЈӘ', 'PAGESIZE' ),
	'url_wiki'                  => array( '0', 'ВИКИ', 'WIKI' ),
);

