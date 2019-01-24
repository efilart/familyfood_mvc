<?php

$generate = '';

  if( empty( $content ) ){
	$generate = '<a class="btn-outline blue" href="viewReport?content=1&sn_uid='.$sn_uid.'&sn_date_created='.$sn_date_created.'"><i class="fa fa-file-pdf-o"></i> DOWNLOAD PDF</a>';
    //$generate = '<a target="_blank" href="viewReport?content=1&sn_uid='.$sn_uid.'&sn_date_created='.$sn_date_created.'"><i class="fa fa-file-pdf-o"></i>&nbsp;DOWNLOAD PDF</a>';

  }

$html = <<< EOT

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Session Flow - Nutrition Assessment for Michael Crawford - March 19, 2017</title>

<style>

.demo {

  font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;

  width: 100%;

  border: 1px solid #C0C0C0;

  border-collapse: collapse;

  padding: 10px;

  margin-top: 20px;

  table-layout: fixed;

}

.demo th {

  border: 1px solid #C0C0C0;

  padding: 10px;

  background: #F0F0F0;

  width:50%;

}

.demo .3-col th {

  width:33%;

}

.demo tr {

  text-align: left;

}

.demo td {

  border: 1px solid #C0C0C0;

  padding: 10px;

  vertical-align:text-top;

}

a {

  text-decoration:none;

  color: #808080 !important;

}

p, h1, h2, h3, h4, h5, h6 {

  font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;

}

p.h3 {

  font-size: 15px;

  font-weight: 700;

  color: #000000;

}

p.table_title {

  color: blue;

  font-size: 20px;

  font-weight: 600;

}

.selected {

  color: #000000;

  border: 2px solid;

  padding: 10px;

  font-weight:700;

}

#dynamic, p {

  color: #ccc

}

.normal {

  color: #000;

}

.btn-outline {

    background-color: transparent;

    color: inherit;

    transition: all .5s;

        display: inline-block;

    padding: 6px 12px;

    margin-bottom: 0;

    font-size: 14px;

    font-weight: normal;

    line-height: 1.428571429;

    text-align: center;

    white-space: nowrap;

    vertical-align: middle;

    cursor: pointer;

    background-image: none;

    border: 1px solid #808080;

    border-radius: 4px;

    -webkit-user-select: none;

    -moz-user-select: none;

    -ms-user-select: none;

    -o-user-select: none;

    user-select: none;

}

.blue {
	background-color: #62a8ea;
	color: #ffffff !important;
}

.break {

  box-decoration-break: slice;

}

</style>

<script src="https://use.fontawesome.com/286c52578e.js"></script>

</head>

<body class="dashboard site-menubar-unfold" data-auto-menubar="false">

<a name="top"></a>

<div id="test">
<h1 style="color: green">Michael Crawford - March 19, 2017 / Nutrition Assessment</h1>
<p><a class="btn-outline" href="#p1">Nutrition Assessment</a> <a class="btn-outline" href="#p2">Diagnosis</a> <a class="btn-outline" href="#p3">Intervention</a> <a class="btn-outline" href="#p4">Goal Setting</a> {$generate}</p>
<a name="p1"></a>
<table class="demo">

<!--caption>Table 1</caption-->

<thead>

<tr><p class="table_title">Client Priorities and Values</p>

<p class="normal">To set the agenda for our meeting today, I'd first like to spend some time discussing the health and personal goals that are most important to you.</p></tr>

<tr><th>Looking at the short term, what would you like to achieve or accomplish with your health within this year?<br></th></tr>

</thead>

<tbody>

<tr>

<td>{$session_note_details['sn_quest4']}</td>

</tr>

</tbody>

</table>
<table class="demo">

<!--caption>Table 1</caption-->

<thead>

<tr><th>On a scale of 1 to 10, how confident are you that you will reach your goals?</th></tr>

</thead>

<tbody>

<tr>

<td>{$session_note_details['sn_score']}</td>

</tr>

</tbody>

</table>
<table class="demo">

<!--caption>Table 1</caption-->

<thead>

<tr><th>In the next 2-5 years? In the next 10+ years?</th></tr>

</thead>

<tbody>

<tr>

<td>{$session_note_details['sn_quest5']}</td>

</tr>

</tbody>

</table>
<table class="demo">

<!--caption>Table 1</caption-->

<thead>

<tr><th>Is there any particular topic you want me to be sure to cover in our time together?</th></tr>

</thead>

<tbody>

<tr>

<td>{$session_note_details['sn_quest6']}</td>

</tr>

</tbody>

</table>
<table class="demo">

<!--caption>Table 1</caption-->

<thead><tr><th>What strategies have you used in the past to address your goals and what were the outcomes?</th></tr></thead>

<tbody>

<tr>

<td>{$session_note_details['sn_quest8']}</td>

</tr>

</tbody>

</table>
<table class="demo">

  <thead>

  <tr>

  <th colspan="2">

    <p class="table_title">Client’s Health Status</p>

    <p class="normal">Given your goals and priorities, it is important to review your current and past experiences with health, food, and nutrition. Is it okay if I ask you some questions about your current health and routines?</p>

  </th>

  </tr>

  <tr>

    <th>Describe your health in the past.</th>

    <th>Do you "Know Your Numbers?</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>{$session_note_details['sn_quest12']}</td>

    <td>{$session_note_details['sn_quest13']}</td>

  </tr>

  </tbody>

</table>
<table class="demo">

  <thead>

  <tr>

    <th>Tell me about medications that you take regularly.</th>

    <th>Any Supplements?</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>{$session_note_details['sn_quest14']}</td>

    <td>{$session_note_details['sn_quest15']}</td>

  </tr>

  </tbody>

</table>
<table class="demo">

  <thead>

  <tr>

    <th>Do you have any food allergies or intolerances?</th>

    <th>Do you have a primary care physician?</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>{$session_note_details['sn_quest16']}</td>

    <td>{$session_note_details['sn_quest17']}</td>

  </tr>

  </tbody>

</table>
<table class="demo">

  <thead>

  <tr>

    <th>Tell me about your physical activity routine.</th>

    <th>While each day differs, describe a typical day of eating for me.</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>{$session_note_details['sn_quest18']}</td>

    <td>{$session_note_details['sn_quest19']}</td>

  </tr>

  </tbody>

</table>
<table class="demo">

<!--caption>Table 1</caption-->

<thead><tr><th>Knowing your vision for your future, let's examine your weight history. Describe your weight in the past.</th></tr></thead>

<tbody>

<tr>

<td>{$session_note_details['sn_quest20']}</td>

</tr>

</tbody>

</table>
<table class="demo">

  <thead>

  <tr><th colspan="3"><p class="table_title">Body Mass Index</p></th></tr>

  <tr>

    <th>Height</th>

    <th>Weight</th>

    <th>BMI</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>{$dietAdvice['da_height']}</td>

    <td>{$dietAdvice['da_weight']}</td>

    <td>{$dietAdvice['da_bmi']}</td>

  </tr>

  </tbody>

    <thead>

  <tr>

    <th colspan="3">Met Nutritional Goal</th>

  </tr>

  </thead>

    <tbody>

  <tr>

    <td colspan="3">{$dietAdvice['da_goalMet']}</td>

  </tr>

  </tbody>

</table>
<table class="demo">

  <thead>

  <tr><th colspan="2"><p class="table_title">Blood Pressure</p></th></tr>

  <tr>

    <th>Systolic</th>

    <th>Diastolic</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>{$dietAdvice['da_systolic']}</td>

    <td>{$dietAdvice['da_diastolic']}</td>

  </tr>

  </tbody>

</table>
<table class="demo">

  <thead>
	<tr><th colspan="4"><p class="table_title">Body Shape</p></th></tr>

  <tr>

    <th>Pear shape</th>

    <th>Apple shape</th>

    <th>Waist circumference (in)</th>

    <th>Neck circumference (cm)</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  </tbody>

</table>
<br /><br /><br />
<table class="demo">

  <tbody>

  <thead>

  <tr><th colspan="3"><p class="table_title">Typical Day of Eating</p></th></tr>

  <tr>

    <th>Whole Grains / Day</th>

    <th>Vegetables / Day</th>

    <th>Fruit / Day</th>

  </tr>

  </thead>

  

  <tr>

    <td>{$dietAdvice['da_whole_grains']}</td>

    <td>{$dietAdvice['da_vegetables']}</td>

    <td>{$dietAdvice['da_fruit']}</td>

  </tr>

    <thead>

  <tr>

    <th>Low Fat Dairy / Day</th>

    <th>Fish / Week</th>

    <th>Water-Cups / Day</th>

  </tr>

  </thead>

  <tr>

    <td>{$dietAdvice['da_dairy']}</td>

    <td>{$dietAdvice['da_fish']}</td>

    <td>{$dietAdvice['da_water']}</td>

  </tr>

</tbody>

</table>
<table class="demo">

  <thead>

  <tr><th colspan="2"><p class="table_title">Physical Activity Days / Week</p></th></tr>

  <tr>

    <!-- <th>Days per week / Notes</th> -->

    <th>Nutrition Goal</th>

    <th>Physical Goal</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <!-- <td>3<hr />Lorem ipsum dolor.</td> -->

    <td>{$dietAdvice['da_nutritionalGoal']}</td>

    <td>{$dietAdvice['da_physicalGoal']}</td>

  </tr>

  </tbody>

