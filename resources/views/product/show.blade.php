<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- CSS only -->
<!-- JavaScript Bundle with Popper -->
    <meta charset="UTF-8">
    <title>Garden Jabaquara</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
            :root {
  --home-bg-color: #f2f3ee;
  --menu-bg-color: #cbcbc2;
  --silde-btn-border: #808080;
  --slide-btn-bg: #ddf2db;
  --slide-btn-hoverbg: #f1fff1;
  --alpha-green: rgba(33, 96, 47, 0.51);
  --icon-hover-color: #344a39;
  --icon-hover-bg: #709680;
  --text-color: #616161;
  --border-color: #709680;
  --heading-color: #344a39;
  --box-shadow-color: #b5b5ac;
  --lightest-green: #86a58d;
  --light-green: #9ab09a;
  --dark-green: rgba(52, 74, 57, 0.86);
  --box-shadow: 0px 0px 3px 5px var(--box-shadow-color);
  --border-radius: 60px 5px;
  --fade-green: rgba(57, 87, 64, 0.55);
}
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
}
body,
html {
  width: 100%;
  font-size: 10px;
  color: var(--text-color);
  font-weight: normal;
  font-family: sans-serif;
  background-color: var(--home-bg-color);
}

#ham-menu {
  display: none;
}
label[for="ham-menu"] {
  display: block;
  position: fixed;
  top: 24px;
  left: 20px;
  z-index: 999;
  width: 60px;
  height: 60px;
  background-color: var(--home-bg-color);
  border-radius: 15px;
  border: 2px solid var(--border-color);
}
.ham-menu {
  width: 50vw;
  height: 100%;
  position: fixed;
  top: 0;
  visibility: hidden;
  transform: translate(-110%);
  z-index: 998;
  background-color: var(--lightest-green);
  transition: 1s;
  display: flex;
  justify-content: center;
  align-items: center;
}
.ham-menu > ul {
  display: flex;
  flex-flow: column nowrap;
  justify-content: space-around;
  padding: 20px;
  height: 50%;
}
.ham-menu > ul > li {
  font-size: 5rem;
  white-space: nowrap;
  letter-spacing: 0.15em;
  cursor: pointer;
  color: rgb(97, 97, 97);
}
#ham-menu:checked + label {
  background-color: transparent;
  border-color: var(--dark-green);
}
#ham-menu:checked ~ div.ham-menu {
  transform: translate(0px);
  visibility: visible;
}
.full-page-green {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: var(--dark-green);
  z-index: 997;
  opacity: 0;
  visibility: hidden;
  display: none;
  transition: 500ms;
  position: fixed;
  top: 0;
  left: 0;
}
#ham-menu:checked ~ div.full-page-green {
  display: block;
  opacity: 1;
  visibility: visible;
}
[for="ham-menu"] > div {
  width: 100%;
  height: 100%;
  display: flex;
  flex-flow: column wrap;
  align-content: center;
  align-items: center;
}
.menu-line {
  display: block;
  width: 17px;
  height: 2px;
  margin: 10px 0 5px;
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
  background-color: var(--border-color);
  transition: 500ms;
  transform-origin: right center;
}
[for="ham-menu"] > div > span:nth-child(4),
[for="ham-menu"] > div > span:nth-child(5),
[for="ham-menu"] > div > span:nth-child(6) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  border-top-right-radius: 2px;
  border-bottom-right-radius: 2px;
  transform-origin: left center;
}
#ham-menu:checked + label span {
  background-color: var(--dark-green);
}
#ham-menu:checked + label span:nth-child(2),
#ham-menu:checked + label span:nth-child(5) {
  transform: scale(0);
}
#ham-menu:checked + label span:nth-child(1) {
  transform: translateY(17px) rotate(45deg);
}
#ham-menu:checked + label span:nth-child(4) {
  transform: translateY(17px) rotate(-45deg);
}
#ham-menu:checked + label span:nth-child(3) {
  transform: translateY(-17px) rotate(-45deg);
}
#ham-menu:checked + label span:nth-child(6) {
  transform: translateY(-17px) rotate(45deg);
}
p {
  display: inline;
  font-size: 1.8rem;
  line-height: 1.5em;
  word-spacing: 0.5em;
  letter-spacing: 0.1em;
  font-family: "OpenSansCondensed-Light";
}
a {
  font-size: 1.6rem;
  line-height: 1.5em;
  word-spacing: 0.5em;
  letter-spacing: 0.1em;
  font-family: "OpenSansCondensed-Light";
  display: inline;
  font-weight: bold;
  padding: 7px;
  color: var(--icon-hover-bg);
}
a::after {
  content: "\e806";
  display: inline-block;
  font-family: fontello;
  padding: 5px;
  font-size: 1.6rem;
  transform: rotate(-90deg);
}
.text {
  font-size: 2.5rem;
  line-height: 1.5em;
  word-spacing: 0.5em;
  letter-spacing: 0.1em;
  font-family: "OpenSansCondensed-Bold", sans-serif;
}
.title {
  font-size: 3rem;
  line-height: 1.5em;
  word-spacing: 0.5em;
  letter-spacing: 0.1em;
  font-family: "OpenSansCondensed-Bold", sans-serif;
  color: var(--icon-hover-bg);
  padding: 10px;
}
.heading {
  font-size: 6rem;
  line-height: 1.5em;
  word-spacing: 0.5em;
  letter-spacing: 0.1em;
  font-family: "Patua One";
}
.centre-text {
  text-align: center;
}
.bold-text {
  font-weight: bold;
}

    </style>
</head>

<body>
    <header>
          <nav class="navbar navbar-expand-sm navbar-light bg-white">
            <div class="container">
            <a class="navbar-brand" href="{{url("/")}}">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuCategoria" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categoria
                  </a>
                  <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn" style="">Dropdown</button>
                    <div id="myDropdown" class="dropdown-content" style="">
                      <a href="#">Link 1</a>
                      <a href="#">Link 2</a>
                      <a href="#">Link 3</a>
                    </div>
                  </div>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuCategoria">
                      @foreach (\App\Models\Category::all() as $category )
                          <li><a class="dropdown-item" href="#">{{$category->name}}</a></li>
                      @endforeach                
                  </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuTag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Tags
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuTag">
                        @foreach (\App\Models\Tag::all() as $tag )
                        <li><a class="dropdown-item" href="#">{{$tag->name}}</a></li>
                        @endforeach
                    </ul>
                  </li>
              </ul>
            </div>
          </div>
        </nav>

    </header>
</body>
</html>