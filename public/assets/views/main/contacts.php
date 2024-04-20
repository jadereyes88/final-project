<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/assets/styles/contact_globals.css" />
    <link rel="stylesheet" href="/assets/styles/contact_style.css" /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
    <div class="main">
        <div class="overlap">
            <div class="div"></div>
            <div class="section-section">
                <div class="overlap-group-wrapper">
                    <div class="overlap-group">
                        <div class="heading-contact">Contact</div>
                        <p class="text-wrapper">Need to get in contact or just want to send a message my way? Use this form:</p>
                        <form id="contactForm" action="/contact" method="POST">
                            <div class="input-email">
                                <input type="email" name="email" placeholder="Email *" required>
                            </div>
                            <div class="input-name">
                                <input type="text" name="name" placeholder="Name *" required>
                            </div>
                            <div class="input-subject">
                                <input type="text" name="subject" placeholder="Subject *" required>
                            </div>
                            <div class="textarea">
                                <textarea name="message" placeholder="Your message *" rows="4" required></textarea>
                            </div>
                            <button class="button" type="submit"><div class="text-wrapper-5">Send</div></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JQuery to handle form submission -->
    <script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/contact',
                data: $(this).serialize(), 
                success: function(response) {
                    alert('Thank you for your message. I will get back to you asoon.');
                    $('#contactForm').trigger('reset');
                },
                error: function() {
                    alert('Error submitting the form. Please try again.');
                }
            });
        });
    });
    </script>
</body>
</html>