</table>
<p class="table_title">Recommendations and Education</p>
<p class="normal">Thank you for that information! May I share with you some strategies that work for others who have goals and routines similar to yours? Everything I recommend to you will be evidence-based which will increase your chances of success!</p>

<a name="p4"></a>

<table class="demo">

<!--caption>Table 1</caption-->

<thead>

<tr><th><p class="table_title">Goal Setting</p></th></tr>

<tr><th>Now out of all these options we discussed, which changes do you think are best for you at this time?</th></tr>

</thead>

<tbody>

<tr><td>{$dietAdvice['da_q1']}</td></tr>

<tr><th>Social Goal</th></tr>

<tr><td>{$dietAdvice['da_socialGoal']}</td></tr>

</tbody>

</table>
<table class="demo">

  <thead>

  <tr><th>What changes have taken place since last visit?</th></tr>

  </thead>

  <tbody>

  <tr><td>{$dietAdvice['da_q2']}</td></tr>

  </tbody>

</table>
<table class="demo">

  <thead>

  <tr><th>What is working well?</th></tr>

  </thead>

  <tbody>

  <tr><td>{$dietAdvice['da_q3']}</td></tr>

  </tbody>

</table>
<table class="demo">

  <thead>

  <tr><th>What barriers have you encountered?</th></tr>

  </thead>

  <tbody>

  <tr><td>{$dietAdvice['da_q4']}</td></tr>

  </tbody>

</table>
<a name="p2"></a>
<!-- diagnosis -->
<h1 style="color: green">Michael Crawford - March 19, 2017 / Diagnosis</h1>
<p><a class="btn-outline" href="#p1">Nutrition Assessment</a> <a class="btn-outline" href="#p2">Diagnosis</a> <a class="btn-outline" href="#p3">Intervention</a> <a class="btn-outline" href="#p4">Goal Setting</a> <a class="btn-outline" href="#top"><i class="fa fa-bookmark"></i> Back to top</a></p>
<p class="normal">Each term is designated with an alpha-numeric NCPT hierarchical code, followed by a five-digit (e.g., 99999) Academy SNOMED CT/LOINC unique identifier (ANDUID). Neither should be used in nutrition documentation. The ANDUID is for data tracking purposes in electronic health records.</p>
<!-- start 1_1 to 3_2 -->
<table class="demo">

<thead>

  <tr><th>1 Intake (NI)</th>

    <th>2 Oral / Nutrition Support Intake</th>

    <th>3 Fluid Intake</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>

<p id="1_1">Increased energy expenditure NI-1.1 10633</p>

<p id="1_2">Inadequate energy intake NI-1.2 10634</p>

<p id="1_3">Excessive energy intake NI-1.3 10635</p>

<p id="1_4">Predicted inadequate energy intake NI-1.4 10636</p>

<p id="1_5">Predicted excessive energy intake NI-1.5 10637</p>

<hr />

<h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

<p>Lorem ipsum dolor.</p> 

<h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p>

    </td>

    <td>

<p id="2_1">Inadequate oral intake NI-2.1 10639</p>

<p id="2_2">Excessive oral intake NI-2.2 10640</p>

<p id="2_3">Inadequate enteral nutrition infusion NI-2.3 10641</p>

<p id="2_4">Excessive enteral nutrition infusion NI-2.4 10642</p>

<p id="2_5">Enteral nutrition composition inconsistent with needs NI-2.5 11142</p>

<p id="2_6">Enteral nutrition administration inconsistent with needs NI-2.6 11143</p>

<p id="2_7">Inadequate parenteral nutrition infusion NI-2.7 10644</p>

<p id="2_8">Excessive parenteral nutrition infusion NI-2.8 10645</p>

<p id="2_9">Parenteral nutrition composition inconsistent with needs NI-2.9 11144</p>

<p id="2_10">Parenteral nutrition administration inconsistent with needs NI-2.10 11145</p>

<p id="2_11">Limited food acceptance NI-2.11 10647</p>

<hr />

<h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

  <p>Lorem ipsum dolor.</p>

  <h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p>

    </td>

    <td>

<p id="3_1">Inadequate fluid intake NI-3.1 10649</p>

<p id="3_2">Excessive fluid intake NI-3.2 10650</p>

<hr />

<h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

  <p>Lorem ipsum dolor.</p> 

  <h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p>

    </td>

  </tr>

  </tbody>

</table>
<!-- start 4_1_1 to 5_8_6 -->
<table class="demo">

<thead>

  <tr>

  <th>4 Bioactive Substances</th>

  <th>5 Nutrient</th>

  <th>5.5 Fat and Cholesterol</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>

<p class="h3">Inadequate bioactive substance intake NI-4.1 10859</p>

<p id="4_1_1">Inadequate plant stanol ester intake NI-4.1.1 11077</p>

<p id="4_1_2">Inadequate plant sterol ester intake NI-4.1.2 11078</p>

<p id="4_1_3">Inadequate soy protein intake NI-4.1.3 11080</p>

<p id="4_1_4">Inadequate psyllium intake NI-4.1.4 11079</p>

<p id="4_1_5">Inadequate β-glucan intake NI-4.1.5 11076</p>

<hr>

<p class="h3">Excessive bioactive substance intake</p>

<p id="4_2_1">Excessive plant stanol ester intake NI-4.2.1 11084</p>

<p id="4_2_2">Excessive plant sterol ester intake NI-4.2.2 11085</p>

<p id="4_2_3">Excessive soy protein intake NI-4.2.3 11087</p>

<p id="4_2_4">Excessive psyllium intake NI-4.2.4 11086</p>

<p id="4_2_5">Excessive β-glucan intake NI-4.2.5 11081</p>

<p id="4_2_6">Excessive food additive intake NI-4.2.6 11083</p>

<p id="4_2_7">Excessive caffeine intake NI-4.2.7 11082</p>

<p id="4_3">Excessive alcohol intake NI-4.3 10654</p>

<hr />

<h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

  <p>Lorem ipsum dolor.</p>

<h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p>

    </td>

    <td>

<p id="5_1">Increased nutrient needs NI-5.1 10656</p>

<p id="5_2">Inadequate protein-energy intake NI-5.2 10658</p>

<p id="5_3">Decreased nutrient needs NI-5.3 10659</p>

<p id="5_4">Imbalance of nutrients NI-5.4 10660</p>

<hr />

<h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

  <p>Lorem ipsum dolor.</p>

  <h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p>

    </td>

    <td>

<p id="5_5_1">Inadequate fat intake NI-5.5.1 10662</p>

<p id="5_5_2">Inadequate protein-energy intake NI-5.5.2 10658</p>

<p id="5_5_3">Intake of types of fats inconsistent with needs NI-5.5.3 10854</p>

<hr />

<h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

  <p>Lorem ipsum dolor.</p>

  <h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p>

    </td>

  </tr>

  </tbody>

</table>
<!-- start 5_6_1 to 5_8_6 -->
<table class="demo">

<thead>

  <tr>

  <th>5.6 Protein</th>

  <th>5.7 Amino Acid</th>

  <th>5.8 Carbohydrate and Fiber</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>

<p id="5_6_1">Inadequate protein intake NI-5.6.1 10666</p>

<p id="5_6_2">Excessive protein intake NI-5.6.2 10667</p>

<p id="5_6_3">Intake of types of proteins inconsistent with needs NI-5.6.3 10855</p>

<hr />

<h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

<p>Lorem ipsum dolor.</p> 

<h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p>

    </td>

    <td>

<p id="5_7_1">Intake of types of amino acids inconsistent with needs NI-5.7.1 12007</p>

<hr />

<h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

  <p>Lorem ipsum dolor.</p>

  <h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p>

    </td>

    <td>

<p id="5_8_1">Inadequate carbohydrate intake NI-5.8.1 10670</p>

<p id="5_8_2">Excessive carbohydrate intake NI-5.8.2 10671</p>

<p id="5_8_3">Intake of types of carbohydrate inconsistent with needs NI-5.8.3 10856</p>

<p id="5_8_4">Inconsistent carbohydrate intake NI-5.8.4 10673</p>

<p id="5_8_5">Inadequate fiber intake NI-5.8.5 10675</p>

<p id="5_8_6">Excessive fiber intake NI-5.8.6 10676</p>

<hr />

<h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

  <p>Lorem ipsum dolor.</p> 

  <h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p>

    </td>

  </tr>

  </tbody>

</table>
<!-- start 5_9 -->
<table class="demo">

<thead>

  <tr>

  <th>5.9 Vitamin</th>

  <th>5.10 Mineral</th>

  <th>5.11 Multi-Nutrient</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>

    <h3 id="5_9_1">Inadequate vitamin intake (specify) NI-5.9.1 10678</h3>

<p id="5_9_1_1">A (1) 10679</p>

<p id="5_9_1_2">C (2) 10680</p>

<p id="5_9_1_3">D (3) 10681</p>

<p id="5_9_1_4">E (4) 10682</p>

<p id="5_9_1_5">K (5) 10683</p>

<p id="5_9_1_6">Thiamin (6) 10684</p>

<p id="5_9_1_7">Riboflavin (7) 10685</p>

<p id="5_9_1_8">Niacin (8) 10686</p>

<p id="5_9_1_9">Folate (9) 10687</p>

<p id="5_9_1_10">B6 (10) 10688</p>

<p id="5_9_1_11">B12 (11) 10689</p>

<p id="5_9_1_12">Pantothenic acid (12) 10690</p>

