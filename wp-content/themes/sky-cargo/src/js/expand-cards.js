export default function initExpandCards() {
  const cards = document.querySelectorAll(".js-expand-card");

  cards.forEach((card) => {
    const trigger = card.querySelector(".js-expand-trigger");

    trigger.addEventListener("click", () => {
      card.classList.toggle("is-open");
    });
  });
}
