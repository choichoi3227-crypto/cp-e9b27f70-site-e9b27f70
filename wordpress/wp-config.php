<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정
define( 'SQLITE_DB_DIR',  __DIR__ . '/../_db/' );
define( 'SQLITE_DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         'opdntr1o7kvo0gu4bliqljnb6ihtlybrggyavl82f8j8tq0eauqmfp7vmej9touw' );
define( 'SECURE_AUTH_KEY',  'izppvcqpdoetk1kix4h09vw3jyt8fshr0cwqfo8bzzxvwqy9fool9t67armv1uxn' );
define( 'LOGGED_IN_KEY',    'ud37xis69741loopld8t4r52r42ccbl73ksu8z1xknok3n7g8maizzmqp2zpmenh' );
define( 'NONCE_KEY',        'h8svsx0albfl2oy4v7by98v8leol0n6fv28kxp7g89nrtbexkm7323ahidbbl2m5' );
define( 'AUTH_SALT',        'gii44012onkcg9bime45ntuak54f7fvgwkjei88x2zewb6htn2en9sbasfbrsrq6' );
define( 'SECURE_AUTH_SALT', 'uw06uche097yqwch823sz1yrkv7au3z6n4qea2hqsbe9b0oed6quzf3lldmhrcqc' );
define( 'LOGGED_IN_SALT',   'w77sodw80sa8c3fsqssqcgb1efrehfwjhee04jjazbohrm8dptgnfnc7rstfcq05' );
define( 'NONCE_SALT',       'h9g4wjode8oe4gxm9pq1l5ham0zanzldmscg4gl0ov73x1kvts2x27p0sfmeml56' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-e9b27f70-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-e9b27f70-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
