<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h4><?= $camp_type ?> Campaigns</h4>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>S.No.</th>
            <th>Title</th>
            <!-- <th>Description</th> -->
            <th>Estimated Hour</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- loop Throuh all pages -->
          <?php if (count($camps) > 0) {
            $count = 1;

            foreach ($camps as $Key => $value) {
          ?>
              <tr>
                <td><?= $count ?></td>
                <td><?= $value['title'] ?></td>
                <!-- <td><?= $value['description'] ?></td> -->
                <td><?= $value['estimated_hour'] ?></td>
                <td><?= $value['start_date'] ?></td>
                <td><?= $value['end_date'] ?></td>
                <td><?php echo ($value['status'] == 0) ? "<p style='color:blue;'>" . 'Pending' . "</p>" : (($value['status'] == 1) ? "<p style='color:green;'>" . 'Approved'  . "</p>" : "<p style='color:red;'>" . 'Rejected' . "</p>"); ?></td>
                <td><a href="<?php echo site_url('Ngo/view_camp/' . $value['id']) ?>">View</a>
                  <?php if ($value['status'] == 0) { ?>
                    /
                    <?php if ($camp_type == 'Online') { ?>
                      <a href="<?php echo site_url('Ngo/approve_camp/' . $value['id'] . '/1') ?>">Approve</a> / <a href="<?php echo site_url('Ngo/reject_camp/' . $value['id'] . '/1') ?>">Reject</a>
                    <?php } else { ?>
                      <a href="<?php echo site_url('Ngo/approve_camp/' . $value['id'] . '/1') ?>">Approve</a> / <a href="<?php echo site_url('Ngo/reject_camp/' . $value['id'] . '/1') ?>">Reject</a>
                    <?php } ?>
                  <?php } ?>
                </td>
              </tr>
          <?php
              $count++;
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div><!-- /.col-md4 -->