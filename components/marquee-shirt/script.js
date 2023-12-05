const jerseyElementsDisplayed = getComputedStyle(root).getPropertyValue("--jersey-elements-displayed");
const jerseyContent = document.querySelector("ul.jersey-content");

root.style.setProperty("--jersey-elements", jerseyContent.children.length);

for (let i = 0; i < jerseyElementsDisplayed; i++) {
    jerseyContent.appendChild(jerseyContent.children[i].cloneNode(true));
}