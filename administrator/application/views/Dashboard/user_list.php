<div class="col-md-8">
            <div class="card">
                  <div class="card-header">
                    <h4>User List</h4>
                  </div>
                      <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                  <tr>
                                    <th>S.No.</th>
                                    <th>User Id</th>                                    
                                    <th>Quiz Title</th>
                                    <th>Quiz Attempted Date</th> 
                                    <th>Action</th>                               
                                  </tr>
                              </thead>
                              <tbody>     
                                <!-- loop Throuh all pages -->
                                <?php if(count($user_list)> 0) {
                                        $count = 1;
                                      
                                        foreach($user_list AS $Key => $value){
                                ?>
                                <tr>
                                  <td><?= $count?></td>
                                  <td><?=$value['user_id']?></td>
                                  <td><?=$value['title']?></td>
                                  <td><?=date('d-M-Y h:i a', strtotime($value['created_at']))?></td>
                                  <td><a href="<?php echo site_url('Question/viewansers/'.$value['user_id'].'/'.$value['quiz_id']) ?>">View Answers</a></td>
                                </tr>
                                <?php 
                                       $count++; }  } 
                                ?>
                              </tbody>                            
                          </table>
                      </div>
                  </div>
          </div><!-- /.col-md4 -->