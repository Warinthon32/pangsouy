<?php include('h.php');?>
<form  name="register" action="member_form_add_db.php" method="POST" class="form-horizontal">
       <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_username" type="text" required class="form-control" id="m_username" placeholder="Username" pattern="^[a-zA-Z0-9ก-๙]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
          </div>
      </div> 
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_password" type="password" required class="form-control" id="m_password" placeholder="Password" pattern="^[a-zA-Z0-9ก-๙]+$" minlength="2" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_name" type="text" required class="form-control" id="m_name" placeholder="ชื่อ-สกุล " pattern="^[a-zA-Z0-9ก-๙]+$"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_email" type="email" class="form-control" id="m_email"   placeholder=" อีเมล์ name@hotmail.com"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_tel" type="text" class="form-control" id="m_tel"  placeholder="เบอร์โทร ตัวเลขเท่านั้น" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <textarea name="m_address" class="form-control" id="m_address" required></textarea> 
          </div>
        </div>
      <div class="form-group">
          <div class="col-sm-5" align="right">
          <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> สมัครสมาชิก  </button>
          </div>     
      </div>
      </form>