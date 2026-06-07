<div class="w-full">
    <!-- Judul diubah menjadi Mahasiswa -->
    <h1 class="font-bold text-xl text-slate-800">Create New Mahasiswa</h1>

    <!-- Action form diubah ke mahasiswa_controller.php -->
    <form action="controllers/mahasiswa_controller.php?method=create" method="POST" class="flex flex-wrap mt-5 gap-y-4">

        <!-- Input NIM -->
        <div class="flex gap-2 p-1 flex-col w-full md:w-1/2">
            <label class="font-medium text-sm text-slate-700" for="nim">Your NIM</label>
            <input type="text" name="nim" id="nim"
                class="border border-slate-200 bg-slate-50 rounded py-1.5 px-2 outline-none focus:border-blue-500 focus:bg-white transition-all"
                placeholder="Input your NIM" required />
        </div>

        <!-- Input Nama -->
        <div class="flex gap-2 p-1 flex-col w-full md:w-1/2">
            <label class="font-medium text-sm text-slate-700" for="nama">Your Name</label>
            <input type="text" name="nama" id="nama"
                class="border border-slate-200 bg-slate-50 rounded py-1.5 px-2 outline-none focus:border-blue-500 focus:bg-white transition-all"
                placeholder="Input your name" required />
        </div>

        <!-- Input Email -->
        <div class="flex gap-2 p-1 flex-col w-full md:w-1/2">
            <label class="font-medium text-sm text-slate-700" for="email">Your Email</label>
            <input type="email" name="email" id="email"
                class="border border-slate-200 bg-slate-50 rounded py-1.5 px-2 outline-none focus:border-blue-500 focus:bg-white transition-all"
                placeholder="example@student.com" required />
        </div>

        <!-- Dropdown Semester -->
        <div class="flex gap-2 p-1 flex-col w-full md:w-1/2">
            <label class="font-medium text-sm text-slate-700" for="semester">Semester</label>
            <div class="relative w-full">
                <select name="semester" id="semester"
                    class="w-full border border-slate-200 bg-slate-50 rounded py-2 px-2 outline-none focus:border-blue-500 focus:bg-white transition-all cursor-pointer text-slate-700 appearance-none"
                    required>
                    <option value="" disabled selected hidden>-- Select semester --</option>
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="3">Semester 3</option>
                    <option value="4">Semester 4</option>
                    <option value="5">Semester 5</option>
                    <option value="6">Semester 6</option>
                    <option value="7">Semester 7</option>
                    <option value="8">Semester 8</option>
                    <option value="9+">Semester 9++</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-500">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Dropdown Pilihan Jurusan -->
        <div class="flex gap-2 p-1 flex-col w-full">
            <label class="font-medium text-sm text-slate-700" for="jurusan">Your Major / Jurusan</label>
            <div class="relative w-full">
                <select name="jurusan" id="jurusan"
                    class="w-full border border-slate-200 bg-slate-50 rounded py-2 px-2 outline-none focus:border-blue-500 focus:bg-white transition-all cursor-pointer text-slate-700 appearance-none"
                    required>
                    <option value="" disabled selected hidden>-- Select your major --</option>

                    <optgroup label="Teknologi & Komputer">
                        <option value="IF">Teknik Informatika</option>
                        <option value="SI">Sistem Informasi</option>
                        <option value="TI">Teknologi Informasi</option>
                        <option value="SK">Sistem Komputer / Teknik Komputer</option>
                    </optgroup>

                    <optgroup label="Ekonomi, Bisnis & Manajemen">
                        <option value="MJ">Manajemen</option>
                        <option value="AK">Akuntansi</option>
                        <option value="BD">Bisnis Digital</option>
                        <option value="AB">Administrasi Bisnis</option>
                    </optgroup>

                    <optgroup label="Lainnya">
                        <option value="IK">Ilmu Komunikasi</option>
                        <option value="HI">Hubungan Internasional</option>
                        <option value="HK">Ilmu Hukum</option>
                    </optgroup>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-500">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Tombol Submit diubah menjadi Submit Mahasiswa -->
        <div class="w-full p-1 mt-2">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm py-2 px-4 rounded transition-colors w-full md:w-auto">
                Submit Mahasiswa
            </button>
        </div>

    </form>
</div>