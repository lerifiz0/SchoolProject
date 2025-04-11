<?php
// Student information: [student_id, student_name, birth_date, gender]
$students = [
    [1001, '张三', '2000-05-03', '男'],
    [1002, '李四', '2002-07-15', '女']
];

// Teacher information: [teacher_id, teacher_name]
$teachers = [
    [1001, '张老师'],
    [1002, '王老师']
];

// Course assignments
foreach ($students as $student) {
    echo "Student ID: {$student[0]}, Student Name: {$student[1]}, Birth Date: {$student[2]}, Gender: {$student[3]}\n";
}

echo "Teacher Information:\n";
foreach ($teachers as $teacher) {
    echo "Teacher ID: {$teacher[0]}, Teacher Name: {$teacher[1]}\n";
}
?>
