let Links = {
    setColor: function (color) {
        // let aList = document.querySelectorAll('a');
        // let aListLen = aList.length;

        // for (let i = 0; i < aListLen; i++)
        //     aList[i].style.color = color;
        $('a').css('color', color);
    }
}

let Body = {
    // setColor: function (color) {
    //     document.querySelector('body').style.color = color;
    // },
    // setBackgroundColor: function (color) {
    //     document.querySelector('body').style.backgroundColor = color;
    // }
    setColor: function (color) {
        $('body').css('color', color);
    },
    setBackgroundColor: function (color) {
        $('body').css('backgroundColor', color);
    }
}

function darkmode(self) {
    let target = document.querySelector('body');

    if (self.value === 'night') {
        Body.setBackgroundColor('black');
        Body.setColor('white');
        self.value = 'day';

        Links.setColor('powderblue');
    } else {
        Body.setBackgroundColor('white');
        Body.setColor('black');
        self.value = 'night';

        Links.setColor('blue');
    }
}