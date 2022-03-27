let history = [];
let removeEle = null;
let clickAble = false;
let cnt = 0;
let inter =  null;

$(()=>{
    cardSet();
    $(document)
        .on('keydown keyup onpaste','input[name="phone"]',function(){
            let val = $(this).val();
            if(val.length > 13){
                return this.value = val.slice(0,13);
            }
            this.value = val.replace(/[^0-9]/g,'').replace(/^(\d{0,3})(\d{0,4})(\d{0,4})$/g,"$1-$2-$3").replace(/\-{1,2}$/g,'');
        })
        .on('click','.card_3d',function(){
            if(!clickAble)return;
            if(this === removeEle) return;
            this.classList.add('change');
            history.push($(this).attr('data-id'));
            clickAble = false;

            if(history.length === 1){
                setTimeout(()=>{
                    if(history.length === 1 && removeEle === this){
                        this.classList.remove('change');
                    }
                },3000)
                removeEle = this;
                clickAble = true;
            }

            if(history.length === 2){
                if(history[0] === history[1]){
                    removeEle.classList.add('end');
                    this.classList.add('end');
                    cnt++;
                    $(this).find('.back p')[0].classList.remove('d-none');
                    $(removeEle).find('.back p')[0].classList.remove('d-none');
                    if(cnt === 8) endGame();
                    clickAble = true;
                }else{
                    setTimeout(()=>{
                        removeEle.classList.remove('change');
                        this.classList.remove('change');
                        clickAble = true;
                    },1000)
                }
                history = [];
            }
        })
        .on('click','.hint',function(){
            cardView(3000);
        })
        .on('click','.start',async function(){
            this.classList.add('d-none');
            $('.reload')[0].classList.remove('d-none');
            await count();
            cardView(5000);
        })
        .on('click','.reload',async function(){
            reload();
            await cardSet();
            await count();
            cardView(5000);
        })
        .on('click','.close',function(){
            $('.modal').modal('hide');
        })
        .on('click','.card_submit',function(){
            const name = $('input[name="name"]').val();
            const phone = $('input[name="phone"]').val();
            const score = $('input[name="score"]').val();
            if(name.length < 2)return alert('이름은 2자 이상이여야 합니다.');
            if(name.length > 50)return alert('이름은 50자 이하여야 합니다.');
            const nameReg = /^[ㄱ-ㅎ가-힣a-zA-Z]+$/;
            if(!nameReg.test(name))return alert('이름은 한글과 영어만 가능합니다.');
            if(phone.length < 13)return alert('휴대폰번호를 완성시켜주세요');
            $.ajax({
                url:'/event/event',
                type:'post',
                data : {
                    phone,
                    name,
                    score,
                    _token : $('meta[name="token"]').attr('content')
                },
                success:function(res){
                    alert(res[0]);
                    $('.stamp img')[0].src = `./public/사진/stamp-${res[1]}.png`;

                }
            })
        })
})

const reload = () =>{
    history = [];
    removeEle = null;
    clickAble = false;
    cnt = 0;
    inter =  null;
}

const count = () =>{
    cnt = 0;
    let int = setInterval(';');
    for(let i = 0; i< int;i++){
        clearInterval(i);
    }
    let five = 5;
    let time = 1;
    inter = setInterval(()=>{
        $('.count p').html(`찾은 카드 수 : ${cnt}`);
        if(five > 0){
            $('.time p').html('게임시작까지'+five+'초');
            five--;
        }else{
            if(time > 60) {
                $('.time p').html('남은시간 : 1분 ' + (time - 60) + '초');
            }else {
                $('.time p').html('남은시간 :'+time+ '초');
                if(time < 1)return endGame();
            }
            time--;
        }
    },1000);
}

const cardSet = async () =>{
    const cardData = await cardLoad();
    let html = ``;
    cardData.forEach(e=>{
        html +=`
            <div class="card">
                <div class="position-relative w-100 h-100 card_3d" data-id="${e.most}">
                    <div class="front position-absolute w-100 h-100 d-flex justify-content-center align-items-center"></div>
                    <div class="back position-absolute w-100 h-100 d-flex justify-content-center align-items-center"><img src="./public/특산품/${e['area']}_${e['most']}.jpg" alt=""><p class="position-absolute p-1 d-none">${e.area}</p></div>
                </div>
            </div>
        `;
    })
    $('.card_game').html(html);
}

const cardLoad = async () =>{
    const data = await fetch('/resources/js/data.json').then(res => res.json());
    let arr = [];
    for(let i = 0; i < 8;i++){
        let idx = Math.floor(Math.random() * data.length);
        arr.push(data[idx], data[idx]);
        data.splice(idx,1);
    }
    arr.sort(()=>Math.random() - 0.5);
    return arr;
}

const cardView = time => {
    const cards = document.querySelectorAll('.card_3d');
    cards.forEach((e,idx)=>{
        setTimeout(function(){
            e.classList.add('change');
        },100 * idx);
    })

    cards.forEach((e,idx)=>{
        setTimeout(function(){
            e.classList.remove('change');
            clickAble = true;
        },time + 100 * idx);
    })
}

const endGame = () =>{
    $('#modal_card').modal('show');
    $('input[name="score"]').val(cnt);
    const inter = setInterval(';');
    for(let i = 0; i < inter;i++){
        clearInterval(i);
    }
}
