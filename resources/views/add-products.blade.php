<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular</title>
</head>
<body>

@if (session('success'))
    <div class="alert alert-success text-center mx-auto">
        {{ session('success') }}
    </div>
@endif

<div class="form-container">
    <h1>Unesite podatke</h1>
    <form action="/products/create" method="POST">
        @csrf
        <label for="name">Naziv:</label>
        <input type="text" id="name" name="name" required>

        <label for="description">Opis:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="price">Cena:</label>
        <input type="number" id="price" name="price" min="0" required>

        <input type="submit" value="Pošaljite">
    </form>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f7fc;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 30px;
        width: 400px;
        text-align: center;
    }

    h1 {
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
    }

    label {
        display: block;
        text-align: left;
        margin-bottom: 8px;
        font-weight: bold;
        color: #555;
    }

    input[type="text"],
    textarea,
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        color: #333;
    }

    input[type="text"]:focus,
    textarea:focus,
    input[type="number"]:focus {
        outline: none;
        border-color: #6c63ff;
    }

    input[type="submit"] {
        background-color: #6c63ff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #5a53d8;
    }

    .form-container p {
        margin-top: 20px;
        color: #777;
    }

</style>
</body>
</html>
