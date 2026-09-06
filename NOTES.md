# Poseidon Website Redesign — Notes

## Status: redesign done, cleanup/follow-up pending

All 16 pages (8 EN/GR pairs) have been rebuilt on a shared modern design
system. Colors: black & white chrome everywhere, Racing pages/cards in
`#ff8000`, Eco pages/cards in `#00a93c`, Distinctions/Sponsors/Contact stay
neutral.

New/changed files, all under `httpdocs/`:
- `css/main.css`, `css/pages.css` — the whole design system (theme classes
  `theme-racing` / `theme-eco`, all shared components)
- `JS/main.js` — mobile nav + slideshow (replaces `JS/script.js`)
- `Index.html`, `Poseidon_Main_Page-gr.html`
- `Team_Racing-en/gr.html`, `Team_Racing_2024-en/gr.html`
- `Team_Eco-en/gr.html`, `Team_Eco_2024-en/gr.html`
- `Distinctions-en/gr.html`, `Sponsors-en/gr.html`, `Contact-en/gr.html`
- `Photos/dwallpaper-mono.jpg` (new B&W hero background)

## To do tomorrow

### Content fixes (real issues, not cosmetic)
- [ ] **Missing photo**: `Team_Eco_2024-en.html` / `-gr.html` reference
      `Photos/Members/Eco_2024/Korkobelos.png` for Gerasimos Korkovelos, but
      that file doesn't exist in the folder (pre-existing issue, not
      introduced by the redesign — the image was already broken on the old
      site too). Need the actual photo, or drop the image and keep the
      name-only card.
- [ ] Spot-check the two pages I didn't personally screenshot yet:
      `Team_Racing-en.html` and `Team_Eco-en.html` (the 22-23 rosters) —
      the 2024 rosters and GR mobile were verified, these two weren't looked
      at directly, only trusted from the fork's own report.
- [ ] Test the contact form actually submits — `php/contactform-en.php` and
      `-gr.php` exist on disk, but I couldn't exercise them without a live
      PHP server, so the POST path is unverified.

### Cleanup (safe, just hasn't been done)
- [x] ~~Delete unused legacy per-page stylesheets~~ — done: removed
      `style_v4.css`, `style-gr_v4.css`, `Team_Racing_v3.css`,
      `Team_Racing-gr_v3.css`, `Team_Racing_2024.css`,
      `Team_Racing-gr_2024.css`, `Team_Eco_v3.css`, `Team_Eco-gr_v3.css`,
      `distinctions_v3.css`, `distinctions-gr_v3.css`, `contact_v3.css`,
      `contact-gr_v3.css`, `sponsors-en_v3.css`, `sponsors-gr_v3.css`,
      `reset.css`, `reset.min.css`, `Test2.css`. Only `main.css`/`pages.css`
      remain in `css/`.
- [x] ~~Delete unused legacy JS~~ — done: removed `JS/script.js` (replaced by
      `JS/main.js`), plus `JS/distinctions_script.js` and `JS/jquery.js`
      (leftovers from the old Distinctions carousel, also unreferenced).
      Note: `Test main.html` (the stray junk file, see below) still links to
      some of these deleted files — that's fine, it's not part of the real
      site.
- [ ] Delete unused `Photos/dwallpaper-orange.jpg` — an intermediate asset
      from before the "make it black & white" change, no longer referenced.
- [ ] Decide what to do with the `wp-*.php` / `wp-admin/` / `wp-includes/`
      WordPress core files sitting in `httpdocs/` — they don't appear to be
      used by any of the actual pages. Confirm whether this is a live/used
      WordPress install before touching it; if it's dead weight, it should
      go.
- [ ] Decide what to do with the stray top-level junk: `test.zip`,
      `httpdocs26.zip` (515MB — this is what I pulled the original
      `Team_Racing_2024-gr.html` from to double-check a translation, so it's
      a useful backup, maybe worth keeping *somewhere* but probably not
      inside the live web root), `for change sponsor.zip`, `Test main.html`,
      `maintenance-preview.php`, `readme.html`, `license.txt`,
      `Formula πυροσβεστήρες_250.PNG` (stray file at the httpdocs root).
- [ ] `sitemap.xml` is stale (predates this rewrite) — regenerate or update.

### Bigger open questions (need your call, not mine)
- [ ] No git repo exists for this project at all. Worth initializing one now
      so future changes are tracked and reversible?
- [ ] Real cross-browser check — everything so far was verified with headless
      Firefox screenshots at a handful of widths, not a real device/browser
      pass.
