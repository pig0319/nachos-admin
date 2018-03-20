<?php 	
				session_start();
                                                $connections = mysqli_connect("localhost","root","","nachos-admin");

                                                if(isset($_POST['save'])){
                                                    $firstname = $_POST['firstname'];
                                                    $middlename = $_POST['middlename'];
                                                    $lastname = $_POST['lastname'];
                                                    // $position = $_POST['position'];

                                                    $query = mysqli_query($connections,"UPDATE users set firstname = '$firstname', middlename = '$middlename', lastname = '$lastname' where userid = '$_SESSION[id]'" );

                                                    $result = mysqli_query($connections,"SELECT * from users where userid = '$_SESSION[id]'");
                                                    $notif = "";
                                                    $row = mysqli_fetch_array($result);
                                                    if(is_array($row)){
                                                        $_SESSION['id'] = $row['userid'];
                                                        $_SESSION['lastname'] = $row['lastname'];
                                                        $_SESSION['firstname'] = $row['firstname'];
                                                        $_SESSION['middlename'] = $row['middlename'];
                                                        // $_SESSION['email'] = $row['email'];
														$notif = "Form successfully submitted!";

														header("location: index.php");


                                                        
                                                    }

                                                }
                                            ?>