<p id="5_9_1_13">Biotin (13) 10691</p>

<h3 id="5_9_2">Excessive vitamin intake (specify) NI-5.9.2 10693</h3>

<p id="5_9_2_2">A (1) 10694</p>

<p id="5_9_2_3">C (2) 10695</p>

<p id="5_9_2_4">D (3) 10696</p>

<p id="5_9_2_5">E (4) 10697</p>

<p id="5_9_2_6">K (5) 10698</p>

<p id="5_9_2_7">Thiamin (6) 10699</p>

<p id="5_9_2_8">Riboflavin (7) 10700</p>

<p id="5_9_2_9">Niacin (8) 10701</p>

<p id="5_9_2_10">Folate (9) 10702</p>

<p id="5_9_2_11">B6 (10) 10703</p>

<p id="5_9_2_12">B12 (11) 10704</p>

<p id="5_9_2_13">Pantothenic acid (12) 10705</p>

<p id="5_9_2_14">Biotin (13) 10706</p>

<!--hr />

<h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

<p>Lorem ipsum dolor.</p> 

<h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p-->

    </td>

    <td>

<h3 id="5_10_1">Inadequate mineral intake (specify) NI-5.10.1 10709</h3>

<p id="5_10_1_1">Calcium (1) 10710</p>

<p id="5_10_1_2">Chloride (2) 10711</p>

<p id="5_10_1_3">Iron (3) 10712</p>

<p id="5_10_1_4">Magnesium (4) 10713</p>

<p id="5_10_1_5">Potassium (5) 10714</p>

<p id="5_10_1_6">Phosphorus (6) 10715</p>

<p id="5_10_1_7">Sodium (7) 10716</p>

<p id="5_10_1_8">Zinc (8) 10717</p>

<p id="5_10_1_9">Sulfate (9) 10718</p>

<p id="5_10_1_10">Fluoride (10) 10719</p>

<p id="5_10_1_11">Copper (11) 10720</p>

<p id="5_10_1_12">Iodine (12) 10721</p>

<p id="5_10_1_13">Selenium (13) 10722</p>

<p id="5_10_1_14">Manganese (14) 10723</p>

<p id="5_10_1_15">Chromium (15) 10724</p>

<p id="5_10_1_16">Molybdenum (16) 10725</p>

<p id="5_10_1_17">Boron (17) 10726</p>

<p id="5_10_1_18">Cobalt (18) 10727</p>

<h3 id="5_10_2">Excessive mineral intake (specify) NI-5.10.2 10729</h3>

<p id="5_10_2_1">Calcium (1) 10730</p>

<p id="5_10_2_2">Chloride (2) 10731</p>

<p id="5_10_2_3">Iron (3) 10732</p>

<p id="5_10_2_4">Magnesium (4) 10733</p>

<p id="5_10_2_5">Potassium (5) 10734</p>

<p id="5_10_2_6">Phosphorus (6) 10735</p>

<p id="5_10_2_7">Sodium (7) 10736</p>

<p id="5_10_2_8">Zinc (8) 10737</p>

<p id="5_10_2_9">Sulfate (9) 10738</p>

<p id="5_10_2_10">Fluoride (10) 10739</p>

<p id="5_10_2_11">Copper (11) 10740</p>

<p id="5_10_2_12">Iodine (12) 10741</p>

<p id="5_10_2_13">Selenium (13) 10742</p>

<p id="5_10_2_14">Manganese (14) 10743</p>

<p id="5_10_2_15">Chromium (15) 10744</p>

<p id="5_10_2_16">Molybdenum (16) 10745</p>

<p id="5_10_2_17">Boron (17) 10746</p>

<p id="5_10_2_18">Cobalt (18) 10747</p>

<!--hr />

<h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

  <p>Lorem ipsum dolor.</p>

  <h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p-->

    </td>

    <td>

<p id="5_11_1">Predicted inadequate nutrient intake NI-5.11.1 10750</p>

<h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

<hr />

<p id="5_11_2">Predicted excessive nutrient intake NI-5.11.2 10751</p>

<h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

<!--h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

  <p>Lorem ipsum dolor.</p> 

  <h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p-->

    </td>

  </tr>

  </tbody>

</table>
<!-- start 4_1_1 to 5_5_3 -->
<table class="demo">

<thead>

  <tr>

  <th colspan="3">

  <p class="table_title">Clinical (NC)</p>

  <p class="normal">Nutritional findings/problems identified that relate to medical or physical conditions</p>

  </th>

  </tr>

  <tr>

  <th>1 Functional</th>

  <th>2 Biochemical</th>

  <th>3 Weight</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>

<p class="normal">Change in physical or mechanical functioning that interferes with or prevents desired nutritional consequences</p>
<p id="NC_1_1">Swallowing difficulty NC-1.1 10754</p>
<p id="NC_1_2">Biting/Chewing (masticatory) difficulty NC-1.2 10755</p>
<p id="NC_1_3">Breastfeeding difficulty NC-1.3 10756</p>
<p id="NC_1_4">Altered GI function NC-1.4 10757</p>
<p id="NC_1_5">Predicted breastfeeding difficulty NC-1.5 11146</p>
<hr />
<h4>Etiologies:</h4>
<p>Lorem ipsum dolor.</p>
<h4>Signs / Symptoms:&nbsp;</h4>
<p>Lorem ipsum dolor.</p> 
<h4>Diagnosis status:</h4>
<p>Lorem ipsum dolor.</p>

    </td>

    <td>

<p class="normal">Change in capacity to metabolize nutrients as a result of medications, surgery, or as indicated by altered laboratory values</p>

<p id="NC_2_1">Impaired nutrient utilization NC-2.1 10759</p>

<p id="NC_2_2">Altered nutrition-related laboratory values NC-2.2 10760</p>

<h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

<p id="NC_2_3">Food–medication interaction NC-2.3 10761</p>

<h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

<p id="NC_2_4">Predicted food–medication interaction NC-2.4 10762</p>

<h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

<!--h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

  <p>Lorem ipsum dolor.</p>

  <h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p-->

    </td>

    <td>

  <p class="normal">Chronic weight or changed weight status when compared with usual or desired body weight</p>

<p id="NC_3_1">Underweight NC-3.1 10764</p>

<p id="NC_3_2">Unintended weight loss NC-3.2 10765</p>

<h3 id="NC_3_3">Overweight/obesity NC-3.3 10766</h3>

<p id="NC_3_3_1">Overweight, adult or pediatric NC-3.3.1 10767</p>

<p id="NC_3_3_2">Obese, pediatric NC-3.3.2 10768</p>

<p id="NC_3_3_3">Obese, Class I NC-3.3.3 10769</p>

<p id="NC_3_3_4">Obese, Class II NC-3.3.4 10818</p>

<p id="NC_3_3_5">Obese, Class III NC-3.3.5 10819</p>

<p id="NC_3_4">Unintended weight gain NC-3.4 10770</p>

<p id="NC_3_5">Growth rate below expected NC-3.5 10802</p>

<p id="NC_3_6">Excessive growth rate NC-3.6 10803</p>

<!--h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

  <p>Lorem ipsum dolor.</p> 

  <h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p-->

    </td>

  </tr>

  </tbody>

</table>
<table class="demo">

<thead>

  <tr>

  <th>4 Malnutrition Disorders</th>

  <th>1 Other</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>

<h3 id="NC_4_1">Malnutrition NC-4.1 10657</h3>

<p id="NC_4_1_1">Starvation related malnutrition NC-4.1.1 11130</p>

<p id="NC_4_1_2">Chronic disease or condition related malnutrition NC-4.1.2 11131</p>

<p id="NC_4_1_3">Acute disease or injury related malnutrition NC-4.1.3 11132</p>

<!--hr />

<h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

<p>Lorem ipsum dolor.</p> 

<h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p-->

    </td>



    <td>

<p id="NO_1_1">No nutrition diagnosis at this time NO-1.1 10795</p>

<!--hr />

<h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Etiologies:</h4>

<p>Lorem ipsum dolor.</p>

<h4>Signs / Symptoms:&nbsp;</h4>

<p>Lorem ipsum dolor.</p> 

<h4>Diagnosis status:</h4>

<p>Lorem ipsum dolor.</p-->

    </td>

  </tr>

  </tbody>

</table>
<table class="demo">
<thead>
<tr>
<th colspan="3">
<p class="table_title">Behavioral-Environmental (NB)</p>
<p class="normal">Nutritional findings/problems identified that relate to knowledge, attitudes/beliefs, physical environment, access to food, or food safety</p>
</th>
</tr>
<tr>
<th>1 Knowledge and Beliefs</th>
<th>2 Physical Activity and Function</th>
<th>3 Food Safety and Access (3)</th>
</tr>
<tr>

<td>
<p {$NB_1_1}>Food- and nutrition-related knowledge deficit NB-1.1 10773</p>
<p {$NB_1_2}>Unsupported beliefs/attitudes about food- or nutrition-related topics (use with caution) NB-1.2 10857</p>
<p {$NB_1_3}>Not ready for diet/lifestyle change NB-1.3 10775</p>
<p {$NB_1_4}>Self-monitoring deficit NB-1.4 10776</p>
<p {$NB_1_5}>>Disordered eating pattern NB-1.5 10777</p>
<p {$NB_1_6}>Limited adherence to nutrition-related recommendations NB-1.6 10778</p>
<p {$NB_1_7}>Undesirable food choices NB-1.7 10779</p>
<hr>
<h4>Etiologies:</h4>
<p>Lorem</p>
<h4>Signs/Symptoms:</h4>
<p>Lorem</p>
<h4>Diagnosis Status:</h4>
<p>Continued</p>
</td>

