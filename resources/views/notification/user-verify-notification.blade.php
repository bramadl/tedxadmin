<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>TEDxUniversitasBrawijaya 2021 | Verify Email</title>

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
    <img src="{{ asset('/img/tedx.png') }}" alt="tedx">
  </header>

  <section>
    <h2>Selamat datang di TEDxUniversitasBrawijaya 2021</h2>
    <div>
      <p>Halo, {{ $partner['name'] }} !</p>
      <p>Terimakasih sudah mendaftar menjadi bagian dari Manifestasi Peradaban pada kegiatan TEDxUniversitasBrawaijaya 2021 ini.</p>
      <p>Kami telah membuatkan anda akun untuk masuk ke <a href="{{ env('TEDXBRAWIJAYA_URL') }}/member/dashboard">member area</a>.</p>
      <a class="link" href="{{ env('TEDXBRAWIJAYA_URL') }}/member/login">
        Sign In Ke Akun
      </a>
      <small>Mohon tuliskan <strong>{{ $password }}</strong> sebagai password anda.</small>
      <small>Segera ubah kata sandi anda di <a href="{{ env('TEDXBRAWIJAYA_URL') }}/member/dashboard">member area</a></small>
      <p class="note">Jika kamu mengalami kendala, silahkan hubungi kami di personal chat pada dashboard!</p>
    </div>

    <h3>Detail Akun</h3>
    <div class="detail">
      <table>
        <tr>
          <td>Nama Pengguna</td>
          <td>:</td>
          <td>{{ $partner['name'] }}</td>
        </tr>
        <tr>
          <td>Email Pengguna</td>
          <td>:</td>
          <td>{{ $partner['email'] }}</td>
        </tr>
        <tr>
          <td>Password Pengguna</td>
          <td>:</td>
          <td>{{ $partner['password'] }}</td>
        </tr>
        <tr>
          <td>User Role</td>
          <td>:</td>
          <td>{{ $partner['role'] === 'user' ? 'Audience' : $partner['role'] }}</td>
        </tr>
      </table>
    </div>

    <h3>Langkah Berikutnya</h3>
    <ul>
      <li>Akses <a href="{{ url('member/dashboard') }}">member area</a> kamu untuk mendapatkan informasi terkait kegiatan TEDxUniversitasBrawijaya2021</li>
      <li><a href="{{ url('member/profile') }}">Kelola akun</a> kamu dan perbaharui detail alamat, nomor telepon (opsional), serta password.</li>
      <li>Akun anda tidak perlu verifikasi serta pembelian tiket untuk memasuki livestream TEDxUniversitasBrawaijaya 2021.</li>
    </ul>
  </section>

  <footer>
    &copy; <span style="color: #B82B2B">TEDx</span>UniversitasBrawijaya2021. All rights reserved. <span style="color: #B82B2B;">&hearts;</span>
  </footer>
</body>

</html>