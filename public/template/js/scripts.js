/*!
* Start Bootstrap - Personal v1.0.1 (https://startbootstrap.com/template-overviews/personal)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-personal/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project
document.getElementById('type').addEventListener('change', function () {
    const type = this.value;
    const nisField = document.getElementById('nisField');
    const guruIdField = document.getElementById('guruIdField');

    // Reset visibility and required attributes
    nisField.style.display = 'none';
    guruIdField.style.display = 'none';
    document.getElementById('nis').removeAttribute('required');
    document.getElementById('guru_id').removeAttribute('required');

    // Show relevant fields based on the selected type
    if (type === 'siswa') {
        nisField.style.display = 'block';
        document.getElementById('nis').setAttribute('required', 'required');
    } else if (type === 'guru') {
        guruIdField.style.display = 'block';
        document.getElementById('guru_id').setAttribute('required', 'required');
    }
});