<td>
<p {$NB_2_1}>Physical inactivity NB-2.1 10782</p>
<p {$NB_2_2}>Excessive physical activity NB-2.2 10783</p>
<p {$NB_2_3}>Inability to manage self-care NB-2.3 10780</p>
<p {$NB_2_4}>Impaired ability to prepare foods/meals NB-2.4 10785</p>
<p {$NB_2_5}>Poor nutrition quality of life NB-2.5 10786</p>
<p {$NB_2_6}>Self-feeding difficulty NB-2.6 10787</p>
<hr>
<h4>Etiologies:</h4>
<p>Lorem</p>
<h4>Signs/Symptoms:</h4>
<p>Lorem</p>
<h4>Diagnosis Status:</h4>
<p>Continued</p>
</td>

<td>
<p {$NB_3_1}>Intake of unsafe food NB-3.1 10789</p>
<p {$NB_3_2}>Limited access to food NB-3.2 12009</p>
<p {$NB_3_3}>Limited access to nutrition-related supplies NB-3.3 10791</p>
<p {$NB_3_4}>Limited access to potable water NB-3.4 12010</p>
<hr>
<h4>Etiologies:</h4>
<p>Lorem</p>
<h4>Signs/Symptoms:</h4>
<p>Lorem</p>
<h4>Diagnosis Status:</h4>
<p>Continued</p>

</td>

</tr>
</thead>
</table>
<table class="demo">
<thead>
<tr>
<th colspan="1">
<p class="table_title">Other (NO)</p>
<p class="normal">Nutrition findings that are not classified as intake, clinical or behavioral-environmental problems.</p>
</th>
</tr>
<tr>
<th>1 Knowledge and Beliefs</th>
</tr>
<tr>

<td>
<p {$NO_1_1}>No nutrition diagnosis at this time NO-1.1 10795</p>
<hr>
<h4>Etiologies:</h4>
<p>Lorem</p>
<h4>Signs/Symptoms:</h4>
<p>Lorem</p>
<h4>Diagnosis Status:</h4>
<p>Continued</p>
</td>

</tr>
</thead>
</table>
<a name="p3"></a>
<div id="p3" class="break">
<!-- intervention -->
<table class="demo">

<thead>

  <tr><th colspan="3"><h1 style="color: green">Michael Crawford - March 19, 2017 / Intervention</h1><br />

<p class="table_title">Food and/or Nutrient Delivery (ND)</p></th></tr>

  <tr><th>1 Meals and Snacks</th>

    <th>2 Enteral and Parenteral Nutrition</th>

    <th>3 Nutrition Supplement Therapy</th>

  </tr>

  </thead>

  <tbody>

<tr>

    <td>

<p class="normal">Regular eating episode (meal); food served between regular meals (snack).</p>

<p {$IDENTIFIER_1_1}>General/healthful diet ND-1.1 10489</p>

<p {$IDENTIFIER_1_2}>Modify composition of meals/snacks ND-1.2 10828</p>

<p {$IDENTIFIER_1_2_1}>Texture-modified diet (1) ND-1.2.1 10829</p>

<p {$IDENTIFIER_1_2_1_1}>Easy to chew diet ND-1.2.1.1 10914</p>

<p {$IDENTIFIER_1_2_1_2}>Mechanically altered diet ND-1.2.1.2 10915</p>

<p {$IDENTIFIER_1_2_1_3}>Pureed diet ND-1.2.1.3 10916</p>

<p {$IDENTIFIER_1_2_1_4}>Liquid consistency-thin liquids ND-1.2.1.4 10865</p>

<p {$IDENTIFIER_1_2_1_5}>Liquid consistency-nectar thick liquids ND-1.2.1.5 10866</p>

<p {$IDENTIFIER_1_2_1_6}>Liquid consistency-honey thick liquids ND-1.2.1.6 10867</p>

<p {$IDENTIFIER_1_2_1_7}>Liquid consistency-spoon thick liquids ND-1.2.1.7 10868</p>

<p {$IDENTIFIER_1_2_2}>Energy-modified diet (2) ND-1.2.2 10830</p>

<p {$IDENTIFIER_1_2_2_1}>Increased energy diet ND-1.2.2.1 10935</p>

<p {$IDENTIFIER_1_2_2_2}>Decreased energy diet ND-1.2.2.2 10936</p>

<p {$IDENTIFIER_1_2_3}>Protein-modified diet (3) ND-1.2.3 10831</p>

<p {$IDENTIFIER_1_2_3_1}>Consistent protein diet ND-1.2.3.1 10896</p>

<p {$IDENTIFIER_1_2_3_2}>Increased protein diet ND-1.2.3.2 10972</p>

<p {$IDENTIFIER_1_2_3_3}>Decreased protein diet ND-1.2.3.3 10973</p>

<p {$IDENTIFIER_1_2_3_4}>Decreased casein diet ND-1.2.3.4 10999</p>

<p {$IDENTIFIER_1_2_3_5}>Decreased gluten diet ND-1.2.3.5 11000</p>

<p {$IDENTIFIER_1_2_3_5_1}>Gluten free diet ND-1.2.3.5.1 11027</p>

<p {$IDENTIFIER_1_2_3_6}>Amino acid modified diet ND-1.2.3.6 10897</p>

<p {$IDENTIFIER_1_2_3_6_1}>Arginine modified diet ND-1.2.3.6.1 10898</p>

<p {$IDENTIFIER_1_2_3_6_1_1}>Increased arginine diet ND-1.2.3.6.1.1 10974</p>

<p {$IDENTIFIER_1_2_3_6_1_2}>Decreased arginine diet ND-1.2.3.6.1.2 10975</p>

<p {$IDENTIFIER_1_2_3_6_2}>Glutamine modified diet ND-1.2.3.6.2 10899</p>

<p {$IDENTIFIER_1_2_3_6_2_1}>Increased glutamine diet ND-1.2.3.6.2.1 10976</p>

<p {$IDENTIFIER_1_2_3_6_2_2}>Decreased glutamine diet ND-1.2.3.6.2.2 10977</p>

<p {$IDENTIFIER_1_2_3_6_3}>Histidine modified diet ND-1.2.3.6.3 10900</p>

<p {$IDENTIFIER_1_2_3_6_3_1}>Increased histidine diet ND-1.2.3.6.3.1 10978</p>

<p {$IDENTIFIER_1_2_3_6_3_2}>Decreased histidine diet ND-1.2.3.6.3.2 10979</p>

<p {$IDENTIFIER_1_2_3_6_4}>Increased homocysteine diet ND-1.2.3.6.4 10980</p>

<p {$IDENTIFIER_1_2_3_6_5}>Isoleucine modified diet ND-1.2.3.6.5 10902</p>

<p {$IDENTIFIER_1_2_3_6_5_1}>Increased isoleucine diet ND-1.2.3.6.5.1 10981</p>

<p {$IDENTIFIER_1_2_3_6_5_2}>Decreased isoleucine diet ND-1.2.3.6.5.2 10982</p>

<p {$IDENTIFIER_1_2_3_6_6}>Lecine modified diet ND-1.2.3.6.6 10903</p>

<p {$IDENTIFIER_1_2_3_6_6_1}>Increased leucine diet ND-1.2.3.6.6.1 10983</p>

<p {$IDENTIFIER_1_2_3_6_6_2}>Decreased leucine diet ND-1.2.3.6.6.2 10984</p>

<p {$IDENTIFIER_1_2_3_6_7}>Lysine modified diet ND-1.2.3.6.7 10904</p>

<p {$IDENTIFIER_1_2_3_6_7_1}>Increased lysine diet ND-1.2.3.6.7.1 10985</p>

<p {$IDENTIFIER_1_2_3_6_7_2}>Decreased lysine diet ND-1.2.3.6.7.2 10986</p>

<p {$IDENTIFIER_1_2_3_6_8}>Methionine modified diet ND-1.2.3.6.8 10905</p>

<p {$IDENTIFIER_1_2_3_6_8_1}>Increased methionine diet ND-1.2.3.6.8.1 10987</p>

<p {$IDENTIFIER_1_2_3_6_8_2}>Decreased methionine diet ND-1.2.3.6.8.2 10988</p>

    </td>



    <td>

<p {$IDENTIFIER_2_1}>Enteral Nutrition (2.1)</p>

<p {$IDENTIFIER_2_1_1}>Modify composition of enteral nutrition ND-2.1.1 10503</p>

<p {$IDENTIFIER_2_1_2}>Modify concentration of enteral nutrition ND-2.1.2 10502</p>

<p {$IDENTIFIER_2_1_3}>Modify rate of enteral nutrition ND-2.1.3 10500</p>

<p {$IDENTIFIER_2_1_4}>Modify volume of enteral nutrition ND-2.1.4 10501</p>

<p {$IDENTIFIER_2_1_5}>Modify schedule of enteral nutrition ND-2.1.5 10504</p>

<p {$IDENTIFIER_2_1_6}>Modify route of enteral nutrition ND-2.1.6 10792</p>

<p {$IDENTIFIER_2_1_7}>Insert enteral feeding tube ND-2.1.7 10497</p>

