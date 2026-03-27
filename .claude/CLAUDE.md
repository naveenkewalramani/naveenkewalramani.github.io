# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Personal portfolio website for Naveen Kewalramani, a Backend Engineer. Static site served via GitHub Pages at https://naveenkewalramani.github.io/

**No build system.** Pure HTML, CSS, and vanilla JavaScript — no npm, no bundler, no compilation step.

## Development

To preview locally, serve the root directory with any static HTTP server:

```bash
python3 -m http.server 8000
# or
npx serve .
```

Then open `http://localhost:8000` in a browser.

## Architecture

Everything is in `index.html` (single-file SPA, ~763 lines):

- **Navigation** — fixed header with smooth-scroll anchor links
- **Sections** — About, Book Meeting, Certifications, Skills, Projects
- **Styling** — embedded `<style>` block with CSS animations (gradient background, scroll-reveal, profile float)
- **JS** — embedded `<script>` block using `IntersectionObserver` for scroll-reveal and active nav state

Static assets live under `assets/images/` (v1 = profile, v2 = project thumbnails).

The `projects/` directory contains three separate sub-sites (aisywc, ams, csis) that are demo/live pages for projects listed on the portfolio. Each is self-contained with its own HTML/CSS/JS.

## Key Files

| File | Purpose |
|------|---------|
| `index.html` | Entire portfolio — edit here for all content/style changes |
| `resume.pdf` | Resume linked from the About section |
| `projects/aisywc/` | AISYWC 2017 event site (includes PHP, MySQL dump) |
| `projects/ams/` | Acoustic & Media Society website |
| `projects/csis/` | IEEE CSIS 2017 symposium site |
