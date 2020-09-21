<style>
    .arrow-steps .step {
	font-size: 14px;
	text-align: center;
	color: #666;
	cursor: default;
	margin: 0 3px;
	padding: 10px 10px 10px 30px;
	min-width: 180px;
	float: left;
	position: relative;
	background-color: #d9e3f7;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
  transition: background-color 0.2s ease;
}

.arrow-steps .step:after,
.arrow-steps .step:before {
	content: " ";
	position: absolute;
	top: 0;
	right: -17px;
	width: 0;
	height: 0;
	border-top: 19px solid transparent;
	border-bottom: 17px solid transparent;
	border-left: 17px solid #d9e3f7;
	z-index: 2;
  transition: border-color 0.2s ease;
}

.arrow-steps .step:before {
	right: auto;
	left: 0;
	border-left: 17px solid #fff;
	z-index: 0;
}

.arrow-steps .step:first-child:before {
	border: none;
}

.arrow-steps .step:first-child {
	border-top-left-radius: 4px;
	border-bottom-left-radius: 4px;
}

.arrow-steps .step span {
	position: relative;
}

.arrow-steps .step span:before {
	opacity: 0;
	content: "✔";
	position: absolute;
	top: -2px;
	left: -20px;
}

.arrow-steps .step.done span:before {
	opacity: 1;
	-webkit-transition: opacity 0.3s ease 0.5s;
	-moz-transition: opacity 0.3s ease 0.5s;
	-ms-transition: opacity 0.3s ease 0.5s;
	transition: opacity 0.3s ease 0.5s;
}

.arrow-steps .step.current {
	color: #fff;
	background-color: #23468c;
}

.arrow-steps .step.current a{
	color: #fff;
}

.arrow-steps .step.current:after {
	border-left: 17px solid #23468c;
}

.clearfix:after {
    clear: both;
    content: "";
    display: block;
    height: 0;
}
</style>

<div class="arrow-steps clearfix">
    <div class="step "> <span> 1. Pendaftaran <br></span> </div>
    <div class="step "> <span> 2. Kelulusan<br></span> </div>
    <div class="step "> <a href=""><span> 3. Pemberitahuan Mula Kerja<br></span></a> </div>
    <div class="step "> <a href=""><span> 4. Pemeriksaan Interim<br></span></a> </div>
    <div class="step "> <a href=""><span> 5. Pemeriksaan Akhir CCC</span></a> </div>
    <div class="step "> <a href=""><span> 6. Pendepositan CCC</span></a> </div>
</div>
<br>