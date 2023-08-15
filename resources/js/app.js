import './bootstrap';

import DataTable from 'datatables.net-dt';
import 'datatables.net-responsive-dt';
 
let table = new DataTable('#myTable', {
    responsive: true
});

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
