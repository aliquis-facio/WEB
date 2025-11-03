// 1. 남은 할 일 개수를 계산하여 화면에 표시하는 함수를 만들어 주세요.
function updateCount() {
    // 2. 모든 할 일 항목(.todo-item)을 선택하여 가져옵니다.
    const items = document.getElementsByClassName('todo-item');
  
    // 3. 완료되지 않은 항목만 필터링합니다.
    const undone = Array.from(items).filter(
      (item) => !item.classList.contains('done')
    );
  
    // 4. 개수를 표시할 요소를 찾아 주세요.
    const countSpan = document.querySelector('.count');
  
    // 5. 필터링된 남은 할 일 개수로 텍스트를 갱신해 주세요.
    countSpan.textContent = undone.length;
  }
  
// 6. 페이지가 처음 로딩될 때 남은 할 일 개수를 초기화해 주세요.
window.onload = function () {
    null;
  };

// 7. 할 일을 추가하는 함수를 만들어 주세요.
function addTodo() {
  // 8. 텍스트 입력창의 요소를 가져와 주세요.
  // hint) 할 일을 입력하는 input의 id값을 이용하여 element를 가져오세요.
  const textbox = null;

  // 입력된 값을 가져와 앞 뒤 공백을 제거
  const text = textbox.value.trim();

  // 9. 할 일 목록이 비어있다면, "할 일을 입력해 주세요!" 라는 alert를 띄워 주세요.
  if () {

  }

  // 10. 기존에 할 일 목록을 감싸고 있는 div 요소를 가져오세요.
  // 기존의 div 요소에 새로운 할 일 항목을 추가하기 위해서입니다!
  const todoContent = null;

   // 11. 새로운 할 일 항목을 감쌀 div 요소를 만들어 주세요.
   const newItem = null;
   newItem.className = null;

  // 12. 체크박스를 만들어 주세요.
  const checkbox = null;
  checkbox.type = null;

  checkbox.onclick = function () {
    // 클릭 시 완료 처리를 추가해 주세요.
    // hint ) html 파일에서 onClick 시 어떤 함수를 실행하는지 살펴보세요.
    
  };

  // 13. 텍스트 내용을 텍스트 노드로 만들어 주세요.
  const textNode = null;

  // 14. 삭제 버튼을 만들어 주세요.
  const delButton = null;
  delButton.type = null;
  delButton.value = "❌";

  delButton.onclick = function () {
    // 클릭 시 항목 삭제를 추가해 주세요.
    
  };

  // 15. 할 일 항목 div에 체크박스, 텍스트, 삭제 버튼을 순서대로 추가해 주세요.
  // hint ) div 안에 새로운 항목을 추가할 때는 appendChild를 사용하면 됩니다!


  // 16. 만들어진 항목을 기존 목록 div에 추가해 주세요.
  // hint ) 만들어진 항목을 전체 리스트에 해당하는 div에 추가해 주세요.


  // 17. 입력창을 비워 주세요.
  // hint ) 입력창의 value를 빈 문자열로 변경해 주세요.


  // 18. 남은 할 일 개수를 다시 계산해 주세요.


}

// 19. 삭제 버튼을 눌렀을 때 해당 할 일 항목을 삭제하는 함수를 만들어 주세요.
function delTodo(button) {
    // 20. 삭제 버튼이 포함된 부모 요소를 찾아주세요.
    // hint) 삭제할 항목은 버튼의 부모 div입니다.
    const todoItem = null;
  
    // 21. 해당 항목을 화면에서 제거해주세요.
    
  
    // 22. 할 일을 삭제했으니 남은 할 일 개수를 다시 계산해 주세요.
    
  }
