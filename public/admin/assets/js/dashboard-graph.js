function totalusers(route){
    var secoundRoute = $('#totalbooks').attr('data-route');
    var type = "route";
    $.ajax({
        type: "get",
        url: route,
        data: { type: type },
        success: function (res) {
            if (res.success === true) {
                activeUsers(res.data);
                $('#allUserCount').html(res.count);
            } else {
                console.log(res.message);
            }
        },
        error: function (xhr, status, error) {
            console.log("activeUsers-- " + error);
        },
        complete: function(xhr, status, error) {
            if (!$(".totalusers_spinner").hasClass("d-none")) {
                $(".totalusers_spinner").addClass("d-none")
            }
            totalBooks(secoundRoute, 'ticket_feeds')
        }
    });
}

function totalBooks(route){
    var secoundRoute = $('#totalblogs').attr('data-route');
    var type = 'route';
    $.ajax({
        type: "get",
        url: route,
        data: { type: type },
        success: function (res) {
            if (res.success === true) {
                renderTotalBooks(res.data);
                $('#allBookCount').html(res.count);
            } else {
                console.log("totalBooks-- Error");
                console.log(res.message);
            }
        },
        error: function (xhr, status, error) {
            console.log("ticketFeeds-- " + error);
        },
        complete: function(xhr, status, error) {
            if (!$(".totalbooks_spinner").hasClass("d-none")) {
                $(".totalbooks_spinner").addClass("d-none")
            }
            totalBogs(secoundRoute, 'closed_tickets')
        }
    });
}

function totalBogs(route){
    var secoundRoute = $('#totalorders').attr('data-route');
    var type = 'route';
    $.ajax({
        type: "get",
        url: route,
        data: { type: type },
        success: function (res) {
            if (res.success === true) {
                renderTotalBlogs(res.data);
                $('#allBlogCount').html(res.count);
            } else {
                console.log("totalBlogs-- Error");
                console.log(res.message);
            }
        },
        error: function (xhr, status, error) {
            console.log("ticketFeeds-- " + error);
        },
        complete: function(xhr, status, error) {
            if (!$(".totalblogs_spinner").hasClass("d-none")) {
                $(".totalblogs_spinner").addClass("d-none")
            }
            totalOrders(secoundRoute, 'closed_tickets')
        }
    });
}

function totalOrders(route){
    // var secoundRoute = $('#closed-tickets').attr('data-route');
    var type = 'route';
    $.ajax({
        type: "get",
        url: route,
        data: { type: type },
        success: function (res) {
            if (res.success === true) {
                renderTotalOrders(res.data);
                $('#allOrderCount').html(res.count);
            } else {
                console.log("totalOrders-- Error");
                console.log(res.message);
            }
        },
        error: function (xhr, status, error) {
            console.log("ticketFeeds-- " + error);
        },
        complete: function(xhr, status, error) {
            if (!$(".totalorders_spinner").hasClass("d-none")) {
                $(".totalorders_spinner").addClass("d-none")
            }
            // closedTickets(secoundRoute, 'closed_tickets')
        }
    });
}

let cardColor, headingColor, labelColor, shadeColor, grayColor;
if (isDarkStyle) {
    cardColor = config.colors_dark.cardColor;
    labelColor = config.colors_dark.textMuted;
    headingColor = config.colors_dark.headingColor;
    shadeColor = 'dark';
    grayColor = '#5E6692'; // gray color is for stacked bar chart
} else {
    cardColor = config.colors.cardColor;
    labelColor = config.colors.textMuted;
    headingColor = config.colors.headingColor;
    shadeColor = '';
    grayColor = '#817D8D';
}

// activeUsers Chart
// --------------------------------------------------------------------
function activeUsers(count){
    var allCount = (count && count.length !== 0) ? count : [];
    const activeTickets = document.querySelector('#totalActiiveUsers'),
    revenueGeneratedConfig = {
        chart: {
            height: 130,
            type: 'area',
            parentHeightOffset: 0,
            toolbar: { show: false },
            sparkline: { enabled: true }
        },
        markers: {
            colors: 'transparent',
            strokeColors: 'transparent'
        },
        grid: { show: false },
        colors: [config.colors.success],
        fill: {
            type: 'gradient',
            gradient: {
                shade: shadeColor,
                shadeIntensity: 0.8,
                opacityFrom: 0.6,
                opacityTo: 0.1
            }
        },
        dataLabels: { enabled: false },
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        series: [
            {
                data: allCount,
            }
        ],
        xaxis: {
            show: true,
            lines: { show: false },
            labels: { show: false },
            stroke: { width: 0 },
            axisBorder: { show: false }
        },
        yaxis: {
            stroke: { width: 0 },
            show: false
        },
        tooltip: { enabled: false }
    };
    if (typeof activeTickets !== undefined && activeTickets !== null) {
        const revenueGenerated = new ApexCharts(activeTickets, revenueGeneratedConfig);
        revenueGenerated.render();
    }
}

