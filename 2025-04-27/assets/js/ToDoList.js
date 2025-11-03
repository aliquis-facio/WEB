let idNum = 0;
let finished = 0;
let total = 0;

function addToDo() {
    let elem = document.getElementById('add-todo');
    let text = elem.value.trim();

    if (text === "") {
        alert('할 일을 입력해 주세요!');
    } else {
        let s = document.createElement("section");
        s.setAttribute('class', 'todo');
    
        let i = document.createElement('input');
        let id = `todo${idNum}`;
        idNum += 1;
    
        i.setAttribute('id', id)
        i.setAttribute('type', 'checkbox');
        i.setAttribute('onClick', `finishToDo(${id}.id)`);
    
        let l = document.createElement('label');
        l.setAttribute('for',`${id}`);
        l.textContent = text;
        
        let b = document.createElement('button');
        b.setAttribute('class', 'delete-btn');
        b.setAttribute('onClick', `deleteToDo(${id}.id)`);
        b.innerText = 'X';
    
        s.append(i);
        s.append(l);
        s.append(b);
    
        document.getElementById('list').append(s);

        elem.value = '';

        total += 1;
        remainToDo();
    }
}

function finishToDo(id) {
    let isChecked = document.getElementById(id).checked;
    let l = document.querySelector('label[for=' + id + ']');

    if (isChecked) {
        l.style.textDecoration = "line-through";
        finished += 1;
    }
    else {
        l.style.textDecoration = 'none';
        finished -= 1;
    }

    remainToDo();
}

function deleteToDo(id) {
    let child = document.getElementById(id);
    let parent = child.parentElement;

    let isChecked = document.getElementById(id).checked;
    if (isChecked) finished -= 1;
    
    total -= 1;
    remainToDo();
    
    parent.remove();
}

function remainToDo() {
    // let items = document.querySelector('.todo-item');
    // let undone = Array.from(items).filter(
    //     (item) => !item.classList.contains('done')
    // );

    // let cntSpan = document.getElementById('remain-cnt');
    // cntSpan.textContent = undone.length;
    let h = document.getElementById('remain-cnt');
    h.textContent = total - finished;
}

function today() {
    let date = new Date();
    
    let h = document.getElementById('today');
    h.textContent = date.toLocaleDateString();

    let h2 = document.getElementById('weekday');
    weekday = ['일요일', '월요일', '화요일', '수요일', '목요일', '금요일', '토요일'];
    h2.textContent = weekday[date.getDay()];
}

window.onload = function() {
    today();
};