<p {$IDENTIFIER_2_1_8}>Enteral nutrition site care ND-2.1.8 10498</p>

<p {$IDENTIFIER_2_1_9}>Feeding tube flush ND-2.1.9 10499</p>

<p {$IDENTIFIER_2_2}>Parenteral Nutrition/IV Fluids (2.2)</p>

<p {$IDENTIFIER_2_2_1}>Modify composition of parenteral nutrition ND-2.2.1 10511</p>

<p {$IDENTIFIER_2_2_2}>Modify concentration of parenteral nutrition ND-2.2.2 10510</p>

<p {$IDENTIFIER_2_2_3}>Modify rate of parenteral nutrition ND-2.2.3 10509</p>

<p {$IDENTIFIER_2_2_4}>Modify volume of parenteral nutrition ND-2.2.4 11141</p>

<p {$IDENTIFIER_2_2_5}>Modify schedule of parenteral nutrition ND-2.2.5 10512</p>

<p {$IDENTIFIER_2_2_6}>Modify route of parenteral nutrition ND-2.2.6 10793</p>

<p {$IDENTIFIER_2_2_7}>Parenteral nutrition site care ND-2.2.7 10507</p>

<p {$IDENTIFIER_2_2_8}>IV fluid delivery ND-2.2.8 10508</p>

<!--hr />

<h4>Details:</h4>

<p>Lorem ipsum dolor.</p-->

    </td>

    <td>

<p {$IDENTIFIER_3_1}>Medical Food Supplement Therapy (3.1)</p>

<p {$IDENTIFIER_3_1_1}>Commercial beverage ND-3.1.1 10515</p>

<p {$IDENTIFIER_3_1_2}>Commercial food ND-3.1.2 10516</p>

<p {$IDENTIFIER_3_1_3}>Modified beverage ND-3.1.3 10517</p>

<p {$IDENTIFIER_3_1_4}>Modified food ND-3.1.4 10518</p>

<p {$IDENTIFIER_3_1_5}>Purpose ND-3.1.5 10519</p>

<p {$IDENTIFIER_3_2}>Vitamin and Mineral Supplement Therapy (3.2)</p>

<p {$IDENTIFIER_3_2_1}>Multivitamin/mineral supplement therapy ND-3.2.1 10521</p>

<p {$IDENTIFIER_3_2_2}>Multi-trace element supplement therapy ND-3.2.2 10522</p>

<p {$IDENTIFIER_3_2_3}>Vitamin supplement therapy ND-3.2.3 10523</p>

<p {$IDENTIFIER_3_2_3_1}>A (1) 10524</p>

<p {$IDENTIFIER_3_2_3_2}>C (2) 10525</p>

<p {$IDENTIFIER_3_2_3_3}>D (3) 10526</p>

<p {$IDENTIFIER_3_2_3_4}>E (4) 10527</p>

<p {$IDENTIFIER_3_2_3_5}>K (5) 10528</p>

<p {$IDENTIFIER_3_2_3_6}>Thiamin (6) 10529</p>

<p {$IDENTIFIER_3_2_3_7}>Riboflavin (7) 10530</p>

<p {$IDENTIFIER_3_2_3_8}>Niacin (8) 10531</p>

<p {$IDENTIFIER_3_2_3_9}>Folate (9) 10532</p>

<p {$IDENTIFIER_3_2_3_10}>B6 (10) 10533</p>

<p {$IDENTIFIER_3_2_3_11}>B12 (11) 10534</p>

<p {$IDENTIFIER_3_2_3_12}>Pantothenic acid (12) 10535</p>

<p {$IDENTIFIER_3_2_3_13}>Biotin (13) 10536</p>

<p {$IDENTIFIER_3_2_4}>Mineral supplement therapy ND-3.2.4 10538</p>

<p {$IDENTIFIER_3_2_4_1}>Calcium (1) 10539</p>

<p {$IDENTIFIER_3_2_4_2}>Chloride (2) 10540</p>

<p {$IDENTIFIER_3_2_4_3}>Iron (3) 10541</p>

<p {$IDENTIFIER_3_2_4_4}>Magnesium (4) 10542</p>

<p {$IDENTIFIER_3_2_5}>Potassium (5) 10543</p>

<p {$IDENTIFIER_3_2_6}>Phosphorus (6) 10544</p>

<p {$IDENTIFIER_3_2_7}>Sodium (7) 10545</p>

<p {$IDENTIFIER_3_2_8}>Zinc (8) 10546</p>

<p {$IDENTIFIER_3_2_9}>Sulfate (9) 10547</p>

<p {$IDENTIFIER_3_2_10}>Fluoride (10) 10548</p>

<p {$IDENTIFIER_3_2_11}>Copper (11) 10549</p>

<p {$IDENTIFIER_3_2_12}>Iodine (12) 10550</p>

<p {$IDENTIFIER_3_2_13}>Selenium (13) 10551</p>

<p {$IDENTIFIER_3_2_14}>Manganese (14) 10552</p>

<p {$IDENTIFIER_3_2_15}>Chromium (15) 10553</p>

<p {$IDENTIFIER_3_2_16}>Molybdenum (16) 10554</p>

<p {$IDENTIFIER_3_2_17}>Boron (17) 10555</p>

<p {$IDENTIFIER_3_2_18}>Cobalt (18) 10556</p>

<p {$IDENTIFIER_3_3}>Bioactive Substance Management (3.3)</p>

<p {$IDENTIFIER_3_3_1}>Plant stanol esters ND-3.3.1 10559</p>

<p {$IDENTIFIER_3_3_2}>Plant sterol esters ND-3.3.2 10816</p>

<p {$IDENTIFIER_3_3_3}>Soy protein ND-3.3.3 10561</p>

<p {$IDENTIFIER_3_3_4}>Psyllium ND-3.3.4 10817</p>

<p {$IDENTIFIER_3_3_5}>Glucan ND-3.3.5 10563</p>

<p {$IDENTIFIER_3_3_6}>Food additives (specify) ND-3.3.6 10564</p>

<p {$IDENTIFIER_3_3_7}>Alcohol ND-3.3.7 10565</p>

<p {$IDENTIFIER_3_3_8}>Caffeine ND-3.3.8 10566</p>

<p {$IDENTIFIER_3_3_9}>Other (specify) ND-3.3.9 10567</p>

<h4>Other:</h4>

<p>{$sn3_t1}</p>

    </td>

    </tr>

  </tbody>

</table>
<table class="demo">

<thead>

  <tr><th>1 Meals and Snack</th><th>&nbsp;</th><th></th></tr>

</thead>

