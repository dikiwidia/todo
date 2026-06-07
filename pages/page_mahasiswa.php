<div class="w-full">
    <h1 class="font-bold text-xl text-slate-800">mahasiswa</h1>
    <div class="flex flex-col my-2">
        <a href="index.php?page_name=create_mahasiswa"
            class="bg-green-500 text-white rounded inline-block w-fit px-2 py-1 font-medium text-sm">New
            mahasiswa</a>
        <table class="w-full mt-4 border-collapse">
            <thead class="bg-slate-100 border-b border-slate-200">
                <tr class="text-slate-600 text-sm uppercase">
                    <th class="text-left p-3">Nim</th>
                    <th class="text-left p-3">Name</th>
                    <th class="text-left p-3">jurusan</th>
                    <th class="text-left p-3">semester</th>
                    <th class="text-left p-3">email</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <?php
                $query = $db->query("SELECT * FROM mahasiswa");
                $no = 1;
                foreach ($query as $row): ?>
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="p-3 text-sm">
                            <?php echo $no++; ?>
                        </td>
                        <td class="p-3 text-sm">
                            <?php echo $row['Nim']; ?>
                        </td>
                        <td class="p-3 text-sm">
                            <?php echo $row['Name']; ?>
                        </td>
                        <td class="p-3 text-sm">
                            <?php echo $row['Jurusan']; ?>
                        </td>
                        <td class="p-3 text-sm">
                            <?php echo $row['Semester']; ?>
                        </td>
                        <td class="p-3 text-sm">
                            <?php echo $row['Email']; ?>
                        </td>
                        <td class="p-3 text-sm">
                            <a href="index.php?page_name=edit_todo&id=<?php echo $row['id']; ?>"
                                class="bg-sky-500 text-white rounded inline-block w-fit px-2 py-1 font-medium text-sm">Edit</a>
                            <a href="controllers/todo_controller.php?method=delete&id=<?php echo $row['id']; ?>"
                                class="bg-red-500 text-white rounded inline-block w-fit px-2 py-1 font-medium text-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>