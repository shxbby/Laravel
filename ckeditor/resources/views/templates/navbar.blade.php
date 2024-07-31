<style>
    /* Basic CSS Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Navbar Styles */
    .navbar {
        background-color: #333;
        overflow: hidden;
    }

    .navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
    }

    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }

    /* Responsive Navigation */
    @media screen and (max-width: 600px) {
        .navbar a {
            float: none;
            display: block;
            text-align: left;
        }
    }
    </style>
    </head>
    <body>

    <div class="navbar" style="margin-right : 1rem; margin-left : 0.5rem; margin-top: 1rem">
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('create')}}">Add Post</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>

    <!-- Add some content below the navbar for demonstration purposes -->


    </body>
