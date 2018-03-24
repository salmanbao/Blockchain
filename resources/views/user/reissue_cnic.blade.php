@extends('user.layout.app')
@section('content')
<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="row full-height">
    	<div class=" alert alert-success alert-dismissable" id="mesg">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Indicates a successful or positive action.
		</div>
        <div class="content col-lg-offset-2 col-lg-8 ">
            {{Form::open(array('id'=>'regForm','route' => 'applycnic'))}}
                        <h3>Registration</h3>
                        <!--  ------------User Details--------- -->
                        <div class="form-group tab"><b>User Details</b><br>
                                            <p>
                                              {{ Form::label('appType', 'Application Type',['class'=>'labeling']) }}
                                              {{Form::select('appType', array('N' => 'New', 'D' => 'Duplicate','R'=>'Renewal','C'=>'Change'),'N',['class'=>'form-control']) }}
                                            
                                          </p>
                                            <p>
                                                {!! Form::text('fname', null, ['class'=>'form-control','placeholder'=>'First Name','oninput'=>'this.className','required']) !!}
                                            </p>
                                            <p> 
                                              {!! Form::text('lname', null, ['class'=>'form-control','placeholder'=>'Last Name','oninput'=>'this.className','required']) !!}
                                            </p>
                                            <p> 
                                              {!! Form::date('dob', null,['class'=>'form-control','oninput'=>'this.className','required']) !!}     
                                            </p>
                                            <p> 
                                              {!! Form::text('identity', null, ['class'=>'form-control','placeholder'=>'Visible Mark Of Identification','oninput'=>'this.className','required']) !!}
                                            </p>
                                            <p> 
                                              {!! Form::text('present_addr', null, ['class'=>'form-control','placeholder'=>'Present Address','oninput'=>'this.className','required']) !!}
                                            </p>
                                            <p> 
                                              {!! Form::text('permanent_addr', null, ['class'=>'form-control','placeholder'=>'Permanent Address','oninput'=>'this.className','required']) !!}
                                            </p>       
                        </div>
                        <div class="form-group tab"><b>User Details</b>
                                            <p> 
                                              {!! Form::tel('mobile', null, ['class'=>'form-control','placeholder'=>'Mobile Number','oninput'=>'this.className','required']) !!}
                                            </p>
                                         <p> 
                                          {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'Email','oninput'=>'this.className']) !!}     
                                            </p>
                                        <p>
                                          {{ Form::label('gender', 'Gender',['class'=>'labeling']) }}
                                              {{Form::select('gender', array('M' => 'Male', 'F' => 'Femal','O'=>'Others'),'M',['class'=>'form-control']) }}
                                          </p>
                                           <p>
                                            {{ Form::label('religion', 'Religion',['class'=>'labeling']) }}
                                              {{Form::select('religion', array('M' => 'Muslime', 'C' => 'Christian','Q'=>'Qadiani','H'=>'Hindu','P'=>'Parsi','S'=>'Sikh','B'=>'Budhist','O'=>'Others'),'M',['class'=>'form-control']) }}
                                          </p>
                                           <p>
                                            {{ Form::label('profession', 'Profession',['class'=>'labeling']) }}
                                              {{Form::select('profession', array('B' => 'Business', 'E' => 'Engineering','M'=>'Medicine','I'=>'IT','Law'=>'Law','Manag'=>'Management','L'=>'Labour','S'=>'Student','O'=>'Others'),'B',['class'=>'form-control']) }}
                                          </p>
                                           <p>
                                            {{ Form::label('education', 'Education',['class'=>'labeling']) }}
                                              {{Form::select('education', array('PG' => 'Post Graduate', 'G' => 'Graduate','UG'=>'Under Graduate','O'=>'Others'),'PG',['class'=>'form-control']) }}
                                          </p>
                        </div>
                        <!--  ------------User Details End--------- -->

                        <!--  ------------Father Details --------- -->
                        <div class="form-group tab"><b>Father Details</b>
                                <p>
                                  {!! Form::text('father_fname', null, ['class'=>'form-control','placeholder'=>'First Name','oninput'=>'this.className','required']) !!}
                                </p>
                                <p> 
                                  {!! Form::text('father_lname', null, ['class'=>'form-control','placeholder'=>'Last Name','oninput'=>'this.className','required']) !!}
                                </p>
                                <p>
                                    <div class="form-group">
                                        {!! Form::number('father_cnic[]', null, ['id'=>1,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('father_cnic[]', null, ['id'=>2,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('father_cnic[]', null, ['id'=>3,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('father_cnic[]', null, ['id'=>4,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('father_cnic[]', null, ['id'=>5,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('father_cnic[]', null, ['id'=>6,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('father_cnic[]', null, ['id'=>7,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('father_cnic[]', null, ['id'=>8,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('father_cnic[]', null, ['id'=>9,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('father_cnic[]', null, ['id'=>10,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('father_cnic[]', null, ['id'=>11,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('father_cnic[]', null, ['id'=>12,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('father_cnic[]', null, ['id'=>13,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                    </div>
                                </p>
                        </div>
                        <!--  ------------Fatherr Details End--------- -->

                        <div class="form-group tab"><b>Mother Details</b>
                                <p>
                                  {!! Form::text('mother_fname', null, ['class'=>'form-control','placeholder'=>'First Name','oninput'=>'this.className','required']) !!}
                                </p>
                                <p> 
                                  {!! Form::text('mother_lname', null, ['class'=>'form-control','placeholder'=>'First Name','oninput'=>'this.className','required']) !!}
                                </p>
                                 <p>
                                    <div class="form-group">
                                      {!! Form::number('mother_cnic[]', null, ['id'=>14,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('mother_cnic[]', null, ['id'=>15,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('mother_cnic[]', null, ['id'=>16,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('mother_cnic[]', null, ['id'=>14,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('mother_cnic[]', null, ['id'=>18,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('mother_cnic[]', null, ['id'=>18,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('mother_cnic[]', null, ['id'=>20,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('mother_cnic[]', null, ['id'=>21,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('mother_cnic[]', null, ['id'=>22,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('mother_cnic[]', null, ['id'=>23,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('mother_cnic[]', null, ['id'=>24,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('mother_cnic[]', null, ['id'=>25,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                        {!! Form::number('mother_cnic[]', null, ['id'=>26,'class'=>'form-control cnic','oninput'=>'forward(this.value,this.id)','onkeydown'=>'back(this.id,event)','min'=>0,'max'=>9,'required']) !!}
                                    </div>
                                </p>
                        </div>
             <div class="row">
                         <div style="overflow:auto;">
                         <div style="float:right;">
                          {!! Form::button('Previous', ['id'=>'prevBtn','onlick'=>'nextPrev(-1)','class'=>'btn']) !!}
                          {!! Form::button('Next', ['id'=>'nextBtn','onlick'=>'nextPrev(1)','class'=>'btn btn-primary']) !!}
                         </div>
                         </div>
            </div>
                         <!-- Circles which indicates the steps of the form: -->
                          <div style="text-align:center;margin-top:40px;">
                          <span class="step"></span>
                          <span class="step"></span>
                          <span class="step"></span>
                          <span class="step"></span>
                          </div>
            {{Form::close()}}
        </div>
    </div>        
</div>
@stop()


