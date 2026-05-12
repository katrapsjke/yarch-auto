#!/usr/bin/env bash
# ============================================================
# Grav setup script for yarch-auto-ai
# Usage: bash setup.sh [--no-admin]
# Requires: curl, unzip, php (CLI)
# ============================================================
set -e

GRAV_VERSION="1.7.46"
REPO_DIR="$(cd "$(dirname "$0")" && pwd)"
WITH_ADMIN=true

for arg in "$@"; do
  [[ "$arg" == "--no-admin" ]] && WITH_ADMIN=false
done

echo "==> Downloading Grav ${GRAV_VERSION}..."
if $WITH_ADMIN; then
  curl -fsSL "https://github.com/getgrav/grav/releases/download/${GRAV_VERSION}/grav-admin-v${GRAV_VERSION}.zip" -o /tmp/grav.zip
else
  curl -fsSL "https://github.com/getgrav/grav/releases/download/${GRAV_VERSION}/grav-v${GRAV_VERSION}.zip" -o /tmp/grav.zip
fi

echo "==> Extracting..."
unzip -q /tmp/grav.zip -d /tmp/grav_extract
rm /tmp/grav.zip

SRC_DIR=$(ls -d /tmp/grav_extract/grav*/ | head -1)

echo "==> Installing Grav into ${REPO_DIR}..."
# Copy Grav core files (skip user/ so our version stays)
rsync -a --exclude='user/' "${SRC_DIR}" "${REPO_DIR}/"

# Move contents out of the versioned subfolder if needed
if [ -d "${REPO_DIR}/$(basename ${SRC_DIR%/})" ]; then
  rsync -a "${REPO_DIR}/$(basename ${SRC_DIR%/})/" "${REPO_DIR}/"
  rm -rf "${REPO_DIR}/$(basename ${SRC_DIR%/})"
fi

rm -rf /tmp/grav_extract

echo "==> Copying theme assets..."
THEME_DIR="${REPO_DIR}/user/themes/yarch"

# Copy CSS / JS
cp -r "${REPO_DIR}/css/"             "${THEME_DIR}/css/"
cp -r "${REPO_DIR}/js/"              "${THEME_DIR}/js/"

# Root images (flags, icons)
mkdir -p "${THEME_DIR}/images"
cp "${REPO_DIR}/images/"*.svg        "${THEME_DIR}/images/" 2>/dev/null || true
cp "${REPO_DIR}/images/"*.png        "${THEME_DIR}/images/" 2>/dev/null || true

# Section CSS and images
for SECTION in hero pain solution cases countries cta faq seo; do
  if [ -d "${REPO_DIR}/sections/${SECTION}/css" ]; then
    mkdir -p "${THEME_DIR}/sections/${SECTION}/css"
    cp -r "${REPO_DIR}/sections/${SECTION}/css/." "${THEME_DIR}/sections/${SECTION}/css/"
  fi
  if [ -d "${REPO_DIR}/sections/${SECTION}/images" ]; then
    mkdir -p "${THEME_DIR}/sections/${SECTION}/images"
    cp -r "${REPO_DIR}/sections/${SECTION}/images/." "${THEME_DIR}/sections/${SECTION}/images/"
  fi
done

# Hero background image
mkdir -p "${THEME_DIR}/design/index/1. section-hero"
cp -r "${REPO_DIR}/design/index/1. section-hero/." "${THEME_DIR}/design/index/1. section-hero/" 2>/dev/null || true

echo "==> Running Grav install..."
php "${REPO_DIR}/bin/grav" install

echo "==> Setting file permissions..."
find "${REPO_DIR}" -type f -name "*.php" -exec chmod 644 {} \;
find "${REPO_DIR}" -type d -exec chmod 755 {} \;
chmod -R u+w "${REPO_DIR}/cache" "${REPO_DIR}/logs" "${REPO_DIR}/backup" 2>/dev/null || true

echo ""
echo "✓ Grav installed successfully!"
echo "  → Open http://your-server/ in a browser"
if $WITH_ADMIN; then
  echo "  → Admin panel: http://your-server/admin"
  echo "    Create admin user: php bin/plugin login newuser"
fi
echo ""
echo "  To clear cache:  php bin/grav clear-cache"
echo "  To update Grav:  php bin/gpm selfupgrade"
