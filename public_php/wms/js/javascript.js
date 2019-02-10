//Sort button arrow
$('.table-titles').on('click', 'th', function () {

    if ($(this).find('i').hasClass('fa-angle-up')) {

        $(this).find('i').removeClass('fa-angle-up');
        $(this).find('i').addClass('fa-angle-down');

    } else {

        $(this).find('i').removeClass('fa-angle-down');
        $(this).find('i').addClass('fa-angle-up');
    }

});
/*----------------------*/


//Menu button

$('#menu').on('click', function () {

    if ($('#side-menu').hasClass('menu-open')) {
        $('#side-menu').removeClass('menu-open');
    } else {
        $('#side-menu').addClass('menu-open');
    }

});


/*----------------------*/


//Sort Functions SALES ORDERS
var SOOptions = {
    valueNames: [
        'customerName',
        'SONumber',
        'SODate',
        'packed',
        'shipped',
        'invoiced',
        'amount'
    ]
};

//Sort Functions ITEMS
var ItemsOptions = {
    valueNames: [
        'itemName',
        'sku',
        'manufacturer',
        'sellingPrice',
        'purchasePrice',
        'warehouselocation',
        'stock'
    ]
};

//Sort Functions ITEMS
var CustomersOptions = {
    valueNames: [
        'salutation',
        'name',
        'companyName',
        'email',
        'phoneNumber',
        'website',
        'billingAddres'
    ]
};

var SOtable = new List('so-table', SOOptions);
var ItemsTable = new List('items-table', ItemsOptions);
var CustomersTable = new List('customers-table', CustomersOptions);

/*----------------------*/

//Removes selected row from a table
$(document).on('click', '#removeItem', function () {
    $(this).parent().parent().remove();
});

/*----------------------*/

// Get the modal
var modal = document.getElementById('Modal');

// Get the button that opens the modal
var btn = document.getElementById("addItem");

// Get the <span> element that closes the modal


// When the user clicks on the button, open the modal
if (typeof (btn) != 'undefined' && btn != null) {
    btn.onclick = function () {
        modal.style.display = "block";
    }
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}