/* globals jQuery, document */

// You will use that file to import all your scripts
// Ex: import gallery from './gallery'
import svgIcons from '../icons/svg-icons';
import navigation from 'organisms/navigation/navigation';

svgIcons(); // Must run as soon as possible

const init = () => {
  navigation();
};

(function ($) {
  $(document).ready(() => init());
})(jQuery);
