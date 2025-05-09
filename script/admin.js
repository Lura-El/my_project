$(function(){

    //buttons
    $('#online').show();

    $('.navtwobtns').click(function() {

        $('.navtwobtns').removeClass('active'); 
        $(this).addClass('active');
        
        $('.tab').hide();
        
       let targetForm = $(this).data('target');
       $(targetForm).show();
    
    });

    // online boooking

    $('#update-btn').on('click', function() {
        let targetdiv = $(this).data('target');
        $(targetdiv).toggle();
    });
    $('#update-btn2').on('click', function() {
        let targetdiv = $(this).data('target');
        $(targetdiv).toggle();
    });

    function formatDate(date) {
        const dateObj = new Date(date);
        const options = { 
            month: 'short', 
            day: '2-digit', 
            year: '2-digit', 
            hour: 'numeric', 
            minute: '2-digit', 
            hour12: true 
        };
        return dateObj.toLocaleString('en-US', options);
      }

    // walkins
    
    function fetchData(path, tableHead, htmlTag) {

    $.get(path,function(data) {
        
        let tableBody = "<tbody>";

        data.forEach(result => {
            tableBody += "<tr>";
            Object.entries(result).forEach(([key, value]) => {
                tableBody += (key === "pick_up_time") ? `<td>${formatDate(value)}</td>` : `<td>${value}</td>`;
            });
            tableBody += "</tr>";
        });

        tableBody += "</tbody>";

        $(htmlTag).html(tableHead + tableBody);
    }).fail(function() {
        console.error("Error: Unable to fetch data.");
    });
    }

    let tableHead = `
        <thead>
            <tr id="tablehead">
                <th>Service Id</th>
                <th>Customer Id</th>
                <th>Service</th>
                <th>Name</th>
                <th>Number</th>
                <th>Location</th>
                <th>Pickup</th>
                <th>Request</th>
                <th>Status</th>
                <th>Kilo or Piece</th>
                <th>Amount</th>
                <th>Paid</th>
            </tr>
        </thead>
    `;

    let tableHead2 = `
        <thead>
            <tr id="tablehead">
                <th>Service Id</th>
                <th>Service</th>
                <th>Name</th>
                <th>Number</th>
                <th>House Delivery</th>
                <th>Location</th>
                <th>Kilo/Piece</th>
                <th>Amount</th>
                <th>Paid</th>
                <th>Status</th>
            </tr>
        </thead>
    `;

    fetchData("/../laundry/admin/online.admin.php", tableHead, "#table");
    fetchData("/../laundry/admin/walkins.get.admin.php", tableHead2, "#table2");
    
    setInterval(fetchData, 1000);

    $('#addwalkins').on('click', function() {
        let targetdiv = $(this).data('target');
        $(targetdiv).toggle();
    });

    // 
});

