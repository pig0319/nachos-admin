<?php
//ITO YUNG PARA SA NEW EMPLOYEE
                                        session_start();
                                        $connections = mysqli_connect("localhost","root","","nachos-admin");

                                        if(mysqli_connect_errno()){
                                            echo "Failed to connect to MySQL: " . mysqli_connect_error();

                                        }else{
                                            echo "Connected";
                                        }
                                        
                                        if(isset($_POST['submit'])){
                                        	// $selected = $_POST['gender'];
                                        	$firstname = $_POST['firstname'];
                                            $middlename = $_POST['middlename'];
                                            $lastname = $_POST['lastname'];
                                            $position = $_POST['position'];
                                            $password = $_POST['password'];
                                            // $resume = $_POST['resume'];
                                            $dateJoined = date("m/d/Y");
                                            $userID = $lastname . "_" . $firstname;
                                            $hashPass = md5($password);
                                            $query = mysqli_query($connections,"INSERT INTO users(userid,lastname,firstname,middlename,password,rec_pin) values('$userID','$lastname','$firstname','$middlename','$hashPass','123')");
                                            $query2 = mysqli_query($connections,"INSERT INTO employees(emp_id,lastname,firstname,middlename,position,job_start) values ('$userID','$lastname','$firstname','$middlename','$position','$dateJoined')");

                                            header('location:forms.html');
                                        }

                                    ?>