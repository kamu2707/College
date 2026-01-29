<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form style= "text-align: center; justify-content: center; border: 2; background-color: aliceblue;" 
    action="" method="post"> 
        <h3>Student Marksheet form</h3>
        <label for="EnrollNo"></label>EnrollMentNo:
        <input type="number" name="E_Number" placeholder="ex:25040701294">
        <br>
        <br>
        <label for="StudentName: "></label>StudentName:     
        <input type="text" name="S_Name" placeholder="ex: riddhi">
        <br>
        <br>
        <label for="Semester: "></label>Semester: 
        <input type="number" name = "Semester" placeholder="ex: 1">
        <br>
        <br>
        <label for="Branch: "></label>Branch: 
        <input type="text" name = "s_Branch" placeholder="ex: MCA">
        <br>
        <br>
        <label for="Subject 1"></label>Subject 1: 
        <input type="text" name= "Subject1" placeholder="ex: 20">
        <br>
        <br>
        <label for="Subject 2"></label>Subject 2: 
        <input type="text" name= "Subject2" placeholder="ex: 35">
        <br>
        <br>
        <label for="Subject 3"></label>Subject 3: 
        <input type="text" name= "Subject3"placeholder="ex: 40">
        <br>
        <br>
        <label for="Subject 4"></label>Subject 4: 
        <input type="text" name= "Subject4" placeholder="ex: 45">
        <br>
        <br>
        <label for="total: "></label>Total: 
        <input type="number" name="Total" readonly>
        <br>
        <br>
        <label for="percentage"></label>percentage: 
        <input type="number" name = "percentage"  readonly>
        <br>
        <br>
        <label for="grade"></label>Grade: 
        <input type="text" name = "grade"  readonly>
        <br>
        <br>
        <label for="contanct no"></label>Contact no: 
        <input type="number" name = "contactNo"  required>
        <br>
        <br>
        <label for="result"></label>Result: 
        <input type="number" name = "s_Result"  readonly>
        <br>
        <br>
        <input type="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $E_Number = $_POST['E_Number'];
        $S_Name = $_POST['S_Name'];
        $Semester = $_POST['Semester'];
        $s_Branch = $_POST['s_Branch'];
        $Subject1  = $_POST['Subject1'];
        $Subject2 = $_POST['Subject2'];
        $Subject3 = $_POST['Subject3'];
        $Subject4 = $_POST['Subject4'];
        $Total = $Subject1+$Subject2+$Subject3+$Subject4;
        $Percentage = $Total*100/400;
        if ($grade >= 80)
            $grade = "A";
        elseif ($grade >= 60)
            $grade = "B";
        elseif ($grade >= 40)
            $grade = "Pass";
        else
            $grade = "Fail"; 
        $ContactNo = $_POST['contactNo'];
        $Result = $_POST['s_Result'];
        echo "Error Number",$E_Number;
        echo "Student Name: " ,$S_Name;
        echo "Semester: ,", $Semester;
        echo "Subject : 1", $Subject1;
        echo "Subject : 2", $Subject2;
        echo "Subject : 3", $Subject3;
        echo "Subject : 4", $Subject4;
        echo "total : " , $Total;
        echo "Percetage is: ",$Percentage;
        echo "Contact Number ",$ContactNo;
        echo "Result ", $Result;  
    }
    ?>
</body>
</html>