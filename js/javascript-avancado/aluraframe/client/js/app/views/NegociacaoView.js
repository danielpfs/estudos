class NegociacaoView {
  constructor(element) {
    this._element = element
  }

  _template(model) {
    return `
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>DATA</th>
            <th>QUANTIDADE</th>
            <th>VALOR</th>
            <th>VOLUME</th>
          </tr>
        </thead>
        
        <tbody>
          ${
            model.lista.map(n => `
              <tr>
                <td>${DataHelper.dataParaTexto(n.data)}</td>
                <td>${n.quantidade}</td>
                <td>${n.valor}</td>
                <td>${n.volume}</td>
              </tr>
            `).join('')
          }
        </tbody>
        
        <tfoot>
          <tr>
            <td colspan="3"></td>
            <td>${model.lista.reduce((t,i) => t+i.volume, 0.0)}</td>
          </tr>
        </tfoot>
      </table>
    `
  }

  update(model) {
    this._element.innerHTML = this._template(model)
  }
}