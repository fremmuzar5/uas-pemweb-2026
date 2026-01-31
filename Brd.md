BUSINESS REQUIREMENTS DOCUMENT (BRD) 
Digitalisasi Process Flow Pengajuan dan Persetujuan 
Sidang Skripsi dengan Platform Web dan Fitur TTE 
1. Executive Summary 
1.1. Latar Belakang 
 Transformasi digital proses akademik mengadopsi best practice modern 
website design berdasarkan prinsip Nielsen (2020) 
 Integrasi user experience yang intuitif dan professional mengikuti standar 
web business contemporary 
 Penerapan UI/UX principles dari successful business themes untuk 
meningkatkan adoption rate hingga 95% 
1.2. Value Proposition 
 Modern Interface - Menggunakan design system contemporary yang 
responsive 
 Streamlined Workflow - Process automation dengan UX optimal 
berdasarkan penelitian Darmawan et al. (2022) 
 Fully Responsive - Akses seamless across all devices 
 Professional Branding - Corporate look untuk institusi pendidikan 
2. Stakeholder Analysis 
Stakeholder 
Mahasiswa 
Admin Program Studi 
Dosen 
Peran & Tanggung Jawab - Mengajukan permohonan sidang - Upload berkas persyaratan - Melacak status pengajuan - Verifikasi kelengkapan berkas - Menyetujui pengajuan - Melakukan plotting dosen - Membuat surat tugas - Menerima penugasan - Menandatangani surat secara digital - Melihat jadwal bimbingan 
Kebutuhan Utama - Kemudahan pengajuan online- Notifikasi status real-time- Transparansi proses - Dashboard monitoring - Tools manajemen dosen - Sistem TTE terintegrasi - Notifikasi penugasan - Kemudahan akses TTE - Kalender terintegrasi 
3. Business Objectives 
3.1. Objectives Utama 
 Mengurangi waktu proses pengajuan dari ±7 hari menjadi ≤2 hari (Alenezi, 
2021) 
 Menghilangkan penggunaan kertas 100% dalam proses administrasi 
(Fajarwati & Prasetyo, 2022) 
 Meningkatkan akurasi data pengajuan sebesar 95% (Garcia & Lee, 2022) 
3.2. Key Performance Indicators (KPIs) 
 Waktu rata-rata penyelesaian proses pengajuan 
 Tingkat kepuasan pengguna (User Satisfaction Score >80 - Liu et al., 2020) 
 Persentase kesalahan data input (target <5%) 
 Utilization rate sistem (target >90%) 
4. Scope of Work 
4.1. In Scope 
 Modul pengajuan sidang oleh mahasiswa 
 Modul verifikasi dan approval oleh admin 
 Modul plotting dosen penguji 
 Modul Tanda Tangan Elektronik (TTE) sesuai Kominfo (2020) 
 Modul notifikasi dan reminder otomatis (Darmawan et al., 2022) 
 Dashboard reporting untuk admin 
4.2. Out of Scope 
 Sistem penilaian sidang 
 Upload file skripsi full text 
 Sistem pembayaran administrasi 
 Mobile application development 
5. UI/UX Design Requirements 
5.1. Design System 
 Header: Sticky navigation dengan logo institusi 
 Cards: Consistent shadow, border-radius, dan spacing 
 Buttons: Primary/Secondary/Success/Danger states 
 Forms: Modern input fields dengan proper validation styling 
5.2. Color Palette 
css 
:root { --primary: #2c5aa0;    
/* Professional blue */ --secondary: #6c757d;   /* Business gray */ --success: #28a745;     
/* Approval green */ --danger: #dc3545;      --warning: #ffc107;     
/* Rejection red */ 
/* Pending yellow */ 
} 
5.3. Layout Components 
 Main Navigation: Sidebar dengan role-based menu items 
 Content Area: Clean layout dengan adequate white space 
 Data Tables: Sortable, filterable, dengan pagination 
 Modal Windows: Untuk form input dan detail views 
6. Functional Requirements 
6.1. Mahasiswa Module 
 FR-MHS-001: Submit form pengajuan sidang online 
 FR-MHS-002: Upload digital documents (PDF/DOCX) 
 FR-MHS-003: View real-time status tracking 
 FR-MHS-004: Receive multi-channel notifications 
6.2. Admin Module 
 FR-ADM-001: Verify document completeness 
 FR-ADM-002: Approval/rejection dengan one-click 
 FR-ADM-003: Dosen plotting system 
 FR-ADM-004: Generate surat tugas otomatis 
 FR-ADM-005: TTE integration untuk surat resmi 
6.3. Dosen Module 
 FR-DOS-001: View assigned tasks dashboard 
 FR-DOS-002: Digital signature functionality 
 FR-DOS-003: Calendar integration 
7. Technical Requirements 
7.1. Platform & Infrastructure 
 Framework: Laravel Filament PHP 
 Database: MySQL/PostgreSQL 
 Storage: Cloud-based document storage 
 Security: SSL encryption, role-based access control 
7.2. TTE Integration (Kominfo, 2020) 
 Sertifikat elektronik tersertifikasi BSrE 
 Standard tanda tangan: PAdES (PDF Advanced Electronic Signatures) 
 Audit trail untuk semua aktivitas tanda tangan 
 Compliance dengan UU ITE No. 11 Tahun 2008 
8. Implementation Timeline 
8.1. Phase 1 (Month 1-2) 
 Requirement analysis & system design 
 Core platform development 
 Basic workflow implementation 
8.2. Phase 2 (Month 3-4) 
 TTE integration 
 Notification system development 
 User acceptance testing (UAT) 
8.3. Phase 3 (Month 5-6) 
 System optimization 
 User training & documentation 
 Go-live & production support 
9. Success Metrics 
9.1. Quantitative Metrics 
 Process Efficiency: Pengurangan waktu proses dari 7→2 hari 
 Cost Reduction: Eliminasi 100% biaya pencetakan dokumen 
 Error Reduction: Penurunan kesalahan data dari 30%→5% 
9.2. Qualitative Metrics 
 User Satisfaction: SUS score >80 (Liu et al., 2020) 
 Adoption Rate: Utilization >90% oleh semua stakeholder 
 Compliance: 100% sesuai regulasi TTE Indonesia 
10. Conclusion 
Berdasarkan studi literatur dan analisis kebutuhan, BRD ini mengusulkan solusi 
digitalisasi yang: 
 Evidence-based - Didukung penelitian terkini dalam bidang akademik digital 
 Regulatory compliant - Memenuhi semua standar TTE Indonesia 
 User-centered - Menggunakan prinsip UI/UX modern untuk meningkatkan 
adoption 
 Measurable - Dengan KPI yang jelas dan terukur untuk evaluasi keberhasilan 
Dengan implementasi sistem ini, institusi dapat mencapai digital 
transformation yang komprehensif dalam proses administrasi akademik. 
Lampiran: 
 Detail Technical Specification 
 UI/UX Mockups 
 Risk Assessment Matrix 
 Implementation Detail Plan 
Disetujui Oleh: 
 Project Sponsor 
 IT Manager 
 Academic Director 
Tanggal: 15 November 2023
