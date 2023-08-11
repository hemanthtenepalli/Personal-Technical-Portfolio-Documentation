<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];

    // Add your email address where you want to receive the contact form details
    $to = "tenepallirangampetahemanth@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nProject: $project\nMessage: $message";

    // Send email
    if(mail($to, $subject, $body)) {
        echo "<p>Thank you for contacting us. We will get back to you soon!</p>";
    } else {
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
}
?>

<section class="contact section" id="contact">
    <h2 class="section-title">Contact Me</h2>
    <span class="section-subtitle">Get in touch</span>

    <div class="contact-container container grid">
        <div>
            <div class="information">
                <i class="uil uil-phone icon"></i>
                <div>
                    <h3 class="title">Call Me</h3>
                    <span class="subtitle">(+91)6300481069</span>
                </div>
            </div>
            <div class="information">
                <i class="uil uil-envelope-edit icon"></i>
                <div>
                    <h3 class="title">Email</h3>
                    <span class="subtitle">tenepallirangampetahemanth@gmail.com</span>
                </div>
            </div>
            <div class="information">
                <i class="uil uil-map icon"></i>
                <div>
                    <h3 class="title">Location</h3>
                    <span class="subtitle">Andhra Pradesh - India</span>
                </div>
            </div>
        </div>
        <form action="" method="POST" class="contact-form grid">
            <div class="inputs grid">
                <div class="content">
                    <label for="name" class="label">Name</label>
                    <input type="text" name="name" class="input" required>
                </div>
                <div class="content">
                    <label for="email" class="label">Email</label>
                    <input type="email" name="email" class="input" required>
                </div>
            </div>
            <div class="content">
                <label for="project" class="label">Project</label>
                <input type="text" name="project" class="input" required>
            </div>
            <div class="content">
                <label for="message" class="label">Message</label>
                <textarea name="message" cols="0" rows="7" class="input" required></textarea>
            </div>
            <div>
                <button type="submit" name="submit" class="button button--flex">
                    Send Message
                    <i class="uil uil-message button-icon"></i>
                </button>
            </div>
        </form>
    </div>
</section>
