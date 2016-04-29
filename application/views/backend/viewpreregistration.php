<div class=" row" style="padding:1% 0;">
	<div class="col-md-12">

		<a class="btn btn-primary pull-right"  href="<?php echo site_url('site/createuser'); ?>"><i class="icon-plus"></i>Create </a> &nbsp;
	</div>

</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
                User Details
            </header>
			<div class="drawchintantable">
                <?php $this->chintantable->createsearch("User List");?>
                <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
                <thead>
                    <tr>
                        <th data-field="id">Id</th>
                        <th data-field="type">Type</th>
                        <th data-field="name">Name</th>
                        <th data-field="school">School</th>
                        <th data-field="dob">DOB</th>
                        <th data-field="email">Email</th>
                        <th data-field="contact">Contact</th>
                        <th data-field="sports">Sports</th>
                        <!-- <th data-field="action"> Actions </th> -->
                    </tr>
                </thead>
                <tbody>

                </tbody>
                </table>
                   <?php $this->chintantable->createpagination();?>
            </div>
		</section>
		<script>
            function drawtable(resultrow) {

                return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.type + "</td><td>" + resultrow.name + "</td><td>" + resultrow.school + "</td><td>" + resultrow.dob + "</td><td>" + resultrow.email + "</td><td>" + resultrow.contact + "</td><td>" + resultrow.sports + "</td><tr>";
            }
            generatejquery('<?php echo $base_url;?>');
        </script>
	</div>
</div>
