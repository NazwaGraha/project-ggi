#!/bin/bash
# ==============================================================================
# SCRIPT 1-KLIK AUTO UPDATE DARI LAPTOP KE HOSTING
# ==============================================================================

# Ambil pesan commit dari input user, atau gunakan pesan default jika kosong
MESSAGE=${1:-"update website $(date '+%Y-%m-%d %H:%M:%S')"}

echo "🚀 Menyiapkan file yang diubah di laptop..."
git add .

echo "📝 Menyimpan perubahan: '$MESSAGE' ..."
git commit -m "$MESSAGE"

echo "☁️ Mengirim update ke GitHub & Auto-Deploy ke Hosting..."
git push origin main

echo "🎉 SELESAI! Update berhasil dikirim. Hosting sedang otomatis terupdate dalam hitungan detik."
