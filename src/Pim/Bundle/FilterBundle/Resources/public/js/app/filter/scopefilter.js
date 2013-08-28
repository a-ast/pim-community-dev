var Pim = Pim || {};
Pim.Filter = Pim.Filter || {};

/**
 * Scope filter
 *
 * @author    Romain Monceau <romain@akeneo.com>
 * @copyright 2013 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 * @class     Pim.Filter.ScopeFilter
 * @extends   Oro.Filter.SelectFilter
 */
Pim.Filter.ScopeFilter = Oro.Filter.SelectFilter.extend({

    /**
     * @override
     * @property {Boolean}
     * @see Oro.Filter.SelectFilter
     */
    contextSearch: false,

    /**
     * @inheritDoc
     */
    disable: function() {
        return this;
    },

    /**
     * @inheritDoc
     */
    hide: function() {
        return this;
    },

    /**
     * Filter template
     *
     * @override
     * @property
     * @see Oro.Filter.SelectFilter
     */
    template: _.template(
        '<div class="btn filter-select filter-criteria-selector scope-filter">' +
            '<i class="fa-icon-eye-open" title="<%= label %>"></i> ' +
            '<select>' +
                '<% _.each(options, function (hint, value) { %>' +
                    '<option value="<%= value %>"><%= hint %></option>' +
                '<% }); %>' +
            '</select>' +
        '</div>'
    ),
});
