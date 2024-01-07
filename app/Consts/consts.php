<?php
namespace App\Conts;

enum UserType
{
    case ADMIN;
    case ALUMINI;
    case STUDENT;
}

enum RouteName:string{
    case USER="user.view";
    case USER_ADMIN_CREATE = "user.admin.create"; 
    case USER_ALUMINI_CREATE = "user.alumini.create"; 
    case USER_STUDENT_CREATE = "user.student.create"; 
    case USER_ALL_STUDENTS = "user.student.all"; 

}

enum Views:string{
    
}
