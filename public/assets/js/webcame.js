 function playBeepSound() {
        const beep = document.getElementById('beep');
        beep.play();
    }
    const scannedDataList = [];

    async function onScanSuccess(decodedText, decodedResult) {
        // Play the beep sound
        playBeepSound();

        const result = await Swal.fire({
            title: 'Confirmation',
            text: `Do you want to save data for ${decodedText}?`,
            icon: 'info',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        });

        if (result.isConfirmed) {
            // Add scanned data to the list
            scannedDataList.push(decodedText);

            // Update the list of scanned data
            const scannedList = document.getElementById('scannedList');
            scannedList.innerHTML = ''; // Clear the list before adding items

            for (const item of scannedDataList) {
                const listItem = document.createElement('li');
                listItem.className = 'list-group-item';
                listItem.textContent = item;
                scannedList.appendChild(listItem);
            }

            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Data saved',
                text: 'Scanned data: ' + decodedText,
                showConfirmButton: false,
                timer: 1500
            });

            // Handle the scanned code and save data
            console.log(`Code matched = ${decodedText}`, decodedResult);
            saveData(decodedText);
        } else {
            // Do something else, e.g., show a message
            console.log('Data not saved.');
        }
    }
    function onScanFailure(error) {
        // Handle scan failure, usually better to ignore and keep scanning.
        // For example:
        // console.warn(`Code scan error = ${error}`);
    }
    function saveData(data) {
        // Add your data saving logic here
        console.log('Data saved:', data);
    }
    let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader",
        { fps: 10, qrbox: { width: 250, height: 250 } },
        /* verbose= */ false);
    html5QrcodeScanner.render(onScanSuccess, onScanFailure);

    // Slug Js
    const mapel = document.querySelector('#mapel');
    const slug = document.querySelector('#slug');

    mapel.addEventListener('change', function() {
        fetch('/dashboard/mapels/checkSlug?mapel=' + mapel.value )
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    // slug studen


