// Função para ser chamada quando um item é selecionado no elemento select
function selectItem() {
    // Obtém o elemento select pelo seu ID
    var selectElement = document.getElementById("serviceSelect");
    
    // Obtém o valor do item selecionado usando selectedIndex para obter o índice selecionado
    var selectedValue = selectElement.options[selectElement.selectedIndex].value;
    
    // Atualiza o texto dentro do elemento com o ID "selectedItem" para mostrar o item selecionado
    document.getElementById("selectedItem").innerText = "Você Selecionou: " + selectedValue;
}
