<div id="page-title">
    <a class="btn btn-primary btn-labeled fa fa-plus margined pull-right" href="<?php echo site_url("site/createpatent?id=".$user); ?>">Create</a>
    <h1 class="page-header text-overflow">patent Details </h1>
</div>
<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel drawchintantable">
                <?php $this->chintantable->createsearch("patent List");?>
                <div class="fixed-table-container">
                    <div class="fixed-table-body">
                        <table class="table table-hover" id="" cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th data-field="id">ID</th>
<!--
                                    <th data-field="patentid">Patent Id</th>
                                    <th data-field="user">User</th>
-->
                                    <th data-field="title">Title</th>
<!--
                                    <th data-field="summary">Summary</th>
                                    <th data-field="number">Number</th>
                                    <th data-field="statusid">Status ID</th>
-->
                                    <th data-field="status">Status</th>
                                    <th data-field="officename">Office Name</th>
<!--                                    <th data-field="inventorid">Inventor Id</th>-->
                                    <th data-field="inventorname">Inventor Name</th>
                                    <th data-field="date">Date</th>
<!--                                    <th data-field="url">URL</th>-->
                                    <th data-field="Action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="fixed-table-pagination" style="display: block;">
                        <div class="pull-left pagination-detail">
                            <?php $this->chintantable->createpagination();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function drawtable(resultrow) {
            return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.title + "</td><td>" + resultrow.status + "</td><td>" + resultrow.officename + "</td><td>" + resultrow.inventorname + "</td><td>" + resultrow.date + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editpatent?id=');?>" + resultrow.user + "&patentid="+resultrow.id+"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' onclick=return confirm(\"Are you sure you want to delete?\") href='<?php echo site_url('site/deletepatent?id='); ?>" + resultrow.user + "&patentid="+resultrow.id+"'><i class='icon-trash '></i></a></td></tr>";
        }
        generatejquery("<?php echo $base_url;?>");
    </script>
</div>
