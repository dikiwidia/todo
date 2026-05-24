<?php

$id = $_GET['id'] ?? '';
$query = $db->prepare("SELECT * FROM list_todo WHERE id = ?");
$query->execute([$id]);

$row = $query->fetch();

?>
<div class="w-full">
    <h1 class="font-bold text-xl text-slate-800">Edit Todo</h1>
    <form action="controllers/todo_controller.php?method=update" method="POST" class="flex flex-wrap mt-5">
        <input type="hidden" name="record_id" value="<?php echo $id ?>">
        <div class="flex gap-2 p-1 flex-col w-1/2">
            <label class="font-medium text-sm" for="email">Your Name</label>
            <input type="text" name="name" id="name"
                class="border border-slate-200 bg-slate-50 rounded py-1.5 px-2 outline-none"
                placeholder="Input your name" value="<?php echo $row['name'] ?>" />
        </div>
        <div class="flex gap-2 p-1 flex-col w-1/2">
            <label class="font-medium text-sm" for="status">Status</label>
            <select name="status" id="status"
                class="border border-slate-200 bg-slate-50 rounded py-2 px-2 outline-none">
                <option value="DONE" <?php echo $row['status'] == 'DONE' ? 'selected' : '' ?>>Done</option>
                <option value="HOLD" <?php echo $row['status'] == 'HOLD' ? 'selected' : '' ?>>Hold</option>
            </select>
        </div>
        <div class="flex gap-2 p-1 flex-col w-full">
            <label class="font-medium text-sm" for="activity">Activity</label>
            <textarea name="activity" id="activity" rows="3"
                class="border border-slate-200 bg-slate-50 rounded py-1.5 px-2 outline-none resize-none"><?php echo $row['activity'] ?></textarea>
        </div>
        <div class="flex gap-2 p-1 flex-col w-full">
            <input type="submit" value="Update Record"
                class="bg-sky-600 text-slate-50 rounded px-4 py-1.5 w-fit cursor-pointer hover:bg-sky-700 mt-5 text-sm font-medium">
        </div>
    </form>
</div>