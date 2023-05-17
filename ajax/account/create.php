<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create account</title>
</head>

<body>
    <form id="create-form">
        <table>
            <tr>
                <th>name</th>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <th>phone</th>
                <td><input type="number" name="phone" id="phone"></td>
            </tr>
            <tr>
                <th>email</th>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <th>birth date</th>
                <td><input type="date" name="date" id="date"></td>
            </tr>
            <tr>
                <th>password</th>
                <td><input type="password" name="passwd" id="passwd"></td>
            </tr>
            <tr>
                <th>confirm password</th>
                <td><input type="password" name="cpasswd" id="cpasswd"></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
    <!-- script start javascript, jquery -->
    <script>
        
      // Add an event listener to the form to handle submissions
      document.querySelector('form').addEventListener('submit', async (event) => {
        // Prevent the form from submitting normally
        event.preventDefault();

        // Create a FormData object to hold the form data
        const formData = new FormData(event.target);

        // Send the form data to the PHP endpoint using fetch
        const response = await fetch('db.php', {
          method: 'POST',
          body: formData
        });

        // Log the response from the server
        const data = await response.text();
        console.log(data);
      });
                    
        
    </script>
</body>

</html>