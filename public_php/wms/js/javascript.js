
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

$('#menu').on('click', function(){

    if($('#side-menu').hasClass('menu-open')) {
        $('#side-menu').removeClass('menu-open');
    } else {
        $('#side-menu').addClass('menu-open');
    }

});
/*----------------------*/


//Sort Functions
var options = {
    valueNames: ['customerName',
        'SONumber',
        'SODate',
        'packed',
        'shipped',
        'invoiced',
        'amount'
    ]
};

var SOtable = new List('so-table', options);
/*----------------------*/

//Removes selected row
$(document).on('click', '#removeItem', function () {
    $(this).parent().parent().remove();
});


/*----------------------*/


/*----------------------*/

// Get the modal
var modal = document.getElementById('myModal');
// Get the button that opens the modal
var addItem = document.getElementById("addItem");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks on the button, open the modal
addItem.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
//span.onclick = function() {
  //  modal.style.display = "none";
    //}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var x = document.getElementById("xxx").value;

console.log(x);

/*----------------------*/
/*----------------------*/
/*
// Get the modal
var SideModal = document.getElementById('SideModal');
// Get the button that opens the modal
var SideModalBtn = document.getElementById("SideModalBtn");
// Get the <span> element that closes the modal
var CloseSideModal = document.getElementsByClassName("close-side-modal")[0];
// When the user clicks on the button, open the modal
SideModalBtn.onclick = function() {
    SideModal.style.display = "block";
}
/*
// When the user clicks on <span> (x), close the modal
CloseSideModal.onclick = function() {
    SideModal.style.display = "none";
}
*/
/*
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == SideModal) {
    SideModal.style.display = "none";
  }
}

/*----------------------*/