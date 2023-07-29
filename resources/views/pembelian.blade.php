<!DOCTYPE html>
<html>
<head>
  <title>Form Pembelian Produk</title>
  <!-- Link CSS Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2>Form Pembelian Produk</h2>
  <form id="purchaseForm" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="productName">Nama Produk:</label>
      <input type="text" class="form-control" id="productName" placeholder="Masukkan nama produk" required>
      <div class="invalid-feedback">
        Masukkan nama produk.
      </div>
    </div>
    <div class="form-group">
      <label for="quantity">Jumlah:</label>
      <input type="number" class="form-control" id="quantity" placeholder="Masukkan jumlah" required>
      <div class="invalid-feedback">
        Masukkan jumlah produk.
      </div>
    </div>
    <div class="form-group">
      <label for="price">Harga per unit:</label>
      <input type="number" class="form-control" id="price" placeholder="Masukkan harga per unit" required>
      <div class="invalid-feedback">
        Masukkan harga per unit produk.
      </div>
    </div>
    <div class="form-group">
      <label for="total">Total Harga:</label>
      <input type="text" class="form-control" id="total" readonly>
    </div>
    <button type="submit" class="btn btn-primary">Beli</button>
  </form>
</div>

<!-- Link JavaScript Bootstrap and custom script -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  // Calculate total price based on quantity and price per unit
  function calculateTotal() {
    const quantity = parseFloat(document.getElementById('quantity').value);
    const price = parseFloat(document.getElementById('price').value);
    const total = isNaN(quantity) || isNaN(price) ? 0 : quantity * price;
    document.getElementById('total').value = total.toFixed(2);
  }

  // Validate the form and calculate total price on form submission
  document.getElementById('purchaseForm').addEventListener('submit', function(event) {
    event.preventDefault();
    event.stopPropagation();
    const form = event.target;
    if (form.checkValidity()) {
      calculateTotal();
      // You can add additional logic here to submit the form data to a server
    }
    form.classList.add('was-validated');
  });
</script>

</body>
</html>
