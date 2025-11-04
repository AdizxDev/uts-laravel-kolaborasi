# ✅ UTS Web Service Laravel — Kolaborasi

Repository ini dibuat untuk memenuhi tugas UTS mata kuliah **Web Service** dengan penerapan:

- Laravel (Blade, Routing, MVC)
- RESTful konsep dasar
- CI/CD GitHub (kolaborasi Git & GitHub)
- Kolaborasi Team (Fork → Branch → Pull Request → Merge)

---

## 👨‍🏫 Identitas Mahasiswa

| Peran | Nama | NIM |
|------|------|------|
| Mahasiswa A (Owner / Maintainer) | **Adi Saputra** | **2301010016** |
| Mahasiswa B (Contributor) | **Imam Rismawan** | **2301010021** |

---

## 📂 Struktur Proyek

- `Home Page` menampilkan galeri lokasi wisata internasional
- `About Page` menampilkan profil kedua mahasiswa
- `Blade Template` digunakan untuk komponen UI
- `Routing` menggunakan controller terpisah

---

## 🔧 Cara Menjalankan

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
