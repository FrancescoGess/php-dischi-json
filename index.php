<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css -->
    <link href="./style/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Spotify Dischi</title>
</head>
<body>
<div id="app">

        <div class="container d-flex justify-content-center">

            <div class="row p-3">
                <div v-for="(element, index) in listArray" :key="index"
                    class="musica col-4 text-center rounded-1"
                    >

                    <figure class="mt-2">
                        <img :src="element.poster" alt="">
                    </figure>

                    <h6>{{ element.title }}</h6>
                    <p>{{ element.author }}</p>
                    <h6>{{ element.year }}</h6>

                </div>
            </div>
        </div>
    </div>
    

    <!-- vue cdn -->
    <script src="https://unpkg.com/vue@3"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- js -->
    <script src="./js/script.js"></script>
</body>
</html>