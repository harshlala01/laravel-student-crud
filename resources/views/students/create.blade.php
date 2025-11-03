<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Student | School Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
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

</body>
</html>
