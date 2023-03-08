let aggressorList = []

function agregar(){
    
    const name = document.getElementById('txtIdNombre').value
    const lastname = document.getElementById('txtIdApellido').value
    const code = document.getElementById('txtIdCedula').value

    if (!name || !lastname || !code) {
      return alert('Campo requerido')
    }

    if (code.length !== 8) {
      return alert('La cédula es incorrecta')
    }

    const isExist = aggressorList.some((aggressor) => aggressor.code === code)

    if (isExist) {
      return alert('El agresor ya se encuentra registrado')
    }

    const aggressor = {
      name,
      lastname,
      code
    }

    aggressorList.push(aggressor)

    renderList()

    document.getElementById('txtIdNombre').value = ''
    document.getElementById('txtIdApellido').value = ''
    document.getElementById('txtIdCedula').value = ''
}

const renderList = () => {
    document.getElementById('denunciado').innerHTML = ''

    for (let i = 0; i < aggressorList.length; i++) {
      const { name, lastname, code } = aggressorList[i]

      const row = `
        <tr>
          <td>${i + 1}</td>
          <td>${name}</td>
          <td>${lastname}</td>
          <td>${code}</td>
          <td>
            <button type="button" class="btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onClick="removeAggressor(${code})">Eliminar</button>
          </td>
        </tr>
      `

      document.getElementById('denunciado').innerHTML += row
    }
}

const removeAggressor = (code) => {
    const filteredAggressors = aggressorList.filter((aggressor) => aggressor.code != code)
    aggressorList = filteredAggressors
    
    renderList()
}