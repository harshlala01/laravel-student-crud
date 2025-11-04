<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Student | School Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #1e3c72, #2a5298, #38ef7d);
      background-attachment: fixed;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      color: #fff;
    }

    .card {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.25);
      backdrop-filter: blur(15px);
      border-radius: 20px;
      padding: 40px 35px;
      width: 430px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.35);
    }

    h2 {
      text-align: center;
      font-weight: 600;
      margin-bottom: 25px;
      color: #fff;
      letter-spacing: 1px;
    }

    label {
      font-weight: 500;
      margin-bottom: 5px;
      color: #f0f0f0;
    }

    .form-control {
      border: none;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      padding: 10px 12px;
      transition: 0.3s;
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.3);
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
      color: #fff;
      transform: scale(1.02);
    }

    ::placeholder {
      color: #f1f1f1;
      opacity: 0.8;
    }

    select.form-control option {
      color: #333;
    }

    .btn-primary {
      background: linear-gradient(90deg, #00b894, #0984e3);
      border: none;
      border-radius: 10px;
      padding: 10px;
      width: 100%;
      font-weight: 500;
      color: #fff;
      transition: 0.3s;
      margin-top: 8px;
    }

    .btn-primary:hover {
      background: linear-gradient(90deg, #0984e3, #00b894);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0, 206, 201, 0.4);
    }

    .btn-secondary {
      width: 100%;
      border: none;
      margin-top: 10px;
      border-radius: 10px;
      padding: 10px;
      background: rgba(255,255,255,0.2);
      color: #fff;
      transition: 0.3s;
      text-align: center;
      text-decoration: none;
      display: inline-block;
    }

    .btn-secondary:hover {
      background: rgba(255,255,255,0.35);
      transform: translateY(-2px);
    }

    footer {
      position: absolute;
      bottom: 15px;
      font-size: 13px;
      color: rgba(255,255,255,0.6);
      text-align: center;
      width: 100%;
    }
  </style> -->
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #1d2671, #c33764);
      background-attachment: fixed;
      font-family: 'Poppins', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
    }

    .card {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(15px);
      border-radius: 18px;
      box-shadow: 0 10px 35px rgba(0, 0, 0, 0.3);
      padding: 40px 45px;
      width: 95%;
      max-width: 480px;
      color: #fff;
      position: relative;
      overflow: hidden;
    }

    .card::before {
      content: '';
      position: absolute;
      top: -60%;
      left: -60%;
      width: 220%;
      height: 220%;
      background: radial-gradient(circle at center, rgba(255,255,255,0.12), transparent 70%);
      transform: rotate(30deg);
      z-index: 0;
      pointer-events: none;
    }

    h2 {
      text-align: center;
      font-weight: 700;
      margin-bottom: 25px;
      text-shadow: 0 0 10px rgba(255,255,255,0.2);
      position: relative;
      z-index: 1;
    }

    label {
      font-weight: 500;
      color: rgba(255,255,255,0.9);
      margin-bottom: 6px;
      position: relative;
      z-index: 1;
    }

    .form-control {
      background: rgba(255, 255, 255, 0.15);
      border: 1px solid rgba(255,255,255,0.25);
      color: #fff;
      border-radius: 12px;
      padding: 10px 14px;
      transition: all 0.3s ease;
    }

    .form-control::placeholder {
      color: rgba(255,255,255,0.6);
    }

    .form-control:focus {
      border-color: #00c6ff;
      box-shadow: 0 0 10px rgba(0,198,255,0.5);
      background: rgba(255, 255, 255, 0.25);
    }

    select.form-control option {
      color: #000;
    }

    .btn-primary {
      background: linear-gradient(90deg, #00c6ff, #0072ff);
      border: none;
      border-radius: 10px;
      padding: 12px 16px;
      font-weight: 600;
      color: white;
      width: 100%;
      margin-top: 15px;
      transition: 0.3s;
      box-shadow: 0 0 15px rgba(0,198,255,0.4);
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 0 25px rgba(0,198,255,0.8);
    }

    .btn-secondary {
      background: rgba(255,255,255,0.25);
      border: none;
      border-radius: 10px;
      padding: 12px 16px;
      color: #fff;
      width: 100%;
      margin-top: 20px;
      transition: 0.3s;
      text-align: center;
      text-decoration: none;
      display: block;
    }

    .btn-secondary:hover {
      background: rgba(255,255,255,0.35);
      transform: translateY(-2px);
    }

    footer {
      position: absolute;
      bottom: 15px;
      font-size: 13px;
      color: rgba(255,255,255,0.6);
      text-align: center;
      width: 100%;
    }
  </style>
</head>
<body>

  <div class="card">
    <h2>➕ Add Student</h2>

    <form action="{{ route('students.store') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter student name" required>
      </div>

      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter student email" required>
      </div>

      <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" placeholder="Enter phone number" required>
      </div>

      <div class="mb-3">
        <label>Class</label>
        <select name="class_id" class="form-control" required>
          <option value="">-- Select Class --</option>
          @foreach ($classes as $class)
            <option value="{{ $class->id }}">{{ $class->class_name }}</option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="btn-primary">💾 Save Student</button>
      <a href="{{ route('students.index') }}" class="btn-secondary">⬅ Back to List</a>
    </form>
  </div>

  <footer>© {{ date('Y') }} School Management System</footer>
<!-- SweetAlert CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  form.addEventListener("submit", function (e) {
    e.preventDefault(); // stop default form submit

    Swal.fire({
      title: 'Confirm Save?',
      text: 'Do you want to save this student information?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#00c6ff',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Save it!',
      cancelButtonText: 'Cancel',
      background: 'rgba(20, 30, 50, 0.95)',
      color: '#f8f9fa',
      customClass: { popup: 'swal2-glass' },
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: 'Saving...',
          text: 'Please wait a moment',
          allowOutsideClick: false,
          background: '#1c1f2b',
          color: '#f8f9fa',
          didOpen: () => Swal.showLoading(),
        });

        // Wait a moment, then submit the form
        setTimeout(() => {
          form.submit();
        }, 1000);
      }
    });
  });
});
</script>

</body>
</html>
