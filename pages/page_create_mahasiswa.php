<div class="w-full">
    <h1 class="font-bold text-xl text-slate-800">Mahasiswa</h1>
    <form action="controllers/todo_controller.php?method=create" method="POST" class="flex flex-wrap mt-5">
        <div class="flex gap-2 p-1 flex-col w-1/2">
            <label class="font-medium text-sm" for="email">input your name</label>
            <input type="text" name="name" id="name"
                class="border border-slate-200 bg-slate-50 rounded py-1.5 px-2 outline-none"
                placeholder="Input your name" />
        </div>
        <div class="flex gap-2 p-1 flex-col w-1/2">
            <label class="font-medium text-sm" for="status">nim</label>
            <select name="status" id="status"
                class="border border-slate-200 bg-slate-50 rounded py-2 px-2 outline-none">
                <option value="DONE">Done</option>
                <option value="HOLD">Hold</option>
            </select>
        </div>
        <div class="flex gap-2 p-1 flex-col w-full">
            <label class="font-medium text-sm" for="activity"></label>
            <textarea name="activity" id="activity" rows="3"
                class="border border-slate-200 bg-slate-50 rounded py-1.5 px-2 outline-none resize-none"></textarea>
        </div>
        <div class="flex gap-2 p-1 flex-col w-full">
            <input type="submit" value="Save Record"
                class="bg-green-600 text-slate-50 rounded px-4 py-1.5 w-fit cursor-pointer hover:bg-green-700 mt-5 text-sm font-medium">
        </div>
    </form>
</div>