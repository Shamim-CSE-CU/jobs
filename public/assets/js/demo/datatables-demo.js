$(document).ready(function() {
  $('#dataTable').DataTable({
      "lengthMenu": [ [2,4,6,10, 25, 50, 100, -1], [2,4,6,10, 25, 50, 100, "All"] ], // Define the options for the page length dropdown
      "pageLength": 10 // Set the default page length
  });
});
