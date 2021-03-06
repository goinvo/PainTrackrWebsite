@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
	var nav = $(".keepup");
});
</script>
@endsection

@section('styles')
<link  rel="stylesheet" type="text/css" href="/css/faq.css">
@endsection

@section('content')
<h1>Frequently Asked Questions</h1>
<section class="cf pw">
	<article>
		<dl id="whatis">
			<dt>What is PainTrackr?</dt>
			<dd>PainTrackr is an open-source app that monitors physical pain.. It logs pain based on severity and location and 
stores this data so that it can be easily transmitted.</dd>
		</dl> 
		
		<dl id="whywas">
			<dt>Why was PainTrackr developed?</dt>
			<dd>Today, health care providers rely on pen and paper when asking patients to input information about their pain.
Theses paper pain scales and pain questionnaires are not only difficult for patients to understand and use, they
also contain information that is hard to copy and transmit. To log information about their pain over time, patients 
can use pain diaries, but these can be unwieldy and difficult for patients to carry around with them.</dd>
		</dl>

		<dl id="objective">
			<dt>What is the objective of PainTrackr?</dt>
			<dd>PainTrackr seeks to make logging pain more intuitive, while eliminating the hassle of imputing information via
pen and paper. By providing a way for patients to easily transmit data about their bodily pains, PainTrackr hopes
to improve communication between patients and their healthcare providers.</dd>
		</dl>

		<dl id="whoare">
			<dt>Who are Paintrackr's intended users?</dt>
			<dd>Patients and anyone who wants to track their physical pain.</dd>
		</dl>

		<dl id="os">
			<dt>What operating system does PainTrackr run on?</dt>
			<dd>PainTrackr runs under iOS and runs on the iPad, iPhone, and iPod touch.</dd>
		</dl>

		<dl id="android">
			<dt>Does PainTrackr run under Android?</dt>
			<dd>No.</dd>
		</dl>

		<dl id="language">
			<dt>What programming language does PainTrackr use?</dt>
			<dd>PainTrackr is programmed using Objective-C, Apple's iOS application framework.</dd>
		</dl>
		
	</article>
	<nav class="keepup">
		<h2>FAQ</h2>
		<ul>
			<li><a href="#whatis" title="">What is PainTrackr?</a></li>
			<li><a href="#whywas" title="">Why was PainTrackr developed?</a></li>
			<li><a href="#objective" title="">What is the objective of PainTrackr?</a></li>
			<li><a href="#whoare" title="">Who are Paintrackr's intended users?</a></li>
			<li><a href="#os" title="">What operating system does PainTrackr run on?</a></li>
			<li><a href="#android" title="">Does PainTrackr run under Android?</a></li>
			<li><a href="#language" title="">What programming language does PainTrackr use?</a></li>
		</ul>
	</nav>
</section>
@endsection
