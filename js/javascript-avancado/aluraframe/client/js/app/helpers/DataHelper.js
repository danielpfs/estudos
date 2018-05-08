class DataHelper {
  static textoParaData(data) {
    if (!/\d{4}-\d{2}-\d{2}/.test(data))
      throw new Error('A data deve estar no formato yyyy-mm-dd');
      
    return new Date(
      ...data // spread operator "...". Cada posição do array é passado como um parâmetro
        .split('-')
        .map((item, indice) => item - indice % 2) // arrow function "=>". Utilizado pra criar funções
    )
  }

  static dataParaTexto(data) {
    return `${data.getDate()}/${data.getMonth() - 1}/${data.getFullYear()}` // Template string
  }
}