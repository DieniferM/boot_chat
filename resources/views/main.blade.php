<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">

        <title>Bot Personalities</title>
    </head>
    <body>
        <div class="personality-selector">
            <input type="radio" id="formal" name="personality" onclick="changePersonality('formal')">
            <label for="formal">Formal</label>
            <input type="radio" id="friendly" name="personality" onclick="changePersonality('friendly')">
            <label for="friendly">Friendly</label>
            <input type="radio" id="humorous" name="personality" onclick="changePersonality('humorous')">
            <label for="humorous">Humorous</label>
        </div>
        <div id="bot" class="formal">
            <p>This is the formal bot.</p>
        </div>
        <div>
            <h2>Access chat</h2>
            <a href="/welcome">Go to Chat!</a>
        </div>
        <script src="script.js"></script>
        <script>
            function changePersonality(personality) {
                const botElement = document.getElementById('bot');
                botElement.classList.remove('formal', 'friendly', 'humorous');
                botElement.classList.add(personality);
            }
        </script>
    </body>
</html>