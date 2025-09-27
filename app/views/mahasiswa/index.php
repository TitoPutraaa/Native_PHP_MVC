<div class="container mt-3">
<table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['mhs'] as $mhs) { ?>
                <tr>
                    <td><?= $mhs['Nama']; ?></td>
                    <td><?= $mhs['NIM']; ?></td>
                    <td><?= $mhs['Nama']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>