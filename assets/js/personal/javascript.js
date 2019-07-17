//dropdown materialize
$(".dropdown-trigger").dropdown();
$(document).ready(function () {
	$('.sidenav').sidenav();
});

//carousel materialize
$(document).ready(function () {
	$('.carousel').carousel();
	autoplay();

	function autoplay() {
		$('.carousel').carousel('next');
		setTimeout(autoplay, 2500);
	}
});

$('.carousel.carousel-slider').carousel({
	indicators: true,
});

//parallax
$(document).ready(function () {
	$('.parallax').parallax();
});

//select
$(document).ready(function () {
	$('select').formSelect();
});

//show harga satuan produk, jumlah, total harga dan gambar produk pada add sc
$("#select_produk").change(function () {
	var id_produk = $("#select_produk").val();
	var harga_satuan = $("#harga_barang_" + id_produk).val();
	$("#harga_satuan")
		.attr("value", harga_satuan)
});

$("jumlah_barang").keypress(function () {
	$('#total_harga').val($('#jumlah_barang').val() * $('#' + id_produk).val());
});

var $total_harga = $("#total_harga");
$("#jumlah").keyup(function () {
	var value = parseFloat($(this).val());
	var harga_satuan1 = $("#harga_satuan").val();
	$total_harga.val(value * harga_satuan1);
});
