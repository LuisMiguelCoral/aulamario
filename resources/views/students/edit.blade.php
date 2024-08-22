<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $student->email }}" required><br>
        <label>Matrícula:</label>
        <input type="text" name="matricula" value="{{ $student->matricula }}" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
