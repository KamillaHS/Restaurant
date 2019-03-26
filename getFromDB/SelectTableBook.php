<?php
$dbCon = dbCon($user, $pass);
$query = $dbCon->prepare("SELECT booking.TableID, booking.BookedTime, customers.FirstName, customers.LastName
                                    FROM booking, customers
                                    WHERE booking.CustomerID = customers.CustomerID && booking.TableID = 1 && booking.BookedTime = '2019-03-22 20:45:09'
                                    ORDER BY booking.BookedTime
");
$query->execute();
$getTableBook = $query->fetchAll();
//var_dump($query);

