<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Student | Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #1d2671, #c33764);
      background-attachment: fixed;
      font-family: 'Poppins', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .form-box {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(15px);
      border-radius: 18px;
      box-shadow: 0 10px 35px rgba(0, 0, 0, 0.3);
      padding: 40px 45px;
      width: 95%;
      max-width: 580px;
      color: #fff;
      position: relative;
      overflow: hidden;
      z-index: 1;
    }

    .form-box::before {
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
    }

    label {
      font-weight: 500;
      color: rgba(255,255,255,0.9);
      margin-bottom: 6px;
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

.btn-update {
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

.btn-update:hover {
  transform: translateY(-2px);
  box-shadow: 0 0 25px rgba(0,198,255,0.8);
}

.btn-back {
  background: rgba(255,255,255,0.25);
  border: none;
  border-radius: 10px;
  padding: 12px 16px;
  color: #fff;
  width: 100%;
  margin-top: 25px; 
  transition: 0.3s;
}

.btn-back:hover {
  background: rgba(255,255,255,0.35);
  transform: translateY(-2px);
}
 .btn-custom {
        background: linear-gradient(90deg, #00c6ff, #0072ff);
        color: white;
        font-weight: bold;
        border: none;
        padding: 12px 20px;
        border-radius: 12px;
        width: 100%;
        transition: 0.3s;
        display: block;
    }

    .btn-custom:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }

    .btn-secondary {
        margin-top: 15px;
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 10px;
        text-decoration: none;
        transition: 0.3s;
    }

    .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.35);
        color: white;
    }

    .button-group {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
    }

    footer {
      text-align: center;
      margin-top: 20px;
      color: rgba(255,255,255,0.7);
      font-size: 0.85rem;
    }
  </style>
</head>
<body>
  <div class="form-box">
    <h2>✏️ Edit Student</h2>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label>Student Name</label>
        <input type="text" name="name" value="{{ $student->name }}" class="form-control" placeholder="Enter student name" required>
      </div>

      <div class="mb-3">
        <label>Student Email</label>
        <input type="email" name="email" value="{{ $student->email }}" class="form-control" placeholder="Enter student email" required>
      </div>

      <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" value="{{ $student->phone }}" class="form-control" placeholder="Enter phone number" required>
      </div>

      <div class="mb-3">
        <label>Class</label>
        <select name="class_id" class="form-control" required>
          @foreach ($classes as $class)
            <option value="{{ $class->id }}" {{ $student->class_id == $class->id ? 'selected' : '' }}>
              {{ $class->class_name }}
            </option>
          @endforeach
        </select>
      </div>
<div class="button-group">
    <button type="submit" class="btn btn-custom">
        💾 Update Student
    </button>
    <a href="{{ route('students.index') }}" class="btn-secondary">⬅ Back to List</a>
</div>

      <!-- <button type="submit" class="btn-update">💾 Update Student</button>
      <a href="{{ route('students.index') }}" class="btn-back">⬅ Back to List</a> -->
    </form>
  </div>
</body>
</html>
