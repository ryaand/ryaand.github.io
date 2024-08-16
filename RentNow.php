
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOSURA - Joki Ikhlas Sukaria</title>
    <link rel="icon" href="image.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body style="background-color: rgb(255, 255, 255);">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <nav class="navbar navbar-expand-md fixed-top py-2" style="background-color: #ffffff;">
        <div class="container-fluid" style="font-family: inter;">
          <a class="navbar-brand d-flex align-items-center" href="index.html" >
            <img src="icon.png" alt="JOSURA" style="margin-left: 20px; margin-right: 20px; height: 50px;">
              <div>
                <div class="titel-gede">JOSURA</div>
                <div class="titel-kecil">Joki Ikhlas Sukaria</div>
              </div>
          </a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto" style="margin-right: 10px;">
              <li class="d-flex justify-content-start align-items-center gap-3 ">
                <a class="nav-RentNow text-white text-decoration-none px-3 py-1 rounded-4" style="background-color: black; margin-top: 9px; margin-bottom: 9px;" href="RentNow.html">Rent Now</a>
              </li>
              <li class="nav-HowTo d-flex justify-content-start align-items-center ">
                <a class="text-black text-decoration-none" style="margin-right: 20px; margin-left: 20px; background-color: transparent; margin-top: 8px; margin-bottom: 8px " href="HowTo.html">How to</a>
              </li>
              <li class="nav-About d-flex justify-content-start align-items-center ">
                <a class="text-black text-decoration-none" style="margin-right: 20px; margin-left: 20px; background-color: transparent; margin-top: 8px; margin-bottom: 8px " href="About.html">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="backdrop">
      <div class="w-full max-w-lg p-8 bg-white shadow-lg rounded-lg">
        <h2 class="text-3xl font-bold mb-6 text-gray-800">Formulir Pendaftaran</h2>
        <form action="./php/kirim.php" method="POST">
            <div class="mb-5">
                <label for="nama" class="block text-gray-700 text-lg font-medium mb-2">Nama:</label>
                <input type="text" name="nama" placeholder="Samaran" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300 ease-in-out">
            </div>
            
            <div class="mb-5">
                <label for="mapel" class="block text-gray-700 text-lg font-medium mb-2">Mata Pelajaran:</label>
                <select name="mapel" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300 ease-in-out">
                    <option value="">Pilih Mata Pelajaran</option>
                    <option value="mat">Matematika</option>
                    <option value="ipa">IPA</option>
                    <option value="ips">IPS</option>
                    <option value="bindo">B. Indonesia</option>
                </select>
            </div>
            
            <div class="mb-5">
                <label for="kelas" class="block text-gray-700 text-lg font-medium mb-2">Kelas:</label>
                <input type="text" name="kelas" placeholder="Contoh: 10 A" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300 ease-in-out">
            </div>
            
            <div class="mb-5">
                <label for="notes" class="block text-gray-700 text-lg font-medium mb-2">Catatan:</label>
                <textarea id="notes" name="note" rows="4" placeholder="Catatan tambahan (opsional)" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300 ease-in-out"></textarea>
            </div>
            
            <button type="submit" class="w-full px-4 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-lg hover:bg-indigo-700 transition duration-300 ease-in-out">Kirim</button>
        </form>
    </div>
    </section>  
  </body>
</html>