// totalBooks Chart
// --------------------------------------------------------------------
function renderTotalBooks(count){
    var allCount = (count && count.length !== 0) ? count : [];
    const allActiveBooks = document.querySelector('#totalBooks'),
    activebooksConfig = {
        chart: {
            height: 130,
            type: 'area',
            parentHeightOffset: 0,
            toolbar: { show: false },
            sparkline: { enabled: true}
        },
        markers: {
            colors: 'transparent',
            strokeColors: 'transparent'
        },
        grid: { show: false },
        colors: [config.colors.info],
        fill: {
            type: 'gradient',
            gradient: {
                shade: shadeColor,
                shadeIntensity: 0.8,
                opacityFrom: 0.6,
                opacityTo: 0.1
            }
        },
        dataLabels: { enabled: false },
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        series: [
            { data: allCount }
        ],
        xaxis: {
            show: true,
            lines: { show: false },
            labels: { show: false },
            stroke: { width: 0 },
            axisBorder: { show: false }
        },
        yaxis: {
            stroke: { width: 0 },
            show: false
        },
        tooltip: { enabled: false }
    };

    if (typeof allActiveBooks !== undefined && allActiveBooks !== null) {
        const all_active_books = new ApexCharts(allActiveBooks, activebooksConfig);
        all_active_books.render();
    }
}

// totalBlogs Chart
// --------------------------------------------------------------------
function renderTotalBlogs(count){
    var allCount = (count && count.length !== 0) ? count : [];
    const allActiveBogs = document.querySelector('#totalBlogs'),
    activebogsConfig = {
        chart: {
            height: 130,
            type: 'area',
            parentHeightOffset: 0,
            toolbar: { show: false },
            sparkline: { enabled: true}
        },
        markers: {
            colors: 'transparent',
            strokeColors: 'transparent'
        },
        grid: { show: false },
        colors: [config.colors.warning],
        fill: {
            type: 'gradient',
            gradient: {
                shade: shadeColor,
                shadeIntensity: 0.8,
                opacityFrom: 0.6,
                opacityTo: 0.1
            }
        },
        dataLabels: { enabled: false },
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        series: [
            { data: allCount }
        ],
        xaxis: {
            show: true,
            lines: { show: false },
            labels: { show: false },
            stroke: { width: 0 },
            axisBorder: { show: false }
        },
        yaxis: {
            stroke: { width: 0 },
            show: false
        },
        tooltip: { enabled: false }
    };

    if (typeof allActiveBogs !== undefined && allActiveBogs !== null) {
        const all_active_bogs = new ApexCharts(allActiveBogs, activebogsConfig);
        all_active_bogs.render();
    }
}

// totalBlogs Chart
// --------------------------------------------------------------------
function renderTotalOrders(count){
    var allCount = (count && count.length !== 0) ? count : [];
    const allActiveOrders = document.querySelector('#totalOrders'),
    activeordersConfig = {
        chart: {
            height: 130,
            type: 'area',
            parentHeightOffset: 0,
            toolbar: { show: false },
            sparkline: { enabled: true}
        },
        markers: {
            colors: 'transparent',
            strokeColors: 'transparent'
        },
        grid: { show: false },
        colors: [config.colors.danger],
        fill: {
            type: 'gradient',
            gradient: {
                shade: shadeColor,
                shadeIntensity: 0.8,
                opacityFrom: 0.6,
                opacityTo: 0.1
            }
        },
        dataLabels: { enabled: false },
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        series: [
            { data: allCount }
        ],
        xaxis: {
            show: true,
            lines: { show: false },
            labels: { show: false },
            stroke: { width: 0 },
            axisBorder: { show: false }
        },
        yaxis: {
            stroke: { width: 0 },
            show: false
        },
        tooltip: { enabled: false }
    };

    if (typeof allActiveOrders !== undefined && allActiveOrders !== null) {
        const all_active_orders = new ApexCharts(allActiveOrders, activeordersConfig);
        all_active_orders.render();
    }
}
