$(document).ready(function()
{
     $("#valor").maskMoney({
        prefix: "R$ ",
        decimal: ",",
        thousands: "."
     });
});
