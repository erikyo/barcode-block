import JsBarcode from 'jsbarcode';

document.addEventListener('DOMContentLoaded', function() {
 document.querySelectorAll('.barcode').forEach(function(element) {
	 JsBarcode("#" + element.id, element.dataset.barcode);
 })
})
