<?php

// defaule response
function unknown($str){
    return str_replace("(name)", $_SESSION['name'], $str);
}

// Date time funtion
function Datetime($str)
{
    $resp = ($str === 'datetime') ? date('\T\i\m\e: H:i:sA \n \D\a\t\e: d of M, Y') : $str;


    return str_replace("(name)", $_SESSION['name'], $resp);
}


// lecturers list and Qualification
function Lecturers(){
    return('
        Prof. Enikuomehin O.A [BSc, MSc,PhD] <br>
        Dr.Akinnuwesi B. A [BSc, MSc, PhD]  <br>
        Dr. Rahman M.A [BSc, MSc, PGDE, PhD] <br>
        Dr. Akerele O.C [BSc, MSc, PhD] <br>
        Mr. Aiyeniko O. [B.Engr, PGD, MSc] <br>
        Mrs. Raji-Lawal H. Y [B.Tech, MSc] <br>
        Mr. Owate P.A [BSc, MSc] <br>
        Prof. Aribisala B. S [BSc, MSc, PTLLS, PhD] <br>
        click <a href="https://csc.lasu.edu.ng/staff/">here</a> to read more
        '
    );
}

// courses 
function Courses(){
    return
    '
    CSC 120 [Computer as a Problem-Solving tool]<br>
    CSC 111 [Introduction to Computer Science]<br>
    CSC 104/228 [Software practice 2]<br>
    CSC 215 [Software Practice 1]<br>
    CSC 213 [Introduction to Algorithms and Application] <br>
    CSC 223 [Introduction to Information Processing Methods] <br>
    CSC 220 [Data Structure] <br>
    CSC 226 [Object Oriented Programming (Major)] <br>
    CSC 222 [Assembly Programming Language]<br>
    CSC 331 [Database Design and Management]<br>
    CSC 311/205 [Operating system 1] <br>
    CSC 339 [System Analysis and Design] <br>
    CSC 326 [Operating system 2]<br>
    CSC 340/405 [Social Professional Issue in information Technology] <br>
    CSC 328 [Computer Architecture]<br>
    CSC 324 [Numerical Computation]<br>
    CSC 411 [Data Communication]<br>
    CSC 417 [Database Management]<br>
    CSC 442 [Introduction to PHP and MYSQL] <br>
    CSC 420 [Introduction to Computer Security] <br>
    CSC 438 [Computer Networking and Communication] <br>
    ';
}

// requirment 
function Req()
{
    return
    '
    Students who must qualify for the Undergraduate 
    programme in the department of Computer Science must<b>:</b> <br><br>
    (i) Possess O-Level (SSCE) results with the minimum 
    of six(6) credit passes in relevant subjects including English, Mathematics, Physics, Chemistry and Biology. <br>
    (ii) Sit for Joint Admission Matriculation Board (JAMB)
    examination. The cut-off point depends on the decision of the
    University. Visit the University\'s website
    (http://screening.lasu.edu.ng) for more details. <br>
    (iii) Be deemed qualified by the committee in charge of admission.<br>
    (iv) Be aware of and comply to all other terms and conditions. <br>
    ';
}


// result
function result(){
    return
    '
    click <a href="https://ug.lidc.lasu.edu.ng/ft-contents/students/login.php">here</a> to check result
    ';
}



?>