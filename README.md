Berikut langkah instalasi web:
1. Clone
2. Letakkan pada www atau htdocs
3. Buat table wordpress pada database
4. Import file wordpress.sql yang terletak pada root folder hasil clone
5. Untuk mengakses sesuai URL yang diinginkan dapat dilakukan dengan beberapa opsi (pilih salah satu):
   a. Update file wp-config.php pada root folder hasil clone
      Tambahkan 2 line di bawah setelah define('WP_DEBUG', false);

      define('WP_HOME', 'http://localhost/wordpress2/testinglabs-web/');
      define('WP_SITEURL', 'http://localhost/wordpress2/testinglabs-web/');

   b. Update table wp_options pada database sesuai URL yang diinginkan  https://stackoverflow.com/questions/29697144/change-site-url-and-wordpress-url-in-localhost

6. Buka browser dengan URL yang sudah diset pada step 5.