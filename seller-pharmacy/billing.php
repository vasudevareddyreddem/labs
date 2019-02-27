<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<div class="page-content-wrapper">
    <div class="page-content">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-aqua">
                    <div class="card-head">
                        <header>Billing</header>
                        <a href="view-orders.php" class="btn btn-info btn-sm mt-2 mr-3 pull-right">
                            <i class="fa fa-arrow-left mr-2"></i>Back
                        </a>
                    </div>
                    <div class="card-body ">
                        <!-- form start -->
                        <form id="" name="" action="" method="">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="" />
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="myTable" class="table table-list">
                                            <thead>
                                                <tr>
                                                    <th>Medicine List</th>
                                                    <th>Price</th>
                                                    <th>Discount</th>
                                                    <th>Total</th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select name="medicine" class="form-control">
                                                            <option value="0" selected disabled>Select</option>
                                                            <option value="1">Option</option>
                                                            <option value="2">Option</option>
                                                            <option value="3">Option</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="price" placeholder="Price" class="form-control" />
                                                    </td>
                                                    <td>
                                                        <input type="text" name="discount" placeholder="Discount" class="form-control" />
                                                    </td>
                                                    <td>
                                                        <input type="text" name="total" placeholder="Price" class="form-control" />
                                                    </td>
                                                    <td><button type="button" class="btn btn-md btn-primary" id="addRow"><i class="fa fa-plus"></i></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Total Price</label>
                                    <input type="tect" class="form-control" name="totalprice" placeholder="Total Price"/>
                                </div>
                                <div class="clearfix">&nbsp;</div><br>
                                <div class="text-center col-md-12">
                                    <button type="submit" class="btn btn-md btn-success btn-flat">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="clearfix">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>

<script>
    $(document).ready(function() {
        var counter = 0;

        $("#addRow").on("click", function() {
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><select class="form-control" name="medicine' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

            cols += '<td><input type="text" class="form-control" placeholder="Price" name="price' + counter + '"/></td>';

            cols += '<td><input type="text" class="form-control" placeholder="Discount" name="discount' + counter + '"/></td>';

            cols += '<td><input type="text" class="form-control" placeholder="Total" name="total' + counter + '"/></td>';

            cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
            newRow.append(cols);
            $("table.table-list").append(newRow);
            counter++;
        });

        $("table.table-list").on("click", ".ibtnDel", function(event) {
            $(this).closest("tr").remove();
            counter -= 1
        });
    });
</script>