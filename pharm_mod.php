<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacist Module</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles1.css">
</head>
<body>  
  <div class="management-container">
    <h2>Pharmacist Module</h2>

    <!-- Pharmacist Nav Tabs -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#requestSupplier">Request Supplier</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#updateSupplier">Update Supplier</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#updateStock">Update Stock</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#viewPrescription">View Prescription</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#generateBill">Generate Bill</a>
      </li>
    </ul>

    <!-- Pharmacist Tab Content -->
    <div class="tab-content">
      <!-- Request Supplier Tab Content -->
      <div id="requestSupplier" class="tab-pane fade show active">
        <h3>Request Supplier</h3>
        <form id="request-supplier-form">
          <!-- Request Supplier form content -->
          <div class="form-group">
            <label for="supplier-name">Supplier Name:</label>
            <input type="text" id="supplier-name" name="supplier-name" required>
          </div>
          <div class="form-group">
            <label for="product-name">Product Name:</label>
            <input type="text" id="product-name" name="product-name" required>
          </div>
          <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" required>
          </div>
          <div class="form-group">
            <label for="delivery-date">No of Days Expected For Delivery :</label>
            <input type="date" id="delivery-date" name="delivery-date" required>
          </div>
          <button type="submit" id="request-supplier-btn">Request Supplier</button>
        </form>
      </div>

      <!-- Update Supplier Tab Content -->
      <div id="updateSupplier" class="tab-pane fade">
        <h3>Update Supplier</h3>
        <form id="update-supplier-form">
          <div class="form-group">
            <label for="supplier-id">Supplier ID:</label>
            <input type="text" id="supplier-id" name="supplier-id" required>
          </div>
          <div class="form-group">
            <label for="update-field">Choose Field to Update:</label>
            <select id="update-field" name="update-field" required>
              <option value="" disabled selected>Select Field</option>
              <option value="supplier-name">Supplier Name</option>
              <option value="product-name">Product Name</option>
              <option value="quantity">Quantity</option>
              <option value="delivery-days">Number of Days for Delivery</option>
            </select>
          </div>
          <div class="form-group">
            <label for="new-value">New Value:</label>
            <input type="text" id="new-value" name="new-value" required>
          </div>
          <button type="submit" id="update-supplier-btn">Update Details</button>
        </form>
      </div>


      <!-- Update Stock Tab Content -->
      <div id="updateStock" class="tab-pane fade">
        <h3>Update Stock</h3>
        <form id="update-stock-form">
          <div class="form-group">
            <label for="medicine-select">Select Medicine:</label>
            <select id="medicine-select" name="medicine-select" required>
              <option value="1">Paracetamol</option>
              <option value="2">Aspirin</option>
              <option value="3">Amoxicillin</option>
              <!-- Dynamically populate this dropdown list with medicine names -->
            </select>
          </div>
          <div class="form-group">
            <label for="quantity-sold">Quantity Sold:</label>
            <input type="number" id="quantity-sold" name="quantity-sold" min="1" required>
          </div>
          <button type="submit" id="update-stock-btn">Submit</button>
        </form>
      </div>

    <!-- View Prescription Tab Content -->
    <div id="viewPrescription" class="tab-pane fade full-height">
        <div class="container-fluid">
        <div class="row">
            <div class="col">
            <h3>View Prescription</h3>
            <div class="table-container">
                <div class="table-wrapper">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Prescription ID</th>
                        <th>Patient ID</th>
                        <th>Date</th>
                        <th>Doctor</th>
                        <th>Medicine</th>
                        <th>Dosage</th>
                        <th>Frequency</th>
                        <!-- Add more table headings if needed -->
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>12345</td>
                        <td>2024-03-28</td>
                        <td>Dr. Smith</td>
                        <td>Paracetamol</td>
                        <td>500mg</td>
                        <td>Twice daily</td>
                        <!-- Add more table data rows if needed -->
                    </tr>
                    <!-- Add more prescription items dynamically here -->
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
   
   

      <!-- Generate Bill Tab Content -->        
      <div id="generateBill" class="tab-pane fade">
        <h3>Generate Bill</h3>
        <form id="bill-form">
          <div class="form-group">
            <label for="medicine-types">Number of Medicine Types:</label>
            <input type="number" id="medicine-types" name="medicine-types" min="1" required>
          </div>
          <div id="medicine-details" class="form-group">
            <!-- Dynamically populated dropdown list of all medicines and quantity input fields -->
          </div>
          <div class="form-group">
            <label for="payment-method">Payment Method:</label>
            <select id="payment-method" name="payment-method" required>
              <option value="" disabled selected>Select Payment Method</option>
              <option value="cash">Cash</option>
              <option value="credit-card">Credit Card</option>
              <option value="debit-card">Debit Card</option>
              <option value="online-payment">Online Payment</option>
            </select>
          </div>
          <button type="submit">Generate Bill</button>
        </form>
        <div id="bill-details" class="hidden">
          <!-- Bill details will be displayed here -->
        </div>
      </div>

      <!-- Confirmation pop-up window -->
      <div id="confirmation-popup" class="popup hidden">
        <div class="popup-content">
          <h3>Confirm Bill Generation</h3>
          <p>Are you sure you want to generate the bill?</p>
          <button id="confirm-yes">Yes</button>
          <button id="confirm-no">No</button>
        </div>
      </div>

      <!-- Success message -->
      <div id="success-message" class="popup hidden">
        <div class="popup-content">
          <p>Bill Generated Successfully!</p>
          <button id="close-success">Close</button>
        </div>
      </div>

      <script>
        document.getElementById('medicine-types').addEventListener('change', function() {
        var medicineTypes = parseInt(this.value);
        var medicineDetails = document.getElementById('medicine-details');
        medicineDetails.innerHTML = ''; // Clear previous content
       
        for (var i = 1; i <= medicineTypes; i++) {
          var medicineDropdown = document.createElement('select');
          medicineDropdown.id = 'medicine' + i;
          medicineDropdown.name = 'medicine' + i;
          medicineDropdown.innerHTML = '<option value="">Select Medicine</option>' +
                                        '<option value="medicine1">Medicine 1</option>' +
                                        '<option value="medicine2">Medicine 2</option>' +
                                        '<option value="medicine3">Medicine 3</option>'; // Sample medicines, replace with actual values
         
          var quantityInput = document.createElement('input');
          quantityInput.type = 'number';
          quantityInput.id = 'quantity' + i;
          quantityInput.name = 'quantity' + i;
          quantityInput.placeholder = 'Quantity';
          quantityInput.min = '1';
          quantityInput.required = true;
         
          medicineDetails.appendChild(medicineDropdown);
          medicineDetails.appendChild(quantityInput);
          medicineDetails.appendChild(document.createElement('br'));
        }
      });

      // Add event listener to form submission
      document.getElementById('bill-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission
        // Show confirmation pop-up
        showPopup('confirmation-popup');
      });

      // Add event listener to confirm bill generation
      document.getElementById('confirm-yes').addEventListener('click', function() {
        // Perform bill generation logic (e.g., calculate total, save to database)
        // On successful generation, display success message
        hidePopup('confirmation-popup');
        showPopup('success-message');
      });

      // Add event listener to close success message
      document.getElementById('close-success').addEventListener('click', function() {
        hidePopup('success-message');
      });

      // Function to show pop-up window
      function showPopup(popupId) {
        document.getElementById(popupId).classList.remove('hidden');
      }

      // Function to hide pop-up window
      function hidePopup(popupId) {
        document.getElementById(popupId).classList.add('hidden');
      }
      </script>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>