<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
    <h1>Create New Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Matrícula:</label>
        <input type="text" name="matricula" required><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
