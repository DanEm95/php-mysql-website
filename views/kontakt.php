<div class="container">
	  <form
		id="contactForm"
		name="sentMessage"
	  >
	  <h2>Fragen oder Feedback?</h2><hr>
	  <h3>Kontaktformular</h3>
		<div class="form-floating">
		  <input
			class="form-control"
			id="name"
			name="name"
			type="text"
			placeholder="Enter your name..."
			required
		  />
		  <label for="name">Name</label>
		</div>
		<div class="form-floating">
		  <input
			class="form-control"
			id="email"
			name="email"
			type="email"
			placeholder="Enter your email..."
			required
		  />
		  <label for="email">Email address</label>
		</div>
		<div class="form-floating">
		  <input
			class="form-control"
			id="phone"
			name="phone"
			type="tel"
			placeholder="Enter your phone number..."
			required
		  />
		  <label for="phone">Phone Number</label>
		</div>
		<div class="form-floating">
		  <textarea
			class="form-control"
			id="message"
			name="message"
			placeholder="Enter your message here..."
			required
			style="height: 12rem"
		  ></textarea>
		  <label for="message">Message</label>
		</div>
		<br />
		<button
		  class="btn btn-primary text-uppercase"
		  id="submitButton"
		  type="submit"
		>
		  Send
		</button>
	  </form>
</div>
