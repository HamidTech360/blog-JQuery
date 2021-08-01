$(document).ready(function(){
    $('.placeholder').click(function(){
        document.querySelector('.fileBtn').click()
    })

    document.querySelector('.fileBtn').addEventListener('change', function(){
        var imgFile = document.querySelector('.fileBtn')
        var reader = new FileReader()
        if(imgFile.files[0]){
            reader.onload = function (e){
                document.querySelector('.placeholder').setAttribute('src', e.target.result)
            }
            reader.readAsDataURL(imgFile.files[0])
        }
    })
})

