class NegociacaoController {
  constructor() {
    /* 
      let $ = document.querySelector
      Não funciona. Pois, o querySelector possuí sitações com o 
      objeto deixando de ser um método e se tornando uma função.
    */
    let $ = document.querySelector.bind(document) // Cria a função com a dependência do objeto

    this._data = $('#data')
    this._valor = $('#valor')
    this._quantidade = $('#quantidade')
    this._negociacaoLista = new ListaNegociacao
    this._negociacaoView = new NegociacaoView($('#negociacao-view'))
  }

  submit(e) {
    e.preventDefault()

    this._negociacaoLista.adiciona(this._criaNegociacao())
    this._limpaInputs()
    this._negociacaoView.update(this._negociacaoLista)
  }

  _criaNegociacao() {
    return new Negociacao(
      DataHelper.textoParaData(this._data.value),
      this._quantidade.value,
      this._valor.value
    )
  }

  _limpaInputs() {
    this._data.value = ''
    this._quantidade.value = 1
    this._valor.value = 0.0
    this._data.focus()
  }
}