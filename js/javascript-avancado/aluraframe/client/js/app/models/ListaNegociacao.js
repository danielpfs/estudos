class ListaNegociacao {
  constructor() {
    this._lista = []
  }

  adiciona(negociacao) {
    this._lista.push(negociacao)
  }

  get lista() {
    return [].concat(this._lista)
  }
}