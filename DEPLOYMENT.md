# Deployment Guide

## Quick Deploy to cPanel

### Step 1: Prepare Theme
```powershell
# Local - Keep ONLY mexivanza folder
# Delete: bin/, config/, core/, modules/, resources/, storage/, tests/, mexivanza-child/
```

### Step 2: Create ZIP
Right-click `mexivanza/` folder → Send to → Compressed (zipped) folder

### Step 3: Upload to cPanel
1. File Manager → `/public_html/wp-content/themes/`
2. Upload `mexivanza.zip`
3. Right-click → Extract
4. Delete `mexivanza.zip`

### Step 4: Activate
WordPress Admin → Appearance → Themes → Activate Mexivanza

## Troubleshooting

**Problem: Theme installs multiple times**
- Ensure ZIP contains ONLY the `mexivanza/` folder
- Check `.gitignore` - no Laravel/build files included
- Delete any duplicate folders before zipping

**Problem: Permissions error**
- cPanel File Manager → Right-click theme folder → Change Permissions → 755

**Problem: White screen**
- Check error logs: cPanel → Error Log or `/var/log/php-errors.log`
- Verify PHP version meets requirement (7.4+)

## Version Control

```bash
# Push changes to GitHub
git add .
git commit -m "Update theme"
git push origin main

# Deploy from GitHub
cd /public_html/wp-content/themes/
git pull origin main
```
