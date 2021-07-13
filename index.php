<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf 8">
    <title>Quiz Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header style="font-size: 30px;">
        Welcome to the QUIZ   
        <form action="process.php" method="POST">
           <p>
                <table>
                            <tr>
                                <td>FIRST NAME :</td>
                                <td><input type="text" name="FIRSTNAME" style="font-size: 20px;"></td>
                                <td>MIDDLE NAME :</td>
                                <td><input type="text" name="MIDDLENAME"style="font-size: 20px;"></td> 
                                <td>LAST NAME :</td>
                                <td><input type="text" name="LASTNAME"style="font-size: 20px;"></td> 
                            </tr>
                            <tr>
                                <td>ID:</td>
                                <td><input type="text" name="ID"style="font-size: 20px;"></td>
                            </tr>
                </table>
           </p> 
    </header>
    <div class="main"> 
    <sidebar> 
             <?php 
                  $number = 0;             
                        if (isset($_POST["FIRSTNAME"])) {
                            if (isset($_POST["MIDDLENAME"])) {
                                if (isset($_POST["LASTNAME"])) {
                                        if (isset($_POST["ID"])) {

                                                        echo "Name:"," ",$_POST["FIRSTNAME"]," ",$_POST["MIDDLENAME"]," ",$_POST["LASTNAME"];
                                                        echo "<br>";
                                                        echo "ID:"," ",$_POST["ID"];
                                                        echo "<br>";
                                                        if (isset($_POST["Q1"]) && $_POST["Q1"] == "1") {
                                                            $number++;
                                                            echo "Q1."," ","point:1/1";
                                                            echo "<br>"; 
                                                        } else {
                                                            echo "Q1."," ","-Wrong ans-"," ","point:0/1";
                                                            echo "<br>"; 
                                                         }
                                                            if (isset($_POST["Q2"]) && $_POST["Q2"] =="2") {
                                                                $number++;
                                                                echo "Q2."," ","point:1/1";
                                                                echo "<br>"; 
                                                            } else {
                                                                echo "Q2."," ","-Wrong ans-"," ","point:0/1";
                                                                echo "<br>"; 
                                                             }
                                                                if (isset($_POST["Q3"]) &&$_POST["Q3"] =="3") {
                                                                    $number++;
                                                                    echo "Q3."," ","point:1/1";
                                                                    echo "<br>"; 
                                                                } else {    
                                                                    echo "Q3."," ","-Wrong ans-"," ","point:0/1";
                                                                    echo "<br>"; 
                                                                 }
                                                                    if (isset($_POST["Q4"]) && $_POST["Q4"] =="3") {
                                                                        $number++;
                                                                        echo "Q4."," ","point:1/1";
                                                                        echo "<br>"; 
                                                                    } else {    
                                                                        echo "Q4."," ","-Wrong ans-"," ","point:0/1";
                                                                        echo "<br>"; 
                                                                     }
                                                                        if (isset($_POST["Q5"]) &&$_POST["Q5"] =="1") {
                                                                            $number++;
                                                                            echo "Q5."," ","point:1/1";
                                                                            echo "<br>"; 
                                                                        } else {
                                                                            echo "Q5."," ","-Wrong ans-"," ","point:0/1";
                                                                            echo "<br>"; 
                                                                         }
                                                                            if (isset($_POST["Q6"]) &&$_POST["Q6"] =="2") {
                                                                                $number++;
                                                                                echo "Q6."," ","point:1/1";
                                                                                echo "<br>"; 
                                                                            } else {
                                                                                echo "Q6."," ","-Wrong ans-"," ","point:0/1";
                                                                                echo "<br>"; 
                                                                             }
                                                                                if (isset($_POST["Q7"]) &&$_POST["Q7"] =="2") {
                                                                                    $number++;
                                                                                    echo "Q7."," ","point:1/1";
                                                                                    echo "<br>"; 
                                                                                } else {
                                                                                    echo "Q7."," ","-Wrong ans-"," ","point:0/1";
                                                                                    echo "<br>"; 
                                                                                 }
                                                                                    if (isset($_POST["Q8"]) &&$_POST["Q8"] =="1") {
                                                                                        $number++;
                                                                                        echo "Q8."," ","point:1/1";
                                                                                        echo "<br>"; 
                                                                                    } else {
                                                                                        echo "Q8."," ","-Wrong ans-"," ","point:0/1";
                                                                                        echo "<br>"; 
                                                                                       }  
                                                                                        if (isset($_POST["Q9"]) &&$_POST["Q9"] =="1") {
                                                                                            $number++;
                                                                                            echo "Q9."," ","point:1/1";
                                                                                            echo "<br>"; 
                                                                                        } else {
                                                                                            echo "Q9."," ","-Wrong ans-"," ","point:0/1";
                                                                                            echo "<br>"; 
                                                                                         }  
                                                                                            if (isset($_POST["Q10"]) &&$_POST["Q10"] =="3") {
                                                                                                $number++;
                                                                                                echo "Q10."," ","point:1/1";
                                                                                                echo "<br>"; 
                                                                                            } else {
                                                                                                echo "Q10."," ","-Wrong ans-"," ","point:0/1";
                                                                                                echo "<br>"; 
                                                                                             }
                                                        echo "<br>";                                     
                                                        echo "Total point:",$number ,"/10";

                                        }else{
                                           echo "input detail" ;
                                           header("location:index.php");
                                        }
                                }else{
                                    echo "input detail" ;
                                    header("location:index.php");
                                }
                            }else{
                                echo "input detail"; 
                                header("location:index.php");
                            }
                        }
                    ?>
        </sidebar>
            <h1>
                Quiz Questions
                <h2>
                    <table>
                    <tr>
                            <td> 1. The Font tag is similar to ____ </td>
                            <tr><td><input type="radio" name="Q1"value="1">BIG tag</td></tr>
                            <tr><td><input type="radio" name="Q1" value="2">SMALL tag</td></tr>
                            <tr><td><input type="radio" name="Q1"value="3">BIG and Small tags</td></tr>
                    </tr>
                    <tr>
                            <td> 2. The HTML and HTTP standard are defined by ____ </td>
                            <tr><td><input type="radio" name="Q2"value="1">Web client</td></tr>
                            <tr><td><input type="radio" name="Q2" value="2">Internet association</td></tr>
                            <tr><td><input type="radio" name="Q2"value="3">WWW consortium</td></tr>
                    </tr>
                    <tr>
                            <td> 3. The tag used to add images to the HTML document is ____ </td>
                            <tr><td><input type="radio" name="Q3"value="1">HI</td></tr>
                            <tr><td><input type="radio" name="Q3"value="2">HR</td></tr>
                            <tr><td><input type="radio" name="Q3"value="3">IMG</td></tr>   
                    </tr>
                    <tr>
                            <td> 4.The ____ passes the information given by the user to a specified program. </td>
                                <tr><td><input type="radio" name="Q4"value="1">User</td></tr>
                                <tr><td><input type="radio" name="Q4"value="2">Programmer</td></tr>
                                <tr><td><input type="radio" name="Q4"value="3">Web server</td></tr>    
                    </tr>
                    <tr>
                            <td> 5. ____ is used to store the data within the documents on the server.</td>
                            <tr><td><input type="radio" name="Q5"value="1"> XML</td></tr>
                            <tr><td><input type="radio" name="Q5"value="2">HTML</td></tr>
                            <tr><td><input type="radio" name="Q5"value="3">CGI</td></tr>
                    </tr>
                    <tr>
                            <td> 6. Which language is used for creating Web Pages? </td>
                            <tr><td><input type="radio" name="Q6"value="1">Pascal</td></tr>
                            <tr><td><input type="radio" name="Q6"value="2">Html</td></tr>
                            <tr><td><input type="radio" name="Q6"value="3">C#</td></tr>
                    </tr>
                    <tr>
                            <td> 7. What is the abbreviation of HTTP? </td>
                            <tr><td><input type="radio" name="Q7"value="1">Hypertext tag path</td></tr>
                            <tr><td><input type="radio" name="Q7"value="2">Hyper Text Transfer Protocol</td></tr>
                            <tr><td><input type="radio" name="Q7"value="3">Hypertext transfer path</td></tr> 
                    </tr>
                    <tr>
                            <td> 8. The entire web document is contained within ____ </td>
                            <tr><td><input type="radio" name="Q8"value="1 ">HTML element</td></tr>
                            <tr><td><input type="radio" name="Q8"value="2 ">Web page</td></tr>
                            <tr><td><input type="radio" name="Q8"value="3">Tag</td></tr>
                    </tr>
                    <tr>
                            <td> 9. HTML document should begin with the ____ </td>
                            <tr><td><input type="radio" name="Q9"value="1 ">BODY tag</td></tr>
                            <tr><td><input type="radio" name="Q9"value="2 ">HTML tag</td></tr>
                            <tr><td><input type="radio" name="Q9"value="3 ">HEAD tag</td></tr> 
                    </tr>
                    <tr>
                            <td> 10. GIF is the abbreviation for ___ </td>
                            <tr><td><input type="radio" name="Q10"value=" 1 ">Graphics Interchange Format</td></tr>
                            <tr><td><input type="radio" name="Q10"value=" 2 ">Graphics Item Format</td></tr>
                            <tr><td><input type="radio" name="Q10"value=" 3 ">Graphics Instruction Format</td></tr>  
                    </tr>
                    </table> 
                    <br>
                        <input type="submit" name="submit" style="font-size: 30px;"> 
                </h2>     
            </h1>
            </form> 
        <footer>
            <h3>
                    copyright @ 2017 My Website
            </h3>
        </footer>
    </div> 
</body>
</html>