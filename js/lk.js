function openMenu(evt, menuName) {
  // Объявлять все переменные
  var i, tabcontent, tablinks;

  // Получить все элементы с class="tabcontent" и скрыть их
  tabcontent = document.getElementsByClassName('tabcontent');
  for (i = 0; i < tabcontent.length; i++) {
    console.log(tabcontent[i]);
    tabcontent[i].style.display = 'none';
  }

  // Получить все элементы с классом = "Tablinks" и удалите класс "Active"
  tablinks = document.getElementsByClassName('tablinks');
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(' active', '');
  }

  // Покажите текущую вкладку и добавьте «активный» класс на ссылку, которая открыла вкладку
  document.getElementById(menuName).style.display = 'block';
  evt.currentTarget.className += ' active';
}
