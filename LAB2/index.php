<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Vu Tuan Tu" />
    <link href="/LAB2/site.css" rel="stylesheet" />
    <title>OOP PHP</title>
</head>

<body>
    <div id="wrapper">
        <?php // IDEA:
        require_once("userclass.php");
        $tuantu = new User('Tuan Tu', 'abc123@gmail.com');
        echo "<h2> --- User info --</h2>";
        echo "UserID: " . $tuantu->GetUserID() . "<br/>";
        echo "UserName: " . $tuantu->GetUserName() . "<br/>";

        $tuantumore = new User("Vu Tuan Tu", "abc456@gmail.com");
        echo "<h2> --- More user --</h2>";
        echo "UserID: " . $tuantumore->GetUserID() . "<br/>";
        echo "UserName: " . $tuantumore->GetUserName() . "<br/>";

        include("employeeclass.php");
        $person_a = new Person("Nguyen Van B", 1234);
        echo "<h2> --- More OPP PHP --</h2>";
        echo "Person Name: " . $person_a->GetName() . "<br/>";
        echo "PersonID: " . $person_a->GetNationalID() . "<br/>";

        echo "<h2>Employee</h2>";
        $employee_a = new Employee("Nguyen Van C", 5678, "Security");
        echo "Employee ID:: " . $employee_a->GetEmployeeID() . "<br/>";
        echo "Employee Name: " . $employee_a->GetName() . "<br/>";
        echo "Employee Department: " . $employee_a->GetDepartment() . "<br/>";
        echo "<h2>More Employee</h2>";

        $employee_b = new Employee("Nguyen Van D", 112345, "Offical");
        echo "Employee ID:: " . $employee_b->GetEmployeeID() . "<br/>";
        echo "Employee Name: " . $employee_b->GetName() . "<br/>";
        echo "Employee Department: " . $employee_b->GetDepartment() . "<br/>";
        echo "<h2>More Employee</h2>";
        ?>
    </div>
    <footer>
        &#169; 2024 - Tuan Tu - HUTECH
    </footer>
</body>

</html>