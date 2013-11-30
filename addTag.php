<!DOCTYPE html>
<html>
<head>
        <title>Add Tag</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
</head>
<body>
        <section class="addtag">

                <center><img src ="images/logo.gif"></center><br/>
                <form name="addtag" action="addTag.php" method="post" accept-charset="utf-8">
                        <ul>
                                <li> Description: <input type="text" name="desc" placeholder="Tag Description" required /></li>
                                <li> Tag Notes: <input type="text" name="tagNotes" placeholder="Tag Notes" required /></li>
                                <li> Price Notes: <input type="text" name="priceNotes" placeholder="Price Notes" required /></li>
                                <li> Sub Category: <input type="text" name="sCategory" placeholder="Sub Category Name (pull from list of sub categories in DB)" required /></li>
                                <li> Material Cost: <input type="text" name="mCost" placeholder="Cost of Materials" required /></li>
                                <li> Labor Hours: <input type="text" name="labor" placeholder="Hours of Labor" required /></li>
                                <li> Engineering Hours: <input type="text" name="engineering" placeholder="Hours of Engineering" required /></li>
                                <li> Price Expiration Date: <input type="text" name="priceExpiration" placeholder="Price Expiration mm/dd/yyyy" required /></li>
                                <li> Lead Time: <input type="text" name="leadTime" placeholder="Lead Time" required /></li>
                                <li> Complexity: <input type="text" name="complexity" placeholder="Drop Down for Complexities" required /></li>
                                <li> Attachments: will get back to this</li>
                                
                                <li><input type="submit" name="submit" value="Create Tag" /></li>
                        </ul>
                </form>
        </section>
</body>
</html>