# Business Requirements Document (BRD)

## Digitalisasi Process Flow Pengajuan dan Persetujuan Sidang Skripsi  
### Berbasis Platform Web dengan Fitur Tanda Tangan Elektronik (TTE)

---

## 1. Executive Summary

### 1.1 Latar Belakang
Transformasi digital dalam proses administrasi akademik menjadi kebutuhan penting untuk meningkatkan efisiensi dan kualitas layanan. Sistem ini dirancang dengan mengadopsi *best practice* desain website modern berdasarkan prinsip usability Nielsen (2020).

Integrasi *user experience* yang intuitif dan profesional mengikuti standar web business kontemporer. Selain itu, penerapan prinsip UI/UX dari *successful business themes* diharapkan mampu meningkatkan tingkat adopsi sistem hingga 95%.

### 1.2 Value Proposition
- **Modern Interface**  
  Menggunakan design system kontemporer yang responsif.
- **Streamlined Workflow**  
  Otomatisasi proses dengan UX optimal berdasarkan penelitian Darmawan et al. (2022).
- **Fully Responsive**  
  Akses sistem yang seamless di berbagai perangkat.
- **Professional Branding**  
  Tampilan korporat yang sesuai untuk institusi pendidikan.

---

## 2. Stakeholder Analysis

| Stakeholder | Peran & Tanggung Jawab | Kebutuhan Utama |
|------------|------------------------|-----------------|
| **Mahasiswa** | Mengajukan permohonan sidang, upload berkas persyaratan, melacak status pengajuan | Kemudahan pengajuan online, notifikasi status real-time, transparansi proses |
| **Admin Program Studi** | Verifikasi kelengkapan berkas, menyetujui pengajuan, plotting dosen, membuat surat tugas | Dashboard monitoring, tools manajemen dosen, sistem TTE terintegrasi |
| **Dosen** | Menerima penugasan, menandatangani surat secara digital, melihat jadwal bimbingan | Notifikasi penugasan, kemudahan akses TTE, kalender terintegrasi |

---

## 3. Business Objectives

### 3.1 Objectives Utama
- Mengurangi waktu proses pengajuan dari ±7 hari menjadi ≤2 hari (Alenezi, 2021)
- Menghilangkan penggunaan kertas 100% dalam proses administrasi (Fajarwati & Prasetyo, 2022)
- Meningkatkan akurasi data pengajuan hingga 95% (Garcia & Lee, 2022)

### 3.2 Key Performance Indicators (KPIs)
- Waktu rata-rata penyelesaian proses pengajuan
- Tingkat kepuasan pengguna (User Satisfaction Score >80) – Liu et al. (2020)
- Persentase kesalahan input data (target <5%)
- Tingkat penggunaan sistem (target >90%)

---

## 4. Scope of Work

### 4.1 In Scope
- Modul pengajuan sidang oleh mahasiswa
- Modul verifikasi dan approval oleh admin
- Modul plotting dosen penguji
- Modul Tanda Tangan Elektronik (TTE) sesuai Kominfo (2020)
- Modul notifikasi dan reminder otomatis
- Dashboard reporting untuk admin

### 4.2 Out of Scope
- Sistem penilaian sidang
- Upload file skripsi full text
- Sistem pembayaran administrasi
- Pengembangan aplikasi mobile

---

## 5. UI/UX Design Requirements

### 5.1 Design System
- **Header**: Sticky navigation dengan logo institusi
- **Cards**: Konsistensi shadow, border-radius, dan spacing
- **Buttons**: Primary, Secondary, Success, dan Danger states
- **Forms**: Modern input fields dengan validasi yang jelas

### 5.2 Color Palette
```css
:root {
  --primary: #2c5aa0;    /* Professional blue */
  --secondary: #6c757d;  /* Business gray */
  --success: #28a745;    /* Approval green */
  --danger: #dc3545;     /* Rejection red */
  --warning: #ffc107;    /* Pending yellow */
}
