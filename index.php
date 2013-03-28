<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Backbone Demo</title>
  <link rel="stylesheet" type="text/css" href="/css/styles.css">

</head>
<body>

    <div id="contacts">
      <header>
        <div id="filter"><label>Show me:</label></div>
        <a id="showForm" href="#">Add new contact</a>
      </header>
      <form id="addContact" class="hide" action="#">
          <label for="photo">photo:</label><input id="photo" type="file" />
          <label for="type">Type:</label><input id="type" />
          <label for="name">Name:</label><input id="name" />
          <label for="address">Address:</label><input id="address" />
          <label for="tel">Tel:</label><input id="tel" />
          <label for="email">Email:</label><input id="email" />
          <button id="add">Add</button>
      </form>
    </div>

    <!-- Templates -->
    <script id="contactTemplate" type="text/template">
      <img src="<%= photo %>" alt="<%= name %>" />
      <h1><%= name %><span><%= type %></span></h1>
      <div><%= address %></div>
      <dl>
          <dt>Tel:</dt><dd><%= tel %></dd>
          <dt>Email:</dt><dd><a href="mailto:<%= email %>"><%= email %></a></dd>
      </dl>
      <button class="delete">Delete</button>
      <button class="edit">Edit</button>
    </script>

    <script id="contactEditTemplate" type="text/template">
      <form action="#">
          <input type="file" value="<%= photo %>" />
          <input class="name" value="<%= name %>" />
          <input id="type" type="hidden" value="<%= type %>" />
          <input class="address" value="<%= address %>" />
          <input class="tel" value="<%= tel %>" />
          <input class="email" value="<%= email %>" />
          <button class="save">Save</button>
          <button class="cancel">Cancel</button>
      </form>
    </script>

    <script type="text/javascript" src="/js/vendor/jquery.min.js"></script>
    <script type="text/javascript" src="/js/vendor/underscore-min.js"></script>
    <script type="text/javascript" src="/js/vendor/backbone-min.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>