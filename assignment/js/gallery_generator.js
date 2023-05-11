$(document).ready(function() {
    var xmlHttp = new XMLHttpRequest ();
    var htmlCode = "";
    var response;
    var send = "scripts/php/hook.php";
    xmlHttp.open("GET", send, true);
    xmlHttp.send(null);
    xmlHttp.onreadystatechange = function() {
        if(xmlHttp.readyState == 4) {
            response = xmlHttp.responseText.split("~");
            for (var i=0;i<response.length;i++) {
                switch(i){
                    case 0: htmlCode += '<a href="/~jd549/3dapp/assignment/assets/images/renders/spriteRender.png" data-fancybox data-caption="Sprite Render" class="thumbnail">';
                    break;

                    case 1: htmlCode += '<a href="/~jd549/3dapp/assignment/assets/images/renders/fantaRender.png" data-fancybox data-caption="Fanta Render" class="thumbnail">';
                    break; 

                    case 2: htmlCode += '<a href="/~jd549/3dapp/assignment/assets/images/renders/pepperRender.png" data-fancybox data-caption="Dr Pepper Render" class="thumbnail">';
                    break;

                    case 3: htmlCode += '<a href="/~jd549/3dapp/assignment/assets/images/renders/cokeRender.png" data-fancybox data-caption="Coca Cola Render" class="thumbnail">';
                    break;
                }
                htmlCode += '<img class="card-img-top img-thumbnail" style="width:25%;" src="/~jd549/3dapp/assignment/images' + response[i] + '"/>';
                htmlCode += '</a>';
            }
            document.getElementById('gallery_coke').innerHTML = htmlCode;
            document.getElementById('gallery_sprite').innerHTML = htmlCode;
            document.getElementById('gallery_pepper').innerHTML = htmlCode;
        }
    }
});