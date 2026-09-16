#!/bin/bash
# ==============================================================================
# Script Otomasi Sinkronisasi Update: Laptop ke cPanel Hosting (/home/agrm6137)
# ==============================================================================

CPANEL_USER="agrm6137"
CPANEL_HOST="guritaglobal.com"
CPANEL_PORT="22" # Sesuaikan jika port SSH cPanel berbeda

echo "🚀 Memulai sinkronisasi Project GGI ke Hosting..."

# 1. Sync Core Laravel ke /home/agrm6137/ggi/
echo "📦 Mengunggah Core Laravel ke /home/$CPANEL_USER/ggi/ ..."
rsync -avz -e "ssh -p $CPANEL_PORT" \
    --exclude='.git' \
    --exclude='node_modules' \
    --exclude='public' \
    --exclude='storage/logs/*' \
    --exclude='.env' \
    ./ $CPANEL_USER@$CPANEL_HOST:/home/$CPANEL_USER/ggi/

# 2. Sync Public Assets ke /home/agrm6137/public_html/guritaglobal.com/
echo "🌐 Mengunggah Public Assets ke /public_html/guritaglobal.com/ ..."
rsync -avz -e "ssh -p $CPANEL_PORT" \
    --exclude='storage' \
    --exclude='index.production.php' \
    public/ $CPANEL_USER@$CPANEL_HOST:/home/$CPANEL_USER/public_html/guritaglobal.com/

echo "✅ Sinkronisasi selesai! Website live terupdate."
