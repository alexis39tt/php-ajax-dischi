<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone 2</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div id="root">
        <div class="navbar">
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="logo">
        </div>
        <div class="container">
            <div class="record" v-for="elm in records">
                <p class="title">{{ elm.author }}</p>
                <p>{{ elm.title }}</p>
                <p>{{ elm.year }}</p>
                <img :src="elm.poster" :alt="elm.title">
            </div>
        </div>
    </div>
    <script defer src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script defer src="script.js" rel="text/javascript"></script>
</body>

</html>