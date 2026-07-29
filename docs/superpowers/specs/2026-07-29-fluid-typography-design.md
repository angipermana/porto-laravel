# Design Spec: Fluid Typography & UI/UX Readability Enhancement

**Date:** 2026-07-29  
**Target Application:** `porto-laravel`  
**Goal:** Improve overall readability and UI/UX by implementing Fluid Typography (`clamp()`) across the web application so that text sizes adapt smoothly from mobile screens (375px) to large desktop monitors (1440px+).

---

## 1. Background & User Need
The user reported that the font size across the `porto-laravel` website feels too small, making paragraphs, badges, chatbot messages, and card descriptions hard to read.

---

## 2. Technical Architecture & Strategy

### A. Root Fluid Base Typography (`resources/css/app.css`)
- Configure root CSS variables and base html/body styling:
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
- Custom utility clamps for fine-grained scaling:
  - Small tags/badges (`text-xs` / `text-[10px]` replacement): `clamp(13px, 0.8vw + 11px, 14px)`
  - Body text (`text-sm` replacement): `clamp(15px, 1vw + 13px, 17px)`
  - Card titles & subheadings (`text-base` replacement): `clamp(17px, 1.2vw + 14px, 20px)`

### B. Template Enhancements (`resources/views/`)
- **`welcome.blade.php`**: Upgrade hero section subtitle, stat numbers, card description text, tags, and footer copyright font sizes.
- **`partials/chatbot.blade.php`**: Increase chat window title, message bubbles, input field, and trigger button font size for mobile readability.
- **`portfolio/*.blade.php`**: Update key metrics, breadcrumbs, tags, and content blocks in detail pages.

### C. Visual Verification
- Use browser testing tools to capture and verify mobile (375px width) and desktop (1440px width) screenshots before declaring completion.

---

## 3. Success Criteria
1. No body text rendered smaller than 14px on mobile devices.
2. Main body copy scales fluidly to 17px+ on desktop devices with clear line spacing (`1.65`).
3. Badges and interactive elements retain proper padding without clipping or layout breaking.
