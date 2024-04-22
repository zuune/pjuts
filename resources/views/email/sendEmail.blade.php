<table style="width: 100%; font-family: Arial, sans-serif;">
    <tr>
        <td colspan="2" style="background-color: #e28d26; padding: 20px; text-align: center;">
            <h2 style="color: #fff; margin: 0;">Notifikasi Laporan</h2>
        </td>
    </tr>
    <tr class="border-y">
        <td colspan="2" style="padding: 20px;">
            <p><strong>From:</strong> {{ $data_email['name'] }}</p>
            <p><strong>Email:</strong> {{ $data_email['email'] }}</p>
            <p><strong>Feedback Type:</strong> {{ $data_email['feedback_type'] }}</p>
            <p><strong>Comments:</strong> {{ $data_email['comments'] }}</p>
            <p><strong>Titik:</strong> {{ $data_email['titik'] }}</p>
            <p><strong>Desa/Kelurahan:</strong> {{ $data_email['desa'] }}</p>
            <p><strong>Kecamatan:</strong> {{ $data_email['kecamatan'] }}</p>
            <p><strong>Kabupaten/Kota:</strong> {{ $data_email['kota'] }}</p>
            <p><strong>Provinsi:</strong> {{ $data_email['provinsi'] }}</p>
            <p><strong>Nomor HP:</strong> {{ $data_email['nomor_hp'] }}</p>
            <p><strong>NIK/Identitas KTP:</strong> {{ $data_email['nik'] }}</p>
            {{-- @if(isset($data_email['foto']))
                <p><strong>Foto:</strong></p>
                <img src="{{ $data_email['foto_url'] }}" alt="Foto" style="max-width: 100%; height: auto;">
            @endif --}}
        </td>
        
    </tr>
</table>