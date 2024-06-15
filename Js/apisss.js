// Selecciona todos los elementos h2 dentro del div con clase main_contact--div
const headings = document.querySelectorAll(".heading");
const heading3 = document.querySelectorAll(".heading2");
const divLink = document.getElementById("link");
const divVideo = document.getElementById("video");
const divAggregate = document.getElementById("aggregate");
const divUpdate = document.getElementById("update");
const divDelete = document.getElementById("delete");
const repoUpdate = document.getElementById("repositoriosUpdate");
const repodelete = document.getElementById("repositoriosDelete");
let arrayIndex = [];
let lastClickedHeading = null;
let lastClickedHeadingtwo = null;
// Añade un event listener a cada h2 para escuchar el evento de clic

repoUpdate.addEventListener("click", () => {
  const divLink = document.getElementById("linkUpdate");
  const divVideo = document.getElementById("videoUpdate");
  let partes = repoUpdate.value.split("-");
  const idProyecto = document.getElementById("idProyecto");
  const nombreProyectoInput = document.getElementById("nombreUpdate");
  const stacksUpdateInput = document.getElementById("stacksUpdate");
  const repo = document.getElementById("repositorioUpdate");
  const archivoInput = document.getElementById("archivo");
  const linkUpdateInput = document.getElementById("linkupdate");
  const mensajeTextarea = document.getElementById("mensajeUpdate");
  const archivoViejo = document.getElementById("archivoViejoId");

  // Crea un objeto y asigna las partes a las propiedades correspondientes
  let objeto = {
    id: partes[0],
    nombre: partes[1],
    descripcion: partes[2],
    repositorio: partes[3],
    link: partes[4],
    nombreArchivo: partes[5],
    stacks: partes.slice(6),
  };

  idProyecto.value = objeto.id;
  nombreProyectoInput.value = objeto.nombre;
  stacksUpdateInput.value = objeto.stacks;
  mensajeTextarea.value = objeto.descripcion;
  repo.value = objeto.repositorio;

  if (!objeto.link == "") {
    divLink.classList.remove("hide");
    divVideo.classList.add("hide");
    linkUpdateInput.value = objeto.link;
  } else {
    divLink.classList.add("hide");
    divVideo.classList.remove("hide");
    archivoViejo.value = objeto.nombreArchivo;
  }
});

repodelete.addEventListener("click", () => {
  const archivo = document.getElementById("archivoBD");
  const id = document.getElementById("idDelete");
  let partes2 = repodelete.value.split(",");

  if (partes2 != "") {
    let objeto = {
      id: partes2[0],
      archivo: partes2[1],
    };

    archivo.value = objeto.archivo;
    id.value = objeto.id;
  }
});

headings.forEach((heading) => {
  if (lastClickedHeading == null) {
    lastClickedHeading = headings[0];
  }

  heading.addEventListener("click", () => {
    let parts = heading.textContent.split(/\s+/, 2); // Divide la cadena en el primer espacio en blanco

    let opcion = parts[1];

    // Si hay un h2 que ya tiene la clase, se la quitamos
    if (lastClickedHeading && lastClickedHeading !== heading) {
      headings[0].classList.remove("scale");
      lastClickedHeading.classList.remove("scale");
    }
    // Añade la clase que cambia el color al elemento h2 clickeado
    heading.classList.add("scale");
    // Actualizamos la referencia del último h2 clickeado
    lastClickedHeading = heading;

    if (opcion == "Agregar") {
      divAggregate.classList.remove("hide");
      divUpdate.classList.add("hide");
      divDelete.classList.add("hide");
    } else if (opcion == "Actualizar") {
      divAggregate.classList.add("hide");
      divUpdate.classList.remove("hide");
      divDelete.classList.add("hide");
    } else {
      divAggregate.classList.add("hide");
      divUpdate.classList.add("hide");
      divDelete.classList.remove("hide");
    }
  });
});

// Añade un event listener a cada h2 para escuchar el evento de clic
heading3.forEach((heading) => {
  heading.addEventListener("click", () => {
    // Si hay un h2 que ya tiene la clase, se la quitamos
    if (lastClickedHeadingtwo && lastClickedHeadingtwo !== heading) {
      lastClickedHeadingtwo.classList.remove("scale");
    }

    if (heading.textContent == "Usar link") {
      divVideo.classList.add("hide");
      divLink.classList.remove("hide");
    } else {
      divLink.classList.add("hide");
      divVideo.classList.remove("hide");
    }
    // Añade la clase que cambia el color al elemento h2 clickeado
    heading.classList.add("scale");

    // Actualizamos la referencia del último h2 clickeado
    lastClickedHeadingtwo = heading;
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const selectElements = document.querySelectorAll("select[name='elemento']");
  const resultInputs = document.querySelectorAll("input[name='resultado']");

  selectElements.forEach((selectElement, index) => {
    let arrayElemento = []; // Cada selectElement tiene su propio arrayElemento
    selectElement.addEventListener("change", () => {
      const selectedValue = selectElement.value;
      const currentValue = resultInputs[index].value;
      if (!arrayElemento.includes(selectedValue)) {
        arrayElemento.push(selectedValue);
        if (currentValue) {
          resultInputs[index].value = `${currentValue}, ${selectedValue}`;
        } else {
          resultInputs[index].value = selectedValue;
        }
      }
    });
  });
});
