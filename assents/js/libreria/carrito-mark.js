function AddProduct() {
  var inputProdctName = document.getElementById('productoName');
  var productoName = inputProdctName.value.trim();

  var inputProdctType = document.getElementById('prudctType');
  var productoType = inputProdctType.value;

  if (
    productoName !== '' &&
    productoName !== null &&
    productoName !== undefined &&
    productoType !== '' &&
    productoType !== null &&
    productoType !== undefined
  ) {
    switch (productoType) {
      case 'F':
        alert('Es Fruta');
        break;
      case 'V':
        alert('Es Vegetal');
        break;
      case 'V':
        alert('Es Lácteo');
        break;
    }
    console.log(productoName);
    console.log(productoType);
  } else {
    alert('Debe completar la informacion!!!');
  }
}
