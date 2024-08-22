<!DOCTYPE html>
<html>
<head>
    <title>List of Students</title>
</head>
<body>
    <h1>List of Students</h1>
    <a href="{{ route('students.create') }}">Create New Student</a>
    <ul>
        @foreach($students as $student)
            <li>
                <a href="{{ route('students.show', $student->id) }}">{{ $student->name }}</a>
                <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
