    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/custom.js"></script>
    <script src="<?= base_url() ?>template/assets/js/jquery-1.10.2.js"></script>
    <script src="<?= base_url() ?>template/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>template/assets/js/dataTables/dataTables.bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                "responsive": true,
                "order": [
                    [1, "desc"]
                ],
                "oLanguage": {
                    "sInfo": "Showing _START_ to _END_ of _TOTAL_ items."
                }
            });

            $("#example tfoot th").each(function(i) {

                if ($(this).text() !== '') {
                    var isStatusColumn = (($(this).text() == 'Status') ? true : false);
                    var select = $('<select style="display: block;margin-top:-1002px; margin-left: -13px"><option value=""></option></select>')
                        .appendTo($(this).empty())
                        .on('change', function() {
                            var val = $(this).val();

                            table.column(i)
                                .search(val ? '^' + $(this).val() + '$' : val, true, false)
                                .draw();
                        });

                    // Get the Status values a specific way since the status is a anchor/image
                    if (isStatusColumn) {
                        var statusItems = [];

                        /* ### IS THERE A BETTER/SIMPLER WAY TO GET A UNIQUE ARRAY OF <TD> data-filter ATTRIBUTES? ### */
                        table.column(i).nodes().to$().each(function(d, j) {
                            var thisStatus = $(j).attr("data-filter");
                            if ($.inArray(thisStatus, statusItems) === -1) statusItems.push(thisStatus);
                        });

                        statusItems.sort();

                        $.each(statusItems, function(i, item) {
                            select.append('<option value="' + item + '">' + item + '</option>');
                        });

                    }
                    // All other non-Status columns (like the example)
                    else {
                        table.column(i).data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });
                    }

                }
            });

            var table = $('#example1').DataTable({
                "responsive": true,
                "order": [
                    [1, "desc"]
                ],
                "oLanguage": {
                    "sInfo": "Showing _START_ to _END_ of _TOTAL_ items."
                }
            });

            $("#example1 tfoot th").each(function(i) {

                if ($(this).text() !== '') {
                    var isStatusColumn = (($(this).text() == 'Status') ? true : false);
                    var select = $('<select><option value=""></option></select>')
                        .appendTo($(this).empty())
                        .on('change', function() {
                            var val = $(this).val();

                            table.column(i)
                                .search(val ? '^' + $(this).val() + '$' : val, true, false)
                                .draw();
                        });

                    // Get the Status values a specific way since the status is a anchor/image
                    if (isStatusColumn) {
                        var statusItems = [];

                        /* ### IS THERE A BETTER/SIMPLER WAY TO GET A UNIQUE ARRAY OF <TD> data-filter ATTRIBUTES? ### */
                        table.column(i).nodes().to$().each(function(d, j) {
                            var thisStatus = $(j).attr("data-filter");
                            if ($.inArray(thisStatus, statusItems) === -1) statusItems.push(thisStatus);
                        });

                        statusItems.sort();

                        $.each(statusItems, function(i, item) {
                            select.append('<option value="' + item + '">' + item + '</option>');
                        });

                    }
                    // All other non-Status columns (like the example)
                    else {
                        table.column(i).data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });
                    }

                }
            });
        });
    </script>

    </body>

    </html>