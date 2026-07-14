import './bootstrap';

import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';

import '../css/app.css';

import Alpine from 'alpinejs';

import Swal from 'sweetalert2';

window.Alpine = Alpine;
window.Swal = Swal;

Alpine.start();