class Human {  constructor() {    this.legs = 2;    this.position = {x: 0, y: 0};  }  walk(x, y) {    this.position.x += x;    this.position.y += y;  }}class Female extends Human {  constructor() {    super();    this.gender = 'female';  }}var lisa = new Female();