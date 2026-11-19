const tabs = document.querySelectorAll('[role="tab"]');
const feedback = document.getElementById('feedback');

function selectTab(selectedTab) {
  tabs.forEach((tab) => {
    const active = tab === selectedTab;
    tab.classList.toggle('active', active);
    tab.tabIndex = active ? 0 : -1;
    document.getElementById(tab.getAttribute('data-target')).hidden = !active;
  });
  feedback.hidden = true;
  document.title = `${selectedTab.textContent} | Chapa Quente`;
}

tabs.forEach((tab, index) => {
  tab.addEventListener('click', () => selectTab(tab));
  tab.addEventListener('keydown', (event) => {
    if (!['ArrowLeft', 'ArrowRight', 'Home', 'End'].includes(event.key)) return;
    event.preventDefault();
    let nextTab = tabs[1 - index];
    if (event.key === 'Home') nextTab = tabs[0];
    if (event.key === 'End') nextTab = tabs[tabs.length - 1];
    selectTab(nextTab);
    nextTab.focus();
  });
});

document.querySelectorAll('.show-password').forEach((button) => {
  button.addEventListener('click', () => {
    const input = document.getElementById(button.getAttribute('data-target'));
    const show = input.type === 'password';
    input.type = show ? 'text' : 'password';
    button.classList.toggle('active', show);
    button.setAttribute('title', show ? 'Ocultar senha' : 'Mostrar senha');
  });
});

function showFeedback(message) {
  feedback.textContent = message;
  feedback.hidden = false;
}

// Esta demonstração apenas mostra uma mensagem ao enviar o formulário.
document.querySelectorAll('form').forEach((form) => {
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    showFeedback('bah');
  });
});

document.querySelector('.forgot').addEventListener('click', () => {
  showFeedback('bah');
});

document.querySelector('.browse').addEventListener('click', (event) => {
  event.preventDefault();
  showFeedback('bah');
});
