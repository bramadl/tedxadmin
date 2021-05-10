<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>TEDxUniversitasBrawijaya | Payment Invoice</title>

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="512x512" href="/favicon/android-chrome-512x512.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" href="/favicon/favicon.ico">
  <meta name="theme-color" content="#ffffff">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Open Sans', sans-serif;
      font-size: 1rem;
    }

    header {
      width: 100%;
      height: 160px;
      background: #101010;
      display: flex;
      align-items: flex-start;
      justify-content: center;
      padding-top: 15px;
      line-height: 0;
    }

    header img {
      height: 50px;
      object-fit: cover;
    }

    section {
      width: 50%;
      margin: auto;
      padding: 2rem;
      border-radius: .25rem;
      background: white;
      color: #101010;
      box-shadow: 0 0 8px 4px rgba(0, 0, 0, 0.16);
      transform: translateY(-80px);
      text-align: center;
    }

    section h2 {
      padding-bottom: 1rem;
      margin-bottom: 1rem;
      border-bottom: 1px solid rgba(16, 16, 16, 0.25);
    }

    section h3 {
      text-align: left;
      margin-top: 2rem;
      font-weight: 500;
    }

    section p {
      margin: 1rem 0;
      font-weight: 400;
      line-height: 1.25;
    }

    section a.link {
      background: #B82B2B;
      color: #FFFFFF;
      font-size: 1rem;
      font-weight: 600;
      text-decoration: none;
      padding: 1.5rem;
      margin: 2rem 0;
      border-radius: .25rem;
      display: inline-block;
      width: 100%;
      height: auto;
    }

    section a,
    section p.note {
      font-size: .8rem;
    }

    section div.detail {
      background: #f1f5f8;
      margin-top: 1rem;
      padding: 1rem;
      font-size: 1rem;
      font-weight: 600;
      border-radius: .25rem;
    }

    ul {
      text-align: left;
      list-style-position: inside;
      font-size: .85rem;
      margin-top: 1rem;
    }

    ul li {
      margin: .5rem 0;
    }

    ul li a {
      color: #B82B2B;
    }

    table {
      text-align: left;
    }

    table tr td {
      padding: .5rem 0;
    }

    table tr td:nth-child(2) {
      padding: 0 1rem;
    }

    footer {
      margin: -50px 0 25px;
      text-align: center;
      font-size: .8rem;
    }
  </style>
</head>

<body>
  <header>
    <img src="{{ env('TEDXBRAWIJAYA_URL') }}/img/tedx.png" alt="tedx">
  </header>

  <section>
    <h2>Untuk {{ $payment['user']['first_name'] }} {{ $payment['user']['last_name'] }},</h2>
    <div>
      <p>Halo, {{ $payment['user']['first_name'] }} {{ $payment['user']['last_name'] }} !</p>

      @if ($status === 'confirmed')
        <p>Selamat! Ticket dengan kode {{ $userTicket['code'] }} berhasil kami perbaharui!</p>
        <p>Sekarang kamu bisa menggunakan tiket kamu untuk kembali masuk ke livestream.</p>
        <p>Tapi sekarang kamu tidak bisa lagi melakukan permintaan token.</p>
        <p>Mohon gunakan tiket sesuai dengan syarat dan ketentuan yang berlaku.</p>
        <a class="link" href="{{ env('TEDXBRAWIJAYA_URL') }}/member/pembelian-ticket">
          Cek Status Pembelian Tiket
        </a>
        <small>Detail pembelian tiket dan status pembelian tiket dapat kamu lihat di <a href="{{ env('TEDXBRAWIJAYA_URL') }}/member/dashboard">member area</a></small>
        <p class="note">Jika kamu mengalami kendala, silahkan hubungi kami di personal chat pada dashboard!</p>
      @else
        <p>Mohon maaf, Ticket dengan kode {{ $userTicket['code'] }} tidak berhasil kami perbaharui.</p>
        <p>Kami telah melakukan proses pengecekan terhadap permintaan token yang kamu buat.</p>
        <p>Tapi mohon maaf kami tidak dapat menyetujui permintaan token yang kamu buat.</p>
        <p>Tetap semangat!</p>
        <a class="link" href="{{ env('TEDXBRAWIJAYA_URL') }}/member/pembelian-ticket">
          Cek Status Pembelian Tiket
        </a>
        <small>Detail pembelian tiket dan status pembelian tiket dapat kamu lihat di <a href="{{ env('TEDXBRAWIJAYA_URL') }}/member/dashboard">member area</a></small>
        <p class="note">Jika kamu mengalami kendala, silahkan hubungi kami di personal chat pada dashboard!</p>
      @endif
    </div>

    <h3>Detail Pembelian</h3>
    <div class="detail">
      <table>
        <tr>
          <td>Nama Depan</td>
          <td>:</td>
          <td>{{ $payment['user']['first_name'] }}</td>
        </tr>
        <tr>
          <td>Nama Belakang</td>
          <td>:</td>
          <td>{{ $payment['user']['last_name'] }}</td>
        </tr>
        <tr>
          <td>Email Pengguna</td>
          <td>:</td>
          <td>{{ $payment['user']['email_address'] }}</td>
        </tr>
        <tr>
          <td>Nomor Telepon</td>
          <td>:</td>
          <td>{{ $payment['user']['phone_number'] }}</td>
        </tr>
        <tr>
          <td>Alamat Pembelian</td>
          <td>:</td>
          <td>{{ $payment['user']['street_address'] }}</td>
        </tr>
        <tr>
          <td>User Role</td>
          <td>:</td>
          <td>{{ $payment['user']['role'] === 'user' ? 'Audience' : $payment['user']['role'] }}</td>
        </tr>
        <tr>
          <td>Tipe Tiket</td>
          <td>:</td>
          <td>{{ $payment['ticket']['type'] }}</td>
        </tr>
        <tr>
          <td>Harga Tiket</td>
          <td>:</td>
          <td>{{ $payment['ticket']['price'] }}</td>
        </tr>
        <tr>
          <td>Metode Pembayaran</td>
          <td>:</td>
          <td>{{ $payment['payment_method'] }}</td>
        </tr>
        <tr>
          <td>Status Pembelian</td>
          <td>:</td>
          <td>{{ $payment['payment_status'] }}</td>
        </tr>
      </table>
    </div>

    <h3>Langkah Berikutnya</h3>
    <ul>
      <li>Akses <a href="{{ env('TEDXBRAWIJAYA_URL') }}/member/dashboard">member area</a> kamu untuk mendapatkan informasi terkait kegiatan TEDxUniversitasBrawijaya2021</li>
      <li>Mohon tidak melanggar <a href="{{ env('TEDXBRAWIJAYA_URL') }}/pdf/ketentuan-ticket.pdf">Syarat dan Ketentuan</a> yang berlaku.</li>
      <li>Tiket digunakan ketika hari livestreaming dimulai dengan memberikan token dan kode tiket yang tertera pada tiket dibeli dan terverifikasi.</li>
      <li>Mohon ikuti panduan livestream terkait penggunaan token dan kode tiket <a href="{{ env('TEDXBRAWIJAYA_URL') }}/pdf/ketentuan-livestreaming.pdf">disini</a></li>
    </ul>
  </section>

  <footer>
    &copy; <span style="color: #B82B2B">TEDx</span>UniversitasBrawijaya2021. All rights reserved. <span style="color: #B82B2B;">&hearts;</span>
  </footer>
</body>

</html>