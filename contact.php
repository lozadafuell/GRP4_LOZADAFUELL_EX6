<?php include 'header.php'; ?>
<main>
    <h2>Contact Us</h2>
    <div class="contact">
    <form action="process_contact.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send Message</button>
    </form>
    </div>
</main>
<?php include 'footer.php'; ?>
