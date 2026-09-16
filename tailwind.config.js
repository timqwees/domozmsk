/** Tailwind для domozmsk — сборка вместо Play CDN.
 * Контент лежит в БД MODX, поэтому сканер смотрит дампы отрендеренных страниц.
 * Пересборка после правок шаблонов/чankов с новыми классами:
 *   1) сохранить свежие HTML-главной/услуги/блога/цен в build/scan/
 *   2) npx tailwindcss -i src/input.css -o assets/css/tailwind.css --minify --config tailwind.config.js
 * Потом git add/commit/push + pull на сервере (cache_version сменит ?v= сам).
 * @type {import('tailwindcss').Config}
 */
module.exports = {
  content: [
    './build/scan/**/*.html',
    './src/input.css',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
