# camerahack
Ambil bidikan webcam dari target hanya dengan mengirimkan tautan berbahaya

! [keju] (https://d.top4top.io/p_1695ym7l40.png)

# Bagaimana itu bekerja?
<p> Alat ini menghasilkan laman HTTPS berbahaya menggunakan metode Serveo atau Ngrok Port Forwarding, dan kode javascript untuk permintaan cam menggunakan MediaDevices.getUserMedia. </p>

<p> Metode MediaDevices.getUserMedia () meminta izin kepada pengguna untuk menggunakan masukan media yang menghasilkan MediaStream dengan trek berisi jenis media yang diminta. Aliran tersebut dapat mencakup, misalnya, trek video (diproduksi oleh perangkat keras atau sumber video virtual seperti kamera, perangkat perekam video, layanan berbagi layar, dan sebagainya), trek audio (serupa, diproduksi oleh fisik atau sumber audio virtual seperti mikrofon, konverter A / D, atau sejenisnya), dan mungkin jenis trek lainnya. </p>

[Lihat lebih lanjut tentang MediaDEvices.getUserMedia () di sini] (https://developer.mozilla.org/en-US/docs/Web/API/MediaDevices/getUserMedia)
<p> Untuk meyakinkan target agar memberikan izin untuk mengakses kamera, halaman tersebut menggunakan kode javascript yang dibuat oleh https://github.com/wybiral yang mengubah favicon menjadi aliran kamera. </p>

## Menginstal (Kali Linux / Termux):

``
git clone https://github.com/samgans04/camerahack
cd camerahack
pesta saycheese.sh
``
