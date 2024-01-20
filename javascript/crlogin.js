// Get the form element
const form = document.querySelector('#login');

// Function to validate the form
function validateForm(event) {
  // Prevent the form from submitting
  event.preventDefault();

  // Get the name input field
  const nameInput = document.querySelector('input[name="ctr_name"]');

  // Function to validate the name
  function validateName() {
    const name = nameInput.value.trim();

    // Check if the name is empty
    if (name === '') {
      alert('Please enter your name.');
      return false;
    }

    // Regular expression pattern for alphabetic characters
    const alphabeticPattern = /^[a-zA-Z]+$/;

    // Check if the name contains only alphabetic characters
    if (!alphabeticPattern.test(name)) {
      alert('Name should contain only alphabetic characters.');
      return false;
    }

    return true;
  }

  // Attach the validation function to the name input field's blur event
  nameInput.addEventListener('blur', validateName);

  // Get the address input field
  const addressInput = document.querySelector('input[name="ctr_add"]');

  // Function to validate the address
  function validateAddress() {
    const address = addressInput.value.trim();

    // Check if the address is empty
    if (address === '') {
      alert('Please enter your address.');
      return false;
    }

    // Add your additional address validation logic here if needed

    return true;
  }

  // Attach the validation function to the address input field's blur event
  addressInput.addEventListener('blur', validateAddress);

  // Get the mobile number input field
  const mobileInput = document.querySelector('input[name="ctr_mob"]');

  // Function to validate the mobile number
  function validateMobileNumber() {
    const mobileNumber = mobileInput.value.trim();

    // Regular expression pattern for a valid mobile number format
    const mobileNumberPattern = /^\d{10}$/;

    // Check if the mobile number matches the pattern
    if (!mobileNumberPattern.test(mobileNumber)) {
      alert('Please enter a valid 10-digit mobile number.');
      return false;
    }

    return true;
  }

  // Attach the validation function to the mobile number input field's blur event
  mobileInput.addEventListener('blur', validateMobileNumber);

  // Get the city input field
  const cityInput = document.querySelector('input[name="ctr_city"]');

  // Function to validate the city
  function validateCity() {
    const city = cityInput.value.trim();

    // Check if the city is empty
    if (city === '') {
      alert('Please enter a city.');
      return false;
    }

    // Add your additional city validation logic here if needed

    return true;
  }

  // Attach the validation function to the city input field's blur event
  cityInput.addEventListener('blur', validateCity);

  // Get the email input field
  const emailInput = document.querySelector('input[name="ctr_email"]');

  // Function to validate the email
  function validateEmail() {
    const email = emailInput.value.trim();

    // Regular expression pattern for a valid email format
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Check if the email matches the pattern
    if (!emailPattern.test(email)) {
      alert('Please enter a valid email address.');
      return false;
    }

    return true;
  }

  // Attach the validation function to the email input field's blur event
  emailInput.addEventListener('blur', validateEmail);

  // Get the password input field
  const passwordInput = document.querySelector('input[name="ctr_pass"]');

  // Function to validate the password
  function validatePassword() {
    const password = passwordInput.value.trim();

    // Check if the password is empty
    if (password === '') {
      alert('Please enter a password.');
      return false;
    }

    // For example, you can check for a minimum length requirement
    if (password.length < 8) {
      alert('Password should be at least 8 characters long.');
      return false;
    }

    return true;
  }

  // Attach the validation function to the password input field's blur event
  passwordInput.addEventListener('blur', validatePassword);

  // Submit the form if all validations pass
  form.submit();
}

// Attach the validation function to the form's submit event
form.addEventListener('submit', validateForm);


<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 
    if(isset($_POST['Add_To_Cart']))
    {
      if (isset($_SESSION['ctr_email']) && !empty($_SESSION['ctr_email'])) 
      {
        if(isset($_SESSION['cart']))
        {
          $myitems=array_column($_SESSION['cart'],'Item_name');
          if(in_array($_POST['Item_name'],$myitems))
          {
            echo"<script>
            alert(' Item already added');
            window.location.href='examplemenu.php';
            </script>";
          }
          else
          {
          $count=count($_SESSION['cart']);
          $_SESSION['cart'][$count]=array('Item_name'=>$_POST['Item_name'],'Price'=>$_POST['Price'],'Quantity'=>1);
          echo"<script>
            alert(' Item added');
            window.location.href='examplemenu.php';
            </script>";
          }
        }
        else
        {
         $_SESSION['cart'][0]=array('Item_name'=>$_POST['Item_name'],'Price'=>$_POST['Price'], 'Quantity'=>1);
         echo"<script>
            alert(' Item added');
            window.location.href='examplemenu.php';
            </script>";
        }
      }
      else
      {
        echo"<script>
            alert('Please register yourself');
            window.location.href='crlogin.html';
            </script>";
      }
    }
    if(isset($_POST['Remove_item']))
    {
      foreach($_SESSION['cart']as $key=>$value)
      {
        if($value['Item_name']==$_POST['Item_name'])
        {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart']=array_values($_SESSION['cart']);
        echo"<script>
        alert('Item Removed');
        window.location.href='mynewcart.php';
        </script>";
        }
      }
    }
}
