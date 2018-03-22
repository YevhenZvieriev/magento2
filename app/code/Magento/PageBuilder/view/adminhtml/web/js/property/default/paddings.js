/*eslint-disable */
define([], function () {
  /**
   * Copyright © Magento, Inc. All rights reserved.
   * See COPYING.txt for license details.
   */
  var Paddings =
  /*#__PURE__*/
  function () {
    function Paddings() {}

    var _proto = Paddings.prototype;

    /**
     * Read paddings from element
     *
     * @param {HTMLElement} element
     * @returns {string | Object}
     */
    _proto.read = function read(element) {
      return {
        padding: {
          left: element.style.paddingLeft,
          top: element.style.paddingTop,
          right: element.style.paddingRight,
          bottom: element.style.paddingBottom
        }
      };
    };

    return Paddings;
  }();

  return Paddings;
});
//# sourceMappingURL=paddings.js.map