<tbody>

  <tr>

    <td>

      <p {$IDENTIFIER_1_2_3_6_9}>Phenylalanine modified diet ND-1.2.3.6.9 10906</p>

      <p {$IDENTIFIER_1_2_3_6_9_1}>Increased phenylalanine diet ND-1.2.3.6.9.1 11971</p>

      <p {$IDENTIFIER_1_2_3_6_9_2}>Decreased phenylalanine diet ND-1.2.3.6.9.2 10989</p>

      <p {$IDENTIFIER_1_2_3_6_10}>Threonine modified diet ND-1.2.3.6.10 10907</p>

      <p {$IDENTIFIER_1_2_3_6_10_1}>Increased threonine diet ND-1.2.3.6.10.1 10990</p>

      <p {$IDENTIFIER_1_2_3_6_10_2}>Decreased threonine diet ND-1.2.3.6.10.2 10991</p>

      <p {$IDENTIFIER_1_2_3_6_11}>Tryptophan modified diet ND-1.2.3.6.11 10908</p>

      <p {$IDENTIFIER_1_2_3_6_11_1}>Increased tryptophan diet ND-1.2.3.6.11.1 10992</p>

      <p {$IDENTIFIER_1_2_3_6__11_2}>Decreased tryptophan diet ND-1.2.3.6.11.2 10993</p>

      <p {$IDENTIFIER_1_2_3_6_12}>Decreased tyramine diet ND-1.2.3.6.12 10994</p>

      <p {$IDENTIFIER_1_2_3_6_13}>Tyrosine modified diet ND-1.2.3.6.13 10910</p>

      <p {$IDENTIFIER_1_2_3_6_13_1}>Increased tyrosine diet ND-1.2.3.6.13.1 10995</p>

      <p {$IDENTIFIER_1_2_3_6_13_2}>Decreased tyrosine diet ND-1.2.3.6.13.2 10996</p>

      <p {$IDENTIFIER_1_2_3_6_14}>Valine modified diet ND-1.2.3.6.14 10911</p>

      <p {$IDENTIFIER_1_2_3_6_14_1}>Increased valine diet ND-1.2.3.6.14.1 10997</p>

      <p {$IDENTIFIER_1_2_3_6_14_2}>Decreased valine diet ND-1.2.3.6.14.2 10998</p>

      <p {$IDENTIFIER_1_2_4}>Carbohydrate-modified diet (4) ND-1.2.4 10832</p>

      <p {$IDENTIFIER_1_2_4_1}>Consistent carbohydrate diet ND-1.2.4.1 10860</p>

      <p {$IDENTIFIER_1_2_4_2}>Increased carbohydrate diet ND-1.2.4.2 10930</p>

      <p {$IDENTIFIER_1_2_4_2_1}>Increased complex carbohydrate diet ND-1.2.4.2.1 11972</p>

      <p {$IDENTIFIER_1_2_4_2_2}>Increased simple carbohydrate diet ND-1.2.4.2.2 11973</p>

      <p {$IDENTIFIER_1_2_4_3}>Decreased carbohydrate diet ND-1.2.4.3 10931</p>

      <p {$IDENTIFIER_1_2_4_3_1}>Decreased complex carbohydrate diet ND-1.2.4.3.1 11974</p>

      <p {$IDENTIFIER_1_2_4_3_2}>Decreased simple carbohydrate diet ND-1.2.4.3.2 11975</p>

      <p {$IDENTIFIER_1_2_4_4}>Galactose modified diet ND-1.2.4.4 10861</p>

      <p {$IDENTIFIER_1_2_4_4_1}>Increased galactose diet ND-1.2.4.4.1 11976</p>

      <p {$IDENTIFIER_1_2_4_4_2}>Decreased galactose diet ND-1.2.4.4.2 10932</p>

      <p {$IDENTIFIER_1_2_4_5}>Lactose modified diet ND-1.2.4.5 10862</p>

      <p {$IDENTIFIER_1_2_4_5_1}>Increased lactose diet ND-1.2.4.5.1 11977</p>

      <p {$IDENTIFIER_1_2_4_5_2}>Decreased lactose diet ND-1.2.4.5.2 10933</p>

      <p {$IDENTIFIER_1_2_4_6}>Fructose modified diet ND-1.2.4.6 11978</p>

      <p {$IDENTIFIER_1_2_4_6_1}>Increased fructose diet ND-1.2.4.6.1 11979</p>

      <p {$IDENTIFIER_1_2_4_6_2}>Decreased fructose diet ND-1.2.4.6.2 11980</p>

      <p {$IDENTIFIER_1_2_5}>Fat-modified diet (5) ND-1.2.5 10833</p>

      <p {$IDENTIFIER_1_2_5_1}>Increased fat diet ND-1.2.5.1 10937</p>

      <p {$IDENTIFIER_1_2_5_2}>Decreased fat diet ND-1.2.5.2 10938</p>

      <p {$IDENTIFIER_1_2_5_3}>Monounsaturated fat modified diet ND-1.2.5.3 10869</p>

      <p {$IDENTIFIER_1_2_5_3_1}>Increased monounsaturated fat diet ND-1.2.5.3.1 10939</p>

      <p {$IDENTIFIER_1_2_5_3_2}>Decreased monounsaturated fat diet ND-1.2.5.3.2 10940</p>

      <p {$IDENTIFIER_1_2_5_4}>Polyunsaturated fat modified diet ND-1.2.5.4 10870</p>

      <p {$IDENTIFIER_1_2_5_4_1}>Increased polyunsaturated fat diet ND-1.2.5.4.1 10941</p>

      <p {$IDENTIFIER_1_2_5_4_1_1}>Increased linoleic acid diet ND-1.2.5.4.1.1 11981</p>

      <p {$IDENTIFIER_1_2_5_4_2}>Decreased polyunsaturated fat diet ND-1.2.5.4.2 10942</p>

      <p {$IDENTIFIER_1_2_5_4_2_1}>Decreased linoleic acid diet ND-1.2.5.4.2.1 11982</p>

      <p {$IDENTIFIER_1_2_5_5}>Saturated fat modified diet ND-1.2.5.5 10871</p>

      <p {$IDENTIFIER_1_2_5_5_1}>Saturated fat modified diet ND-1.2.5.5.1 10871</p>

      <p {$IDENTIFIER_1_2_5_5_1_1}>Decreased saturated fat diet ND-1.2.5.5.1.1 10943</p>

      <p {$IDENTIFIER_1_2_5_6}>Trans fat modified diet ND-1.2.5.6 10872</p>

      <p {$IDENTIFIER_1_2_5_6_1}>Decreased trans fat modified diet ND-1.2.5.6.1 10944</p>

      <p {$IDENTIFIER_1_2_5_7}>Omega 3 fatty acid modified diet ND-1.2.5.7 11983</p>

      <p {$IDENTIFIER_1_2_5_7_1}>Increased omega 3 fatty acid diet ND-1.2.5.7.1 11984</p>

      <p {$IDENTIFIER_1_2_5_7_1_1}>Increased alphalinolenic acid diet ND-1.2.5.7.1.1 11985</p>

      <p {$IDENTIFIER_1_2_5_7_1_2}>Increased eicosapentaenoic acid diet ND-1.2.5.7.1.2 11986</p>

      <p {$IDENTIFIER_1_2_5_7_1_3}>Increased docosahexaenoic acid ND-1.2.5.7.1.3 11987</p>

      <p {$IDENTIFIER_1_2_5_7_2}>Decreased omega 3 fatty acid diet ND-1.2.5.7.2 11988</p>

      <p {$IDENTIFIER_1_2_5_7_2_1}>Decreased alphalinolenic acid diet ND-1.2.5.7.2.1 11989</p>

      <p {$IDENTIFIER_1_2_5_7_2_2}>Decreased eicosapentaenoic acid diet ND-1.2.5.7.2.2 11990</p>

      <p {$IDENTIFIER_1_2_5_7_2_3}>Decreased docosahexaenoic acid diet ND-1.2.5.7.2.3 11991</p>

      <p {$IDENTIFIER_1_2_5_8}>Medium chain triglyceride modified diet ND-1.2.5.8 11992</p>

      <p {$IDENTIFIER_1_2_5_8_1}>Increased medium chain triglyceride diet ND-1.2.5.8.1 11993</p>

      <p {$IDENTIFIER_1_2_5_8_2}>Decreased medium chain triglyceride diet ND-1.2.5.8.2 11994</p>

      <p {$IDENTIFIER_1_2_6}>Cholesterol-modified diet (6) ND-1.2.6 10863</p>

      <p {$IDENTIFIER_1_2_6_1}>Decreased cholesterol diet ND-1.2.6.1 10934</p>

    </td>

    <td>

      <p {$IDENTIFIER_1_2_7}>Fiber-modified diet (7) ND-1.2.7 10834</p>

      <p {$IDENTIFIER_1_2_7_1}>Increased fiber diet ND-1.2.7.1 10945</p>

      <p {$IDENTIFIER_1_2_7_2}>Decreased fiber diet ND-1.2.7.2 10946</p>

      <p {$IDENTIFIER_1_2_7_3}>Soluble fiber modified diet ND-1.2.7.3 10947</p>

      <p {$IDENTIFIER_1_2_7_3_1}>Increased soluble fiber diet ND-1.2.7.3.1 10948</p>

      <p {$IDENTIFIER_1_2_7_3_2}>Decreased soluble fiber diet ND-1.2.7.3.2 10949</p>

      <p {$IDENTIFIER_1_2_7_4}>Insoluble fiber modified diet ND-1.2.7.4 10950</p>

      <p {$IDENTIFIER_1_2_7_4_1}>Increased insoluble fiber diet ND-1.2.7.4.1 10951</p>

      <p {$IDENTIFIER_1_2_7_4_2}>Decreased insoluble fiber diet ND-1.2.7.4.2 10952</p>

      <p {$IDENTIFIER_1_2_8}>Fluid-modified diet (8) ND-1.2.8 10835</p>

      <p {$IDENTIFIER_1_2_8_1}>Increased fluid diet ND-1.2.8.1 10874</p>

      <p {$IDENTIFIER_1_2_8_2}>Fluid restricted diet ND-1.2.8.2 10873</p>

      <p {$IDENTIFIER_1_2_8_3}>Clear liquid diet ND-1.2.8.3 10876</p>

      <p {$IDENTIFIER_1_2_8_4}>Full liquid diet ND-1.2.8.4 10877</p>

      <p {$IDENTIFIER_1_2_9}>Diets modified for specific foods or ingredients (9) ND-1.2.9 10836</p>

      <p {$IDENTIFIER_1_2_10}>Vitamin-modified diet (10) ND-1.2.10 10837</p>

      <p {$IDENTIFIER_1_2_10_1}>Vitamin A modified diet ND-1.2.10.1 10923</p>

      <p {$IDENTIFIER_1_2_10_1_1}>Increased vitamin A diet ND-1.2.10.1.1 11013</p>

      <p {$IDENTIFIER_1_2_10_1_2}>Decreased vitamin A diet ND-1.2.10.1.2 11014</p>

      <p {$IDENTIFIER_1_2_10_2}>Vitamin C modified diet ND-1.2.10.2 10926</p>

      <p {$IDENTIFIER_1_2_10_2_1}>Increased vitamin C diet ND-1.2.10.2.1 11019</p>

      <p {$IDENTIFIER_1_2_10_2_2}>Decreased vitamin C diet ND-1.2.10.2.2 11020</p>

      <p {$IDENTIFIER_1_2_10_3}>Vitamin D modified diet ND-1.2.10.3 10927</p>

      <p {$IDENTIFIER_1_2_10_3_1}>Increased vitamin D diet ND-1.2.10.3.1 11021</p>

      <p {$IDENTIFIER_1_2_10_3_2}>Decreased vitamin D diet ND-1.2.10.3.2 11022</p>

      <p {$IDENTIFIER_1_2_10_4}>Vitamin E modified diet ND-1.2.10.4 10928</p>

      <p {$IDENTIFIER_1_2_10_4_1}>Increased vitamin E diet ND-1.2.10.4.1 11023</p>

      <p {$IDENTIFIER_1_2_10_4_2}>Decreased vitamin E diet ND-1.2.10.4.2 11024</p>

      <p {$IDENTIFIER_1_2_10_5}>Vitamin K modified diet ND-1.2.10.5 10929</p>

      <p {$IDENTIFIER_1_2_10_5_1}>Increased vitamin K diet ND-1.2.10.5.1 11025</p>

      <p {$IDENTIFIER_1_2_10_5_2}>Decreased vitamin K diet ND-1.2.10.5.2 11026</p>

      <p {$IDENTIFIER_1_2_10_6}>Thiamine modified diet ND-1.2.10.6 10922</p>

      <p {$IDENTIFIER_1_2_10_6_1}>Increased thiamine diet ND-1.2.10.6.1 11011</p>

      <p {$IDENTIFIER_1_2_10_6_2}>Decreased thiamine diet ND-1.2.10.6.2 11012</p>

      <p {$IDENTIFIER_1_2_10_7}>Riboflavin modified diet ND-1.2.10.7 10921</p>

      <p {$IDENTIFIER_1_2_10_7_1}>Increased riboflavin diet ND-1.2.10.7.1 11009</p>

      <p {$IDENTIFIER_1_2_10_7_2}>Decreased riboflavin diet ND-1.2.10.7.2 11010</p>

      <p {$IDENTIFIER_1_2_10_8}>Niacin modified diet ND-1.2.10.8 10919</p>

      <p {$IDENTIFIER_1_2_10_8_1}>Increased niacin diet ND-1.2.10.8.1 11005</p>

      <p {$IDENTIFIER_1_2_10_8_2}>Decreased niacin diet ND-1.2.10.8.2 11006</p>

      <p {$IDENTIFIER_1_2_10_9}>Folic acid modified diet ND-1.2.10.9 10918</p>

      <p {$IDENTIFIER_1_2_10_9_1}>Increased folic acid diet ND-1.2.10.9.1 11003</p>

      <p {$IDENTIFIER_1_2_10_9_2}>Decreased folic acid diet ND-1.2.10.9.2 11004</p>

      <p {$IDENTIFIER_1_2_10_10}>Vitamin B6 modified diet ND-1.2.10.10 10924</p>

      <p {$IDENTIFIER_1_2_10_10_1}>Increased vitamin B6 diet ND-1.2.10.10.1 11015</p>

      <p {$IDENTIFIER_1_2_10_10_2}>Decreased vitamin B6 diet ND-1.2.10.10.2 11016</p>

      <p {$IDENTIFIER_1_2_10_11}>Vitamin B12 modified diet ND-1.2.10.11 10925</p>

      <p {$IDENTIFIER_1_2_10_11_1}>Increased vitamin B12 diet ND-1.2.10.11.1 11017</p>

      <p {$IDENTIFIER_1_2_10_11_2}>Decreased vitamin B12 diet ND-1.2.10.11.2 11018</p>

      <p {$IDENTIFIER_1_2_10_12}>Pantothenic acid modified diet ND-1.2.10.12 10920</p>

      <p {$IDENTIFIER_1_2_10_12_1}>Increased pantothenic acid diet ND-1.2.10.12.1 11007</p>

      <p {$IDENTIFIER_1_2_10_12_2}>Decreased pantothenic acid diet ND-1.2.10.12.2 11008</p>

      <p {$IDENTIFIER_1_2_10_13}>Biotin modified diet ND-1.2.10.13 10917</p>

      <p {$IDENTIFIER_1_2_10_13_1}>Increased biotin diet ND-1.2.10.13.1 11001</p>

      <p {$IDENTIFIER_1_2_10_13_2}>Decreased biotin diet ND-1.2.10.13.2 11002</p>

      <p {$IDENTIFIER_1_2_11}>Mineral-modified diet (11) ND-1.2.11 10838</p>

      <p {$IDENTIFIER_1_2_11_1}>Calcium modified diet ND-1.2.11.1 10879</p>

      <p {$IDENTIFIER_1_2_11_1_1}>Increased calcium diet ND-1.2.11.1.1 10953</p>

      <p {$IDENTIFIER_1_2_11_1_2}>Decreased calcium diet ND-1.2.11.1.2 10954</p>

      <p {$IDENTIFIER_1_2_11_2}>Chloride modified diet ND-1.2.11.2 10880</p>

      <p {$IDENTIFIER_1_2_11_3}>Iron modified diet ND-1.2.11.3 10886</p>

      <p {$IDENTIFIER_1_2_11_3_1}>Increased iron diet ND-1.2.11.3.1 10960</p>

      <p {$IDENTIFIER_1_2_11_3_2}>Decreased iron diet ND-1.2.11.3.2 10961</p>

      <p {$IDENTIFIER_1_2_11_4}>Magnesium modified diet ND-1.2.11.4 10887</p>

      <p {$IDENTIFIER_1_2_11_4_1}>Increased magnesium diet ND-1.2.11.4.1 10962</p>

      <p {$IDENTIFIER_1_2_11_4_2}>Decreased magnesium diet ND-1.2.11.4.2 10963</p>

      <p {$IDENTIFIER_1_2_11_5}>Potassium modified diet ND-1.2.11.5 10891</p>

    </td>

    <td>

      <p {$IDENTIFIER_1_2_11_5_1}>Increased potassium diet ND-1.2.11.5.1 10966</p>

      <p {$IDENTIFIER_1_2_11_5_2}>Decreased potassium diet ND-1.2.11.5.2 10967</p>

      <p {$IDENTIFIER_1_2_11_6}>Phosphorus modified diet ND-1.2.11.6 10890</p>

      <p {$IDENTIFIER_1_2_11_6_1}>Increased phosphorus diet ND-1.2.11.6.1 10964</p>

      <p {$IDENTIFIER_1_2_11_6_2}>Decreased phosphorus diet ND-1.2.11.6.2 10965</p>

      <p {$IDENTIFIER_1_2_11_7}>Sodium modified diet ND-1.2.11.7 10893</p>

      <p {$IDENTIFIER_1_2_11_7_1}>Increased sodium diet ND-1.2.11.7.1 10968</p>

      <p {$IDENTIFIER_1_2_11_7_2}>Decreased sodium diet ND-1.2.11.7.2 10969</p>

      <p {$IDENTIFIER_1_2_11_8}>Zinc modified diet ND-1.2.11.8 10895</p>

      <p {$IDENTIFIER_1_2_11_8_1}>Increased zinc diet ND-1.2.11.8.1 10970</p>

      <p {$IDENTIFIER_1_2_11_8_2}>Decreased zinc diet ND-1.2.11.8.2 10971</p>

      <p {$IDENTIFIER_1_2_11_9}>Sulfur modified diet ND-1.2.11.9 10894</p>

      <p {$IDENTIFIER_1_2_11_10}>Fluoride modified diet ND-1.2.11.10 10884</p>

      <p {$IDENTIFIER_1_2_11_11}>Copper modified diet ND-1.2.11.11 10883</p>

      <p {$IDENTIFIER_1_2_11_11_1}>Increased copper diet ND-1.2.11.11.1 10956</p>

      <p {$IDENTIFIER_1_2_11_11_2}>Decreased copper diet ND-1.2.11.11.2 10957</p>

      <p {$IDENTIFIER_1_2_11_12}>Iodine modified diet ND-1.2.11.12 10885</p>

      <p {$IDENTIFIER_1_2_11_12_1}>Increased iodine diet ND-1.2.11.12.1 10958</p>

      <p {$IDENTIFIER_1_2_11_12_2}>Decreased iodine diet ND-1.2.11.12.2 10959</p>

      <p {$IDENTIFIER_1_2_11_13}>Selenium modified diet ND-1.2.11.13 10892</p>

      <p {$IDENTIFIER_1_2_11_14}>Manganese modified diet ND-1.2.11.14 10888</p>

      <p {$IDENTIFIER_1_2_11_15}>Chromium modified diet ND-1.2.11.15 10881</p>

      <p {$IDENTIFIER_1_2_11_15_1}>Increased chromium diet ND-1.2.11.15.1 10955</p>

      <p {$IDENTIFIER_1_2_11_16}>Molybdenum modified diet ND-1.2.11.16 10889</p>

      <p {$IDENTIFIER_1_2_11_17}>Boron modified diet ND-1.2.11.17 10878</p>

      <p {$IDENTIFIER_1_2_11_18}>Cobalt modified diet ND-1.2.11.18 10882</p>

      <p {$IDENTIFIER_1_3}>Modify schedule of food/fluids ND-1.3 10815</p>

      <p {$IDENTIFIER_1_3_1}>Modify schedule of intake to limit fasting ND-1.3.1 11995</p>

      <p {$IDENTIFIER_1_4}>Specific foods/beverages or groups ND-1.4 10492</p>

      <p {$IDENTIFIER_1_4_1}>Fruit modified diet ND-1.4.1 11996</p>

      <p {$IDENTIFIER_1_4_2}>Vegetable modified diet ND-1.4.2 11997</p>

      <p {$IDENTIFIER_1_4_2_1}>Starchy vegetable modified diet ND-1.4.2.1 11998</p>

      <p {$IDENTIFIER_1_4_2_2}>Bean and pea modified diet ND-1.4.2.2 11999</p>

      <p {$IDENTIFIER_1_4_3}>Grain modified diet ND-1.4.3 12000</p>

      <p {$IDENTIFIER_1_4_3_1}>Diet modified for uncooked food starch ND-1.4.3.1 12001</p>

      <p {$IDENTIFIER_1_4_4}>Protein food modified diet ND-1.4.4 12002</p>

      <p {$IDENTIFIER_1_4_4_1}>Diet with foods modified to be low in protein ND-1.4.4.1 12003</p>

      <p {$IDENTIFIER_1_4_4_2}>Diet modified for egg ND-1.4.4.2 12004</p>

      <p {$IDENTIFIER_1_4_4_2_1}>Raw egg free diet ND-1.4.4.2.1 12005</p>

      <p {$IDENTIFIER_1_5}>Other ND-1.5 10493</p>

      <h4>Specify:</h4>

      <p>{$sn3_t2}</p>

    </td>

  </tr>

