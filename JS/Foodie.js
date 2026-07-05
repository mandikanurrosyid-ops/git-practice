
const menuItems = [
  {
    id: 1,
    name: 'Ayam Geprek',
    desc: 'Ayam crispy dengan sambal pedas & nasi hangat.',
    price: 'Rp 18.000',
    img: 'Foto/AyamGeprek.jpg'
  },
  {
    id: 2,
    name: 'Mie Ayam',
    desc: 'Mie ayam spesial dengan bumbu pilihan.',
    price: 'Rp 15.000',
    img: 'Foto/MieAyam.jpg'
  },
  {
     id: 3,
    name: 'Spaghetti Bolognese',
    desc: 'Spaghetti dengan saus bolognese lezat.',
    price: 'Rp 20.000',
    img: 'Foto/Spageti.jpg'
  },
  {
     id: 4,
    name: 'Sate Ayam',
    desc: 'Sate ayam dengan bumbu kacang.',
    price: 'Rp 15.000',
    img: 'Foto/SateAyam.jpg'
  },
   {
     id: 5,
    name: 'PIZZA',
    desc: 'hidangan gurih khas Italia berupa roti pipih berbentuk bundar yang dipanggang di dalam oven.',
    price: 'Rp 30.000',
    img: 'Foto/Pizza.jpg'
  }
];



// ── RENDER MENU ──
const grid = document.getElementById('menuGrid');

if (grid) {

  menuItems.forEach(item => {

    const col = document.createElement('div');
    col.className = 'col-6 col-md-3 fade-up';

    let tombolPesan = '';

    // kalau sudah login
    if (sudahLogin) {

      tombolPesan = `
      <a
      href="detail.php?id=${item.id}"
      class="btn-tambah mt-auto text-center">

      Detail

      </a>
      `;

    } else {

      // kalau belum login
      tombolPesan = `
        <button 
          class="btn-tambah mt-auto"
          data-bs-toggle="modal"
          data-bs-target="#loginModal">

          detail

        </button>
      `;

    }

    col.innerHTML = `
      <div class="card-menu h-100">

        <img src="${item.img}" alt="${item.name}" loading="lazy" />

        <div class="card-body d-flex flex-column">

          <div class="food-name">${item.name}</div>

          <div class="food-desc">${item.desc}</div>

          <div class="food-price">${item.price}</div>

          ${tombolPesan}

        </div>

      </div>
    `;

    grid.appendChild(col);

  });

}

// ── BUTTON PESAN SEKARANG ──
const btnPesan = document.getElementById("btnPesan");

if (btnPesan) {

  btnPesan.addEventListener("click", function () {

    // kalau sudah login
    if (sudahLogin) {

      window.location.href = "Menu.html";

    } else {

      // tampilkan modal login
      const loginModal = new bootstrap.Modal(
        document.getElementById("loginModal")
      );

      loginModal.show();

    }

  });

}

// ── SCROLL ANIMATION ──
const observer = new IntersectionObserver(entries => {

  entries.forEach(e => {

    if (e.isIntersecting) {
      e.target.classList.add('visible');
    }

  });

}, { threshold: 0.12 });

document.querySelectorAll('.fade-up').forEach(el => {
  observer.observe(el);
});