<div class="modal fade" tabindex="-1" role="dialog" id="bap" aria-labelledby="gridSystemModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
      <form id="book_presentation" method="POST" action="send-mail.php" role="form" data-toggle="validator">
        <div class="modal-header">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h4 class="text-center" id="gridSystemModalLabel">BOOK A PRESENTATION</h4>
              <h5 class="text-center">We'd love to host a dedicated presentation for you and your company. Send us your info, and we'll be in touch today.</h5>
            </div>
            <div class="col-md-1">
              <button type="button" class="close" style="margin-right: 10px;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="font-size: 3em;">&times;</span></button>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <input type="hidden" name="FormName" value="Form: Book a Presentation">
              <div class="row">
                <div class="col-xs-12 col-md-6 form-group"><label for="FirstName">FIRST NAME</label><input type="text" class="form-control" name="FirstName" placeholder="FIRST NAME" required><div class="help-block with-errors"></div></div>
                <div class="col-xs-12 col-md-6 form-group"><label for="LastName">LAST NAME</label><input type="text" class="form-control" name="LastName" placeholder="LAST NAME" required><div class="help-block with-errors"></div></div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-6 form-group"><label for="Role">ROLE</label><input type="text" class="form-control" name="Role" placeholder="ROLE" required><div class="help-block with-errors"></div></div>
                <div class="col-xs-12 col-md-6 form-group"><label for="Company">COMPANY</label><input type="text" class="form-control" name="Company" placeholder="COMPANY" required><div class="help-block with-errors"></div></div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-6 form-group"><label for="Phone">PHONE</label><input type="tel" class="form-control" name="Phone" placeholder="PHONE" data-error="Please enter a valid phone number" required><div class="help-block with-errors"></div></div>
                <div class="col-xs-12 col-md-6 form-group"><label for="Email">EMAIL</label><input type="email" class="form-control" name="Email" placeholder="EMAIL" data-error="Please enter a valid email" required><div class="help-block with-errors"></div></div>
              </div>
              <div class="row m-b-md">
                <div class="col-xs-12 form-group"><label for="HowCanWeHelp">TELL US YOUR CURRENT CHALLENGE</label><textarea class="form-control" rows="3" name="HowCanWeHelp" placeholder="TELL US YOUR CURRENT CHALLENGE" required></textarea><div class="help-block with-errors"></div></div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn btn-success form-submit" value="Submit">
        </div>
      </form>
		</div>
		<!-- /.modal-content --> 
	</div>
	<!-- /.modal-dialog --> 
</div>
<!-- /.modal -->



<div class="modal fade" tabindex="-1" role="dialog" id="wbap" aria-labelledby="gridSystemModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
      <form id="lets_whiteboard" method="POST" action="send-mail.php" role="form" data-toggle="validator">
        <div class="modal-header">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h4 class="text-center" id="gridSystemModalLabel">LET'S WHITEBOARD A PROBLEM TOGETHER</h4>
              <h5 class="text-center">We're happy to visit your company for a collaborative session to clealry define the problem you're facing, and map a solution. Send us your info, and we'll be in touch today.</h5>
            </div>
            <div class="col-md-1">
              <button type="button" class="close" style="margin-right: 10px;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="font-size: 3em;">&times;</span></button>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <input type="hidden" name="FormName" value="Form: Let's Whiteboard a Problem Together">
              <div class="row">
                <div class="col-xs-12 col-md-6 form-group"><label for="FirstName">FIRST NAME</label><input type="text" class="form-control" name="FirstName" placeholder="FIRST NAME" required><div class="help-block with-errors"></div></div>
                <div class="col-xs-12 col-md-6 form-group"><label for="LastName">LAST NAME</label><input type="text" class="form-control" name="LastName" placeholder="LAST NAME" required><div class="help-block with-errors"></div></div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-6 form-group"><label for="Role">ROLE</label><input type="text" class="form-control" name="Role" placeholder="ROLE" required><div class="help-block with-errors"></div></div>
                <div class="col-xs-12 col-md-6 form-group"><label for="Company">COMPANY</label><input type="text" class="form-control" name="Company" placeholder="COMPANY" required><div class="help-block with-errors"></div></div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-6 form-group"><label for="Phone">PHONE</label><input type="tel" class="form-control" name="Phone" placeholder="PHONE" data-error="Please enter a valid phone number" required><div class="help-block with-errors"></div></div>
                <div class="col-xs-12 col-md-6 form-group"><label for="Email">EMAIL</label><input type="email" class="form-control" name="Email" placeholder="EMAIL" data-error="Please enter a valid email" required><div class="help-block with-errors"></div></div>
              </div>
              <div class="row m-b-md">
                <div class="col-xs-12 form-group"><label for="HowCanWeHelp">TELL US YOUR CURRENT CHALLENGE</label><textarea class="form-control" rows="3" id="HowCanWeHelp" placeholder="TELL US YOUR CURRENT CHALLENGE" required></textarea><div class="help-block with-errors"></div></div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn btn-success form-submit" value="Submit">
        </div>
      </form>
		</div>
		<!-- /.modal-content --> 
	</div>
	<!-- /.modal-dialog --> 
</div>
<!-- /.modal -->