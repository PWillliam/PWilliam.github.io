<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="navbar.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>navbar</title>
</head>
<body>
<nav class="soft">
        <span>Soft UI PRO</span>
        <ul>
            <li><a href="">Pages<box-icon name="chevron-down"></box-icon></a></li>
            <li><a href="">Account<box-icon name="chevron-down"></box-icon></a></li>
            <li><a href="">Blocks<box-icon name="chevron-down"></box-icon></a></li>
            <li><a href="">Docs<box-icon name="chevron-down"></box-icon></a></li>
        </ul>
        
        <button class="kinder">BUY NOW</button>
        <box-icon id="menu" name="menu" size="25px"></box-icon>
    </nav>
    <ul id="slide">
        <li class="slideli"><a href="">Pages</a></li>
        <li class="slideli"><a href="">Account</a></li>
        <li class="slideli"><a href="">Blocks</a></li>
        <li class="slideli"><a href="">Docs</a></li>
    </ul>
    <script>
        let menu = document.getElementById('menu')
        menu.addEventListener('click', function() {
            let list = document.getElementById('slide')
            let li = document.getElementsByClassName('slideli')

            if (list.style.display.length == 0 || list.style.display == 'none') {
                list.style.display = 'flex';
                // list.style.animation = 'slideBottom 1s 1 linear'
                
                

                let interval = setInterval(function() {
                    for (let index = 0; index < li.length; index++) {
                        li[index].style.opacity = 1  
                        li[index].style.display = 'block'                 
                    }
                    clearInterval(interval)
                },950)
                
            } else {
                list.style.animation = '1s eae 1s 1 reverse slideBottom'
                for (let index = 0; index < li.lenght; index++){
                    li[index].style.opacity = 0
                    li[index].style.display = 'none'
                }
                let interval = setInterval(function() {
                    list.style.display = 'none'
                    list.style.animation = 'slideBottom 1s 1 linear'
                    clearInterval(interval)
                },1000)
                
            }
        })

    </script>
</body>
</html>