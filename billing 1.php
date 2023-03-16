<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Responsive payment getway</title>
</head>
<style type="text/css">
 
.container {
    background: white;
    max-width: 600px;
    min-height: 500px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 0.5rem 1.5rem;
}

.left {
    flex-basis: 50%;
}

.right {
    flex-basis: 50%;
}

form {
    padding: 1rem;
}

h3 {
    margin-top: 1rem;
    color: #2c3e50;
}

form input[type="text"] {
    width: 100%;
    padding: 0.5rem 0.7rem;
    margin: 0.5rem 0;
    outline: none;
}

#zip {
    display: flex;
    margin-top: 0.5rem;
}

#zip select {
    padding: 0.5rem 0.7rem;
}

#zip input[type="number"] {
    padding: 0.5rem 0.7rem;
    margin-left: 5px;
}

input[type="submit"] {
    width: 100%;
    padding: 0.7rem 1.5rem;
    background: #34495e;
    color: white;
    border: none;
    outline: none;
    margin-top: 1rem;
    cursor: pointer;
}

input[type="submit"]:hover {
    background: #2c3e50;
}

@media only screen and(max-widht:770px) {
    .container {
        flex-direction: column;
    }
    body {
        overflow-x: golden
    }
}




</style>
<link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/bootstrap.css.map" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap.css.map" rel="stylesheet">
    <link href="./css/bootstrap.rtl.css" rel="stylesheet">
    <link href="./css/bootstrap.rtl.css" rel="stylesheet">
    <link href="./css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="./css/bootstrap.rtl.min.css.map" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #ccffd1;">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html"><img src="./IMAGES/logo2.jpeg" width="200" height="50"></a>
            </div>  
        </nav>             
        </header>
        <div class="container">
            <div class="left">
                <h3>BILLING ADDRESS</h3>
                <form>
                    Full name
                    <input type="text" name="" placeholder="Enter name"> Email
                    <input type="text" name="" placeholder="Enter mail"> Address
                    <input type="text" name="" placeholder="Enter address"> city
                    <input type="text" name="" placeholder="Enter city">
                    <div id="zip">
                        <label>
                            State
                            <select>
                                <option>Choose State..</option>
                                <option>Rajasthan</option>
                                <option>Hariyana</option>
                                <option>Uttar Pradesh</option>
                                <option>Madhya Pradesh</option>
                            </select>
                        </label>
                        <label>
                            Zip code
                            <input type="number" name="" placeholder="zip code">
                        </label>
                    </div>
                </form>
            </div>
            <div class="right">
                
                <h3>PAYMENT</h3>
                <form>
                    Accepted card<br>
                    <img src="./IMAGES/WhatsApp Image 2022-10-31 at 7.18.19 PM.jpeg" height="100"><br><br>
                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2"
                    value="" aria-label="..." />
                    <b>DEBIT CARD</b>
                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2"
                    value="" aria-label="..." />
                    <b>CREDIT CARD</b>
                    <br><br><hr>
                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2"
                    value="" aria-label="..." />
                    <b>Standard Home Delivery</b><br>
                    Free + Between 3 and 5 buisness days<br>
                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2"
                    value="" aria-label="..." />
                    <b>Express Home Delivery</b><br>
                70rs + Between 1 and 2 buisness days
                   
                </form>
                <th>
                    <a href="gateway.php"><button>Proceed to Payment</button></a>
                </th>
                <hr>
            </div>
        </div>
        <br><br>
        <table border="0 " width="100% " bgcolor="#ccffd1">
        
        <td>
            <ul>
                <li>
                    <font color="black ">Facebook</font>
                </li>
                <li>
                    <font color="black ">Twitter</font>
                </li>
                <li>
                    <font color="black ">Instagram</font>
                </li>
                <li>
                    <font color="black ">YouTube</font>
                </li>
            </ul>
        </td>
        <td>
            <ul>
                <li>
                    <font color="black ">BS7 Technology</font>
                </li>
                <li>
                    <font color="black ">+91 9392970035</font>
                </li>
                <li>
                    <font color="black ">India</font>
                </li>
                <li>
                    <font color="black ">517-415</font>
                </li>
            </ul>
        </td>
        <td><input type="button " placeholder="Search " style="width: 50%; ">
            <input type="button " value="Search ">
            </ul>
        </td>
    </table>
    <table border="0 " width="100% " bgcolor="#baed42">
        <tr>
            <th bgcolor="#85b878 ">
                <font color="white ">Thanks for visitng our webpage</font>
            </th>
        </tr>

</body>
