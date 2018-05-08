export default class FotoService {
  constructor(resource) {
    this._resource = resource('v1/fotos{/id}')
  }

  salvar(foto) {
    if (foto._id) {
      return this._resource
        .update({ id: foto._id }, foto)
    }
    return this._resource
      .save(foto)
  }

  remover(id) {
    return this._resource
      .delete({id})
  }

  listar() {
    return this._resource
      .query()
      .then(res => res.json())
  }

  buscar(id) {
    return this._resource
      .get({ id })
      .then(res => res.json())
  }
}