</tbody>

</table>
<table class="demo">

<thead>

  <tr><th>4 Feeding Assistance</th>

    <th>5 Manage Feeding Environment</th>

    <th>6 Nutrition-Related Medication Management</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>

<p {$IDENTIFIER_4_1}>Adaptive eating device ND-4.1 10808</p>

<p {$IDENTIFIER_4_2}>Feeding position ND-4.2 10570</p>

<p {$IDENTIFIER_4_3}>Meal set-up ND-4.3 10571</p>

<p {$IDENTIFIER_4_4}>Mouth care ND-4.4 10572</p>

<p {$IDENTIFIER_4_5}>Menu selection assistance ND-4.5 10809</p>

<p {$IDENTIFIER_4_6}>Other ND-4.6 10573</p>

</td>

    <td>

<p {$IDENTIFIER_5_1}>Lighting ND-5.1 10575</p>

<p {$IDENTIFIER_5_2}>Odors ND-5.2 10576</p>

<p {$IDENTIFIER_5_3}>Distractions ND-5.3 10577</p>

<p {$IDENTIFIER_5_4}>Table height ND-5.4 10578</p>

<p {$IDENTIFIER_5_5}>Table service ND-5.5 10849</p>

<p {$IDENTIFIER_5_6}>Room temperature ND-5.6 10580</p>

