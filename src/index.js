import App from './App';
import { createRoot, createElement } from '@wordpress/element';

const container = document.getElementById('react-app-jp');

if (container) {
  const root = createRoot(container);

  const props = { someProp: 'Simple React Render Plugin With Shortcode!' };
  root.render(createElement(App, props));
}
