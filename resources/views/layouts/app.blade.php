<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'NexaTech Solutions' }}</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.6;
            color: #1f2937;
            background: #f8fafc;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 0 auto;
        }

        .navbar {
            background: #111827;
            color: white;
            padding: 1rem 0;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 2rem;
        }

        .brand {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 1.5rem;
        }

        .nav-links a {
            color: #d1d5db;
            transition: color 0.2s ease;
        }

        .nav-links a:hover {
            color: white;
        }

        main {
            min-height: calc(100vh - 140px);
        }

        .page-section {
            padding: 4rem 0;
        }

        .hero {
            padding: 6rem 0;
            text-align: center;
            background: white;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #111827;
        }

        .hero p {
            max-width: 700px;
            margin: 0 auto 2rem;
            color: #6b7280;
            font-size: 1.1rem;
        }

        .button {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background: #2563eb;
            color: white;
            border-radius: 0.5rem;
            font-weight: bold;
        }

        .button:hover {
            background: #1d4ed8;
        }

        .footer {
            background: #111827;
            color: #d1d5db;
            text-align: center;
            padding: 1.5rem 0;
        }

        .footer p {
            margin: 0.25rem 0;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .card {
            background: white;
            padding: 1.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .card h3 {
            margin-bottom: 0.75rem;
        }

        @media (max-width: 768px) {
            .navbar .container {
                flex-direction: column;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero h1 {
                font-size: 2.2rem;
            }

            .card-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>