<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🎓 Student Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    /* 🌌 Professional Background (No Animation) */
    body {
      font-family: "Poppins", sans-serif;
      min-height: 100vh;
      background: radial-gradient(circle at top left, #1e3c72 0%, #2a5298 40%, #182848 100%);
      background-attachment: fixed;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      overflow-x: hidden;
      color: #fff;
      position: relative;
    }

    /* 💫 Soft Light Effect Overlay */
    body::before {
      content: '';
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: radial-gradient(circle at 30% 20%, rgba(255,255,255,0.1), transparent 50%),
                  radial-gradient(circle at 70% 80%, rgba(0,255,255,0.08), transparent 50%);
      pointer-events: none;
      z-index: 0;
    }

    /* 💎 Glass Card */
    .card-glass {
      position: relative;
      z-index: 1;
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(18px);
      border: 1px solid rgba(255, 255, 255, 0.15);
      border-radius: 22px;
      padding: 40px;
      width: 95%;
      max-width: 1150px;
      box-shadow: 0 10px 35px rgba(0,0,0,0.4);
      transition: 0.4s ease;
    }

    .card-glass:hover {
      transform: translateY(-3px);
      box-shadow: 0 14px 45px rgba(0,0,0,0.5);
    }

    h1 {
      text-align: center;
      font-weight: 600;
      margin-bottom: 30px;
      color: #fff;
      text-shadow: 0 0 15px rgba(255,255,255,0.3);
      letter-spacing: 1px;
    }

    .btn-add {
      background: linear-gradient(90deg, #00c6ff, #0072ff);
      border: none;
      border-radius: 50px;
      padding: 10px 22px;
      color: #fff;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 0 10px rgba(0, 114, 255, 0.4);
    }

    .btn-add:hover {
      background: linear-gradient(90deg, #0072ff, #00c6ff);
      transform: translateY(-2px);
      box-shadow: 0 0 18px rgba(0, 114, 255, 0.6);
    }

    table {
      overflow: hidden;
      border-radius: 15px;
    }

    thead {
      background: rgba(255, 255, 255, 0.18);
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    tbody tr {
      background: rgba(255, 255, 255, 0.08);
      transition: all 0.3s;
    }

    tbody tr:hover {
      background: rgba(255, 255, 255, 0.18);
      transform: scale(1.01);
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    }

    td, th {
      color: #fff;
      vertical-align: middle !important;
    }

    .btn-sm {
      border: none;
      border-radius: 6px;
      padding: 5px 12px;
      transition: 0.3s;
    }

    .btn-primary {
      background: #3498db;
    }

    .btn-primary:hover {
      background: #2980b9;
    }

    .btn-danger {
      background: #e74c3c;
    }

    .btn-danger:hover {
      background: #c0392b;
    }

    footer {
      text-align: center;
      margin-top: 20px;
      color: rgba(255, 255, 255, 0.8);
      font-size: 14px;
      letter-spacing: 0.5px;
      position: relative;
      z-index: 1;
    }

    footer a {
      color: #00c6ff;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style> -->
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    /* 🌈 Gradient Background */
    body {
      font-family: "Poppins", sans-serif;
      min-height: 100vh;
      background: linear-gradient(135deg, #1d2671, #c33764);
      background-attachment: fixed;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      overflow-x: hidden;
      color: #fff;
      position: relative;
    }

    /* ✨ Soft Overlay Glow */
    body::before {
      content: '';
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: radial-gradient(circle at 30% 20%, rgba(255,255,255,0.12), transparent 50%),
                  radial-gradient(circle at 70% 80%, rgba(255,255,255,0.1), transparent 50%);
      z-index: 0;
      pointer-events: none;
    }

    /* 💎 Glass Card */
    .card-glass {
      position: relative;
      z-index: 1;
      background: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.25);
      border-radius: 22px;
      padding: 40px;
      width: 95%;
      max-width: 1150px;
      box-shadow: 0 10px 40px rgba(0,0,0,0.45);
      transition: 0.4s ease;
    }

    .card-glass:hover {
      transform: translateY(-3px);
      box-shadow: 0 14px 55px rgba(0,0,0,0.6);
    }

    /* Title */
    h1 {
      text-align: center;
      font-weight: 700;
      margin-bottom: 30px;
      color: #fff;
      text-shadow: 0 0 20px rgba(255,255,255,0.3);
      letter-spacing: 1px;
    }

    /* Add button */
    .btn-add {
      background: linear-gradient(90deg, #00c6ff, #0072ff);
      border: none;
      border-radius: 50px;
      padding: 10px 22px;
      color: #fff;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 0 12px rgba(0, 198, 255, 0.4);
    }

    .btn-add:hover {
      background: linear-gradient(90deg, #0072ff, #00c6ff);
      transform: translateY(-2px);
      box-shadow: 0 0 25px rgba(0,198,255,0.7);
    }

    /* Table design */
    table {
      overflow: hidden;
      border-radius: 15px;
    }

    thead {
      background: rgba(255, 255, 255, 0.15);
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    tbody tr {
      background: rgba(255, 255, 255, 0.08);
      transition: all 0.3s;
    }

    tbody tr:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: scale(1.01);
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.15);
    }

    td, th {
      color: #fff;
      vertical-align: middle !important;
    }

    /* Action Buttons */
    .btn-sm {
      border: none;
      border-radius: 8px;
      padding: 6px 12px;
      transition: 0.3s;
    }

    .btn-primary {
      background: #3498db;
    }

    .btn-primary:hover {
      background: #2980b9;
    }

    .btn-danger {
      background: #e74c3c;
    }

    .btn-danger:hover {
      background: #c0392b;
    }

    /* Search box */
    .search-box {
      background: rgba(255,255,255,0.15);
      backdrop-filter: blur(10px);
      border-radius: 50px;
      border: 1px solid rgba(255,255,255,0.25);
    }

    .search-box input {
      background: transparent;
      border: none;
      color: #fff;
      outline: none;
    }

    .search-box input::placeholder {
      color: rgba(255,255,255,0.7);
    }

    footer {
      text-align: center;
      margin-top: 25px;
      color: rgba(255,255,255,0.8);
      font-size: 14px;
      letter-spacing: 0.5px;
      position: relative;
      z-index: 1;
    }

    footer a {
      color: #00c6ff;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="card-glass">
    <h1>🎓 Student Management</h1>

    <!-- <div class="d-flex justify-content-end mb-3">
      <a href="{{ route('students.create') }}" class="btn-add"><i class="fa-solid fa-plus"></i> Add New Student</a>
    </div> -->

    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
  <form action="{{ route('students.index') }}" method="GET" class="d-flex align-items-center bg-light rounded-pill px-3" style="width: 350px;">
    <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control border-0 bg-transparent text-dark" placeholder="🔍 Search student..." style="box-shadow:none;">
    <button class="btn btn-sm text-primary" style="background:none;"><i class="fa-solid fa-magnifying-glass"></i></button>
  </form>

  <a href="{{ route('students.create') }}" class="btn-add"><i class="fa-solid fa-plus"></i> Add New Student</a>
</div>


    <div class="table-responsive">
      <table class="table text-center align-middle mb-0">
        <thead>
          <tr>
            <th>#</th>
            <th><i class="fa-solid fa-user"></i> Name</th>
            <th><i class="fa-solid fa-envelope"></i> Email</th>
            <th><i class="fa-solid fa-phone"></i> Phone</th>
            <th><i class="fa-solid fa-school"></i> Class</th>
            <th><i class="fa-solid fa-gears"></i> Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($students as $student)
            <tr>
              <td>{{ $student->id }}</td>
              <td>{{ $student->name }}</td>
              <td>{{ $student->email }}</td>
              <td>{{ $student->phone }}</td>
              <td>{{ $student->class_name }}</td>
              <td>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen"></i></a>
                 <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline delete-form">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
            </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="6" class="text-center text-light">No students found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  <footer>
    © 2025 <a href="#">School Management System</a> | Designed with 💙
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll('.delete-form').forEach(form => {
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      Swal.fire({
        title: 'Are you sure?',
        text: "You won’t be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e74c3c',
        cancelButtonColor: '#3498db',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel',
        background: 'rgba(20, 30, 50, 0.95)',
        color: '#f8f9fa',
        customClass: { popup: 'swal2-glass' }
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: 'Deleting...',
            text: 'Please wait a moment',
            allowOutsideClick: false,
            didOpen: () => Swal.showLoading(),
            background: '#1c1f2b',
            color: '#f8f9fa'
          });
          setTimeout(() => form.submit(), 800);
        }
      });
    });
  });
});
</script>
</body>
</html>
