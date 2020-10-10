$('#myModal').modal({ keyboard: false });
$('#myModal').modal('toggle');
$('#myModal').modal('show');
$('#myModal').modal('hide');
$(function () { $('#myModal').on('hide.bs.modal', function () { alert('Hey, I heard you like modals...');}) });