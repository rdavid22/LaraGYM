import './bootstrap';
import * as te from 'tw-elements';
import Typed from 'typed.js';
import Alpine from 'alpinejs';
import.meta.glob(['../images/**']);
import rolly from 'rolly.js';

window.Alpine = Alpine;
window.Typed = Typed;
window.Rolly = rolly;

Alpine.start();
