<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Chatting</title>
  <style>
    /* Add some basic styling for the chat box */
    .chat-box {
      width: 400px;
      margin: 20px auto;
      border: 1px solid #ccc;
      padding: 10px;
    }
  </style>
</head>
<body>
  <div class="chat-box">
    <h2>Chat Box</h2>
    <div id="chat-history"></div>

    <form id="chat-form">
      <label for="name">Nama:</label>
      <input type="text" id="name" required><br>

      <label for="email">Email:</label>
      <input type="email" id="email" required><br>

      <label for="message">Pesan:</label>
      <input type="text" id="message" required><br>

      <button type="submit">Kirim</button>
    </form>
  </div>

  <script>
    // Array of emoticons and their corresponding images
    const emoticons = [
      { code: ':)', image: 'smiley.png' },
      // Add more emoticons if needed
    ];

    document.getElementById('chat-form').addEventListener('submit', function(e) {
      e.preventDefault();

      // Get form input values
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const message = document.getElementById('message').value;

      // Validate input
      if (name.trim() === '' || email.trim() === '' || message.trim() === '') {
        alert('Nama, Email, dan Pesan tidak boleh kosong.');
        return;
      }

      if (!isValidEmail(email)) {
        alert('Alamat email tidak valid.');
        return;
      }

      // Sensor kata tertentu
      const sanitizedMessage = sensorWords(message);

      // Replace emoticons with images
      const processedMessage = replaceEmoticons(sanitizedMessage);

      // Create the chat message
      const chatMessage = `<strong>${name}</strong>: ${processedMessage}<br>`;

      // Display the chat message in the chat-history div
      document.getElementById('chat-history').innerHTML += chatMessage;

      // Clear the form fields
      document.getElementById('name').value = '';
      document.getElementById('email').value = '';
      document.getElementById('message').value = '';

      // Save the data to a text file (not possible in this environment)
      // You would typically use a server-side script to handle file storage.

    });

    // Function to validate email
    function isValidEmail(email) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }

    // Function to sensor words
    function sensorWords(message) {
      // Replace specific words with a sensor
      const wordsToSensor = ['kontol', 'memek']; // Add words to sensor if needed
      let sanitizedMessage = message;
      for (const word of wordsToSensor) {
        const regex = new RegExp(`\\b${word}\\b`, 'gi');
        sanitizedMessage = sanitizedMessage.replace(regex, (match) => match[0] + '*'.repeat(match.length - 2) + match[match.length - 1]);
      }
      return sanitizedMessage;
    }

    // Function to replace emoticons with images
    function replaceEmoticons(message) {
      let processedMessage = message;
      for (const emoticon of emoticons) {
        const regex = new RegExp(escapeRegExp(emoticon.code), 'g');
        processedMessage = processedMessage.replace(regex, `<img src="${emoticon.image}" alt="${emoticon.code}" width="20" height="20">`);
      }
      return processedMessage;
    }

    // Helper function to escape regular expression characters
    function escapeRegExp(string) {
      return string.replace(/[.*+\-?^${}()|[\]\\]/g, '\\$&');
    }
  </script>
</body>
</html>
