<div align="center">

```
  ███████╗██╗  ██╗ █████╗  ████████╗██╗  ██╗███████╗███╗   ███╗███████╗
  ██╔════╝██║ ██╔╝██╔══██╗ ╚══██╔══╝██║  ██║██╔════╝████╗ ████║██╔════╝
  ███████╗█████╔╝ ███████║    ██║   ███████║█████╗  ██╔████╔██║█████╗  
  ╚════██║██╔═██╗ ██╔══██║    ██║   ██╔══██║██╔══╝  ██║╚██╔╝██║██╔══╝  
  ███████║██║  ██╗██║  ██║    ██║   ██║  ██║███████╗██║ ╚═╝ ██║███████╗
  ╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═╝╚══════╝╚═╝     ╚═╝╚══════╝
```

**Deep-space neon Blueprint extension for Pterodactyl Panel**

![Version](https://img.shields.io/badge/version-1.0.0-a855f7?style=flat-square&labelColor=08081a)
![Blueprint](https://img.shields.io/badge/Blueprint-beta--2026--01-7c3aed?style=flat-square&labelColor=08081a)
![Pterodactyl](https://img.shields.io/badge/Pterodactyl-1.11+-22d3ee?style=flat-square&labelColor=08081a)
![License](https://img.shields.io/badge/Copyright-©%20SKA-f472b6?style=flat-square&labelColor=08081a)

</div>

---

## ⚡ Install (One Command)

```bash
cd /var/www/pterodactyl
blueprint -install skatheme
```

**Or download + install manually:**

```bash
wget https://github.com/sdgamer8263-sketch/skathemes/raw/main/skatheme.blueprint
blueprint -install skatheme.blueprint
```

---

## 📦 What is SKA Theme?

SKA Theme is a **Blueprint extension** for Pterodactyl Panel — same format as Nebula, Drift, and other Blueprint themes.

- ✅ Install with one `blueprint -install` command
- ✅ Admin panel settings page built-in
- ✅ Deep-space neon purple & cyan palette
- ✅ Glassmorphic sidebar, tooltips, context menus
- ✅ Animated server cards & status orbs
- ✅ Keyboard shortcuts, floating windows, file mode
- ✅ Hardcoded `Copyright © SKA` footer
- ✅ Configurable second footer line via admin panel

---

## 🎨 Default Color Palette

| Role | Color | Hex |
|---|---|---|
| Sidebar background | Deep space | `#08081a` |
| Page background | Cosmic black | `#060613` |
| Primary text | Soft white | `#e2e8f0` |
| Neon purple (accent) | Vivid purple | `#a855f7` |
| Neon cyan | Bright cyan | `#22d3ee` |
| Button | Purple | `#7c3aed` |
| Online status | Neon green | `#4ade80` |
| Starting status | Yellow | `#facc15` |
| Error | Red | `#f87171` |

All colors are fully editable from the SKA Theme admin page after install.

---

## 📁 Blueprint Extension Structure

```
skatheme.blueprint  ← install this with blueprint -install
│
├── conf.yml                            Blueprint manifest
├── skatheme.jpg                        Extension icon
│
├── client/
│   └── wrapper.blade.php              Dashboard wrapper (loads all CSS/JS + sidebar + footer)
│
├── src/views/wrapper/
│   ├── theme/variables.blade.php      CSS custom properties (color palette)
│   ├── theme/panel.blade.php          Panel/dashboard styles
│   ├── theme/auth.blade.php           Login page styles
│   ├── theme/icons.blade.php          Bootstrap Icons overrides
│   ├── import.blade.php               CSS/JS asset loader
│   ├── script.blade.php               Sidebar JS logic
│   ├── animations.blade.php           Page transition animations
│   ├── alerts.blade.php               Announcement bar
│   ├── links.blade.php                Quick-link weblinks bar
│   ├── file-switch.blade.php          File manager grid/list toggle
│   ├── sidebar/content.blade.php      Sidebar HTML
│   ├── sidebar/mobile.blade.php       Mobile bottom navigation
│   ├── initialize/index.blade.php     First-run onboarding screen
│   ├── initialize/auth.blade.php      Login page first-run notice
│   ├── keybinds/index.blade.php       Keyboard shortcuts modal
│   ├── keybinds/binds.blade.php       Keybind definitions
│   ├── keybinds/keys.blade.php        Key legend
│   └── contextmenu/                   Right-click context menus
│       ├── sidebar.blade.php
│       ├── files.blade.php
│       └── more.blade.php
│
├── admin/
│   ├── controller.php                 Admin settings controller
│   ├── view.blade.php                 Admin settings page
│   └── layout.blade.php              Admin layout wrapper
│
├── public/libraries/                  CSS & JS assets (43 files)
│   ├── statusOrb.css / .js
│   ├── floatingWindows.css / .js
│   ├── customContextMenu.css / .js
│   ├── keybinds.js / keybindsModal.css / .js
│   ├── animations.css
│   ├── extendedStyles.css
│   ├── serversCards.css / serversList.css
│   ├── borderRadius.css
│   ├── sidebarTooltip.css
│   ├── fileMode.css / .js
│   └── ... (43 total)
│
└── private/
    ├── install.sh                     Blueprint install hook
    └── export.sh                      Blueprint export hook
```

---

## ⚙️ Admin Settings

After install, go to:

**Admin Panel → Extensions → SKA Theme**

From there you can configure:
- Color palette (dashboard, sidebar, auth page, status colors)
- Sidebar layout (icon-only or full labels)
- Server list style (cards or list)
- Animations (fadeup, zoomin, fadein, disabled)
- Alert/announcement bar
- Quick-link weblinks bar
- Keyboard shortcuts toggle
- Border radius
- Custom logo (sidebar + login)
- Background images
- Transparency levels
- Configurable second footer line (`Design by SKA`)

---

## 🔒 Footer

```
Copyright ©️ SKA          ← HARDCODED — cannot be changed
Design by SKA             ← CONFIGURABLE — edit in Admin → SKA Theme
```

The first line is permanently embedded in `client/wrapper.blade.php` and cannot be removed or changed through any admin interface.

The second line is controlled via the admin settings page or by setting `SKA_DESIGN_BY` in `.env`.

---

## 🛠️ Manual Install

```bash
# 1. Download
cd /var/www/pterodactyl
wget https://github.com/sdgamer8263-sketch/skathemes/raw/main/skatheme.blueprint

# 2. Install via Blueprint
blueprint -install skatheme.blueprint

# 3. Done — visit Admin → Extensions → SKA Theme to configure
```

---

## 📋 Requirements

| Requirement | Minimum |
|---|---|
| Pterodactyl Panel | 1.11+ |
| Blueprint | beta-2026-01+ |
| PHP | 8.1+ |

---

## 🔄 Push Updates

```bash
cd /path/to/skatheme
git add .
git commit -m "update description"
git push origin main
```

---

<div align="center">

**SKA Theme v1.0.0** — Blueprint extension for Pterodactyl

**Copyright © SKA — All rights reserved**

*The "Copyright © SKA" footer is hardcoded and must remain in all distributed versions.*

</div>
