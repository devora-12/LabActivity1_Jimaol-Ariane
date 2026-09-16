@extends('layouts')

@section('contenttitle')
AUTHOR
@endsection

@section('content')
<h2>About the Author</h2>

<div class="row mt-3">
	<div class="col-md-4">
		<img src="{{asset('images/myPhoto.png') }}" class="img-fluid rounded" alt="Profile Photo">
	</div>

	<div class="col-md-8">
		<h2>JIMAOL, ARIANE M.</h2>
		<h6>Bachelor of Science in Computer Science</h6>
		<h6>Email: ara095860gmail.com</h6>

		<hr>

			<h4 class="mb-3"> My Blog</h4>

	<p>
		Throughout my learning journey, I explored the core principles of <strong>Object-Oriented Programming (OOP)</strong>, which became the foundation of how I now approach software development. I learned how top create and use <strong>classes</strong> and <strong>objects</strong>, and how they work together to build modular and reusable code. Understanding concepts such as <strong>inheritance</strong>, <strong>encapsulation</strong>, and <strong>polymorphism</strong> helped me design programs that are cleaner, more organized, and easier to maintain.
	</p>

	<p>
		In <strong>Core PHP</strong>, I learned how backend processes really work behind a website. I practiced handling user inputs through forms, validating data, working with server variables, and connecting PHP scripts to database. Writing everything manually in Core PHP also helped me appreciate how web applications function at the most basic level.
	</p>

	<p>
		Moving to <strong>Laravel</strong> elavated my understanding of modern web development. I learned the <strong>MVC (Model-View-Controller)</strong> architecture, which helps separate logic and design cleanly. Laravel's features-such as routing, controllers, Blade templates, Eloquent ORM, and artisan commands-made building websites more efficient and professional. It gave me real experience in structuring applications properly and writing scalable code.
	</p>

	<p>
		Overall, learning OOP, Core PHP, and Laravel allowed me to experience the full process of building a dynamic web application-from understanding basic logic to working with frameworks used in real-world development.
	</p>

	</div>
</div>
@endsection