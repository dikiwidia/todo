<?php

$id = $_GET['id'] ?? '';
$query = $db->prepare("SELECT * FROM users WHERE id = ?");
$query->execute([$id]);

$row = $query->fetch();
?>
<div class="w-full">
    <h1 class="font-bold text-xl text-slate-800">Edit User</h1>
    <form action="controllers/user_controller.php?method=update" method="POST" class="flex flex-wrap mt-5">
        <input type="hidden" name="record_id" value="<?php echo $id ?>">
        <div class="flex gap-2 p-1 flex-col w-1/2">
            <label class="font-medium text-sm" for="email">Your email</label>
            <input type="email" name="abcdef" id="name"
                class="border border-slate-200 bg-slate-50 rounded py-1.5 px-2 outline-none"
                placeholder="Input your email" value="<?php echo $row['email'] ?>" />
        </div>
        <div class="flex gap-2 p-1 flex-col w-1/2">
            <label class="font-medium text-sm" for="password">password</label>
            <input type="password" name="password" id="name"
                class="border border-slate-200 bg-slate-50 rounded py-1.5 px-2 outline-none"
                placeholder="Input your password" />
        </div>
        <div class=" flex gap-2 p-1 flex-col w-1/2">
            <label class="font-medium text-sm" for="name">My Name</label>
            <input type="text" name="name" id="name"
                class="border border-slate-200 bg-slate-50 rounded py-1.5 px-2 outline-none"
                placeholder="Input your Name" value="<?php echo $row['name'] ?>" />
        </div>


</div>
<div class="flex gap-2 p-1 flex-col w-full">
    <input type="submit" value="Update Record"
        class="bg-sky-600 text-slate-50 rounded px-4 py-1.5 w-fit cursor-pointer hover:bg-sky-700 mt-5 text-sm font-medium">
</div>
</form>
</div>