<?php
$dbCon = dbCon($user, $pass);
$query = $dbCon->prepare("SELECT booking.TableID, booking.CreatedAt, booking.BookedTime, booking.PartyNum, customers.FirstName, customers.LastName, customers.PhoneNum, customers.Email
                                    FROM `booking`, `customers`
                                    WHERE booking.CustomerID = customers.CustomerID && customers.`CustomerID` = 6
                                    ORDER BY `CreatedAt`");
$query->execute();
$getCustomerBook = $query->fetchAll();
//var_dump($query);