<p {$IDENTIFIER_5_7}>Meal service ND-5.7 10810</p>

<p {$IDENTIFIER_5_8}>Meal location ND-5.8 10811</p>

<p {IDENTIFIER_5_9}>Other ND-5.9 10581</p>

<!--hr />

<h4>Details:</h4>

<p>Lorem ipsum dolor.</p-->

    </td>

    <td>

<p {$IDENTIFIER_6_1}>Prescription medication ND-6.1 10839</p>

<p {$IDENTIFIER_6_2}>OTC medication ND-6.2 10584</p>

<p {$IDENTIFIER_6_3}>Complementary/ alternative medicine ND-6.3 10799</p>

<!--hr />

<h4>Details:</h4>

<p>Lorem ipsum dolor.</p-->

    </td>

  </tr>

  </tbody>

</table>
<table class="demo">

<thead>

  <tr>

  <th colspan="2">

  <p class="table_title">Nutrition Education (E)</p>

  <p class="normal">Formal process to instruct or train patients/clients in a skill or to impart knowledge to help patients/clients voluntarily manage or modify food, nutrition and physical activity choices and behavior to maintain or improve health.</p>

  </th>

  </tr>

  <tr>

  <th>1 Nutrition Education–Content</th>

    <th>2 Nutrition Education–Application</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>

<p {$IDENTIFIER_1_1}>Purpose of the nutrition education E-1.1 10588</p>

<p {$IDENTIFIER_1_2}>Priority modifications E-1.2 10589</p>

<p {$IDENTIFIER_1_3}>Survival information E-1.3 10590</p>

<p {$IDENTIFIER_1_4}>Nutrition relationship to health/disease E-1.4 10591</p>

<p {$IDENTIFIER_1_5}>Recommended modifications E-1.5 10592</p>

<p {$IDENTIFIER_1_6}>Other or related topics E-1.6 10593</p>

<p {$IDENTIFIER_1_7}>Other E-1.7 10594</p>

<p {$IDENTIFIER_1_8}>Physical activity guidance E-1.8 12012</p>

<!--hr />

<h4>Details:</h4>

<p>Lorem ipsum dolor.</p-->

    </td>

    <td>

<p {$IDENTIFIER_2_1}>Result interpretation E-2.1 10596</p>

<p {$IDENTIFIER_2_2}>Skill development E-2.2 10597</p>

<p {$IDENTIFIER_2_3}>Other E-2.3 10598</p>

<!--hr />

<h4>Details:</h4>

<p>Lorem ipsum dolor.</p-->

    </td>

  </tr>

  </tbody>

</table>
<table class="demo">
<thead>

  <tr><th colspan="2"><p class="table_title">Nutrition Counseling (C)</p></th></tr>

  <tr><th>1 Theoretical Basis/Approach</th>

    <th>2 Strategies</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>

<p {$IDENTIFIER_1_1}>Cognitive-behavioral theory C-1.1 10601</p>

<p {$IDENTIFIER_1_2}>Health belief model C-1.2 10602</p>

<p {$IDENTIFIER_1_3}>Social learning theory C-1.3 10603</p>

<p {$IDENTIFIER_1_4}>Transtheoretical model/stages of change C-1.4 10604</p>

<p {$IDENTIFIER_1_5}>Other C-1.5 10605</p>

<!--hr />

<h4>Details:</h4>

<p>Lorem ipsum dolor.</p-->

    </td>

    <td>

<p {$IDENTIFIER_2_1}>Motivational interviewing C-2.1 10607</p>

<p {$IDENTIFIER_2_2}>Goal setting C-2.2 10608</p>

<p {$IDENTIFIER_2_3}>Self-monitoring C-2.3 10609</p>

<p {$IDENTIFIER_2_4}>Problem solving C-2.4 10610</p>

<p {$IDENTIFIER_2_5}>Social support C-2.5 10611</p>

<p {$IDENTIFIER_2_6}>Stress management C-2.6 10612</p>

<p {$IDENTIFIER_2_7}>Stimulus control C-2.7 10613</p>

<p {$IDENTIFIER_2_8}>Cognitive restructuring C-2.8 10614</p>

<p {$IDENTIFIER_2_9}>Relapse prevention C-2.9 10615</p>

<p {$IDENTIFIER_2_10}>Rewards/contingency management C-2.10 10616</p>

<p {$IDENTIFIER_2_11}>Other C-2.11 10617</p>

<h4>Specify:</h4>

<p>Lorem ipsum dolor.</p>

    </td>

  </tr>

  </tbody>

</table>
<table class="demo">

<thead>

  <tr>

  <th colspan="2">

  <p class="table_title">Coordination Of Nutrition Care By A Nutrition Professional (RC)</p>

  <p class="normal">Consultation with, referral to, or coordination of nutrition care with other providers, institutions, or agencies that can assist in treating or managing nutrition-related problems.</p>

  </th>

  </tr>

  <tr>

  <th>1 Collaboration and Referral of Nutrition Care</th>

  <th>2 Discharge and Transfer of Nutrition Care to New Setting or Provider</th>

  </tr>

  </thead>

  <tbody>

  <tr>

    <td>

<p {$IDENTIFIER_1_1}>Team meeting RC-1.1 10620</p>

<p {$IDENTIFIER_1_2}>Referral to RDN with different expertise RC-1.2 10621</p>

<p {$IDENTIFIER_1_3}>Collaboration with other nutrition professionals RC-1.3 10622</p>

<p {$IDENTIFIER_1_4}>Collaboration with other providers RC-1.4 10812</p>

<p {$IDENTIFIER_1_5}>Referral to other providers RC-1.5 10624</p>

<p {$IDENTIFIER_1_6}>Referral to community agencies/programs RC-1.6 10625</p>

<hr />

<h4>Details:</h4>

<p>Lorem ipsum dolor.</p>

    </td>

    <td>

<p {$IDENTIFIER_2_1}>Discharge and transfer to other providers RC-2.1 10813</p>

<p {$IDENTIFIER_2_2}>Discharge and transfer to community agencies/programs RC-2.2 10814</p>

<p {$IDENTIFIER_2_3}>Discharge and transfer to another nutrition professional RC-2.3 10627</p>

<!--hr />

<h4>Details:</h4>

<p>Lorem ipsum dolor.</p-->

    </td>

  </tr>

  </tbody>

</table>
</div>

<p><a class="btn-outline" href="#p1">Nutrition Assessment</a> <a class="btn-outline" href="#p2">Diagnosis</a> <a class="btn-outline" href="#p3">Intervention</a> <a class="btn-outline" href="#p4">Goal Setting</a> <a class="btn-outline" href="#top"><i class="fa fa-bookmark"></i> Back to top</a></p>
</div>


</body>

</html>

EOT;

?>
<?php

if( (int)$content > 0 ){

  

   require_once 'assets/assets/mpdf60/mpdf.php';

    // $mpdf=new mPDF('', 'A4');

    // $mpdf->SetHeader('Document Title|Center Text|{PAGENO}');



    $mpdf = new mPDF('',    // mode - default ''

       'A4',    // format - A4, for example, default ''

       11,     // font size - default 0

       'Arial',    // default font family

       15,    // margin_left

       15,    // margin right

       15,    // margin top 

       15,    // margin bottom

       9,     // margin header

       9,     // margin footer

       'P');  // L - landscape, P - portrait



  $mpdf->WriteHTML($html);

  $mpdf->Output();  

  exit;

}else{

  echo $html;

}

?>