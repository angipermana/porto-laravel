# Fluid Typography & UI/UX Readability Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Implement Fluid Typography (`clamp()`) and improve overall text font size & readability across `porto-laravel`.

**Architecture:** Add root `@layer base` responsive clamp font rules in `resources/css/app.css` and upgrade small/hard-to-read font classes in Blade templates (`welcome.blade.php`, `chatbot.blade.php`, and portfolio views).

**Tech Stack:** Laravel, Blade, Tailwind CSS v4, Alpine.js.

## Global Constraints
- Target screen resolution scaling: 375px (Mobile) to 1440px+ (Desktop).
- Minimum body text font size floor: 14px on mobile, 16px-17px+ on desktop.
- Retain existing layout structure and color themes (Dark/Light).

---

### Task 1: Configure Base Fluid Typography in CSS

**Files:**
- Modify: `resources/css/app.css:1-12`

**Interfaces:**
- Produces: Base responsive font sizing and line-heights for all `html` and `body` elements across the site.

- [ ] **Step 1: Add `@layer base` responsive clamp rules to `app.css`**

Edit `resources/css/app.css` to add:

```css
@layer base {
    html {
        font-size: clamp(16px, 1.1vw + 13px, 19px);
    }
    body {
        font-size: 1rem;
        line-height: 1.65;
        letter-spacing: 0.01em;
    }
}
```

- [ ] **Step 2: Verify CSS build output**

Run: `npx vite build`
Expected: Successful build without CSS syntax errors.

- [ ] **Step 3: Commit CSS changes**

```bash
git add resources/css/app.css
git commit -m "style: add fluid typography clamp base rules in app.css"
```

---

### Task 2: Upgrade Typography & Font Sizes in Welcome Blade View

**Files:**
- Modify: `resources/views/welcome.blade.php`

**Interfaces:**
- Consumes: Base fluid typography from Task 1.

- [ ] **Step 1: Update hero section sub-headline and badge sizes**
In `resources/views/welcome.blade.php`:
Replace instances of `text-[10px]` or `text-xs` badges with `text-sm font-medium`.
Upgrade subheadings and hero lead text to `text-lg` / `text-xl`.

- [ ] **Step 2: Update card titles, descriptions, and feature lists**
In `resources/views/welcome.blade.php`:
Replace `text-xs` and `text-sm` in portfolio cards, service cards, and skills lists with `text-sm` and `text-base`.

- [ ] **Step 3: Verify Vite build**

Run: `npx vite build`
Expected: Build finishes cleanly.

- [ ] **Step 4: Commit Blade template changes**

```bash
git add resources/views/welcome.blade.php
git commit -m "style: upgrade font sizes and readability in welcome blade template"
```

---

### Task 3: Upgrade Chatbot Component Font Sizes

**Files:**
- Modify: `resources/views/partials/chatbot.blade.php`

**Interfaces:**
- Consumes: Base fluid typography.

- [ ] **Step 1: Upgrade chat bubble text, header, and input font sizes**
In `resources/views/partials/chatbot.blade.php`:
Change chat bubble text from `text-xs` / `text-sm` to `text-sm sm:text-base`.
Change input placeholder and input text to `text-sm` or `text-base`.

- [ ] **Step 2: Commit chatbot template changes**

```bash
git add resources/views/partials/chatbot.blade.php
git commit -m "style: increase text size in chatbot component"
```

---

### Task 4: Verify UI/UX in Mobile and Desktop Viewports

**Files:**
- Test target: `http://127.0.0.1:8000`

- [ ] **Step 1: Test mobile and desktop rendering**
Verify running web app at `http://127.0.0.1:8000` using browser testing / subagent to inspect text readability and line height.

- [ ] **Step 2: Final commit check**
Confirm clean status with `git status`.
