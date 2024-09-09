import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const map = L.map('map').setView([43.7696, 11.2558], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

function onMapClick(e) {

    console.log(e)
    // Recupera le coordinate dal punto cliccato
    const latitude = (e.latlng.lat).toFixed(8);
    const longitude = (e.latlng.lng).toFixed(8);

    // Posiziona un marker in quel punto
    const stage = L.marker([latitude, longitude]).addTo(map);

    // Crea un popup con un form per inserire titolo e descrizione
    const popupContent = `
            <div>
                <form action="{{ route('stages.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"/>
                        <small id="titleHelper" class="form-text text-muted">Insert the stage title</small>
                    </div>
                    <div class="mb-2">
                        <label for="description" class="form-label">Description</label><br>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="date" class="form-label">Stage date</label>
                        <input type="date" class="form-control" name="date" id="date" aria-describedby="dateHelper"/>
                        <small id="dateHelper" class="form-text text-muted">Insert the stage date</small>
                    </div>
                    <div class="mb-2">
                        <label for="latitude" class="form-label">Latitude</label>
                        <input type="text" class="form-control" value="${latitude}" name="latitude" id="latitude" aria-describedby="latitudeHelper"/>
                    </div>
                    <div class="mb-2">
                        <label for="latitude" class="form-label">Latitude</label>
                        <input type="text" class="form-control" value="${longitude}" name="latitude" id="latitude" aria-describedby="latitudeHelper"/>
                    </div>
                    <button class="btn btn-sm btn-primary" type="submit">Confirm</button>
                </form>
            </div>
        `;

    // Aggiungi il popup al marker e aprilo
    stage.bindPopup(popupContent).openPopup();

}

// Al click della mappa viene invocata la funzione onMapClick
map.addEventListener('click', onMapClick);