<div class="w-full">
    <h1 class="font-bold text-xl text-slate-800">Todo</h1>
    <div class="flex flex-col my-2">
        <a href="index.php?page_name=create_todo"
            class="bg-green-500 text-white rounded inline-block w-fit px-2 py-1 font-medium text-sm">New
            Todo</a>
        <table class="w-full mt-4 border-collapse">
            <thead class="bg-slate-100 border-b border-slate-200">
                <tr class="text-slate-600 text-sm uppercase">
                    <th class="text-left p-3">No</th>
                    <th class="text-left p-3">Name</th>
                    <th class="text-left p-3">Activity</th>
                    <th class="text-left p-3">Status</th>
                    <th class="text-left p-3">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <?php
                $query = $db->query("SELECT * FROM list_todo");
                $no = 1;
                foreach ($query as $row): ?>
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="p-3 text-sm">
                            <?php echo $no++; ?>
                        </td>
                        <td class="p-3 text-sm">
                            <?php echo $row['name']; ?>
                        </td>
                        <td class="p-3 text-sm">
                            <?php echo $row['activity']; ?>
                        </td>
                        <td class="p-3 text-sm">
                            <?php echo $row['status']; ?>
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